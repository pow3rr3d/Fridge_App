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
//    /**
//     * @var ProductRepository
//     */
//    private $repository;


    //Methods
//    public function __construct(ProductRepository $repository)
//    {
//        $this->repository = $repository;
//    }


    /**
     * @Route("/", name="home")
     */

    public function index(): Response
    {
//        $product = new Entity\Product();
//        $product-> setName('test2')
//                ->setDescription('ceci est un test')
//                ->setImage('test2');
//        $em = $this->getDoctrine()->getManager();
//        $em ->persist($product);
//        $em ->flush();
//            $product = $this->repository->findAll();
//            var_dump($product);

        return $this->render('Pages/home.html.twig');
    }
}

