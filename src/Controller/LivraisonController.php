<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Livraison;
use App\Form\AddEditLivraisonType;
use App\Form\CommentaireType;
use App\Form\EditlivraisonType;
use App\Repository\CommandeRepository;
use App\Repository\LivraisonRepository;
use App\Repository\LivreurRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\VarDumper\VarDumper;

class LivraisonController extends AbstractController
{
    #[Route('/livraison/suivi/{id}', name: 'app_livraison_suivi')]
    public function index($id,LivraisonRepository $Lr): Response
    {

        $livraison = $Lr->find($id);
        $aa = $livraison->getEtatliv();


        return $this->render('livraison/suivilivraison.html.twig', [
            'etat' => $aa, 
        ]);
    }

    #[Route('/livraison/new', name: 'app_livraison_new')]
    public function ajouterlivraison(Request $request, LivraisonRepository $livraisonRepository, EntityManagerInterface $entityManager,LivreurRepository $Lr): Response
    {
        $livraison = new Livraison();
        $form = $this->createForm(AddEditLivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $selectedCommandes = $livraison->getIdcommande();
            
            /* test 3la zone*/
            $zone = $form->get('zoneliv')->getData();
            $idliv = $form->get('idlivreur')->getData();
            $test = $idliv->getIdlivreur();
            $IsLivreur = $Lr->findOneBy(["idlivreur" => $test]);
            $zoneliv =  $IsLivreur->getZonelivraison();
            /* fin test 3la zone*/
            /* test 3la time */
            $dateTime = $form->get('dateliv')->getData();
            $timeAsString = $dateTime->format('H');
            $disponibilite = $idliv->getDisponibilite();
            preg_match_all('/\d+/', $disponibilite, $disponibiliteMatches);
            $disponibiliteStart = isset($disponibiliteMatches[0][0]) ? (int)$disponibiliteMatches[0][0] : null;
            $disponibiliteEnd = isset($disponibiliteMatches[0][1]) ? (int)$disponibiliteMatches[0][1] : null;
            if ($disponibiliteStart !== null && $disponibiliteEnd !== null) {
                $isTimeInRange = $timeAsString >= $disponibiliteStart && $timeAsString <= $disponibiliteEnd;
                if ($isTimeInRange) {
                    $test1 = true;
                } else {
                    $test1 = false;
                }
            }
               if($zoneliv == $zone && $test1 == true){
                foreach ($selectedCommandes as $commande) {
                    $entityManager->persist($commande);
                }
                /* localisation wilayet tounes */   
             if ($zoneliv === 'Ariana') {
                $lat = 36.866246932435644; 
                $lon = 10.161604975559708;
                $livraison->setLat($lat);
                $livraison->setLon($lon); 
            } else if ($zoneliv === 'Beja') {
                $lat = 36.73067117683168; 
                $lon = 9.185456287942467;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Ben Arous') {
                $lat = 36.748270105120675; 
                $lon = 10.234990027824294;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Bizerte') {
                $lat = 37.280388422886354; 
                $lon = 9.859100847118178;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Gabes') {
                $lat = 33.88863608141286; 
                $lon = 10.10008312847982;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Gafsa') {
                $lat = 34.43113817808238; 
                $lon = 8.780011820756561;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Jendouba') {
                $lat = 36.504251163433295; 
                $lon = 8.778548031813438;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Kairouan') {
                $lat = 35.67534317920456; 
                $lon = 10.106334688071748;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Kasserine') {
                $lat = 35.170120775765724; 
                $lon = 8.832063359838568;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Kebili') {
                $lat = 33.7059518860272; 
                $lon = 8.96896332236317;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Kef') {
                $lat = 36.17011600063885; 
                $lon = 8.707985778978202;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Mahdia') {
                $lat = 35.505219644619004; 
                $lon = 11.045190347641007;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Manouba') {
                $lat = 36.81400571274542; 
                $lon = 10.088474571449364;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Medenine') {
                $lat = 33.34762508074129; 
                $lon = 10.490312410383119;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Monastir') {
                $lat = 35.762065688238536; 
                $lon = 10.816618622989917;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Nabeul') {
                $lat = 36.45121976861158; 
                $lon = 10.72126382165557;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Sfax') {
                $lat = 34.76305892540152; 
                $lon = 10.75678464320226;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Sidi Bouzid') {
                $lat = 35.03751222829448; 
                $lon = 9.482101511763664;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Siliana') {
                $lat = 36.08819203477162; 
                $lon = 9.368419585976222;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Sousse') {
                $lat = 35.827909954898885; 
                $lon = 10.628181635113064;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Tataouine') {
                $lat = 32.925728979963395; 
                $lon = 10.446967335648747;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Tozeur') {
                $lat = 33.92159894988366; 
                $lon = 8.124303594652474;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Tunis') {
                $lat = 36.79732872695716; 
                $lon = 10.177606770347431;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
            else if ($zoneliv === 'Zaghouan') {
                $lat = 36.407907344248706; 
                $lon = 10.138826874872363;
                $livraison->setLat($lat);
                $livraison->setLon($lon);
            }
                $entityManager->persist($livraison);
                $entityManager->flush();
                return $this->redirectToRoute('app_livraison_new');
            }else {
                if ($zoneliv != $zone && $test1 == true){
                    $this->addFlash("error", "Ce livreur n'est pas affecté à cette zone !"); 
                }else if ($zoneliv == $zone && $test1 == false){
                    $this->addFlash("error", "Ce livreur n'est pas disponible a cette date!");
                }else{
                    $this->addFlash("error", "Ce livreur n'est pas affecté à cette zone et n'est pas disponible a cette date !"); 
                }
            }   
             /* fin test time */   
            


        }
        $nonLivraisons = $livraisonRepository->createQueryBuilder('l')
            ->andWhere('l.etatliv != :etat')
            ->setParameter('etat', 'Livrée')
            ->getQuery()
            ->getResult();

        $Livre = $livraisonRepository->findBy(['etatliv' => 'Livrée']);

        return $this->render('livraison/addeditlivraison.html.twig', [
            'formAddliv' => $form->createView(),
            'livraisons' => $nonLivraisons,
            'Livres' => $Livre,
        ]);
    }

    #[Route('/livraison/edit/{id}', name: 'app_livraison_edit')]

    public function editlivraison($id,EntityManagerInterface $em,LivraisonRepository $Lr,Request $req)
    {
       $livraison = $Lr->find($id);
       $form=$this->createForm(EditlivraisonType::class,$livraison);
       $form->handleRequest($req);
       if ($form->isSubmitted() && $form->isValid()){
        $em->persist($livraison);
        $em->flush();
        return $this->redirectToRoute('app_livraison_new');
       }
       return $this->render('livraison/editliv.html.twig', ['formAddliv'=>$form]);
    }


    #[Route('/livraison/suivif', name: 'app_livraison_suivif')]
    public function showlivf(LivraisonRepository $livraisonRepository,CommandeRepository $commandeRepository,EntityManagerInterface $em,SessionInterface $session)
    {
        $commande1 = new Commande();
        $email = $session->get('user_email');
        $commande1 = $commandeRepository->findBy(['mail' => $email]);
        foreach ($commande1 as $commande) {
            $idCommandes[] = $commande->getId();
        }

        $query = $em->createQuery(
            'SELECT l
            FROM App\Entity\Livraison l
            JOIN l.idcommande c
            WHERE c.id IN (:commandeIds)'
        );
        $query->setParameter('commandeIds', $idCommandes);
        
        $livraisons = $query->getResult();

        $res = $livraisonRepository->findBy(['id' => $livraisons]);
                
        return $this->render('livraison/showlivfront.html.twig', [
           'Livraisons' => $res
        ]);
    }
    #[Route('/livraison/livre/{id}', name: 'app_livraison_livre')]
    public function livree($id,EntityManagerInterface $em,LivraisonRepository $Lr)
    {
        $livraison = $Lr->find($id);

        
        // Change the status to 'Bani'
        $livraison->setEtatliv('Livrée');
        
        // Persist the changes
        $em->persist($livraison);
        $em->flush();
        
        return $this->redirectToRoute('app_livraison_new');
    }
    #[Route('/livraison/livree2/{id}', name: 'app_livraison_livree2')]
    public function livree2($id,EntityManagerInterface $em,LivraisonRepository $Lr)
    {
        $livraison = $Lr->find($id);

        // Change the status to 'Bani'
        $livraison->setEtatliv('Livrée');
        // Persist the changes
        $em->persist($livraison);
        $em->flush();
        return $this->redirectToRoute('app_livreur');
    }

    #[Route('/livraison/livreur/{id}', name: 'app_livraison_livreur')]
    public function listlivraison($id,LivraisonRepository $Lr ,LivreurRepository $lvr): Response
    {
        $livreur = $lvr->findOneBy(["id" =>$id]); 
        $idliv =  $livreur->getId();
    
        $nom =$livreur->getNom();
        $prenom =$livreur->getPrenom();
        $full = $nom . ' ' . $prenom;

        $listlivraison = $Lr->findBy(["idlivreur" =>$id]);

        $filteredLivraisons = array_filter($listlivraison, function ($livraison) {
            return $livraison->getEtatliv() !== 'Livrée';
        });

        return $this->render('livreur/afficherlivraison.html.twig', [
                'livraisonLivreur' => $filteredLivraisons,
                'nom' => $full,
                'idl' =>  $idliv,
        ]);
    }
    #[Route('/livraison/livreur/{id}/map', name: 'app_livraison_livreur_map')]
    public function maplivraison($id, LivraisonRepository $Lr, LivreurRepository $lvr): Response
    {
        $livreur = $lvr->findOneBy(["id" => $id]);
        $idliv =  $livreur->getId();
    
        $listlivraison = $Lr->findBy(["idlivreur" => $id]);
        $coordinates = []; // Initialize $coordinates here
    
        foreach ($listlivraison as $livraison) {
            $coordinates[] = [$livraison->getLat(), $livraison->getLon()];
        }
    
        $filteredLivraisons = array_filter($listlivraison, function ($livraison) {
            return $livraison->getEtatliv() !== 'Livrée';
        });
    
        return $this->render('map/Map.html.twig', [
            'coordinates' => $coordinates,
        ]);
    }
    #[Route('/livraison/livreur/historique/{id}', name: 'app_livraison_historique')]
    public function historiquelivraison($id,LivraisonRepository $Lr ,LivreurRepository $lvr): Response
    {
        $livreur = $lvr->findOneBy(["id" =>$id]); 
        $nom =$livreur->getNom();
        $prenom =$livreur->getPrenom();
        $full = $nom . ' ' . $prenom;

        $listlivraison = $Lr->findBy(["idlivreur" =>$id]);

        $filteredLivraisons = array_filter($listlivraison, function ($livraison) {
            return $livraison->getEtatliv() == 'Livrée';
        });

        return $this->render('livreur/afficherlivraisonhs.html.twig', [
                'livraisonLivreur' => $filteredLivraisons,
                'nom' => $full,
        ]);
    }
    #[Route('/livraison/recherche', name: 'app_livraison_recherche')]
    public function recherche2(LivraisonRepository $Lr, Request $request,EntityManagerInterface $entityManager): Response
    {
        $livraison = new Livraison();
        $form = $this->createForm(AddEditLivraisonType::class, $livraison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $selectedCommandes = $livraison->getIdcommande();

            foreach ($selectedCommandes as $commande) {
                $entityManager->persist($commande);
            }

            $entityManager->persist($livraison);
            $entityManager->flush();

            return $this->redirectToRoute('app_livraison_new');
        }
        // Extract the search term from the query parameters
        $searchTerm = $request->query->get('p', '');
        // Find offers filtered by titre
        $livraison = $Lr->findByzoneOrnumliv($searchTerm);

        $Livre = $Lr->findBy(['etatliv' => 'Livrée']);

        // Render your template with the filtered offers
        return $this->render('livraison/addeditlivraison.html.twig', [
            'formAddliv' => $form->createView(),
            'livraisons' => $livraison,
            'Livres' => $Livre,
        ]);
        
    }

    #[Route('/livraison/commentaire/{id}', name: 'app_livreur_commentaire')]
    public function ajoutercommentaire($id,EntityManagerInterface $em,Request $req,LivraisonRepository $lr)
    {   

       $res = $lr->findOneBy(["id" =>$id]); 
       $form=$this->createForm(CommentaireType::class);
       $form->handleRequest($req);
       if ($form->isSubmitted()) {
            $comm = $form->get('commentaire')->getData();
            $res->setCommentaire($comm);
            $em->persist($res);
            $em->flush();
        return $this->redirectToRoute('app_livraison_suivif');
       }

       $commentaire = $res->getCommentaire();
       return $this->render('livraison/Addcommentaire.html.twig', ['formAdd'=>$form,
            'comm' => $commentaire
        ]);

    
    }

    
    
}

