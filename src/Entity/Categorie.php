<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelleCategorie;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonne", mappedBy="categories")
     */
    private $abonnes;

    public function __construct()
    {
        $this->abonnes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleCategorie(): ?string
    {
        return $this->libelleCategorie;
    }

    public function setLibelleCategorie(string $libelleCategorie): self
    {
        $this->libelleCategorie = $libelleCategorie;

        return $this;
    }

    /**
     * @return Collection|Abonne[]
     */
    public function getAbonnes(): Collection
    {
        return $this->abonnes;
    }

    public function addAbonne(Abonne $abonne): self
    {
        if (!$this->abonnes->contains($abonne)) {
            $this->abonnes[] = $abonne;
            $abonne->setCategories($this);
        }

        return $this;
    }

    public function removeAbonne(Abonne $abonne): self
    {
        if ($this->abonnes->contains($abonne)) {
            $this->abonnes->removeElement($abonne);
            // set the owning side to null (unless already changed)
            if ($abonne->getCategories() === $this) {
                $abonne->setCategories(null);
            }
        }

        return $this;
    }
}
