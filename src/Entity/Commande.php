<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="commandes")
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $numeroCommande;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCommande;

    // ... d'autres propriétés telles que les articles, les quantités, les adresses, etc.

    // Getters et Setters pour chaque propriété

    // Vous pouvez également ajouter des méthodes pour calculer le total, générer un numéro de commande unique, etc.
}
