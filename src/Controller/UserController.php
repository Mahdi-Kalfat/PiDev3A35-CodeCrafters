<?php

namespace App\Controller;

use App\Form\AuthType;
use App\Form\EditProfilImgType;
use App\Form\EditProfilType;
use App\Form\VerifType;
use App\Repository\UserRepository;
use App\Service\AuthenticatorService;
use Doctrine\ORM\EntityManagerInterface;
use OTPHP\TOTP;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;



class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    
    #[Route('/user/home', name: 'app_user_home')]
    public function index4(): Response
    {
        return $this->render('user/home.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
  
    #[Route('/user/profil', name: 'app_user_profil')]
public function profile(SessionInterface $session, UserRepository $userRepository,EntityManagerInterface $em,Request $req): Response
{
    // Retrieve the email from the session
    $email = $session->get('user_email');
    $user = $userRepository->findOneBy(['mail' => $email]);
    $nom = $user->getNom();
    $prenom = $user->getPrenom();
    $stat = $user->getStat();
    $numero = $user->getNum();
    $pass = $user-> getMdp();
    $adress = $user->getAdresse();
    $id = $user->getId();
    $image = $user->getImage();
    $is_2f = $user->getIs2f();

    $user = $userRepository->find($id);

    $form=$this->createForm(EditProfilImgType::class,$user);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $imageFile = $form->get('image')->getData();
       /* if ($imageFile) {*/
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\mehdi\OneDrive\Desktop\projet_mahdi\integration\public\imguser', // Répertoire de stockage des images
                $newFileName 
            );
       // }*/
        $user->setImage($newFileName);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('app_user_profil');
    }


    return $this->render('user/profil.html.twig', [ 'formadd' => $form,
        'email' => $email,
        'nom' => $nom,
        'prenom'=>$prenom, 
        'status'=>$stat,
        'num' => $numero,
        'mdp' => $pass,
        'adresse' => $adress,
        'id' => $id,
        'img' => $image,
        'is_2f' => $is_2f,
    ]);
}

#[Route('/user/profil/edit/{id}', name: 'app_user_profil_edit')]
public function profileedit($id,EntityManagerInterface $em,SessionInterface $session, UserRepository $userRepository,Request $req): Response
{
    // Retrieve the email from the session
    $email = $session->get('user_email');
    $user = $userRepository->findOneBy(['mail' => $email]);
    $nom = $user->getNom();
    $prenom = $user->getPrenom();
    $stat = $user->getStat();
    $img = $user->getImage();
    
    $user = $userRepository->find($id);
       $form=$this->createForm(EditProfilType::class,$user);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $user->setImage($user->getImage());
        $em->persist($user);
        $em->flush();
       
        return $this->redirectToRoute('app_user_profil');
    }

    return $this->render('user/editprofil.html.twig', ['formedit'=>$form,
        'email' => $email,
        'nom' => $nom,
        'prenom'=>$prenom, 
        'status'=>$stat,
        'img' => $img

    ]);
}
#[Route('/user/del/{id}', name: 'app_user_del')]
    public function unban($id,EntityManagerInterface $em,UserRepository $Ur)
    {
        $User = $Ur->find($id);

        if (!$User) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_user_profil');
        }
        
        // Change the status to 'Bani'
        $User->setStat('dead');
        
        // Persist the changes
        $em->persist($User);
        $em->flush();
        
        return $this->redirectToRoute('app_user_login');
    }

    #[Route('/user/auth/pair/{id}', name: 'app_user_auth_pair')]
    public function authpair($id,AuthenticatorService $authenticatorService,UserRepository $ur, Request $request,EntityManagerInterface $em): Response
    {
        $user = $ur->findOneBy(["id" => $id]);
        [$qrCodeUri ,$secret]=$authenticatorService->getQrCodeUri($user);
        $form = $this->createForm(AuthType::class);
        $form->setData(['secret' => $secret]);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $secret = $form->get('secret')->getData();
            $user->setSecret($secret);
            $user->setIs2f(true);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_profil');
        }
        return $this->render('auth/pair.html.twig', [
            'qrCodeUri' => $qrCodeUri,
            'secret' => $secret,
            'form' =>$form,
        ]);
    }
    #[Route('/user/auth/unpair/{id}', name: 'app_user_auth_unpair')]
    public function authunpair($id,UserRepository $ur,EntityManagerInterface $em): Response
    {
        $user = $ur->findOneBy(["id" => $id]);
        
            $user->setSecret('');
            $user->setIs2f(false);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('app_user_profil');
    }

    #[Route('/user/auth/verif/{id}', name: 'app_user_auth_verif')]
    public function authverif($id, Request $request, UserRepository $ur,SessionInterface $session): Response
    {
        $user = $ur->findOneBy(["id" => $id]);
        $form = $this->createForm(VerifType::class);
        $result = null; // Initialize $result here
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            $totp = TOTP::createFromSecret($user->getSecret());
            $result = $totp->verify($form->get('otp')->getData());
            if($result === true){
                $user = $ur->findOneBy(['id' => $id]);
                $mail = $user->getMail();
                $session->set('user_email', $mail);
                return $this->redirectToRoute('app_user_home');
            }else{
                $this->addFlash('error', 'le code n\'est pas valide');
            }
        }
        return $this->render('auth/verif.html.twig', [
            'result' => $result,
            'form' => $form->createView(),
        ]);       
    }
    
}
