<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reclamations;
use App\Form\AddEditReclamationType;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class ReclamationController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index2(): Response
    {
        return $this->render('reclamations/home.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }

    #[Route('/reclamation', name: 'app_reclamation')]
    public function creecompte(EntityManagerInterface $em,Request $req)
    {
       $reclamation = new Reclamation();
       $form=$this->createForm(AddEditReclamationType::class,$reclamation);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $reclamation->setEtat(false);
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\Admin\Desktop\projet_reclamation\public\imgrec', // Répertoire de stockage des images
                $newFileName
            );
            $reclamation->setImage($newFileName);
        }
            
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('app_reclamation_showf');
       }
       return $this->render('reclamation/addreclamation.html.twig', ['formAdd'=>$form]);
    }

    #[Route('/reclamation/show', name: 'app_reclamation_show')]
    public function show(ReclamationRepository $RR): Response
    {
        // Find Livreurs with 'Active' status
        $listreclamation = $RR->findAll();

        return $this->render('reclamation/showreclamation.html.twig', [
            'controller_name' => 'ReclamationController',
            'reclamationsf' => $listreclamation,
        ]);
    }
    #[Route('/reclamation/showf', name: 'app_reclamation_showf')]
    public function showf(ReclamationRepository $RR): Response
    {
        // Find Livreurs with 'Active' status
        $listreclamationf = $RR->findAll();

        return $this->render('reclamation/showrecf.html.twig', [
            'controller_name' => 'ReclamationController',
            'reclamationsf' => $listreclamationf,
        ]);
    }
    #[Route('/reclamation/edit/{id}', name: 'app_reclamation_edit')]
    public function editproduitForm($id,EntityManagerInterface $em,ReclamationRepository $p,Request $req)
    {
       $reclamation = $p->find($id);
       $form=$this->createForm(AddEditReclamationType::class,$reclamation);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\Admin\Desktop\projet_reclamation\public\imgrec', // Répertoire de stockage des images
                $newFileName
            );
        }
            $reclamation->setImage($newFileName);
        $em->persist($reclamation);
        $em->flush();
        return $this->redirectToRoute('app_reclamation');
       }
       return $this->render('reclamation/editreclamation.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/reclamation/delete/{id}', name: 'app_reclamation_delete')]
    public function deleteproduit($id,EntityManagerInterface $em ,ReclamationRepository $p)
    {
        $reclamation=$p->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('app_reclamation_show');

    }
    #[Route('/reclamation/deletef/{id}', name: 'app_reclamation_deletef')]
    public function deleteproduitf($id,EntityManagerInterface $em ,ReclamationRepository $RR)
    {
        $reclamations=$RR->find($id);
        $em->remove($reclamations);
        $em->flush();
        return $this->redirectToRoute('app_reclamation');
    }
}
