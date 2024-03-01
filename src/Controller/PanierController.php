<?php

namespace App\Controller;

use App\Services\PanierServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    private $panierServices;
    public function __construct(PanierServices $panierServices)
    {
        $this->panierServices = $panierServices;
    } 
    #[Route('/panier', name: 'app_panier')]
    public function index(): Response
    {
        $cart = $this->panierServices->getFullCart();
        if (!isset($cart['produits'])){
            return $this->redirectToRoute("app_home");
        }
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            'cart' => $cart, 
        ]);
        
    }
    #[Route('/panier/add/{id}', name: 'cartAdd')]
    public function addToCart($id): Response {
    $this->panierServices->addToCart($id);
    return $this->redirectToRoute('app_panier'); 
}

    #[Route('/panier/delete/{id}', name: 'cartDeletep')] //supprimer un produit
    public function deleteFromCart($id): Response {

        $this->panierServices->deleteFromCart($id);
        return $this->redirectToRoute('app_panier');
    }
    #[Route('/panier/deleteAll/{id}', name: 'cartDeleteAll')] //supprimer la ligne 
    public function deleteALLToCart($id): Response {
        $this->panierServices->deleteALLToCart($id);
        return $this->redirectToRoute('app_panier');
    }
    #[Route('/panier/deleteAll', name: 'cartDelete')] //supprimer tout le panier (vider)
    public function deleteALL(): Response {
        $this->panierServices->deleteCart();
        return $this->redirectToRoute('app_produit');
    }
}
