<?php

namespace App\Controller;

use App\Entity\Page;
use App\Entity\Slider;
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
     * @Route("/", name="front")
     * @Route("/{slug}", name="front_slug", requirements={"slug": "[a-z]+"})
     * @param Request $request
     * @param $slug
     * @return Response
     */
    public function index(Request $request, $slug = null): Response
    {
            $search = $this->em->getRepository(Page::class)->findBy(['path' => $slug]);

            if($search)
            {
                $page = $search['0'];
                $pages = $this->em->getRepository(Page::class)->findBy(['isActive' => true]);
                if($page->getIsActive() == true)
                {
                    $slider = $page->getSlider();
                    $section = $page->getSections();
                    return $this->render('front.html.twig',[
                        "sections" => $section,
                        "page" => $page,
                        "pages" => $pages,
                        "slider" => $slider
                    ]);

                }
                else
                {
                    return new Response('', 404);
                }

            }
            else
            {
                return new Response('', 404);
            }
    }



}

