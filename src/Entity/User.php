<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ nom ne peut pas être vide.")]
    #[Assert\Regex(
        pattern :"/^[a-zA-Z\s]+$/",
        message : "Le nom ne doit pas contenir de chiffres ou de symboles"
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ prenom ne peut pas être vide.")]
    #[Assert\Regex(
        pattern :"/^[a-zA-Z\s]+$/",
        message : "Le prenom ne doit pas contenir de chiffres ou de symboles"
    )]  
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ NumTel ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "Le numéro de téléphone doit contenir exactement 8 chiffres."
    )]
    private ?int $num = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ prenom ne peut pas être vide.")]
    #[Assert\Regex(
        pattern :"/^[a-zA-Z\s]+$/",
        message : "Le prenom ne doit pas contenir de chiffres ou de symboles"
    )]  
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $stat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ prenom ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-Z0-9._]+@[a-z]+\.[a-zA-Z]{2,}$/",
        message: "Veuillez entrer une adresse email valide."
    )]
    private ?string $mail = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ mot de passe ne peut pas être vide.")]
    #[Assert\Length(
        min: 8,
        minMessage: "Le mot de passe doit contenir au moins {{ limit }} caractères.",
    )]
    #[Assert\Regex(
        pattern: "/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*()_+]).+$/",
        message: "Le mot de passe doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial."
    )]
    private ?string $mdp = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ Image ne peut pas être vide.")]
    private ?string $image = null;

    #[ORM\Column(type: 'boolean')]
    private $is_enabled = false;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $token = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $resetToken = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNum(): ?int
    {
        return $this->num;
    }

    public function setNum(int $num): static
    {
        $this->num = $num;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getStat(): ?string
    {
        return $this->stat;
    }

    public function setStat(string $stat): static
    {
        $this->stat = $stat;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): static
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
    public function getPassword(): ?string
    {
        return $this->mdp;
    }
    public function getRoles(): array
    {
        // You can return an empty array if you don't have role-based access control
        return [];
    }

    public function getUserIdentifier(): string
    {
        return $this->mail;
    }

    public function eraseCredentials()
    {
        // You can leave this method empty if you don't have sensitive data to erase
    }

    public function getIsEnabled(): ?bool
    {
        return $this->is_enabled;
    }

    public function setIsEnabled(bool $is_enabled)
    {
        $this->is_enabled = $is_enabled;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): static
    {
        $this->token = $token;

        return $this;
    }
    public function getResetToken(): ?string
    {
        return $this->resetToken;
    }

    public function setResetToken(?string $resetToken): static
    {
        $this->resetToken = $resetToken;

        return $this;
    }
}