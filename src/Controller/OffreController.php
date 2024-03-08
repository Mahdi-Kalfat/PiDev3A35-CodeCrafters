<?php

namespace App\Controller;

use App\Entity\Offre;
use App\Form\AddoffreType;
use App\Form\EditofferTypePhpType;
use App\Repository\OffreRepository;
use App\Repository\TypeOffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twilio\Rest\Client;
require_once __DIR__ . '/../../vendor/autoload.php';
use Symfony\Component\HttpFoundation\JsonResponse;


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
    public function creecompte(EntityManagerInterface $entityManager, Request $request): Response
    {
        $offre = new Offre();
        $form = $this->createForm(AddoffreType::class, $offre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $newFileName = md5(uniqid()) . '.' . $imageFile->guessExtension();

                $imageFile->move(
                    'C:\Users\mehdi\OneDrive\Desktop\projet_mahdi\integration\public\imgof', // Répertoire de stockage des images
                    $newFileName
                );
                $offre->setImage($newFileName);
            }

            $entityManager->persist($offre);
            $entityManager->flush();
         
            // Send SMS using Twilio
            $sid = "ACa56ec8074e1c1a37df38235f7189e029";
            $token = "fdaf2c65a65e0b7f49683e1215a4e7f8";
            $from = "+17178645471"; // Your Twilio phone number
            $to = "+21622688314";   // Recipient's phone number
            $body = "New offer added:\n";
            $body .= "Title: " . $offre->getTitre() . "\n";
            $body .= "Type: " . ($offre->getType() ? $offre->getType()->getNomOffre() : "N/A") . "\n";
            $body .= "Start Date: " . $offre->getDateD()->format('Y-m-d') . "\n";
            $body .= "End Date: " . $offre->getDateF()->format('Y-m-d') . "\n";
            $body .= "Percentage: " . $offre->getPoucentage() . "\n";
            $body .= "Description: " . $offre->getDescription();

            $twilio = new Client($sid, $token);

            $message = $twilio->messages->create($to, [
                "from" => $from,
                "body" => $body
            ]);

            // Redirect to the appropriate route
            return $this->redirectToRoute('app_offreA_show');
        }

        return $this->render('offre/addoffre.html.twig', ['formAdd' => $form->createView()]);
    }
    #[Route('/offre/show', name: 'app_offre_show')]
    public function show(OffreRepository $Or): Response
    {
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
                'C:\Users\mehdi\OneDrive\Desktop\projet_mahdi\integration\public\imgof', // Répertoire de stockage des images
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
   
    #[Route('/offre/recherche', name: 'app_offre_recherche')]
    public function recherche1(OffreRepository $offreRepository, Request $request): Response
    {
        // Extract the search term from the query parameters
        $searchTerm = $request->query->get('q', '');

        // Find offers filtered by titre
        $offres = $offreRepository->findBytitre($searchTerm);

        // Render your template with the filtered offers
        return $this->render('offre/showoffreA.html.twig', [
            'offres' => $offres,
        ]);
    }

    #[Route('/offre/recherche1', name: 'app_offre_recherche2')]
    public function recherche2(OffreRepository $offreRepository, Request $request): Response
    {
        $searchTerm = $request->query->get('q', '');

        if ($request->isXmlHttpRequest()) {
            $offres = $offreRepository->findByTitreOrPourcentage($searchTerm);

            $renderedView = $this->renderView('offre/_offresCards.html.twig', [
                'offres' => $offres,
            ]);

            return new Response($renderedView);
        } else {
            $offres = $offreRepository->findAll();

            return $this->render('offre/showoffre.html.twig', [
                'offres' => $offres,
            ]);
        }
    }





    #[Route('/offre/filtre', name: 'app_offre_filtre')]
    public function filtre(OffreRepository $offreRepository, Request $request): Response
    {
        $poucentage = $request->query->get('poucentage');
        $dated = $request->query->get('dated');
        $datef = $request->query->get('datef');

        $offres = $offreRepository->findByFiltres($poucentage, $dated, $datef);

        return $this->render('offre/showoffre.html.twig', [
            'offres' => $offres,
        ]);
    }
    #[Route('/offre/filtre1', name: 'app_offre1_filtre')]
    public function filtre1(OffreRepository $offreRepository, Request $request): Response
    {
        $pourcentage = $request->query->get('poucentage');

        // Find offers filtered by pourcentage
        $offres = $offreRepository->findByPourcentage($pourcentage);

        return $this->render('offre/showoffre.html.twig', [
            'offres' => $offres,
        ]);
    }

    #[Route('/offre/{id}/like', name: 'app_offre_like')]
    public function like(Offre $offre, EntityManagerInterface $em): JsonResponse {
        $offre->like();
        $em->persist($offre);
        $em->flush();

        // Return the updated like count
        return new JsonResponse([
            'success' => true,
            'likes' => $offre->getLikes(),
        ]);
    }

    #[Route('/offre/{id}/dislike', name: 'app_offre_dislike')]
    public function dislike(Offre $offre, EntityManagerInterface $em): JsonResponse {
        $offre->dislike();
        $em->persist($offre);
        $em->flush();

        // Return the updated dislike count
        return new JsonResponse([
            'success' => true,
            'dislikes' => $offre->getDislikes(),
        ]);
    }

    /*#[Route('/pdf', name: 'app_pdf')]
    public function generatePdf(OffreRepository $offreRepository, Pdf $pdf): Response
{
    // Retrieve all Offre entities
    $offres = $offreRepository->findAll();

    // Extract dates from Offre entities
    $dates = [];
    foreach ($offres as $offre) {
        $dates[] = $offre->getDated()->format('Y-m-d'); // Assuming 'dated' is a DateTime attribute
    }

    // Prepare data for PDF
    $pdfContent = $this->renderView('pdf/offres_calendar.html.twig', [
        'dates' => $dates,
    ]);

    // Generate PDF
    $pdf->generateFromHtml($pdfContent);

    // Return PDF response
    return $pdf->sendResponse('offres_calendar.pdf');
}*/
}
    
    
    


