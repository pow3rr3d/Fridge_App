<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class contactController extends AbstractController
{
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

        if ($form->isSubmitted() && $form->isValid()) {
            $contactNotification->notify($contact);
            $this->addFlash('success', "votre message a bien été envoyé");
            return $this->redirectToRoute("home");
        }


        return $this->render('contact.html.twig', [
            'form' => $form->createView()
        ]);
    }

}