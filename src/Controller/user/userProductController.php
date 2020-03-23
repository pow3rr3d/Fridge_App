<?php

namespace App\Controller\user;


use App\Entity\User;
use App\Entity\UserProduct;
use App\Entity\UserProductSearch;
use App\Form\UserProductType;
use App\Form\UserProductSearchType;
use App\Repository\UserProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @Route("/user/product")
 */
class userProductController extends AbstractController
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
     * @Route("", name="user_product_index")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request):Response
    {

        $search = new UserProductSearch();
        $form = $this->createForm(UserProductSearchType::class, $search);
        $form->handleRequest($request);


        $products = $paginator->paginate(
            $this->getDoctrine()->getManager()->getRepository(UserProduct::class)->getAllQuery($search),
            $request->query->getInt('page', 1),
            12
        );

        return $this->render('user/product/index.html.twig', [
            'products' => $products,
            'pagination' => $paginator,
            'form' =>$form->createView()
        ]);


    }

    /**
     * @Route("/new", name="userProduct_new", methods={"GET","POST"})
     * @param UserInterface $user
     * @param Request $request
     * @return Response
     */
    public function new(UserInterface $user, Request $request): Response
    {
        $product = new UserProduct();
        $user = $this->getUser();
        $product->setUser($user);
        $form = $this->createForm(UserProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($product);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('user_product_index');
        }

        return $this->render('user/product/new.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/edit/{id}")
     * @param UserProduct $userProduct
     * @param Request $request
     * @return Response
     */

    public function edit(UserProduct $userProduct, Request $request)
    {
        $form = $this->createForm(UserProductType::class, $userProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'Modification success !');
            return $this->redirectToRoute('user_product_index');
        }
        return $this->render('user/product/edit.html.twig', [
            'product' => $userProduct,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/delete/{id}", name="user.product.delete")
     * @param UserProduct $userProduct
     * @param Request $request
     * @return Response
     */

    public function delete(UserProduct $userProduct, Request $request)
    {
        if ($this->isCsrfTokenValid('delete' . $userProduct->getId(), $request->get('_token'))) {
            $this->em->remove($userProduct);
            $this->em->flush();
            $this->addFlash('success', 'Delete success !');
        }
        return $this->redirectToRoute('user_product_index');
    }


}