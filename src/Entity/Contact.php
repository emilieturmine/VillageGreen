<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
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
  
    private $Nom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
  
    private $Prenom;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Email(
        message: 'votre adresse {{ value }} est invalide.',
    )]
    private $Email;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
  
    private $sujet;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: 'La reference doit faire minimum {{ limit }} caractere ',
        maxMessage: 'La reference doit faire maximum {{ limit }} caractere',
    )]

    #[Assert\NotBlank(message: 'La valeur ne peut rester null')]
  
    private $contenu;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }
}
