<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le champ Num Liv ne peut pas être vide.")]
    #[Assert\Regex(
    pattern: "/^Livraison N°\d{4}$/",
    message: "Num Liv  doit être au format Livraison N° suivi de 4 chiffres (Ex : Livraison N°1234)."
)]
    private ?string $numliv = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ Zone Livraison ne peut pas être vide.")]
    #[Assert\Regex(
        pattern :"/^[a-zA-Z\s]+$/",
        message : "La Zone de Livraison ne doit pas contenir de chiffres ou de symboles"
    )]
    private ?string $zoneliv = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ Date Livraison ne peut pas être vide.")]
    
    private ?DateTime $dateliv = null;

    #[ORM\Column(length: 255)]
    private ?string $etatliv = null;

    #[ORM\ManyToOne(inversedBy: 'livraisons')]
    private ?Livreur $idlivreur = null;

    #[ORM\Column()]
    private ?float $lat = null;

    #[ORM\Column()]
    private ?float $lon = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy: 'livraisons')]
    private Collection $idcommande;

    public function __construct()
    {
        $this->idcommande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumliv(): ?string
    {
        return $this->numliv;
    }

    public function setNumliv(string $numliv): static
    {
        $this->numliv = $numliv;

        return $this;
    }

    

    public function getZoneliv(): ?string
    {
        return $this->zoneliv;
    }

    public function setZoneliv(string $zoneliv): static
    {
        $this->zoneliv = $zoneliv;

        return $this;
    }

    public function getDateliv(): ?DateTime
    {
        return $this->dateliv;
    }

    public function setDateliv(DateTime $dateliv): static
    {
        $this->dateliv = $dateliv;

        return $this;
    }


    public function getEtatliv(): ?string
    {
        return $this->etatliv;
    }

    public function setEtatliv(string $etatliv): static
    {
        $this->etatliv = $etatliv;

        return $this;
    }

    public function getIdlivreur(): ?Livreur
    {
        return $this->idlivreur;
    }

    public function setIdlivreur(?Livreur $idlivreur): static
    {
        $this->idlivreur = $idlivreur;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): static
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): static
    {
        $this->lon = $lon;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getIdcommande(): Collection
    {
        return $this->idcommande;
    }

    public function addIdcommande(Commande $idcommande): static
    {
        if (!$this->idcommande->contains($idcommande)) {
            $this->idcommande->add($idcommande);
        }

        return $this;
    }

    public function removeIdcommande(Commande $idcommande): static
    {
        $this->idcommande->removeElement($idcommande);

        return $this;
    }

}
