<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\DateTimeValidator;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 * @ORM\Table(name="Reservations")
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
     *
     * @ORM\ManyToOne(targetEntity=Service::class)
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=false)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class)
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=false)
     */
    private $fournisseur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $frais;

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
    {   //$newDate = DateTime::createFromFormat("l dS F Y", $dateFromDB);
        //$newDate = $newDate->format('d/m/Y');
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

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): self
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

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(?int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }
}
