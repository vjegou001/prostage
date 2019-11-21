<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProstageFirstController extends AbstractController
{
    /**
     * @Route("/", name="prostage_first")
     */
    public function index()
    {
        //return new Response("<h1>accueil</h1>");
        return $this->render('prostage_first/index.html.twig', [
            'controller_name' => 'ProstageFirstConroller'
        ]);
    }

    /**
     * @Route("/entreprise", name="listeEntreprise")
     */
    public function listEntreprise() 
    {
        return new Response("<h1>Voici la liste des entreprises</h1>");
    }

    /**
     * @Route("/formation", name="listeformation")
     */
    public function listformation() 
    {
        return new Response("<h1>Voici la liste des formations</h1>");
    }

    /**
     * @Route("/stage/{id}", name="listeStage")
     */
    public function listeStage(int $id) 
    {
        return new Response("<h1>Voici le stage $id</h1>");
    }
    

}
