<?php

namespace App\Controller;

use App\Entity\Page;
use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class homeController extends AbstractController
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;


    public function __construct(PageRepository $repository, EntityManagerInterface $em)
    {

        $this->repository = $repository;
        $this->em = $em;
    }
    /**
     * @Route("/{path}", name="front")
     * @param Request $request
     * @return Response
     */

    public function index(Request $request): Response
    {
        $uri = $request->getPathInfo();
        $search = $this->em->getRepository(Page::class)->findBy(['path' => $uri]);

        if($search)
        {
            $page = $search['0'];
            $section = $page->getSections();
            return $this->render('front.html.twig',[
                "sections" => $section,
                "page" => $page
            ]);
        }

        return $this->redirect('/');

    }
}

