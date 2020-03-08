<?php

namespace App\Controller\user;


use App\Entity\Content;
use App\Entity\ProductSearch;
use App\Entity\UserMemo;
use App\Entity\UserProduct;
use App\Form\ProductSearchType;
use App\Form\UserMemoType;
use App\Repository\ContentRepository;
use App\Repository\ProductRepository;
use App\Repository\UserMemoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class userDashboardController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(ProductRepository $repository, EntityManagerInterface $em)
    {

        $this->repository = $repository;
        $this->em = $em;
    }

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


        $memo = $this->getDoctrine()->getManager()->getRepository(UserMemo::class)->findBy(['user' => $this->getUser()->getId()]);

        return $this->render('user/dashboard/index.html.twig', [
            'user' => $user,
            'contents' => $contents,
            'products' => $products,
            'pagination' => $paginator,
            'form' => $form->createView(),
            'memo' => $memo

        ]);
    }

    /**
     * @Route("/user/memo", name="user.dashboard.memo")
     * @param Request $request
     * @return array
     */
    public function memo(Request $request)
    {
        $json = json_decode( file_get_contents( 'php://input' ), true );
        $m = $this->getDoctrine()->getManager()->getRepository(UserMemo::class)->findBy(['user' => $json['id']]);
        if(!$m)
        {
            $m = new UserMemo;
            $m->setUser($this->getUser());
            $m->setMemo($json['memo']);
            $this->em->persist($m);
            $this->em->flush();

        }
        else
        {
        $m[0]->setMemo($json['memo']);
        $this->em->persist($m[0]);
        $this->em->flush();
        }
        $response = new Response();
        $response->getStatusCode();
        return $response;
    }

}