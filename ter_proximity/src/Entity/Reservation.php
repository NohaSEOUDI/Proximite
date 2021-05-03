<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 * @ORM\Table(name="reservation")
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    protected $dates = ['expired_at'];
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $valideeParFournisseur;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $jour;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heure;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $duree;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class)
     */
    private $service;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class)
     */
    private $fournisseur;

     /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(onDelete="CASCADE", nullable=true)
     */
    private $client;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $frais;

    /**
     * @ORM\Column(type="boolean", length=255,nullable=true)
     */
    private $estHonore;



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

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
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

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(?Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

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
    
    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(?int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getEstHonore(): ?bool
    {
        return $this->estHonore;
    }
    
    public function setEstHonore(bool $estHonore): self
    {
        $this->estHonore = $estHonore;

        return $this;
    }


}
