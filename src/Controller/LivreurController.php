<?php

namespace App\Controller;

use App\Entity\Livreur;
use App\Form\AddlivreurType;
use App\Repository\LivreurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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

    #[Route('/livreur/ban/{id}', name: 'app_livreur_ban')]
    public function delauth($id,EntityManagerInterface $em,LivreurRepository $Lr)
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

    #[Route('/livreur/form/edit/{id}', name: 'app_livreur_form_edit')]
    public function editcarForm($id,EntityManagerInterface $em,LivreurRepository $Lr,Request $req)
    {
       $livreur = $Lr->find($id);
       dump($livreur);
       $form=$this->createForm(AddlivreurType::class,$livreur);
       $form->handleRequest($req);
       if ($form->isSubmitted() ){
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

    #[Route('/livreur/new', name: 'app_livreur_new')]
    public function ajouterlivreur(EntityManagerInterface $em,Request $req)
    {
       $livreur = new Livreur();
       $form=$this->createForm(AddlivreurType::class,$livreur);
       $form->handleRequest($req);
       if ($form->isSubmitted()  ) {
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

    
}
