<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Page;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class contactController extends AbstractController
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
     * @param Request $request
     * @param ContactNotification $contactNotification
     * @return Response
     * @Route("/contact", name="contact")
     */
    public function show(Request $request, ContactNotification $contactNotification): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        $pages = $this->em->getRepository(Page::class)->findBy(['isActive' => true]);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactNotification->notify($contact);
            $this->addFlash('success', "votre message a bien été envoyé");
            return $this->redirectToRoute("front");
        }


        return $this->render('contact.html.twig', [
            'form' => $form->createView(),
            'pages' => $pages
        ]);
    }

}