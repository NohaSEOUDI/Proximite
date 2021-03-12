<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
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
    private $valideParAdmin;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $titre;

    /**
     * @ORM\Column(type="integer")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $creneauBase;

    /**
     * @ORM\Column(type="float")
     */
    private $tarif;

    /**
     * @ORM\OneToOne(targetEntity=Fournisseur::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=TypeService::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValideParAdmin(): ?bool
    {
        return $this->valideParAdmin;
    }

    public function setValideParAdmin(?bool $valideParAdmin): self
    {
        $this->valideParAdmin = $valideParAdmin;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTelephone(): ?int
    {
        return $this->telephone;
    }

    public function setTelephone(int $telephone): self
    {
        $this->telephone = $telephone;

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

    public function getCreneauBase(): ?int
    {
        return $this->creneauBase;
    }

    public function setCreneauBase(int $creneauBase): self
    {
        $this->creneauBase = $creneauBase;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getFournisseur(): ?Fournisseur
    {
        return $this->fournisseur;
    }

    public function setFournisseur(Fournisseur $fournisseur): self
    {
        $this->fournisseur = $fournisseur;

        return $this;
    }

    public function getType(): ?TypeService
    {
        return $this->type;
    }

    public function setType(?TypeService $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function __toString()
    {
        return $this->getId();
    }
}
