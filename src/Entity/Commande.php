<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: CommandeRepository::class)]
#[ApiResource(
    normalizationContext: [ "groups" => ["read:commande"]]
)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["read:commande"])]
    private $id;

    #[ORM\Column(type: 'date')]
    #[Assert\Date]
    #[Groups(["read:commande"])]
    private $date;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2, nullable: true)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Assert\Positive]
    #[Groups(["read:commande"])]
    private $total;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La description doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La description doit faire maximum {{ limit }} caractere',
    )]
    #[Groups(["read:commande"])]
    private $statut;

    #[ORM\Column(type: 'integer')]
    #[Assert\Length(
        min: 5,
        max: 5,
        minMessage: 'La description doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La description doit faire maximum {{ limit }} caractere',
    )]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande"])]
    private $cpF;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande"])]
    private $villeF;


    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: Livraison::class)]
    #[Groups(["read:commande"])]
    private $livraisons;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: LigneDeCommande::class)]
    #[Groups(["read:commande"])]
    private $ligneDeCommandes;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(["read:commande"])]
    private $user;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande"])]
    private $adresseF;

    public function __construct()
    {
        $this->livraisons = new ArrayCollection();
        $this->ligneDeCommandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCpF(): ?int
    {
        return $this->cpF;
    }

    public function setCpF(int $cpF): self
    {
        $this->cpF = $cpF;

        return $this;
    }

    public function getVilleF(): ?string
    {
        return $this->villeF;
    }

    public function setVilleF(string $villeF): self
    {
        $this->villeF = $villeF;

        return $this;
    }

   
    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons[] = $livraison;
            $livraison->setCommande($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->livraisons->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getCommande() === $this) {
                $livraison->setCommande(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LigneDeCommande>
     */
    public function getLigneDeCommandes(): Collection
    {
        return $this->ligneDeCommandes;
    }

    public function addLigneDeCommande(LigneDeCommande $ligneDeCommande): self
    {
        if (!$this->ligneDeCommandes->contains($ligneDeCommande)) {
            $this->ligneDeCommandes[] = $ligneDeCommande;
            $ligneDeCommande->setCommande($this);
        }

        return $this;
    }

    public function removeLigneDeCommande(LigneDeCommande $ligneDeCommande): self
    {
        if ($this->ligneDeCommandes->removeElement($ligneDeCommande)) {
            // set the owning side to null (unless already changed)
            if ($ligneDeCommande->getCommande() === $this) {
                $ligneDeCommande->setCommande(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
    public function __toString()
    {
        return $this->id;
    }

    public function getAdresseF(): ?string
    {
        return $this->adresseF;
    }

    public function setAdresseF(string $adresseF): self
    {
        $this->adresseF = $adresseF;

        return $this;
    }
}
