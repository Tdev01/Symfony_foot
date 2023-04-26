<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\JoueurRepository;
use App\Entity\Joueur;

class JoueurController extends AbstractController
{
    #[Route('/addjoueur', name: 'new_joueur')]
    public function newplayer(): Response
    {   
        return $this->render('joueur/index.html.twig', [
            'controller_name' => 'JoueurController',
        ]);
    }

    #[Route('/joueur', name: 'show_joueur')]
    public function showJoueur(Request $request, JoueurRepository $joueurRepository): Response
    {   

                // ---------------//
        $joueur = $joueurRepository->findAll();
         return $this->render('joueur/index.html.twig',[
        'joueurs' => $joueur,
        ]);
    }


}
