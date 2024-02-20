<?php

namespace App\Controller;

use App\Form\ConnectAdminType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserAdminController extends AbstractController
{
    #[Route('/user/admin', name: 'app_user_admin')]
    public function login(UserRepository $userRepository, Request $request, SessionInterface $session,UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(ConnectAdminType::class);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() ) {
            $formData = $form->getData();
            // Access individual form fields
            $mail = $formData->getMail();
            $password =$form->get('mdp')->getData();
    
            // Find user by email and password
            $user = $userRepository->findOneBy(['mail' => $mail]);
    
            if ($user && $passwordHasher->isPasswordValid($user, $password)) {
                $stat = $user->getStat();
    
                if ($stat == "Admin") {
                    $session->set('user_email', $mail);
                    return $this->redirectToRoute('app_user_admin_home');
                } else {
                    $this->addFlash('error', 'Désolé Vous n\'êtes pas un Admin !');
                }
            } else {
                $this->addFlash('error', 'E-mail ou mot de passe incorrect');
            }
        }
        return $this->render('user_admin/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/user/admin/home', name: 'app_user_admin_home')]
    public function index(UserRepository $usr): Response
    {
        $user = $usr->findBy(['stat' => 'user']);

        return $this->render('user_admin/admin_home.html.twig', [
            'controller_name' => 'UserAdminController',
            'users' => $user,
        ]);
    }
}
