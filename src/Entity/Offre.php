<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\DateTime;


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
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]
    #[ORM\Column(type: 'date')]
    #[Assert\LessThan(propertyPath: "datef", message: "La date de début doit être anférieure à la date de fin.")]
    private ?\DateTimeInterface $dated = null;

    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]
    #[ORM\Column(type: 'date')]
    
    private ?\DateTimeInterface $datef = null;
    #[Assert\NotBlank(message:"Le champ pourcentage ne peut pas être vide.")]
   #[ Assert\Type(type: "numeric", message: "Le champ pourcentage doit être numérique.")]

    #[ORM\Column(length: 255)]
    private ?string $poucentage = null;
    #[Assert\NotBlank(message:"Le champ pourcentage ne peut pas être vide.")]
    
    #[ORM\Column(length: 255)]
    private ?string $description = null;
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Le champ image ne peut pas être vide.")]
    private ?string $image = null;
    #[Assert\NotBlank(message:"Le champ description ne peut pas être vide.")]
    #[ORM\ManyToOne(inversedBy: 'offres')]
    private ?TypeOffre $type = null;
    #[ORM\Column]
    private int $likes = 0;

    #[ORM\Column]
    private int $dislikes = 0;

    public function getLikes(): ?int {
        return $this->likes;
    }

    public function setLikes(int $likes): self {
        $this->likes = $likes;
        return $this;
    }

    public function getDislikes(): ?int {
        return $this->dislikes;
    }

    public function setDislikes(int $dislikes): self {
        $this->dislikes = $dislikes;
        return $this;
    }

    public function like(): self {
        $this->likes++;
        return $this;
    }

    public function dislike(): self {
        $this->dislikes++;
        return $this;
    }
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

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dated;
    }

    public function setDateD(\DateTimeInterface $dated): static
    {
        $this->dated = $dated;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->datef;
    }


    public function setDateF(\DateTimeInterface $datef): static
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
