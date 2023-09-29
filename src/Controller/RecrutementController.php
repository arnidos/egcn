<?php

namespace App\Controller;

use App\Entity\OffreEmploi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecrutementController extends AbstractController
{
    #[Route('/recrutement', name: 'recrutement')]
    public function recrutementAction()
    {
        // Récupère la liste des offres d'emploi
        $offresEmploi = $this->em->getRepository(OffreEmploi::class)->findAll();

        // Retourne la liste des offres d'emploi
        return $this->render('recrutement/index.html.twig', [
            'offresEmploi' => $offresEmploi,
        ]);
    }
}
