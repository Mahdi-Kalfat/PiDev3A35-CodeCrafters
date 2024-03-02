<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Livraison;
use App\Form\AddEditLivraisonType;
use App\Form\EditlivraisonType;
use App\Repository\CommandeRepository;
use App\Repository\LivraisonRepository;
use App\Repository\LivreurRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class LivraisonController extends AbstractController
{
    #[Route('/livraison/suivi/{id}', name: 'app_livraison_suivi')]
    public function index($id,LivraisonRepository $Lr): Response
    {

        $livraison = $Lr->find($id);
        $aa = $livraison->getEtatliv();


        return $this->render('livraison/suivilivraison.html.twig', [
            'etat' => $aa, 
        ]);
    }

    #[Route('/livraison/new', name: 'app_livraison_new')]
    public function ajouterlivraison(Request $request, LivraisonRepository $livraisonRepository, EntityManagerInterface $entityManager): Response
    {
        $livraison = new Livraison();
        $form = $this->createForm(AddEditLivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $selectedCommandes = $livraison->getIdcommande();

            foreach ($selectedCommandes as $commande) {
                $entityManager->persist($commande);
            }

            $entityManager->persist($livraison);
            $entityManager->flush();

            return $this->redirectToRoute('app_livraison_new');
        }

        $nonLivraisons = $livraisonRepository->createQueryBuilder('l')
            ->andWhere('l.etatliv != :etat')
            ->setParameter('etat', 'Livrée')
            ->getQuery()
            ->getResult();

        $Livre = $livraisonRepository->findBy(['etatliv' => 'Livrée']);

        return $this->render('livraison/addeditlivraison.html.twig', [
            'formAddliv' => $form->createView(),
            'livraisons' => $nonLivraisons,
            'Livres' => $Livre,
        ]);
    }

    #[Route('/livraison/edit/{id}', name: 'app_livraison_edit')]
    public function editlivraison($id,EntityManagerInterface $em,LivraisonRepository $Lr,Request $req)
    {
       $livraison = $Lr->find($id);
       $form=$this->createForm(EditlivraisonType::class,$livraison);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $em->persist($livraison);
        $em->flush();
        return $this->redirectToRoute('app_livraison_new');
       }
       return $this->render('livraison/editliv.html.twig', ['formAddliv'=>$form]);
    }


    #[Route('/livraison/suivif', name: 'app_livraison_suivif')]
    public function showlivf(LivraisonRepository $livraisonRepository,CommandeRepository $commandeRepository,EntityManagerInterface $em)
    {
        $commande1 = new Commande();
        $email = 'raoudha.cherif@gmail.com';
        $commande1 = $commandeRepository->findBy(['mail' => $email]);
        foreach ($commande1 as $commande) {
            $idCommandes[] = $commande->getId();
        }

        $query = $em->createQuery(
            'SELECT l
            FROM App\Entity\Livraison l
            JOIN l.idcommande c
            WHERE c.id IN (:commandeIds)'
        );
        
        $query->setParameter('commandeIds', $idCommandes);
        
        $livraisons = $query->getResult();

        $res = $livraisonRepository->findBy(['id' => $livraisons]);
                
        return $this->render('livraison/showlivfront.html.twig', [
           'Livraisons' => $res
        ]);
    }
    #[Route('/livraison/livre/{id}', name: 'app_livraison_livre')]
    public function livree($id,EntityManagerInterface $em,LivraisonRepository $Lr)
    {
        $livraison = $Lr->find($id);

        
        // Change the status to 'Bani'
        $livraison->setEtatliv('Livrée');
        
        // Persist the changes
        $em->persist($livraison);
        $em->flush();
        
        return $this->redirectToRoute('app_livraison_new');
    }

    
    
}

