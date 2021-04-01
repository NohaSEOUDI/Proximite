<?php

namespace App\Entity;

use App\Repository\CalendrierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CalendrierRepository::class)
 */
class Calendrier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Service::class, cascade={"persist", "remove"})
     */
    private $service;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $lundiDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $lundiFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $mardiDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $mardiFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $mercrediDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $mercrediFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $jeudiDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $jeudiFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $vendrediDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $vendrediFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $samediDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $samediFin;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $dimancheDebut;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $dimancheFin;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLundiDebut(): ?\DateTimeInterface
    {
        return $this->lundiDebut;
    }

    public function setLundiDebut(?\DateTimeInterface $lundiDebut): self
    {
        $this->lundiDebut = $lundiDebut;

        return $this;
    }

    public function getLundiFin(): ?\DateTimeInterface
    {
        return $this->lundiFin;
    }

    public function setLundiFin(?\DateTimeInterface $lundiFin): self
    {
        $this->lundiFin = $lundiFin;

        return $this;
    }

    public function getMardiDebut(): ?\DateTimeInterface
    {
        return $this->mardiDebut;
    }

    public function setMardiDebut(?\DateTimeInterface $mardiDebut): self
    {
        $this->mardiDebut = $mardiDebut;

        return $this;
    }

    public function getMardiFin(): ?\DateTimeInterface
    {
        return $this->mardiFin;
    }

    public function setMardiFin(?\DateTimeInterface $mardiFin): self
    {
        $this->mardiFin = $mardiFin;

        return $this;
    }

    public function getMercrediDebut(): ?\DateTimeInterface
    {
        return $this->mercrediDebut;
    }

    public function setMercrediDebut(?\DateTimeInterface $mercrediDebut): self
    {
        $this->mercrediDebut = $mercrediDebut;

        return $this;
    }

    public function getMercrediFin(): ?\DateTimeInterface
    {
        return $this->mercrediFin;
    }

    public function setMercrediFin(?\DateTimeInterface $mercrediFin): self
    {
        $this->mercrediFin = $mercrediFin;

        return $this;
    }

    public function getJeudiDebut(): ?\DateTimeInterface
    {
        return $this->jeudiDebut;
    }

    public function setJeudiDebut(?\DateTimeInterface $jeudiDebut): self
    {
        $this->jeudiDebut = $jeudiDebut;

        return $this;
    }

    public function getJeudiFin(): ?\DateTimeInterface
    {
        return $this->jeudiFin;
    }

    public function setJeudiFin(?\DateTimeInterface $jeudiFin): self
    {
        $this->jeudiFin = $jeudiFin;

        return $this;
    }

    public function getVendrediDebut(): ?\DateTimeInterface
    {
        return $this->vendrediDebut;
    }

    public function setVendrediDebut(?\DateTimeInterface $vendrediDebut): self
    {
        $this->vendrediDebut = $vendrediDebut;

        return $this;
    }

    public function getVendrediFin(): ?\DateTimeInterface
    {
        return $this->vendrediFin;
    }

    public function setVendrediFin(?\DateTimeInterface $vendrediFin): self
    {
        $this->vendrediFin = $vendrediFin;

        return $this;
    }

    public function getSamediDebut(): ?\DateTimeInterface
    {
        return $this->samediDebut;
    }

    public function setSamediDebut(?\DateTimeInterface $samediDebut): self
    {
        $this->samediDebut = $samediDebut;

        return $this;
    }

    public function getSamediFin(): ?\DateTimeInterface
    {
        return $this->samediFin;
    }

    public function setSamediFin(?\DateTimeInterface $samediFin): self
    {
        $this->samediFin = $samediFin;

        return $this;
    }

    public function getDimancheDebut(): ?\DateTimeInterface
    {
        return $this->dimancheDebut;
    }

    public function setDimancheDebut(?\DateTimeInterface $dimancheDebut): self
    {
        $this->dimancheDebut = $dimancheDebut;

        return $this;
    }

    public function getDimancheFin(): ?\DateTimeInterface
    {
        return $this->dimancheFin;
    }

    public function setDimancheFin(?\DateTimeInterface $dimancheFin): self
    {
        $this->dimancheFin = $dimancheFin;

        return $this;
    }
}
