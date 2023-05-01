<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EquipeRepository;
use App\Entity\Equipe;
use App\Form\EquipeType;


class EquipeController extends AbstractController
{       
   #[Route("/addteam", name:"new_team")]
   public function index(Request $request, EntityManagerInterface $entityManager): Response
   {
       $equipe = new Equipe();
       $form = $this->createForm(EquipeType::class, $equipe);
       $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($equipe);
            $entityManager->flush();
        }

       return $this->render('equipe/index.html.twig', [
           'controller_name' => 'EquipeController',
           'form' => $form->createView(),
       ]);
   }

   #[Route('/equipe', name: 'app_equipe')]
   public function homeEquipe(): Response
   {
       return $this->render('equipe/index.html.twig', [
           'controller_name' => 'EquipeController',
        ]);
    }
    
    #[Route('/SelectEquipe', name: 'select_equipe')]
     public function showEquipe(Request $request, EquipeRepository $equipeRepository): Response
     {   
                 // ---------------//
         $equipe = $equipeRepository->findAll();
          return $this->render('equipe/SelectEquipe.index.html.twig',[
         'equipes' => $equipe,
         ]);
     }
}

$selectequipe = document.getelementbyid();
