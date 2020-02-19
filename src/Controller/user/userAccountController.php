<?php

namespace App\Controller\user;


use App\Entity\User;
use App\Form\UserAccountType;
use http\Client\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/user/account")
 */
class userAccountController extends AbstractController
{
    /**
     * @Route("", name="user.account.index")
     */
    public function index()
    {
        $u = new User();
        $form = $this->createForm(UserAccountType::class, $u);
        $user = $this->getUser();

        dump($user);

        return $this->render("user/account/index.html.twig", [
            'user' => $user,
            'form' => $form->createView()
        ]);

    }


}