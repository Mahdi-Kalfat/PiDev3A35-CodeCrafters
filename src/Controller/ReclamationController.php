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
        // Récupération du fichier image depuis le formulaire
        $imageFile = $form->get('image')->getData();
        // Vérification si un fichier image a été fourni
        if ($imageFile) {
            // Génération d'un nom de fichier unique basé sur le hachage md5 et l'extension du fichier
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            // Déplacement du fichier image vers le répertoire de stockage
            $imageFile->move(
                'C:\sarra\projet_reclamation3\projet_reclamation3\public\imgrec', // Répertoire de stockage des images
                $newFileName
            );
            $reclamation->setImage($newFileName);
        } 
        $em->persist($reclamation);
        // Exécution des opérations d'écriture en base de données
        $em->flush();
        return $this->redirectToRoute('app_reclamation_showf');
       }
       return $this->render('reclamation/addreclamation.html.twig', ['formAdd'=>$form]);
    }

    #[Route('/reclamation/show', name: 'app_reclamation_show')]
    public function show(ReclamationRepository $RR): Response
    {
        // Find reclamations with 'Active' status
        $listreclamation = $RR->findAll();

        return $this->render('reclamation/showreclamation.html.twig', [
            'controller_name' => 'ReclamationController',
            'reclamationsf' => $listreclamation,
        ]);
    }

    #[Route('/reclamation/showf', name: 'app_reclamation_showf')]
    public function showf(ReclamationRepository $RR, Request $request): Response
    {
        $tri = $request->query->get('tri');
        $reclamations = new Reclamation();
        $email = 'sarra@esprit.tn';
        $idreclamation = [];
        // Recherche de toutes les réclamations associées à l'adresse email
        $reclamations = $RR->findBy(['email' => $email]);
        // Initialisation d'un tableau pour stocker les identifiants des réclamations trouvées
        foreach ($reclamations as $reclamations) {
            $idreclamation[] = $reclamations->getId();
        }
         // Recherche des réclamations par identifiant
        $reclamationlist = $RR->findBy(['id' => $idreclamation]);

        return $this->render('reclamation/showrecf.html.twig', [
            'controller_name' => 'ReclamationController',
            'reclamationf' => $reclamationlist,
        ]);
    }

    #[Route('/reclamation/edit/{id}', name: 'app_reclamation_edit')]
    public function editreclamationForm($id,EntityManagerInterface $em,ReclamationRepository $p,Request $req)
    {
       $reclamation = $p->find($id);
       $form=$this->createForm(AddEditReclamationType::class,$reclamation);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:sarra\projet_reclamation3\projet_reclamation3\public\imgrec', // Répertoire de stockage des images
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
      
    #[Route('/reclamation/deletef/{id}', name: 'app_reclamation_deletef')]
    public function deleteproduitf($id,EntityManagerInterface $em ,ReclamationRepository $RR)
    {
        $reclamations=$RR->find($id);
        $em->remove($reclamations);
        $em->flush();
        return $this->redirectToRoute('app_reclamation');
    }
    #[Route('/reclamation/recherche', name: 'app_reclamation_recherche')]
    public function recherche1(ReclamationRepository $rec, Request $request): Response
    {
        // Extract the search term from the query parameters
        $searchTerm = $request->query->get('q', '');

        // Find offers filtered by titre
        $listreclamation = $rec->findByObjet($searchTerm);

        // Render your template with the filtered offers
        return $this->render('reclamation/showreclamation.html.twig', [
            'reclamationsf' => $listreclamation,
        ]);
    }  
}
