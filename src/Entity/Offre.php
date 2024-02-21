<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;
#[ORM\Entity(repositoryClass: OffreRepository::class)]
class Offre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ titre ne peut pas être vide.")]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?String $dated = null;

    #[ORM\Column(length: 255)]
    private ?String $datef = null;

    #[ORM\Column(length: 255)]
    private ?string $poucentage = null;
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\ManyToOne(inversedBy: 'offres')]
    private ?TypeOffre $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getType(): ?TypeOffre
    {
        return $this->type;
    }

    public function setType(?TypeOffre $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDateD(): ?String
    {
        return $this->dated;
    }

    public function setDateD(String $dated): static
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDateF(): ?String
    {
        return $this->datef;
    }

    public function setDateF(String $datef): static
    {
        $this->datef = $datef;

        return $this;
    }

    public function getPoucentage(): ?string
    {
        return $this->poucentage;
    }

    public function setPoucentage(string $poucentage): static
    {
        $this->poucentage = $poucentage;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }  
   
}
