<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TarifRepository")
 */
class Tarif
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
    private $designation;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixUnitaireFixe;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abonne", mappedBy="tarifs")
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

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getPrixUnitaireFixe(): ?int
    {
        return $this->prixUnitaireFixe;
    }

    public function setPrixUnitaireFixe(int $prixUnitaireFixe): self
    {
        $this->prixUnitaireFixe = $prixUnitaireFixe;

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
            $abonne->setTarifs($this);
        }

        return $this;
    }

    public function removeAbonne(Abonne $abonne): self
    {
        if ($this->abonnes->contains($abonne)) {
            $this->abonnes->removeElement($abonne);
            // set the owning side to null (unless already changed)
            if ($abonne->getTarifs() === $this) {
                $abonne->setTarifs(null);
            }
        }

        return $this;
    }
}
