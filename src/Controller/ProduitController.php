<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\AjouterproduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function show(ProduitRepository $produitRepository, Request $request, SessionInterface $session): Response
    {
        $type = $request->query->get('type');
        $taille = $request->query->get('taille');
        $etat = $request->query->get('etat');
        $marque = $request->query->get('marque');
        $tri = $request->query->get('tri');
    
        // Utilisation de la méthode findByFilters avec les valeurs des filtres
        $produits = $produitRepository->findByFilters($type, $taille, $etat);
    
        // Filtrer par marque si la marque est spécifiée
        if ($marque) {
            $produits = $produitRepository->findBy(['marque' => $marque]);
        }
    
        // Trier les produits si le paramètre de tri est spécifié
        if ($tri === 'desc') {
            $produits = $produitRepository->findByPrix('DESC'); // Trier par prix décroissant
        } elseif ($tri === 'asc') {
            $produits = $produitRepository->findByPrix('ASC'); // Trier par prix croissant
        }
    
        $favorisIds = $session->get('favoris', []);
    
        return $this->render('produit/showproduit.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produits,
            'favoris' => $favorisIds,
        ]);
    }
    
    #[Route('/afficherproduit', name: 'app_afficherproduit')]
    public function show1(ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->findAll();
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produit,
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function index2(): Response
    {
        return $this->render('produit/home.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    
    #[Route('/detailsproduit/{id}', name: 'app_details_produit')]
    public function detailsProduit(ProduitRepository $produitRepository, $id): Response
    {
        // Récupérer le produit à partir de l'identifiant
        $produit = $produitRepository->find($id);

        // Vérifier si le produit existe
        if (!$produit) {
            throw $this->createNotFoundException('Le produit demandé n\'existe pas');
        }

        return $this->render('produit/details_produit.html.twig', [
            'produit' => $produit,
        ]);
    }
    #[Route('/ajouterproduit', name: 'app_addproduit')]
    public function ajouterproduit (EntityManagerInterface $em,Request $req)
    {
       $produit = new Produit();
       $form = $this->createForm(AjouterproduitType::class, $produit);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\MSII\Desktop\projet_pidev\projet_wetek\public\imgproduit', // Répertoire de stockage des images
                $newFileName
            );
        }
            $produit->setImage($newFileName);
        $em->persist($produit);
        $em->flush();
        return $this->redirectToRoute('app_produit');
       }
       return $this->render('produit/produit.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/produit/edit/{id}', name: 'app_produit_edit')]
    public function editproduitForm($id,EntityManagerInterface $em,ProduitRepository $p,Request $req)
    {
       $produit = $p->find($id);
       $form=$this->createForm(AjouterproduitType::class,$produit);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\MSII\Desktop\projet_pidev\projet_wetek\public\imgproduit', // Répertoire de stockage des images
                $newFileName
            );
        }
            $produit->setImage($newFileName);
        $em->persist($produit);
        $em->flush();
        return $this->redirectToRoute('app_produit');
       }
       return $this->render('produit/editproduit.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/produit/delete/{id}', name: 'app_produit_delete')]
    public function deleteproduit($id,EntityManagerInterface $em ,ProduitRepository $p)
    {
        $produit=$p->find($id);
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('app_produit');
        
    }
    #[Route('/back', name: 'app_back')]
    public function show2(ProduitRepository $produitRepository): Response
    {
        $listproduit = $produitRepository->findAll();

        return $this->render('produit/back.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $listproduit,
        ]);
    }
    #[Route('/add_to_favorites/{id}', name: 'add_to_favorites')]
public function addToFavorites(Produit $produit, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    // Récupérer les produits favoris depuis la session
    $favoris = $session->get('favoris', []);

    // Ajouter le nouvel produit aux favoris s'il n'est pas déjà présent
    if (!in_array($produit->getId(), $favoris)) {
        $favoris[] = $produit->getId();
        $session->set('favoris', $favoris);
    }

    // Rediriger vers la page des produits favoris
    return $this->redirectToRoute('favoris');
}
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    #[Route('/favoris', name: 'favoris')]
public function favoris(ProduitRepository $produitRepository): Response
{
    // Récupérer les identifiants des produits favoris depuis la session
    $favorisIds = $this->session->get('favoris', []);

    // Récupérer les objets Produit correspondants aux identifiants
    $favoris = [];
    foreach ($favorisIds as $favoriId) {
        $favoris[] = $produitRepository->find($favoriId);
    }

    return $this->render('produit/favoris.html.twig', [
        'favoris' => $favoris,
    ]);
}
#[Route('/remove_from_favorites/{id}', name: 'remove_from_favorites')]
public function removeFromFavorites(Produit $produit): RedirectResponse
{
    // Récupérer les produits favoris depuis la session
    $favoris = $this->session->get('favoris', []);

    // Vérifier si le produit est dans la liste des favoris
    $key = array_search($produit->getId(), $favoris);
    if ($key !== false) {
        // Retirer le produit de la liste des favoris
        unset($favoris[$key]);
        $this->session->set('favoris', $favoris);
    }

    // Rediriger vers la page des produits favoris
    return $this->redirectToRoute('favoris');
}
}
