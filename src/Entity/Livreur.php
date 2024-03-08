<?php

namespace App\Entity;

use App\Repository\LivreurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\UX\Turbo\Attribute\Broadcast;
use Symfony\Component\Validator\Constraints as Assert;



#[ORM\Entity(repositoryClass: LivreurRepository::class)]
#[Broadcast]
class Livreur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ IdLivreur ne peut pas être vide.")]
    #[Assert\Regex(
    pattern: "/^LIV\d{4}$/",
    message: "IdLivreur doit être au format LIV suivi de 4 chiffres (Ex : LIV1234)."
)]

    private ?string $idlivreur = null;

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
    #[Assert\NotBlank(message:"Le champ Email ne peut pas être vide.")]
    #[Assert\Email(
        message: "L'email '{{ value }}' n'est pas valide."
    )]
    
    private ?string $email = null;

    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ NumTel ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "Le numéro de téléphone doit contenir exactement 8 chiffres."
    )]
    private ?int $numtel = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $zonelivraison = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ Image ne peut pas être vide.")]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    #[ORM\OneToMany(targetEntity: Livraison::class, mappedBy: 'idlivreur')]
    private Collection $livraisons;

    public function __construct()
    {
        $this->livraisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdlivreur(): ?string
    {
        return $this->idlivreur;
    }

    public function setIdlivreur(string $idlivreur): static
    {
        $this->idlivreur = $idlivreur;

        return $this;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(int $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getVehicule(): ?string
    {
        return $this->vehicule;
    }

    public function setVehicule(string $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getZonelivraison(): ?string
    {
        return $this->zonelivraison;
    }

    public function setZonelivraison(string $zonelivraison): static
    {
        $this->zonelivraison = $zonelivraison;

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

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraisons(): Collection
    {
        return $this->livraisons;
    }

    public function addLivraison(Livraison $livraison): static
    {
        if (!$this->livraisons->contains($livraison)) {
            $this->livraisons->add($livraison);
            $livraison->setIdlivreur($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): static
    {
        if ($this->livraisons->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getIdlivreur() === $this) {
                $livraison->setIdlivreur(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->idlivreur; // Remplacez par le champ approprié que vous souhaitez afficher
    }

}
