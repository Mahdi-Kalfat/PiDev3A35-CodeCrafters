<?php

namespace App\Controller;

use App\Entity\TypeOffre;
use App\Form\AddTypeOffreType;
use App\Repository\TypeOffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeoffreController extends AbstractController
{
    #[Route('/typeoffre', name: 'app_typeoffre')]
    public function index(): Response
    {
        return $this->render('typeoffre/index.html.twig', [
            'controller_name' => 'TypeoffreController',
        ]);
    }
    #[Route('/Typeoffre/new', name: 'app_Typeoffre_new')]
    public function newType(EntityManagerInterface $em,Request $req)
    {
       $typeOffre = new TypeOffre();
       $form=$this->createForm(AddTypeOffreType::class,$typeOffre);
       $form->handleRequest($req);
       if ($form->isSubmitted()&& $form->isValid()){
        
       
        
            
        $em->persist($typeOffre);
        $em->flush();
        return $this->redirectToRoute('app_typeoffre_show');
       }
       return $this->render('typeoffre/addTypeoffre.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/typeoffre/show', name: 'app_typeoffre_show')]
    public function showType(TypeOffreRepository $Or): Response
    {
        // Find Livreurs with 'Active' status
        $listTypeoffre = $Or->findAll();

        return $this->render('typeoffre/showTypeoffre.html.twig', [
            'controller_name' => 'OffreController',
            'typeOffres' => $listTypeoffre,
        ]);
    }
    
    
    
    

#[Route('/typeoffre/edit/{id}', name: 'app_typeoffre_edit')]
    public function editoffreForm($id,EntityManagerInterface $em,TypeOffreRepository $p,Request $req)
    {
       $typeoffre = $p->find($id);
       $form=$this->createForm(AddTypeoffreType::class,$typeoffre);
       $form->handleRequest($req);
       if ($form->isSubmitted()){
       
        
            
        $em->persist($typeoffre);
        $em->flush();
        return $this->redirectToRoute('app_offreA_show');
       }
       return $this->render('typeoffre/EditTypeoffre.html.twig', ['formAdd'=>$form]);
    }
    #[Route('/{id}', name: 'app_typeoffre_delete', methods: ['POST'])]
    public function delete(Request $request, TypeOffre $typeOffre, EntityManagerInterface $entityManager, TypeOffreRepository $offreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeOffre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($typeOffre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_typeoffre_show');
    }
    
}
