<?php

namespace App\Entity;

use App\Repository\PriseRdvRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PriseRdvRepository::class)
 * @ORM\Table(name="rdv")
 */
class PriseRdv
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailClient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailF;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     */
    private $heure;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeService;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMailClient(): ?string
    {
        return $this->mailClient;
    }

    public function setMailClient(string $mailClient): self
    {
        $this->mailClient = $mailClient;

        return $this;
    }

    public function getNomF(): ?string
    {
        return $this->NomF;
    }

    public function setNomF(string $NomF): self
    {
        $this->NomF = $NomF;

        return $this;
    }

    public function getPrenomF(): ?string
    {
        return $this->PrenomF;
    }

    public function setPrenomF(string $PrenomF): self
    {
        $this->PrenomF = $PrenomF;

        return $this;
    }

    public function getMailF(): ?string
    {
        return $this->mailF;
    }

    public function setMailF(string $mailF): self
    {
        $this->mailF = $mailF;

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

    public function getHeure(): ?int
    {
        return $this->heure;
    }

    public function setHeure(int $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getTypeService(): ?string
    {
        return $this->typeService;
    }

    public function setTypeService(string $typeS): self
    {
        $this->typeService=$typeS;
        return $this;
    }
}
