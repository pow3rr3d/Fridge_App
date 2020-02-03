<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Twig\Envirronement;

class homeController extends AbstractController
{
    //Parameters


    //Methods

    public function index(): Response
    {
       return $this->render('Pages/home.html.twig');
    }
}

