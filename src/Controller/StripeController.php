<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Stripe;
use App\Entity\Commande;

class StripeController extends AbstractController
{
    #[Route('/stripe/{id}', name: 'stripe')]
    public function index($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer la commande à partir de son identifiant
        $commande = $entityManager->getRepository(Commande::class)->find($id);
    
        // Vérifier si la commande existe
        if (!$commande) {
            throw $this->createNotFoundException('La commande n\'existe pas');
        }
    
        // Obtenez le prix total du panier à partir de la commande
        $prixTotalPanier = $commande->getPrixTotal();
    
        return $this->render('stripe/index.html.twig', [
            'stripe_key' => $_ENV["STRIPE_KEY"],
            'prixTotalPanier' => $prixTotalPanier, // Transmettez le prix total du panier au modèle Twig
        ]);
    }
    

    #[Route('/stripe/create-charge', name: 'stripe_charge', methods: 'POST')]
    public function createCharge(Request $request, $id)
    {
        Stripe\Stripe::setApiKey($_ENV["STRIPE_SECRET"]);
        Stripe\Charge::create([
            "amount" => $request->request->get('montant') * 100, // Montant en centimes
            "currency" => "eur",
            "source" => $request->request->get('stripeToken'),
            "description" => "Paiement via Stripe",
        ]);

        $this->addFlash('success', 'Paiement réussi !');

        return $this->redirectToRoute('app_show_commande');
    }
}
