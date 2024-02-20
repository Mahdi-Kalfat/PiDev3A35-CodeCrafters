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

class CommandeController extends AbstractController
{
    #[Route('/show', name: 'app_show_commande')]
    public function show1(CommandeRepository $commandeRepository): Response
    {
        $commande = $commandeRepository->findAll();
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
    public function ajouterproduit (EntityManagerInterface $em,Request $req)
    {
       $commande = new Commande();
       $form = $this->createForm(AjoutercommandeType::class, $commande);
       $form->handleRequest($req);
       if ($form->isSubmitted()&& $form->isValid()){
        //liste ids 
        $em->persist($commande);
        $em->flush();
        return $this->redirectToRoute('app_commande');
       }
       return $this->render('commande/commande.html.twig', ['formAdd'=>$form]);
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
        return $this->redirectToRoute('app_commande');
       }
       return $this->render('commande/editcommande.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/commande/delete/{id}', name: 'app_commande_delete')]
    public function deleteproduit($id,EntityManagerInterface $em , CommandeRepository $c)
    {
        $commande=$c->find($id);
        $em->remove($commande);
        $em->flush();
        return $this->redirectToRoute('app_commande');
        
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
