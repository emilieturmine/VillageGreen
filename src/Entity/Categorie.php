<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use App\Repository\SsCategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    private $nom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    private $photo;

    #[ORM\OneToMany(mappedBy: 'catParent', targetEntity: SsCategorie::class, orphanRemoval: true)]
    private $ssCategories;

    public function __construct()
    {
       
        $this->produits = new ArrayCollection();
        $this->ssCategories = new ArrayCollection();
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

    /**
     * @return Collection<int, SsCategorie>
     */
    public function getSsCategories(): Collection
    {
        return $this->ssCategories;
    }

    public function addSsCategory(SsCategorie $ssCategory): self
    {
        if (!$this->ssCategories->contains($ssCategory)) {
            $this->ssCategories[] = $ssCategory;
            $ssCategory->setCatParent($this);
        }

        return $this;
    }

    public function removeSsCategory(SsCategorie $ssCategory): self
    {
        if ($this->ssCategories->removeElement($ssCategory)) {
            // set the owning side to null (unless already changed)
            if ($ssCategory->getCatParent() === $this) {
                $ssCategory->setCatParent(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }
}
