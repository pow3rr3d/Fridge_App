<?php

namespace App\Controller\admin;


use App\Entity\Category;
use App\Entity\DashboardSearch;
use App\Entity\Product;
use App\Entity\User;
use App\Form\DashboardSearchType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class adminDashboardController extends AbstractController
{
    /**
     * @Route("/admin/dashboard", name="admin.dashboard.index")
     * @param CategoryRepository $categoryRepository
     * @param ProductRepository $productRepository
     * @param UserRepository $userRepository
     * @param PaginatorInterface $paginator
     * @return Response
     */

    public function index(CategoryRepository $categoryRepository, ProductRepository $productRepository, UserRepository $userRepository, PaginatorInterface $paginator)

    {

        $categoryRepository = $this->getDoctrine()->getRepository(Category::class);
        $categories = $categoryRepository->findAll();

        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();

        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $users =  $userRepository->findAll();

        return $this->render('admin/dashboard/index.html.twig',[
            'categories' => $categories,
            'products' => $products,
            'users' => $users,
        ]);
    }

}