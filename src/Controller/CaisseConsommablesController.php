<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CaisseConsommablesController extends AbstractController
{
    #[Route('/caisse/consommables', name: 'consommables')]
    public function consommablesAction(): Response
    {
        $data = ['message' => 'Liste des consommables'];
        return $this->json($data);
    }
}
