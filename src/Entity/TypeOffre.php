<?php

namespace App\Entity;

use App\Repository\TypeOffreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TypeOffreRepository::class)]
class TypeOffre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank(message:"Le champ titre ne peut pas être vide.")]
    #[ORM\Column(length: 255)]
    private ?string $nomOffre = null;

    #[ORM\OneToMany(targetEntity: Offre::class, mappedBy: 'type', cascade: [])]
    private Collection $offres;
    

    public function __construct()
    {
        $this->offres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomOffre(): ?string
    {
        return $this->nomOffre;
    }

    public function setNomOffre(string $nomOffre): static
    {
        $this->nomOffre = $nomOffre;

        return $this;
    }

    /**
     * @return Collection<int, Offre>
     */
    public function getOffres(): Collection
    {
        return $this->offres;
    }

    public function addOffre(Offre $offre): static
    {
        if (!$this->offres->contains($offre)) {
            $this->offres->add($offre);
            $offre->setType($this);
        }

        return $this;
    }

    public function removeOffre(Offre $offre): static
    {
        if ($this->offres->removeElement($offre)) {
            // set the owning side to null (unless already changed)
            if ($offre->getType() === $this) {
                $offre->setType(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->nomOffre; // Remplacez par le champ approprié que vous souhaitez afficher
    }
}
