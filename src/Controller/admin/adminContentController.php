<?php

namespace App\Controller\admin;

use App\Entity\Content;
use App\Form\ContentType;
use App\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/news")
 */
class adminContentController extends AbstractController
{
    /**
     * @Route("/", name="content_index", methods={"GET"})
     * @param ContentRepository $contentRepository
     * @return Response
     */
    public function index(ContentRepository $contentRepository): Response
    {
        return $this->render('admin/content/index.html.twig', [
            'contents' => $contentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="content_new", methods={"GET","POST"})
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws \Exception
     */
    public function new(Request $request)
    {
        $content = new Content();
        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        $content->setCreatedAt(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($content);
            $entityManager->flush();

            return $this->redirectToRoute('content_index');
        }

        return $this->render('admin/content/new.html.twig', [
            'content' => $content,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="content_show", methods={"GET"})
     * @param Content $content
     * @return Response
     */
    public function show(Content $content): Response
    {
        return $this->render('admin/content/show.html.twig', [
            'content' => $content,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="content_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Content $content
     * @return Response
     */
    public function edit(Request $request, Content $content): Response
    {
        $form = $this->createForm(ContentType::class, $content);
        $form->handleRequest($request);

        $content->setCreatedAt(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('content_index');
        }

        return $this->render('admin/content/edit.html.twig', [
            'content' => $content,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{id}", name="content_delete", methods={"DELETE"})
     * @param Request $request
     * @param Content $content
     * @return Response
     */
    public function delete(Request $request, Content $content): Response
    {
        if ($this->isCsrfTokenValid('delete' . $content->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($content);
            $entityManager->flush();
        }

        return $this->redirectToRoute('content_index');
    }
}
