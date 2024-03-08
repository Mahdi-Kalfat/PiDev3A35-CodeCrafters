<?php

namespace App\Controller;

use App\Form\ConnectAdminType;
use App\Repository\UserRepository;
use App\Service\AuthenticatorService;
use Doctrine\ORM\EntityManagerInterface;
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
    
        if ($form->isSubmitted()) {
            $formData = $form->getData();
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
        $userBan = $usr->findBy(["stat" => "bani"]);
        $nouser =$usr->findBy(["stat" => "dead"]);

        return $this->render('user_admin/admin_home.html.twig', [
            'controller_name' => 'UserAdminController',
            'users' => $user,
            'usersBani' => $userBan,
            'deadusers' => $nouser,
        ]);
    }
    #[Route('/user/ban/{id}', name: 'app_user_ban')]
    public function delauth($id,EntityManagerInterface $em,UserRepository $Ur)
    {
        $User = $Ur->find($id);

        if (!$User) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_user_admin_home');
        }
        
        // Change the status to 'Bani'
        $User->setStat('bani');
        
        // Persist the changes
        $em->persist($User);
        $em->flush();
        
        return $this->redirectToRoute('app_user_admin_home');
    }
    #[Route('/user/unban/{id}', name: 'app_user_unban')]
    public function unban($id,EntityManagerInterface $em,UserRepository $Ur)
    {
        $User = $Ur->find($id);

        if (!$User) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_user_admin_home');
        }
        
        // Change the status to 'Bani'
        $User->setStat('user');
        
        // Persist the changes
        $em->persist($User);
        $em->flush();
        
        return $this->redirectToRoute('app_user_admin_home');
    }
}
