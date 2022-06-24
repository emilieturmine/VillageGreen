<?php

namespace App\Entity;

use App\Repository\LigneDeCommandeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LigneDeCommandeRepository::class)]
class LigneDeCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    #[Assert\Positive]
    private $quantite;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\Positive]
    private $prixVente;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    #[Assert\Positive]
    private $totalLigne;

    #[ORM\OneToOne(targetEntity: Produit::class, cascade: ['persist', 'remove'])]
    private $produit;

    #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: 'ligneDeCommandes')]
    private $commande;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixVente(): ?string
    {
        return $this->prixVente;
    }

    public function setPrixVente(string $prixVente): self
    {
        $this->prixVente = $prixVente;

        return $this;
    }

    public function getTotalLigne(): ?string
    {
        return $this->totalLigne;
    }

    public function setTotalLigne(?string $totalLigne): self
    {
        $this->totalLigne = $totalLigne;

        return $this;
    }

    public function getProduit(): ?produit
    {
        return $this->produit;
    }

    public function setProduit(?produit $produit): self
    {
        $this->produit = $produit;

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
