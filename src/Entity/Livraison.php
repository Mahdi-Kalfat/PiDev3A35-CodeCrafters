<?php

namespace App\Entity;

use App\Repository\LivraisonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivraisonRepository::class)]
class Livraison
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $numliv = null;

    #[ORM\Column(length: 255)]
    private ?string $contenuliv = null;

    #[ORM\Column(length: 255)]
    private ?string $zoneliv = null;

    #[ORM\Column(length: 255)]
    private ?string $dateliv = null;

    #[ORM\Column(length: 255)]
    private ?string $idlivreur = null;

    #[ORM\Column(length: 255)]
    private ?string $etatliv = null;

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

    public function getContenuliv(): ?string
    {
        return $this->contenuliv;
    }

    public function setContenuliv(string $contenuliv): static
    {
        $this->contenuliv = $contenuliv;

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

    public function getDateliv(): ?string
    {
        return $this->dateliv;
    }

    public function setDateliv(string $dateliv): static
    {
        $this->dateliv = $dateliv;

        return $this;
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

    public function getEtatliv(): ?string
    {
        return $this->etatliv;
    }

    public function setEtatliv(string $etatliv): static
    {
        $this->etatliv = $etatliv;

        return $this;
    }
}
