<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string",length=255,nullable=true)
     */
    private $ville;
    /**
     * @ORM\ManyToOne(targetEntity=TypeService::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $type;

    /**
     * @ORM\OneToOne(targetEntity=Fournisseur::class, cascade={"persist", "remove"})
     */
    private $fournisseur;

  

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

        return (string)$this->getId();
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

    public function getVille(): ?string
    {
        return $this->ville;
    }

   
    public function setVille(string $ville): self
    {
        $this->ville = $ville;
    }
    
}
