<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
 */
class Facture
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
    private $numeroFacture;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEdition;

    /**
     * @ORM\Column(type="date")
     */
    private $datePresentation;

    /**
     * @ORM\Column(type="date")
     */
    private $dateLimitePaiement;

    /**
     * @ORM\Column(type="integer")
     */
    private $consommationTotale;

    /**
     * @ORM\Column(type="integer")
     */
    private $netAPayer;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Abonne", inversedBy="factures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $abonnes;

    /**
     * @ORM\Column(type="integer")
     */
    private $nouvelIndex;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroFacture(): ?int
    {
        return $this->numeroFacture;
    }

    public function setNumeroFacture(int $numeroFacture): self
    {
        $this->numeroFacture = $numeroFacture;

        return $this;
    }

    public function getDateEdition(): ?\DateTimeInterface
    {
        return $this->dateEdition;
    }

    public function setDateEdition(\DateTimeInterface $dateEdition): self
    {
        $this->dateEdition = $dateEdition;

        return $this;
    }

    public function getDatePresentation(): ?\DateTimeInterface
    {
        return $this->datePresentation;
    }

    public function setDatePresentation(\DateTimeInterface $datePresentation): self
    {
        $this->datePresentation = $datePresentation;

        return $this;
    }

    public function getDateLimitePaiement(): ?\DateTimeInterface
    {
        return $this->dateLimitePaiement;
    }

    public function setDateLimitePaiement(\DateTimeInterface $dateLimitePaiement): self
    {
        $this->dateLimitePaiement = $dateLimitePaiement;

        return $this;
    }

    public function getConsommationTotale(): ?int
    {
        return $this->consommationTotale;
    }

    public function setConsommationTotale(int $consommationTotale): self
    {
        $this->consommationTotale = $consommationTotale;

        return $this;
    }

    public function getNetAPayer(): ?int
    {
        return $this->netAPayer;
    }

    public function setNetAPayer(int $netAPayer): self
    {
        $this->netAPayer = $netAPayer;

        return $this;
    }

    public function getAbonnes(): ?Abonne
    {
        return $this->abonnes;
    }

    public function setAbonnes(?Abonne $abonnes): self
    {
        $this->abonnes = $abonnes;

        return $this;
    }

    public function getNouvelIndex(): ?int
    {
        return $this->nouvelIndex;
    }

    public function setNouvelIndex(int $nouvelIndex): self
    {
        $this->nouvelIndex = $nouvelIndex;

        return $this;
    }
}
