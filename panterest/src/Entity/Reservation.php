<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valideeParFournisseur;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $jour;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heure;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $duree;

    /**
<<<<<<< HEAD
     * @ORM\ManyToOne(targetEntity=Service::class)
=======
     * @ORM\OneToOne(targetEntity=Service::class, cascade={"persist", "remove"})
>>>>>>> 787ebf79c5180ec671e6a0c4757ba29d328c8338
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class)
     */
    private $fournisseur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValideeParFournisseur(): ?bool
    {
        return $this->valideeParFournisseur;
    }

    public function setValideeParFournisseur(?bool $valideeParFournisseur): self
    {
        $this->valideeParFournisseur = $valideeParFournisseur;

        return $this;
    }

    public function getJour(): ?\DateTimeInterface
    {
        return $this->jour;
    }

    public function setJour(?\DateTimeInterface $jour): self
    {
        $this->jour = $jour;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(?\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(?\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }
}
