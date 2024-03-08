<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IAProfilController extends AbstractController
{
    #[Route('/ia/profil', name: 'app_i_a_profil')]
    public function index(): Response
    {
        return $this->render('ia_profil/index.html.twig', [
            'controller_name' => 'IAProfilController',
        ]);
    }
    
    #[Route('/ia/download-image/{imageName}', name: 'download_image')]
    public function downloadImage($imageName,Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager)
    {
       
        
        return $this->redirectToRoute('copy_image', ['imageName' => $imageName]);
    }

    #[Route('/ia/copy-image/{imageName}', name: 'copy_image')]
public function copyImage($imageName,UserRepository $userRepository,EntityManagerInterface $entityManager)

{
    $imageNameAsInt = intval($imageName);
    $imageNameAsIntall = $imageNameAsInt + 1;
    $imageNameAsString = strval($imageNameAsIntall);
    $imageNameAsStringfinal = $imageNameAsString . '.jpg';
    
    $user = new User(); 
    $user->setImage($imageNameAsStringfinal);
    $entityManager->persist($user);
    $entityManager->flush();

    

    var_dump($imageNameAsStringfinal);

    $sourceDirectory = 'C:\\Users\\mehdi\\Downloads\\' .  $imageNameAsStringfinal;
    $destinationPath = 'C:\Users\mehdi\OneDrive\Desktop\projet_mahdi\projet_wetek\public\imguser\\' .  $imageNameAsStringfinal . '.jpg';
    var_dump($imageName);
    var_dump($sourceDirectory);
    var_dump($destinationPath);

    if (file_exists($sourceDirectory)) {
        $filesystem = new Filesystem();
        $filesystem->copy($sourceDirectory, $destinationPath);

        return new Response('Image copied successfully', Response::HTTP_OK);
    } else {
        return new Response('Image not found', Response::HTTP_NOT_FOUND);
    }

        
       

}

}