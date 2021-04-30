<?php

namespace App\Entity;

use App\Repository\VillesFranceFreeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VillesFranceFreeRepository::class)
 */
class VillesFranceFree
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $villeId;

    public function getVilleId(): ?int
    {
        return $this->villeId;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeNom;

    /**
     * @ORM\Column(type="date")
     */
    private $villeDate;

    /**
     * @return mixed
     */
    public function getVilleNom()
    {
        return $this->villeNom;
    }

    /**
     * @param mixed $villeNom
     */
    public function setVilleNom($villeNom): void
    {
        $this->villeNom = $villeNom;
    }

    /**
     * @return mixed
     */
    public function getVilleDate()
    {
        return $this->villeDate;
    }

    /**
     * @param mixed $villeDate
     */
    public function setVilleDate($villeDate): void
    {
        $this->villeDate = $villeDate;
    }

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeDepartement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeSlug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeNomSimple;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeNomReel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeNomSoundex;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeNomMetaphone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeCodePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeCommune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeCodeCommune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeArrondissement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villeCanton;

    /**
     * @ORM\Column(type="integer")
     */
    private $villeAmdi;


    /**
     * @return mixed
     */
    public function getVilleDepartement()
    {
        return $this->villeDepartement;
    }

    /**
     * @param mixed $villeDepartement
     */
    public function setVilleDepartement($villeDepartement): void
    {
        $this->villeDepartement = $villeDepartement;
    }

    /**
     * @return mixed
     */
    public function getVilleSlug()
    {
        return $this->villeSlug;
    }

    /**
     * @param mixed $villeSlug
     */
    public function setVilleSlug($villeSlug): void
    {
        $this->villeSlug = $villeSlug;
    }

    /**
     * @return mixed
     */
    public function getVilleNomSimple()
    {
        return $this->villeNomSimple;
    }

    /**
     * @param mixed $villeNomSimple
     */
    public function setVilleNomSimple($villeNomSimple): void
    {
        $this->villeNomSimple = $villeNomSimple;
    }

    /**
     * @return mixed
     */
    public function getVilleNomReel()
    {
        return $this->villeNomReel;
    }

    /**
     * @param mixed $villeNomReel
     */
    public function setVilleNomReel($villeNomReel): void
    {
        $this->villeNomReel = $villeNomReel;
    }

    /**
     * @return mixed
     */
    public function getVilleNomSoundex()
    {
        return $this->villeNomSoundex;
    }

    /**
     * @param mixed $villeNomSoundex
     */
    public function setVilleNomSoundex($villeNomSoundex): void
    {
        $this->villeNomSoundex = $villeNomSoundex;
    }

    /**
     * @return mixed
     */
    public function getVilleNomMetaphone()
    {
        return $this->villeNomMetaphone;
    }

    /**
     * @param mixed $villeNomMetaphone
     */
    public function setVilleNomMetaphone($villeNomMetaphone): void
    {
        $this->villeNomMetaphone = $villeNomMetaphone;
    }

    /**
     * @return mixed
     */
    public function getVilleCodePostal()
    {
        return $this->villeCodePostal;
    }

    /**
     * @param mixed $villeCodePostal
     */
    public function setVilleCodePostal($villeCodePostal): void
    {
        $this->villeCodePostal = $villeCodePostal;
    }

    /**
     * @return mixed
     */
    public function getVilleCommune()
    {
        return $this->villeCommune;
    }

    /**
     * @param mixed $villeCommune
     */
    public function setVilleCommune($villeCommune): void
    {
        $this->villeCommune = $villeCommune;
    }

    /**
     * @return mixed
     */
    public function getVilleCodeCommune()
    {
        return $this->villeCodeCommune;
    }

    /**
     * @param mixed $villeCodeCommune
     */
    public function setVilleCodeCommune($villeCodeCommune): void
    {
        $this->villeCodeCommune = $villeCodeCommune;
    }

    /**
     * @return mixed
     */
    public function getVilleArrondissement()
    {
        return $this->villeArrondissement;
    }

    /**
     * @param mixed $villeArrondissement
     */
    public function setVilleArrondissement($villeArrondissement): void
    {
        $this->villeArrondissement = $villeArrondissement;
    }

    /**
     * @return mixed
     */
    public function getVilleCanton()
    {
        return $this->villeCanton;
    }

    /**
     * @param mixed $villeCanton
     */
    public function setVilleCanton($villeCanton): void
    {
        $this->villeCanton = $villeCanton;
    }

    /**
     * @return mixed
     */
    public function getVilleAmdi()
    {
        return $this->villeAmdi;
    }

    /**
     * @param mixed $villeAmdi
     */
    public function setVilleAmdi($villeAmdi): void
    {
        $this->villeAmdi = $villeAmdi;
    }



}
