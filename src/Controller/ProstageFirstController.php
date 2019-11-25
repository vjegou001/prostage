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
        return $this->render('prostage_first/index.html.twig');
    }

    /**
     * @Route("/entreprise", name="listeEntreprise")
     */
    public function listEntreprise() 
    {
        return $this->render('prostage_first/listEnt.html.twig');
    }

    /**
     * @Route("/formation", name="listeFormation")
     */
    public function listFormation() 
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
