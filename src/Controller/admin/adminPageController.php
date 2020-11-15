<?php

namespace App\Controller\admin;

use App\Entity\Page;
use App\Form\PageType;
use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/page")
 */
class adminPageController extends AbstractController
{

    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;


    public function __construct(PageRepository $repository, EntityManagerInterface $em)
    {

        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/", name="admin_page_index", methods={"GET"})
     */
    public function index(PageRepository $pageRepository): Response
    {
        return $this->render('admin/page/index.html.twig', [
            'pages' => $pageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_page_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $page = new Page();
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($page);
            $entityManager->flush();

            return $this->redirectToRoute('admin_page_index');
        }

        return $this->render('admin/page/new.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_page_show", methods={"GET"})
     */
    public function show(Page $page): Response
    {
        return $this->render('admin/page/show.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_page_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Page $page): Response
    {
        $form = $this->createForm(PageType::class, $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_page_index');
        }

        return $this->render('admin/page/edit.html.twig', [
            'page' => $page,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_page_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Page $page): Response
    {
        if ($this->isCsrfTokenValid('delete' . $page->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($page);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_page_index');
    }

    /**
     * @Route("/preview/{id}", name="admin_page_preview", methods={"GET", "POST"})
     */
    public function preview(Request $request, Page $page): Response
    {

        $search = $this->em->getRepository(Page::class)->findOneBy(['id' => $page->getId()]);

        if ($search) {
            $pages = $this->em->getRepository(Page::class)->findBy(['isActive' => true]);
            if ($page->getIsActive() == true) {
                $slider = $page->getSlider();
                $section = $page->getSections();
                return $this->render('admin/page/preview.html.twig', [
                    'pages' => $pages,
                    'currentPage' => $page
                ]);

            }
        }
    }

}
