<?php

namespace App\Controller;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use App\Form\ConnectionType;
use App\Form\CreecompteType;
use App\Form\ResetpassType;
use App\Form\ResetpassvalidType;
use App\Repository\UserRepository;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AuthController extends AbstractController
{

    #[Route('/user/singin', name: 'app_user_singin')]
    public function creecompte(UserRepository $userRepository,UserPasswordHasherInterface $passwordEncoder,EntityManagerInterface $em, Request $req,SendMailService $mail)
    {
        $user = new User();
        $form = $this->createForm(CreecompteType::class, $user);
        $defaultImage = 'Default.jpg';
        $form->get('image')->setData($defaultImage);

        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('mail')->getData();
            $existingUser = $userRepository->findOneBy(['mail' => $email]);
            if ($existingUser) {
                $this->addFlash('error', 'L\'adresse e-mail existe déjà');
            } else {
            $encodedPassword = $passwordEncoder->hashPassword($user, $form->get('mdp')->getData());
            $user->setMdp($encodedPassword);
            $password = $form->get('mdp')->getData();
            $confirmPassword = $form->get('confirmMdp')->getData();
            if ($password !== $confirmPassword) {
                $this->addFlash('error', 'Le mot de passe ne correspond pas');
            } else {
                $user->setIsEnabled(false);
                $user->setToken($this->generateToken());
                $em->persist($user);
                $em->flush();
                
                $mail->send('noreplay@wetek.tn',$user->getMail(),'confirm Mail','register',['token'=>$user->getToken(),'prenom'=>$user->getPrenom()]);
                return $this->redirectToRoute('app_user_login');
            }   
            }
        }

        return $this->render('user/creecompte.html.twig', ['formAdd' => $form->createView(),
            'nom' => $user->getNom(),
            
    ]);
    }
    #[Route('/user/login', name: 'app_user_login')]
    public function login(UserRepository $userRepository, Request $request, SessionInterface $session,UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(ConnectionType::class);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            $formData = $form->getData();
            // Access individual form fields
            $mail = $formData->getMail();
            $password =$form->get('mdp')->getData();
    
            // Find user by email and password
            $user = $userRepository->findOneBy(['mail' => $mail]);
    
            if ($user && $passwordHasher->isPasswordValid($user, $password)) {
                $stat = $user->getStat();
                $enabled = $user->getIsEnabled();
                if ($enabled == true && $stat == "user" || $stat == "Admin") {
                    $session->set('user_email', $mail);
                    return $this->redirectToRoute('app_user_home');
                } else if ($stat == "bani"){
                    $this->addFlash('error', 'Désolée votre compte est banni !');
                }
                else if ($stat == "dead"){
                    $this->addFlash('error', 'Désolée ce compte est supprimer');
                }
                else if ($enabled != true)
                {
                    $this->addFlash('error', 'Ce compte n\'est pas activée');
                }
            } else {
                $this->addFlash('error', 'Email or password is incorrect.');
            }
        }
        return $this->render('user/connect.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/user/logout', name: 'app_user_logout')]
    public function logout(SessionInterface $session): Response
    {
        $session->invalidate();

        $session->remove('user_email');
 
        session_write_close();

        return $this->redirectToRoute('app_user');
    }
    #[Route('/user/confirm/{token}', name: 'app_user_confirm')]
    public function confirmAccount(string $token,UserRepository $Ur,EntityManagerInterface $em)
    {
        $user = $Ur->findOneBy(["token"=>$token]);

        if ($user){
            $user->setToken(null);
            $user->setIsEnabled(true);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_user_login');
        }else{
            $this->addFlash('error', 'Désolée ce compte n\'existe pas ou a déjà été validé.');
            return $this->redirectToRoute('app_user_login');
        }
    }
    /**
 * @return string
 * @throws \Exception
 */
private function generateToken()
{
    return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
}
#[Route('/user/forgot', name: 'app_user_forgot')]
    public function forgot(Request $req,UserRepository $Ur,EntityManagerInterface $em,SendMailService $mail):Response
    {
        $form = $this->createForm(ResetpassType::class);
        $form->handleRequest($req);

        if ($form->isSubmitted() && $form->isValid())
        {
            $user = $Ur->findOneBy(["mail" => $form->get('mail')->getData()]);

            if ($user){
                $this->addFlash('success', 'Veuiller verifier votre mail');
                $user->setResetToken($this->generateToken());
                $em->persist($user);
                $em->flush();

                $url = $this->generateUrl('app_user_reset',['token' => $user->getResetToken()],UrlGeneratorInterface::ABSOLUTE_URL);
              
                $context = compact('url','user');
                $mail->send('noreplay@admin.tn' , $user->getMail() , 'Réinitialiser votre mot de passe' , 'password_reset' , $context);
            }else{
                $this->addFlash('success', 'Veuiller verifier votre mail');
            }
            return $this->redirectToRoute('app_user_login');
        }

        return $this->render('email/reset_password_request.html.twig', [
            'formAdd' => $form,
        ]);
    }
    #[Route('/user/reset/{token}', name: 'app_user_reset')]
    public function reset(string $token,Request $request,UserRepository $Ur,EntityManagerInterface $em,UserPasswordHasherInterface $passwordHasher):Response
    {
        $user = $Ur->findOneBy(['resetToken' => $token]);
        if ($user){  
            $form = $this->createForm(ResetpassvalidType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) 
            {  
                $user->setResetToken(null);
                $encodedPassword = $passwordHasher->hashPassword($user, $form->get('mdp')->getData());
                $user->setMdp($encodedPassword);
                $password = $form->get('mdp')->getData();
                $confirmPassword = $form->get('confirmMdp')->getData();
            if ($password !== $confirmPassword) {
                $this->addFlash('error', 'Le mot de passe ne correspond pas');
            } else {
                $em->persist($user);
                $em->flush();
                $this->addFlash('error', 'mot de passe changer avec succes');
                return $this->redirectToRoute('app_user_login');
            }
            }
            return $this->render('email/reset.html.twig', [
                'formAdd' => $form,
            ]);
        }
        else{
            $this->addFlash('error', 'Ce lien est invalide');
            return $this->redirectToRoute('app_user_login');
        }  
    }
}

