<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonneRepository")
 */
class Abonne
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $cin;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuCin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="integer")
     */
    private $referenceClient;

    /**
     * @ORM\Column(type="integer")
     */
    private $refEnc;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", inversedBy="abonnes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Tarif", inversedBy="abonnes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tarifs;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Compteur", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compteurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getDateCin(): ?\DateTimeInterface
    {
        return $this->dateCin;
    }

    public function setDateCin(\DateTimeInterface $dateCin): self
    {
        $this->dateCin = $dateCin;

        return $this;
    }

    public function getLieuCin(): ?string
    {
        return $this->lieuCin;
    }

    public function setLieuCin(string $lieuCin): self
    {
        $this->lieuCin = $lieuCin;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(?int $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getReferenceClient(): ?int
    {
        return $this->referenceClient;
    }

    public function setReferenceClient(int $referenceClient): self
    {
        $this->referenceClient = $referenceClient;

        return $this;
    }

    public function getRefEnc(): ?int
    {
        return $this->refEnc;
    }

    public function setRefEnc(int $refEnc): self
    {
        $this->refEnc = $refEnc;

        return $this;
    }

    public function getCategories(): ?Categorie
    {
        return $this->categories;
    }

    public function setCategories(?Categorie $categories): self
    {
        $this->categories = $categories;

        return $this;
    }

    public function getTarifs(): ?Tarif
    {
        return $this->tarifs;
    }

    public function setTarifs(?Tarif $tarifs): self
    {
        $this->tarifs = $tarifs;

        return $this;
    }

    public function getCompteurs(): ?Compteur
    {
        return $this->compteurs;
    }

    public function setCompteurs(Compteur $compteurs): self
    {
        $this->compteurs = $compteurs;

        return $this;
    }
}
