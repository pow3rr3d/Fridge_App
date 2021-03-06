<?php

namespace App\Controller\admin;

use App\Form\UserSearchType;
use App\Entity\User;
use App\Entity\UserSearch;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/admin/user")
 */
class adminUserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     * @param PaginatorInterface $paginator
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(PaginatorInterface $paginator, UserRepository $userRepository, Request $request): Response
    {
        $search = new UserSearch();
        $form = $this->createForm(UserSearchType::class, $search);
        $form->handleRequest($request);

        $user = $paginator->paginate(
            $this->getDoctrine()->getManager()->getRepository(User::class)->getAllQuery($search),
            $request->query->getInt('page', 1),
            12
        );
        return $this->render('admin/user/index.html.twig', [
            'users' => $user,
            'pagination' => $paginator,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            dump($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('admin/user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     * @param User $user
     * @return Response
     */
    public function show(User $user): Response
    {
        return $this->render('admin/user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     * @param Request $request
     * @param User $user
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function edit(Request $request, User $user, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $em): Response
    {

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }

//        if(!empty($_POST['inputAdmin']) && $_POST['submitAdmin'] === "PutAdmin")
//        {
//            $user = $em->getRepository(User::class)->find($_POST['inputAdmin']);
//            $user->setRoles("ROLE_ADMIN");
//            $em->flush();
//            return $this->redirectToRoute('user_index');
//        }
//        if(!empty($_POST['inputAdmin']) && $_POST['submitAdmin'] === "PutUser")
//        {
//            $user = $em->getRepository(User::class)->find($_POST['inputAdmin']);
//            $user->setRoles("ROLE_USER");
//            $em->flush();
//            return $this->redirectToRoute('user_index');
//        }
//        dd($user);

        return $this->render('admin/user/edit.html.twig', [
            'account' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_delete", methods={"DELETE"})
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function delete(Request $request, User $user): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/{id}", name="user_admin", methods={"PUT"})
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function setAdmin(Request $request, User $user, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('update' . $user->getId(), $request->request->get('_token'))) {
            $user->setRoles("ROLE_ADMIN");
            $em->flush();
        }
            return $this->redirectToRoute('user_index');
    }

    /**
     * @Route("/user/{id}", name="user_user", methods={"PUT"})
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function setUser(Request $request, User $user, EntityManagerInterface $em)
    {
        if ($this->isCsrfTokenValid('update' . $user->getId(), $request->request->get('_token'))) {
            $user->setRoles("ROLE_USER");
            $em->flush();
        }
            return $this->redirectToRoute('user_index');
    }
}
