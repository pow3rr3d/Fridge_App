<?php

namespace App\Controller\user;

use App\Entity\Product;
use App\Entity\ProductSearch;
use App\Entity\UserProduct;
use App\Entity\UserProductSearch;
use App\Form\ProductSearchType;
use App\Form\UserProductSearchType;
use App\Form\UserProductType;
use App\Repository\UserProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/list")
 */
class userShoppingListController extends AbstractController
{
    /**
     * @var UserProductRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;


    public function __construct(UserProductRepository $repository, EntityManagerInterface $em)
    {

        $this->repository = $repository;
        $this->em = $em;

    }


    /**
     * @Route("", name="user_list_index")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */

    public function index(PaginatorInterface $paginator, Request $request)
    {
        $user = $this->getUser();
        $search = new ProductSearch();
        $form = $this->createForm(ProductSearchType::class, $search);
        $form->handleRequest($request);

        $products = $paginator->paginate(
            $this->getDoctrine()->getManager()->getRepository(UserProduct::class)->findBy(['user' => $this->getUser()->getId()]),
            $request->query->getInt('page', 1),
            15
        );

        return $this->render('user/list/index.html.twig', [
            'products' => $products,
            'pagination' => $paginator,
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/update/{id}", name="user_list_update")
     * @param $id
     */
    public function edit($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(UserProduct::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }
        $stock = $product->getStockReel();
        if ($_POST['nb'] !== "") {
            $nb = $_POST['nb'];
        } else {
            $nb = 1;
        }

        $product->setStockReel($stock + $nb);
        $entityManager->flush();

        return $this->redirectToRoute('user_list_index');

    }

}