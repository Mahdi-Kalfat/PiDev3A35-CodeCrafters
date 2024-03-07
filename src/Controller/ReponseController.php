<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Twilio\Rest\Client;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

use App\Entity\Reclamations;
use App\Form\AddEditReclamationType;
use App\Form\ReclamationType;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Knp\Component\Pager\PaginatorInterface;

class ReponseController extends AbstractController
{


    #[Route('/notificationf', name: 'notification')]
    public function showN(ReclamationRepository $RR, Request $request): Response
    {
        $tri = $request->query->get('tri');
        $reclamations = new Reclamation();
        $email = 'sarra@esprit.tn';
        $idreclamation = [];
        $reclamations = $RR->findBy(['email' => $email]);
        foreach ($reclamations as $reclamations) {
            $idreclamation[] = $reclamations->getId();
        }
        $reclamationlist = $RR->findBy(['id' => $idreclamation]);

        return $this->render('reclamation/addreclamation.html.twig', [
            'controller_name' => 'ReponseController',
            'reclamationf' => $reclamationlist,
        ]);
    }




    #[Route('/reponse', name: 'app_reponse_index', methods: ['GET'])]
    public function index(ReponseRepository $reponseRepository): Response
    { 
        
        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponseRepository->findAll(),
        ]);
    }

  /*  #[Route('/reponse/new/{id}', name: 'app_reponse_new')]
    public function new(EntityManagerInterface $em ,Request $request, ReponseRepository $reponseRepository,$id , ReclamationRepository $rep): Response
    {
        
         $rec = new Reclamation() ;
         $rec = $rep->find($id);
         $rec = $rec->setEtat(true) ;

        $reponse = new Reponse();
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponse->setReponserelation($rec);
            $reponseRepository->save($reponse, true);
            $em->persist($rec);
            $em->flush();


            return $this->redirectToRoute('app_reclamation_show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }*/



    #[Route('/reponse/new/{id}', name: 'app_reponse_new')]
public function new(EntityManagerInterface $em, Request $request, ReponseRepository $reponseRepository, $id, ReclamationRepository $rep, MailerInterface $mailer): Response
{
    $rec = $rep->find($id);
    if (!$rec) {
        throw $this->createNotFoundException('La réclamation demandée n\'existe pas');
    }
    $rec->setEtat(true);

    $reponse = new Reponse();
    $form = $this->createForm(ReponseType::class, $reponse);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $reponse->setReponserelation($rec);
        $reponseRepository->save($reponse, true);
        $em->persist($reponse); 
        $em->flush();

        $email = (new Email())
            ->from('sarra.sat@esprit.tn') // Utilisez votre adresse email réelle ici
            ->to('yassin22hfaiedh@gmail.com')
            ->subject('Réclamation')
            ->text($rec->getNom().' '.'vous envoie une  réclamation avec l\'objet: "'.$rec->getObj().'" est bien traitée par notre admin.');


        $mailer->send($email);

        return $this->redirectToRoute('app_reclamation_show', [], Response::HTTP_SEE_OTHER);
    }

    return $this->renderForm('reponse/new.html.twig', [
        'reponse' => $reponse,
        'form' => $form,
    ]);
}

    
    #[Route('/reponse/show/{id}', name: 'app_reponse_show')]
public function showrep($id, ReponseRepository $rep, ReclamationRepository $rec,PaginatorInterface $paginator,Request $request): Response
{
    $findrec = $rec->findOneBy(["id" => $id]);
    // Get the ID of the found reclamation
    $idrec = $findrec->getId();

    $query = $rep->createQueryBuilder('m')
    ->where('m.reponserelation = :id')
    ->setParameter('id', $idrec)
    ->getQuery();
    
    $page=$request->query->getInt('page',1);
    $limit=$request->query->getInt('limit',3);
    $paginator=new Paginator($query);
    $paginator->getQuery()->setFirstResult(($page-1)* $limit)->setMaxResults($limit);
    $reponse=$paginator->getIterator();
    $totalCount = count($paginator);
    $totalPages = ceil($totalCount / $limit);

    // Find the reclamation by ID
   
    // Find all responses related to the reclamation
    
    //dd($reponses);
    return $this->render('reponse/show.html.twig', [
        'reponses' => $reponse,'totalpages' => $totalPages,'page' => $page,'id' => $id
    ]);
}

    #[Route('/reponse/{id}/edit', name: 'app_reponse_edit', methods: ['GET', 'POST'],requirements: ['id' => '\d+'])]
    public function edit(Request $request, Reponse $reponse, ReponseRepository $reponseRepository): Response
    {
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reponseRepository->save($reponse, true);

            return $this->redirectToRoute('app_reclamation_show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/reponse/delete/{id}', name: 'app_reponse_delete')]
public function deleteReponse($id, EntityManagerInterface $em, ReponseRepository $Rr,ReclamationRepository $RR)
{
    $reponse = $Rr->find($id);
    $reponseid = $reponse->getReponserelation();
    $reclamation = $reponseid;

    $reclamation->setEtat(false);  // Set etat to false
    $em->persist($reclamation);

    $em->remove($reponse);
    $em->flush();

    $this->addFlash('success', 'Reponse deleted successfully.');
    return $this->redirectToRoute('app_reclamation_show');     //app_reclamation_show
}

#[Route('/reponse/showf/{id}', name: 'app_reponse_showf')]
public function show($id, ReponseRepository $rep, ReclamationRepository $rec): Response
{
    // Find the reclamation by ID
    $findrec = $rec->findOneBy(["id" => $id]);

    // Get the ID of the found reclamation
    $idrec = $findrec->getId();

    // Find all responses related to the reclamation
    $reponses = $rep->findBy(['reponserelation' => $idrec]);

    return $this->render('reponse/showreponsef.html.twig', [
        'reponses' => $reponses,
    ]);
}
}
