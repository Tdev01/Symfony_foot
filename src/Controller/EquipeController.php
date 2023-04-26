<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Equipe;
use App\Form\EquipeType;

class EquipeController extends AbstractController
{       
   #[Route("/addteam", name:"new_team")]
   public function newteam(Request $request)
   {
      $equipe = new Equipe();
      $form = $this->createForm(EquipeType::class, $equipe);
      $form->handleRequest($request);
      return $this->render('equipe/index.html.twig');
   }

    #[Route('/equipe', name: 'app_equipe')]
    public function index(): Response
    {
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }
}
