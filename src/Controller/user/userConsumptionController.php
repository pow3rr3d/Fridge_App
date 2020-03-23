<?php

namespace App\Controller\user;


use App\Entity\UserProduct;
use App\Entity\UserProductSearch;
use App\Form\UserProductSearchType;
use App\Form\UserProductType;
use App\Repository\UserProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @Route("/user/conso")
 */
class userConsumptionController extends AbstractController
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
     * @Route("", name="user_conso_index")
     * @param EntityManagerInterface $em
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(EntityManagerInterface $em, PaginatorInterface $paginator, Request $request)
    {

        $list = new UserProductSearch();
        $form = $this->createForm(UserProductSearchType::class, $list);
        $form->handleRequest($request);
        $products = $this->getDoctrine()->getManager()->getRepository(UserProduct::class)->findBy(['user' => $this->getUser()->getId()]);

        return $this->render('user/conso/index.html.twig', [
            'products' => $products,
            'pagination' => $paginator,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/update/{id}", name="user_conso_update")
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

        $product->setStockReel($stock - $nb);
        $entityManager->flush();

        return $this->redirectToRoute('user_conso_index');

    }


}