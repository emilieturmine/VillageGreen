<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    private $date;

    #[ORM\Column(type: 'string', length: 255)]
    private $adresseL;

    #[ORM\Column(type: 'integer')]
    private $cpL;

    #[ORM\Column(type: 'string', length: 255)]
    private $villeL;

    #[ORM\ManyToOne(targetEntity: commande::class, inversedBy: 'livraisons')]
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAdresseL(): ?string
    {
        return $this->adresseL;
    }

    public function setAdresseL(string $adresseL): self
    {
        $this->adresseL = $adresseL;

        return $this;
    }

    public function getCpL(): ?int
    {
        return $this->cpL;
    }

    public function setCpL(int $cpL): self
    {
        $this->cpL = $cpL;

        return $this;
    }

    public function getVilleL(): ?string
    {
        return $this->villeL;
    }

    public function setVilleL(string $villeL): self
    {
        $this->villeL = $villeL;

        return $this;
    }

    public function getCommande(): ?commande
    {
        return $this->commande;
    }

    public function setCommande(?commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }
}