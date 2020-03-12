<?php

namespace App\Controller\admin;

use App\Entity\Section;
use App\Form\SectionType;
use App\Repository\SectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/section")
 */
class adminSectionController extends AbstractController
{
    /**
     * @Route("/", name="admin_section_index", methods={"GET"})
     */
    public function index(SectionRepository $sectionRepository): Response
    {
        return $this->render('admin/section/index.html.twig', [
            'sections' => $sectionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_section_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $section = new Section();
        $form = $this->createForm(SectionType::class, $section);
        $form->handleRequest($request);

        $section->setCreatedAt(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($section);
            $entityManager->flush();

            return $this->redirectToRoute('admin_section_index');
        }

        return $this->render('admin/section/new.html.twig', [
            'section' => $section,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_section_show", methods={"GET"})
     */
    public function show(Section $section): Response
    {
        return $this->render('admin/section/show.html.twig', [
            'section' => $section,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_section_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Section $section): Response
    {
        $form = $this->createForm(SectionType::class, $section);
        $form->handleRequest($request);

        $section->setCreatedAt(new \DateTime('now'));

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_section_index');
        }

        return $this->render('admin/section/edit.html.twig', [
            'section' => $section,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_section_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Section $section): Response
    {
        if ($this->isCsrfTokenValid('delete'.$section->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($section);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_section_index');
    }
}