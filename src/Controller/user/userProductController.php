<?php

namespace App\Controller\user;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class userProductController extends AbstractController
{
    /**
     * @Route("/user/product", name="user.product.index")
     */
    public function index()
    {
        return $this->render('user/product/index.html.twig');
    }
}