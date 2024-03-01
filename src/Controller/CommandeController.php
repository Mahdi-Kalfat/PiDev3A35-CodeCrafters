<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\AjoutercommandeType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Services\PanierServices;


class CommandeController extends AbstractController
{
    private $panierServices;

    public function __construct(PanierServices $panierServices)
    {
        $this->panierServices = $panierServices;
    }
    #[Route('/show', name: 'app_show_commande')]
    public function show1(Request $request,CommandeRepository $commandeRepository): Response
    {
        $adresse = $request->query->get('adresse');
        $tri = $request->query->get('tri');

        if ($adresse) {
            $commande = $commandeRepository->findByAdresse($adresse); // Utiliser la méthode de recherche par adresse
        } else {
            if ($tri === 'desc') {
                $commande = $commandeRepository->findByPrixTotal('DESC'); // Récupérer toutes les commandes triées par prix total décroissant
            } else {
                $commande = $commandeRepository->findByPrixTotal(); // Récupérer toutes les commandes triées par prix total croissant
            }
        }
        return $this->render('commande/index1.html.twig', [
            'controller_name' => 'CommandeController',
            'commandes' => $commande,
        ]);
    }
    #[Route('/commande', name: 'app_commande')]
    public function index(): Response
    {
        return $this->render('commande/showcommande.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    #[Route('/ajoutercommande', name: 'app_addcommande')]
public function ajouterproduit(EntityManagerInterface $em, Request $req, PanierServices $panierServices)
{
    $commande = new Commande();
    $panierData = $panierServices->getFullCart();

    $nomsProduits = [];
    foreach ($panierData['produits'] as $item) { // Récupérer les noms des produits ajoutés au panier
        $produit = $item['produit']; 
        
        $commande->addProduit($produit); // Ajouter le produit à la commande
        
        $nomsProduits[] = $produit->getNom(); // Récupérer et stocker le nom du produit
    }

    $prixTotalPanier = $panierData['data']['subTotalTTC']; // Récupérer le prix total du panier
    $commande->setPrixTotal($prixTotalPanier);

    $form = $this->createForm(AjoutercommandeType::class, $commande);

    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute('app_commande');
    }

    return $this->render('commande/commande.html.twig', [
        'formAdd' => $form->createView(),
        'nomsProduits' => $nomsProduits,
        'prixTotalPanier' => $prixTotalPanier,
    ]);
}

    #[Route('/commande/edit/{id}', name: 'app_commande_edit')]
    public function editproduitForm($id,EntityManagerInterface $em,CommandeRepository $c,Request $req)
    {
       $commande = $c->find($id);
       $form=$this->createForm(AjoutercommandeType::class,$commande);
       $form->handleRequest($req);
       if ($form->isSubmitted()&& $form->isValid()){
        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute('app_show_commande');
       }
       return $this->render('commande/editcommande.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/commande/delete/{id}', name: 'app_commande_delete')]
    public function deleteproduit($id,EntityManagerInterface $em , CommandeRepository $c)
    {
        $commande=$c->find($id);
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('app_show_commande');
        
    }
    #[Route('/backcommande', name: 'app_backc')]
    public function show2(CommandeRepository $c): Response
    {
        $listcommande = $c->findAll();

        return $this->render('commande/backcommande.html.twig', [
            'controller_name' => 'CommandeController',
            'commandes' => $listcommande,
        ]);
    }
}
