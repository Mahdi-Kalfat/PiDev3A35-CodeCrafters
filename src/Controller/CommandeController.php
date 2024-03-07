<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;
use App\Form\AjoutercommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Services\PanierServices;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\JsonResponse;


class CommandeController extends AbstractController
{
    #[Route('/commande/{id}/pdf', name: 'app_commande_pdf')]
    public function generatePdf($id, EntityManagerInterface $entityManager): Response
    {
        // Récupérer la commande à partir de l'identifiant
        $commande = $entityManager->getRepository(Commande::class)->find($id);
    
        // Obtenir la date et l'heure actuelles
        $dateCourante = new \DateTime();
        $heureActuelle = new \DateTime('now');
    
        // Générer le contenu HTML de la facture à partir des données de la commande
        $html = $this->renderView('commande/facture.html.twig', [
            'commande' => $commande,
            'dateCourante' => $dateCourante,
            'heureActuelle' => $heureActuelle,
        ]);
    
        // Utiliser la bibliothèque PDF pour générer le fichier PDF
        $pdf = new Dompdf();
        $pdf->loadHtml($html);
        $pdf->render();
    
        // Retourner la réponse HTTP avec le contenu du PDF
        return new Response($pdf->output(), Response::HTTP_OK, [
            'Content-Type' => 'application/pdf',
        ]);
    }
    
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
        foreach ($panierData['produits'] as $item) { 
            $produit = $item['produit']; 
            
            $commande->addProduit($produit); 
            $nomsProduits[] = $produit->getNom(); 
        }
    
        $prixTotalPanier = $panierData['data']['subTotalTTC']; 
        $commande->setPrixTotal($prixTotalPanier);

    
        $form = $this->createForm(AjoutercommandeType::class, $commande);
    
        $form->handleRequest($req);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Si le formulaire est soumis et valide, enregistrez la commande et redirigez vers la vue de paiement
            $em->persist($commande);
            $em->flush();
    
            // Redirection vers la vue de paiement avec la variable "commande" transmise
            return $this->redirectToRoute('app_commande');
        }
        if ($req->isMethod('POST')) {
            $token = $req->request->get('stripeToken');
            \Stripe\Stripe::setApiKey("sk_test_51OpfUGDCxyxLdTEx9amU8E7wFxlT2QyO29uix7wh7PohEGZK0h4FSs8KchXrafcxKwnvjc391nU7Aq0YQGllqe2z00tSwOiRmT");
            \Stripe\Charge::create(array(
              "amount" => $prixTotalPanier * 100,
              "currency" => "usd",
              "source" => $token,
              "description" => "payement comfirme!"
            ));
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
    #[Route('/payer', name: 'app_stripe')]
    public function index5(): Response
    {
        return $this->render('commande/confirmation_commande.html.twig', [
            
        ]);
    }

#[Route('/search', name: 'search_commande_ajax', methods: ['GET'])]
public function searchCommandeAjax(Request $request, CommandeRepository $commandeRepository): JsonResponse
{
    $adresse = $request->query->get('adresse');

    if ($adresse) {
        $commandes = $commandeRepository->findByAdresse($adresse);
    } else {
        $commandes = $commandeRepository->findAll();
    }

    $formattedCommandes = [];
    foreach ($commandes as $commande) {
        $formattedCommandes[] = [
            'id' => $commande->getId(),
            'adresse' => $commande->getAdresse(),
            // Ajoutez d'autres propriétés que vous souhaitez renvoyer
        ];
    }

    return new JsonResponse($formattedCommandes);
}

    
}
