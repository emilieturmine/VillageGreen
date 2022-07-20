<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read:liste'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(['read:liste'])]
    private $reference;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(['read:liste'])]
    private $libelle;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La description doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La description doit faire maximum {{ limit }} caractere',
    )]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    private $description;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Assert\Positive]
    #[Groups(['read:liste'])]
    private $prixUnitaire;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photo;

    #[ORM\Column(type: 'integer')]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Assert\PositiveOrZero]
    #[Groups(['read:liste'])]
    private $stock;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Assert\Positive]
    private $tva;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Assert\Positive]
    private $prixAchat;

    #[ORM\ManyToOne(targetEntity: Fournisseur::class, inversedBy: 'produits')]
    #[Groups(['read:liste'])]
    private $fournisseur;


    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photo2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $photo3;

    #[ORM\ManyToOne(targetEntity: SsCategorie::class, inversedBy: 'produits')]
    #[Groups(['read:liste'])]
    private $ssCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixUnitaire(): ?string
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(string $prixUnitaire): self
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getTva(): ?string
    {
        return $this->tva;
    }

    public function setTva(string $tva): self
    {
        $this->tva = $tva;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(string $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getFournisseur(): ?fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

   

    public function getPhoto2(): ?string
    {
        return $this->photo2;
    }

    public function setPhoto2(?string $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?string
    {
        return $this->photo3;
    }

    public function setPhoto3(?string $photo3): self
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getSsCategorie(): ?SsCategorie
    {
        return $this->ssCategorie;
    }

    public function setSsCategorie(?SsCategorie $ssCategorie): self
    {
        $this->ssCategorie = $ssCategorie;

        return $this;
    }
}
