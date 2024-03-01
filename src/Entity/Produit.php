<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
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
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]
    #[Assert\Length(
        min: 3,
        minMessage:"le nom doit faire au moins 3 caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ marque ne peut pas être vide.")]
    #[Assert\Length(
        min: 2,
        minMessage:"le nom doit faire au moins 2 caractères"
    )]
    private ?string $marque = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"Le champ prix ne peut pas être vide.")]
    #[Assert\Positive(message:"Le champ prix ne peut pas être négatif.")]
    private ?float $prix = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ etat ne peut pas être vide.")]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ image ne peut pas être vide.")]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ type ne peut pas être vide.")]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ taille ne peut pas être vide.")]
    private ?string $taille = null;

    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy: 'produits')]
    private Collection $commandes;

    public function __construct()
    {
        $this->commandes = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): static
    {
        $this->marque = $marque;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        $this->commandes->removeElement($commande);

        return $this;
    }
    
}
