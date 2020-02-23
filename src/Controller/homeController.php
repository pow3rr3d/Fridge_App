<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class homeController extends AbstractController
{
    //Parameters

    //Methods

    /**
     * @Route("/", name="home")
     */

    public function index(): Response
    {


        return $this->render('home.html.twig');
    }
}

