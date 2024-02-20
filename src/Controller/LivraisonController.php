<?php

namespace App\Controller;

use App\Entity\Livraison;
use App\Form\AddEditLivraisonType;
use App\Form\EditlivraisonType;
use App\Repository\LivraisonRepository;
use App\Repository\LivreurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LivraisonController extends AbstractController
{
    #[Route('/livraison/suivi/{id}', name: 'app_livraison_suivi')]
    public function index($id,LivraisonRepository $Lr): Response
    {

        $livraison = $Lr->find($id);
        $aa = $livraison->getEtatliv();


        return $this->render('livraison/suivilivraison.html.twig', [
            'etat' => $aa, 
            dump($livraison)
        ]);
    }
    #[Route('/livraison/new', name: 'app_livraison_new')]
    public function ajouterlivraison(EntityManagerInterface $em,Request $req,LivraisonRepository $livraisonRepository)
    {
       $livraison = new Livraison();
       $form=$this->createForm(AddEditLivraisonType::class,$livraison);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
        $em->persist($livraison);
        $em->flush();
        return $this->redirectToRoute('app_livraison_new');
       }
       $nonLivraison = $livraisonRepository->createQueryBuilder('l')
        ->andWhere('l.etatliv != :etat')
        ->setParameter('etat', 'Livrée')
        ->getQuery()
        ->getResult();
       $Livre = $livraisonRepository->findBy(['etatliv' => 'Livrée']);
       return $this->render('livraison/addeditlivraison.html.twig', ['formAddliv'=>$form ,'livraisons' => $nonLivraison,'Livres' => $Livre]);
    
    }
    #[Route('/livraison/suivif', name: 'app_livraison_suivif')]
    public function showlivf(LivraisonRepository $livraisonRepository)
    {
        $livraison = $livraisonRepository->findall();
        return $this->render('livraison/showlivfront.html.twig', [
            'Livraisons' => $livraison
        ]);
    }
    #[Route('/livraison/livre/{id}', name: 'app_livraison_livre')]
    public function delauth($id,EntityManagerInterface $em,LivraisonRepository $Lr)
    {
        $livraison = $Lr->find($id);

        if (!$livraison) {
            // Handle the case where Livreur is not found, maybe return a response or redirect
            return $this->redirectToRoute('app_livraison_new');
        }
        
        // Change the status to 'Bani'
        $livraison->setEtatliv('Livrée');
        
        // Persist the changes
        $em->persist($livraison);
        $em->flush();
        
        return $this->redirectToRoute('app_livraison_new');
    }

    #[Route('/livraison/edit/{id}', name: 'app_livraison_edit')]
    public function editlivraison($id,EntityManagerInterface $em,LivraisonRepository $Lr,Request $req)
    {
       $livraison = $Lr->find($id);
       $form=$this->createForm(EditlivraisonType::class,$livraison);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
        $em->persist($livraison);
        $em->flush();
        return $this->redirectToRoute('app_livraison_new');
       }
       return $this->render('livraison/editliv.html.twig', ['formAddliv'=>$form]);
    }

   
}
