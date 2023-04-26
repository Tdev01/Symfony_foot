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
   public function newTeam(Request $request)
   {
        $newteam = new Equipe();
        $form = $this->createForm(EquipeType::class, $newteam);
        $form->handleRequest($request);

   if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getManager();

      $newteam->setCreatedAt(new DateTime());

      $em->persist($newteam);
      $em->flush();

      $this->addFlash('success', 'votre équipe à  bien été crée !');
      return $this->redirectToRoute('home');
   }

   return $this->render('equipe/index.html.twig', [
      'formNewTeam' => $form->createView()
   ]);
}

    #[Route('/equipe', name: 'app_equipe')]
    public function index(): Response
    {
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }
}
