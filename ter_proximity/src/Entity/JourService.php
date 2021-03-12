<?php

namespace App\Entity;

use App\Repository\JourServiceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

/**
 * @ORM\Entity(repositoryClass=JourServiceRepository::class)
 */
class JourService
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $numJour;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureDebutAm;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureFinAm;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureDebutPm;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $heureFinPm;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumJour(): ?int
    {
        return $this->numJour;
    }

    public function setNumJour(int $numJour): self
    {
        $this->numJour = $numJour;

        return $this;
    }

    public function getHeureDebutAm(): ?\DateTimeInterface
    {
        return $this->heureDebutAm;
    }

    public function setHeureDebutAm(?\DateTimeInterface $heureDebutAm): self
    {
        $this->heureDebutAm = $heureDebutAm;

        return $this;
    }

    public function getHeureFinAm(): ?\DateTimeInterface
    {
        return $this->heureFinAm;
    }

    public function setHeureFinAm(?\DateTimeInterface $heureFinAm): self
    {
        $this->heureFinAm = $heureFinAm;

        return $this;
    }

    public function getHeureDebutPm(): ?\DateTimeInterface
    {
        return $this->heureDebutPm;
    }

    public function setHeureDebutPm(?\DateTimeInterface $heureDebutPm): self
    {
        $this->heureDebutPm = $heureDebutPm;

        return $this;
    }

    public function getHeureFinPm(): ?\DateTimeInterface
    {
        return $this->heureFinPm;
    }

    public function setHeureFinPm(?\DateTimeInterface $heureFinPm): self
    {
        $this->heureFinPm = $heureFinPm;

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

    
}
