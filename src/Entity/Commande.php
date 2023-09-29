<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mode_de_paiement = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_de_livraison = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModeDePaiement(): ?string
    {
        return $this->mode_de_paiement;
    }

    public function setModeDePaiement(string $mode_de_paiement): static
    {
        $this->mode_de_paiement = $mode_de_paiement;

        return $this;
    }

    public function getAdresseDeLivraison(): ?string
    {
        return $this->adresse_de_livraison;
    }

    public function setAdresseDeLivraison(string $adresse_de_livraison): static
    {
        $this->adresse_de_livraison = $adresse_de_livraison;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
