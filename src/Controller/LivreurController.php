<?php

namespace App\Controller;

use App\Entity\Livreur;
use App\Form\AddlivreurType;
use App\Form\SendMailType;
use App\Repository\LivreurRepository;
use App\Services\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class LivreurController extends AbstractController
{
    #[Route('/livreur', name: 'app_livreur')]
    public function index(LivreurRepository $livreurRepository): Response
    {
        // Find Livreurs with 'Active' status
        $activeLivreurs = $livreurRepository->findBy(['statut' => 'active']);
        $nonactiveLivreurs = $livreurRepository->findBy(['statut' => 'bani']);

        return $this->render('livreur/showlivreur.html.twig', [
            'controller_name' => 'LivreurController',
            'livreurs' => $activeLivreurs,
            'nonlivreurs' => $nonactiveLivreurs,
        ]);
    }

    #[Route('/livreur/new', name: 'app_livreur_new')]
    public function ajouterlivreur(EntityManagerInterface $em,Request $req)
    {
       $livreur = new Livreur();
       $form=$this->createForm(AddlivreurType::class,$livreur);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\raoud\Desktop\projet_wetek1A\public\imglivreur', // Répertoire de stockage des images
                $newFileName
            );
        }
            $livreur->setImage($newFileName);
        $em->persist($livreur);
        $em->flush();
        return $this->redirectToRoute('app_livreur');
       }
       return $this->render('livreur/Addlivreur.html.twig', ['formAdd'=>$form]);
    
    }

    #[Route('/livreur/form/edit/{id}', name: 'app_livreur_form_edit')]
    public function editlivreur($id,EntityManagerInterface $em,LivreurRepository $Lr,Request $req)
    {
       $livreur = $Lr->find($id);
       $form=$this->createForm(AddlivreurType::class,$livreur);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $imageFile = $form->get('image')->getData();
       /* if ($imageFile) {*/
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\raoud\Desktop\projet_wetek1A\public\imglivreur', // Répertoire de stockage des images
                $newFileName 
            );
       // }*/
            $livreur->setImage($newFileName);
        $em->persist($livreur);
        $em->flush();
        return $this->redirectToRoute('app_livreur');
       }
       return $this->render('livreur/editlivreur.html.twig', ['formAdd'=>$form]);
    }

    #[Route('/livreur/ban/{id}', name: 'app_livreur_ban')]
    public function ban($id,EntityManagerInterface $em,LivreurRepository $Lr)
    {
        $livreur = $Lr->find($id);

        if (!$livreur) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_livreur');
        }
        
        // Change the status to 'Bani'
        $livreur->setStatut('bani');
        
        // Persist the changes
        $em->persist($livreur);
        $em->flush();
        
        return $this->redirectToRoute('app_livreur');
    }
    #[Route('/livreur/unban/{id}', name: 'app_livreur_unban')]
    public function unban($id,EntityManagerInterface $em,LivreurRepository $Lr)
    {
        $livreur = $Lr->find($id);

        if (!$livreur) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_livreur');
        }
        
        // Change the status to 'Bani'
        $livreur->setStatut('active');
        
        // Persist the changes
        $em->persist($livreur);
        $em->flush();
        
        return $this->redirectToRoute('app_livreur');
    }
    #[Route('/livreur/recherche', name: 'app_livreur_recherche')]
    public function recherche1(LivreurRepository $LivreurRepository, Request $request): Response
    {
        // Extract the search term from the query parameters
        $searchTerm = $request->query->get('q', '');
        // Find offers filtered by titre
        $livreurs = $LivreurRepository->findByzoneOrvehicule($searchTerm);
        $nonactiveLivreurs = $LivreurRepository->findBy(['statut' => 'bani']);

        // Render your template with the filtered offers
        return $this->render('livreur/showlivreur.html.twig', [
            'livreurs' => $livreurs,
            'nonlivreurs' => $nonactiveLivreurs,
        ]);
        
    }

    #[Route('/livreur/sendmail/{id}', name: 'app_livreur_send_mail')]
    public function sendmail($id,LivreurRepository $livreurRepository,Request $req,MailerInterface $mailer): Response
    {
        $Livreurs = $livreurRepository->findBy(['idlivreur' => $id]);
        foreach ($Livreurs as $livreur) {
            $emails = $livreur->getEmail();
            $nom = $livreur->getNom();
            $prenom =  $livreur->getPrenom();
            $idlivreur =  $livreur->getIdlivreur();
        }     
        $form=$this->createForm(SendMailType::class);
        $form->handleRequest($req);

        if ($form->isSubmitted())
        {
            $data = $form->getData();
            $fromValue = $data['from'];
            $toValue = $data['to'];
            $subjectValue = $data['subject'];
            $mailValue = $data['mail'];
            
            // Render the Twig template
            $emailBody = $this->renderView('email_template.html.twig', [
                'subject' => $subjectValue,
                'nom' =>$nom . ' ' . $prenom,  // Replace with the actual recipient name
                'message' => $mailValue,
                'entreprise' => 'Your Company',  // Replace with your company name
            ]);
        
            $email = (new TemplatedEmail())
                ->from(new Address($fromValue))
                ->to(new Address($toValue))
                ->subject($subjectValue)
                ->html($emailBody);
        
            $mailer->send($email);
        
            return $this->redirectToRoute('app_livreur');
        }

        return $this->render('livreur/sendmail.html.twig', ['form'=>$form,'email' => $emails,]);
    }
}
