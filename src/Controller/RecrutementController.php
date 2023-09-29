<?php

namespace App\Controller;

use App\Entity\OffreEmploi;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecrutementController extends AbstractController
{
    #[Route('/recrutement', name: 'recrutement')]
    public function recrutementAction(): Response
    {
        return $this->render('contact/recrutement.html.twig', [
            'controller_name' => 'RecrutementController',
        ]);
    }
}
