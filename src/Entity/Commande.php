<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $idcommande = null;

    #[ORM\Column(length: 255)]
    private ?string $nbrprod = null;

    #[ORM\Column(length: 255)]
    private ?string $prixcommande = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\ManyToMany(targetEntity: Livraison::class, mappedBy: 'idcommande')]
    private Collection $livraisons;

    public function __construct()
    {
        $this->livraisons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdcommande(): ?string
    {
        return $this->idcommande;
    }

    public function setIdcommande(string $idcommande): static
    {
        $this->idcommande = $idcommande;

        return $this;
    }

    public function getNbrprod(): ?string
    {
        return $this->nbrprod;
    }

    public function setNbrprod(string $nbrprod): static
    {
        $this->nbrprod = $nbrprod;

        return $this;
    }

    public function getPrixcommande(): ?string
    {
        return $this->prixcommande;
    }

    public function setPrixcommande(string $prixcommande): static
    {
        $this->prixcommande = $prixcommande;

        return $this;
    }
    public function __toString()
    {
        return $this->idcommande; // Remplacez par le champ approprié que vous souhaitez afficher
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
            $livraison->addIdcommande($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): static
    {
        if ($this->livraisons->removeElement($livraison)) {
            $livraison->removeIdcommande($this);
        }

        return $this;
    }

}
