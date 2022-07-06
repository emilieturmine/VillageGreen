<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date', nullable: true)]
    #[Assert\Date]
    private $date;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    private $adresseL;

    #[ORM\Column(type: 'integer')]
    #[Assert\Length(
        min: 5,
        max: 5,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    private $cpL;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    
    private $villeL;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'livraisons')]
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
