<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Stage;
use App\Entity\Entreprise;
use App\Entity\Formation;


class ProstageFirstController extends AbstractController
{
    /**
     * @Route("/", name="prostage")
     */
    public function index()
    {
        $listeStages = $this->getDoctrine()->getRepository(Stage::class)->findAll();
        
        return $this->render('prostage_first/index.html.twig', [
            "listeStages" => $listeStages,
        ]);
    }

    /**
     * @Route("/listEnt", name="entreprises")
     */
    public function entreprises()
    {
        $listeEntreprises = $this->getDoctrine()->getRepository(Entreprise::class)->findAll();
        
        return $this->render('prostage_first/listEnt.html.twig', [
            "listeEntreprises" => $listeEntreprises,
        ]);
    }

    /**
     * @Route("/entreprise/{id}", name="entStages")
     */
    public function entStages($id)
    {
        $entreprise = $this->getDoctrine()->getRepository(Entreprise::class)->find($id);
        
        return $this->render('prostage_first/entStages.html.twig', [
            "entreprise" => $entreprise,
        ]);
    }

    /**
     * @Route("/formations", name="formations")
     */
    public function formations()
    {
        $listeFormations = $this->getDoctrine()->getRepository(Formation::class)->findBy(array(), array('type' => 'ASC'));
        
        return $this->render('prostage_first/listForm.html.twig', [
            "listeFormations" => $listeFormations,
        ]);
    }

    /**
     * @Route("/formation/{id}", name="formation_stages")
     */
    public function formation_stages($id)
    {
        $formation = $this->getDoctrine()->getRepository(Formation::class)->find($id);

        $listeStages = $this->getDoctrine()->getRepository(Stage::class)->findById($formation->getStages()->getValues());
        
        return $this->render('prostage_first/formStages.html.twig', [
            "formation" => $formation,
            "listeStages" => $listeStages,
        ]);
    }

    /**
     * @Route("/stages/{id}", name="stages")
     */
    public function stages(int $id)
    {
        $stage = $this->getDoctrine()->getRepository(Stage::class)->find($id);
        return $this->render('prostage_first/listStage.html.twig', [
            'stage' => $stage,
        ]);
    }
}
