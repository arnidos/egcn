<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SolutionTitresRestaurantController extends AbstractController
{
    #[Route('/solution/titres/restaurant', name: 'titres_restaurant')]
    public function titresRestaurantAction(): Response
    {
        return $this->render('titres_restaurant/index.html.twig', [
            'controller_name' => 'SolutionTitresRestaurantController',
        ]);
    }
}
