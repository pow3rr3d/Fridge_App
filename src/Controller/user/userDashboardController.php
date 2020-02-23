<?php

namespace App\Controller\user;


use App\Entity\Content;
use App\Entity\ProductSearch;
use App\Entity\UserProduct;
use App\Form\ProductSearchType;
use App\Repository\ContentRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class userDashboardController extends AbstractController
{
    /**
     * @Route("/user/dashboard", name="user.dashboard.index")
     * @param UserInterface $user
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(UserInterface $user, PaginatorInterface $paginator, Request $request): Response
    {
        $search = new ProductSearch();
        $form = $this->createForm(ProductSearchType::class, $search);
        $form->handleRequest($request);

        $products = $paginator->paginate(
            $this->getDoctrine()->getManager()->getRepository(UserProduct::class)->findBy(['user' => $this->getUser()->getId()]),
            $request->query->getInt('page', 1),
            10
        );

        $user = $this->getUser();

        $contents = $this->getDoctrine()->getManager()->getRepository(Content::class)->findAll();

        return $this->render('user/dashboard/index.html.twig', [
            'user' => $user,
            'contents' => $contents,
            'products' => $products,
            'pagination' => $paginator,
            'form' => $form->createView()
        ]);
    }
}