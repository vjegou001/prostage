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
        return $this->render('prostage_first/listForm.html.twig');
    }

    /**
     * @Route("/stage/{idStage}", name="Stage")
     */
    public function listeStage($idStage) 
    {
        return $this->render('prostage_first/listStage.html.twig',
        ['idStage' => $idStage]);
    }
    

}
