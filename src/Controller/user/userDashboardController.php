<?php

namespace App\Controller\user;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class userDashboardController extends AbstractController
{
    /**
     * @Route("/user/dashboard", name="user.dashboard.index")
     * @param UserInterface $user
     * @return Response
     */
    public function index(UserInterface $user) :Response
    {
        $user = $this->getUser();
        return $this->render('user/dashboard/index.html.twig', [
            'user' => $user
        ]);
    }
}