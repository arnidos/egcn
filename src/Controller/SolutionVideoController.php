<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolutionVideoController extends AbstractController
{
    #[Route('/solution/video', name: 'video')]
    public function videoAction(): Response
    {
        return $this->render('video/index.html.twig', [
            'controller_name' => 'SolutionVideoController',
        ]);
    }
}
