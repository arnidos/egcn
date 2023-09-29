<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartialsController extends AbstractController
{
    #[Route('/partials', name: 'partials')]
    public function index(): Response
    {
        return $this->render('partials/index.html.twig', [
            'controller_name' => 'PartialsController',
        ]);
    }
}
