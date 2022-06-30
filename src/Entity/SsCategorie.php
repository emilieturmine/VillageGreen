<?php

namespace App\Entity;

use App\Repository\SsCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: SsCategorieRepository::class)]
class SsCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
   
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

   
    private $photo;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'ssCategories')]
    #[ORM\JoinColumn(nullable: false)]
    private $catParent;

    #[ORM\OneToMany(mappedBy: 'ssCategorie', targetEntity: Produit::class)]
    private $produits;

    public function __construct()
    {
        $this->produits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getCatParent(): ?Categorie
    {
        return $this->catParent;
    }

    public function setCatParent(?Categorie $catParent): self
    {
        $this->catParent = $catParent;

        return $this;
    }

    /**
     * @return Collection<int, Produit>
     */
    public function getProduits(): Collection
    {
        return $this->produits;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produits->contains($produit)) {
            $this->produits[] = $produit;
            $produit->setSsCategorie($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produits->removeElement($produit)) {
            // set the owning side to null (unless already changed)
            if ($produit->getSsCategorie() === $this) {
                $produit->setSsCategorie(null);
            }
        }

        return $this;
    }
}
