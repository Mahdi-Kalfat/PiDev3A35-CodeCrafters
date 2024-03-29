<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    #[Route('/rating/{id}', name: 'app_rating')]
    public function index($id): Response
    {
        // Récupère l'ID de la réponse à noter
        $idrep = $id;
        return $this->render('rating/index.html.twig', [
            'controller_name' => 'RatingController',
                'id' => $idrep
        ]);
    }
    // Enregistre la notation dans la base de données
    #[Route('/rating/save/{nbstars}/{id}', name: 'app_rating_save')]
    public function star($nbstars, $id, EntityManagerInterface $em, ReponseRepository $reponse, ReclamationRepository $RR): Response
    {
        $find = $reponse->findOneBy(['id' => $id]);
        // Met à jour la note de la réponse avec le nombre d'étoiles spécifié
        $find->setRate($nbstars);
        $em->persist($find); 
        $em->flush();
        
        return $this->redirectToRoute('app_reclamation_showf');
    }
}
