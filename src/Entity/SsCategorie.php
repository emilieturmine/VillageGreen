<?php

namespace App\Entity;

use App\Repository\SsCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: SsCategorieRepository::class)]
#[ApiResource()]
class SsCategorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["read:categorie"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(['read:liste', "read:categorie"])]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(["read:categorie"])]
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
