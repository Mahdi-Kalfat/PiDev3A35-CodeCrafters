<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\AddoffreType;
use App\Form\EditofferTypePhpType;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OffreController extends AbstractController
{
    #[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }
    #[Route('/offre/new', name: 'app_offre_new')]
    public function creecompte(EntityManagerInterface $em,Request $req)
    {
       $offre = new Offre();
       $form=$this->createForm(AddoffreType::class,$offre);
       $form->handleRequest($req);
       if ($form->isSubmitted()&& $form->isValid()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\HP\Desktop\projet_offre\public\imgof', // RÃ©pertoire de stockage des images
                $newFileName
            );
        }
            $offre->setImage($newFileName);
        $em->persist($offre);
        $em->flush();
        return $this->redirectToRoute('app_offre_show');
       }
       return $this->render('offre/addoffre.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/offre/show', name: 'app_offre_show')]
    public function show(OffreRepository $Or): Response
    {
        // Find Livreurs with 'Active' status
        $listoffre = $Or->findAll();

        return $this->render('offre/showoffre.html.twig', [
            'controller_name' => 'OffreController',
            'offres' => $listoffre,
        ]);
    }
    #[Route('/offre/show1', name: 'app_offreA_show')]
    public function show1(OffreRepository $Or): Response
    {
        // Find Livreurs with 'Active' status
        $listoffre = $Or->findAll();

        return $this->render('offre/showoffreA.html.twig', [
            'controller_name' => 'OffreController',
            'offres' => $listoffre,
        ]);
    }
    #[Route('/{id}', name: 'app_offre_delete', methods: ['POST'])]
    public function delete(Request $request, Offre $offre, EntityManagerInterface $entityManager, OffreRepository $offreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$offre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($offre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_offreA_show');
    }#[Route('/offre/edit/{id}', name: 'app_offre_edit')]
    public function editoffreForm($id,EntityManagerInterface $em,OffreRepository $p,Request $req)
    {
       $offre = $p->find($id);
       $form=$this->createForm(AddoffreType::class,$offre);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
        $imageFile = $form->get('image')->getData();
        if ($imageFile) {
            $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();
            $imageFile->move(
                'C:\Users\HP\Desktop\projet_offre\public\imgof', // Répertoire de stockage des images
                $newFileName
            );
        }
            $offre->setImage($newFileName);
        $em->persist($offre);
        $em->flush();
        return $this->redirectToRoute('app_offreA_show');
       }
       return $this->render('offre/edit.html.twig', ['formAdd'=>$form]);
    }
}
