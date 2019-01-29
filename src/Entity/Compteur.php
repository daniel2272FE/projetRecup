<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompteurRepository")
 */
class Compteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numCompteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $serie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeCompteur;

    /**
     * @ORM\Column(type="integer")
     */
    private $indexCompteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCompteur(): ?int
    {
        return $this->numCompteur;
    }

    public function setNumCompteur(int $numCompteur): self
    {
        $this->numCompteur = $numCompteur;

        return $this;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(?string $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getTypeCompteur(): ?string
    {
        return $this->typeCompteur;
    }

    public function setTypeCompteur(?string $typeCompteur): self
    {
        $this->typeCompteur = $typeCompteur;

        return $this;
    }

    public function getIndexCompteur(): ?int
    {
        return $this->indexCompteur;
    }

    public function setIndexCompteur(int $indexCompteur): self
    {
        $this->indexCompteur = $indexCompteur;

        return $this;
    }
}
