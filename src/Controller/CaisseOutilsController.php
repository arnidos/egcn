<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CaisseOutilsController extends AbstractController
{
    #[Route('/caisse/outils', name: 'outils')]
    public function outilsAction(): Response
    {
        return new Response('Page d\'outils de caisse');
    }
}
