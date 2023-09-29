<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Commande;

class CommandeController extends AbstractController
{
    /**
     * @Route("/passer-commande", name="passer_commande")
     */
    public function passerCommande(): Response
    {
        // Créez une nouvelle commande
        $commande = new Commande();
        $commande->setNumeroCommande(uniqid()); // Génère un numéro de commande unique
        $commande->setDateCommande(new \DateTime());

        // Enregistrez la commande dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($commande);
        $entityManager->flush();

        // Envoyez un email de confirmation à l'utilisateur
        $this->envoyerEmailConfirmation($commande);

        // Redirigez l'utilisateur vers une page de confirmation de commande
        return $this->redirectToRoute('confirmation_commande', ['id' => $commande->getId()]);
    }

    /**
     * Cette méthode envoie un email de confirmation à l'utilisateur.
     * Vous devrez implémenter cette logique en fonction de vos besoins.
     */
    private function envoyerEmailConfirmation(Commande $commande): void
    {
        // Logique pour envoyer un email de confirmation
        // Utilisez SwiftMailer ou un autre service pour envoyer l'email
    }
}
