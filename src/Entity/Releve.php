<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReleveRepository")
 */
class Releve
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
    private $nouvelIndex;

    /**
     * @ORM\Column(type="date")
     */
    private $dateReleve;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateReleve(): ?\DateTimeInterface
    {
        return $this->dateReleve;
    }

    public function setDateReleve(\DateTimeInterface $dateReleve): self
    {
        $this->dateReleve = $dateReleve;

        return $this;
    }
}
