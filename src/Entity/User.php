<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
#[ApiResource(
    normalizationContext: [ "groups" => ["read:commande","read:client"]]
)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(["read:commande","read:client"])]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[Assert\Email(
        message: 'Votre adresse {{ value }} est invalide.',
    )]
    #[Groups(["read:commande","read:client"])]
    private $email;

    #[ORM\Column(type: 'json')]
    #[Assert\Json(
        message: "Cette donnée n'est pas connue"
    )]
    #[Groups(["read:commande","read:client"])]
    private $roles;

    #[ORM\Column(type: 'string')]
    #[Groups(["read:commande","read:client"])]
       private $password;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $pseudo;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $adresse;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $cp;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
    #[Groups(["read:commande","read:client"])]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Positive]
    #[Groups(["read:commande","read:client"])]
    private $coefficient;

    #[Groups(["read:commande","read:client"])]
    private $commercial;

    
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Commande::class, orphanRemoval: true)]
    
    private $commandes;

    #[ORM\Column(type: 'boolean')]
    
    private $isVerified = false;

    public function __construct()
    { 
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCoefficient(): ?string
    {
        return $this->coefficient;
    }

    public function setCoefficient(string $coefficient): self
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    public function getCommercial(): ?self
    {
        return $this->commercial;
    }

    public function setCommercial(?self $commercial): self
    {
        $this->commercial = $commercial;

        return $this;
    }

   
    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes[] = $commande;
            $commande->setUser($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getUser() === $this) {
                $commande->setUser(null);
            }
        }

        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
}
