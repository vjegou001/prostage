<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProstageFirstController extends AbstractController
{
    /**
     * @Route("/prostage/first", name="prostage_first")
     */
    public function index()
    {
        return $this->render('prostage_first/index.html.twig', [
            'controller_name' => 'ProstageFirstController',
        ]);
    }
}
