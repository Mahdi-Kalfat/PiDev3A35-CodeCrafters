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

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function show(ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->findAll();
        return $this->render('produit/showproduit.html.twig', [
            'controller_name' => 'ProduitController',
            'produits' => $produit,
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
    #[Route('/magasin', name: 'app_magasin')]
    public function index3(): Response
    {
        return $this->render('produit/magasin.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    #[Route('/homme', name: 'app_homme')]
    public function index4(): Response
    {
        return $this->render('produit/homme.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    #[Route('/femme', name: 'app_femme')]
    public function index5(): Response
    {
        return $this->render('produit/femme.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    #[Route('/enfant', name: 'app_enfant')]
    public function index6(): Response
    {
        return $this->render('produit/enfant.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
    #[Route('/panierr', name: 'app_panierr')]
    public function index7(): Response
    {
        return $this->render('produit/panier.html.twig', [
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
}
