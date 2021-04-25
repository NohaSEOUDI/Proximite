<?php

namespace App\Entity;

use App\Repository\NotesRepository;

// use Doctrine\Common\Collections\ArrayCollection;
// use Doctrine\Common\Collections\Collection;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 */
class Notes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class)
     */
    private $fournisseur;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $client;

    /**
     * @ORM\Column(type="integer")
     */
    private $problemeRDV;

    /**
     * @ORM\Column(type="integer")
     */
    private $prixService;

    /**
     * @ORM\Column(type="integer")
     */
    private $niveauSatisfaction;

    /**
     * @ORM\Column(type="integer")
     */
    private $utiliszerService;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getProblemeRDV(): ?int
    {
        return $this->problemeRDV;
    }

    public function setProblemeRDV(int $problemeRDV): self
    {
        $this->problemeRDV = $problemeRDV;

        return $this;
    }

    public function getPrixService(): ?int
    {
        return $this->prixService;
    }

    public function setPrixService(bool $prixService): self
    {
        $this->prixService = $prixService;

        return $this;
    }

    public function getNiveauSatisfaction(): ?int
    {
        return $this->niveauSatisfaction;
    }

    public function setNiveauSatisfaction(int $niveauSatisfaction): self
    {
        $this->niveauSatisfaction = $niveauSatisfaction;

        return $this;
    }

    public function getUtiliszerService(): ?int
    {
        return $this->utiliszerService;
    }

    public function setUtiliszerService(int $utiliszerService): self
    {
        $this->utiliszerService = $utiliszerService;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }


    public function __toString()
    {   

        return (string)$this->getId();
    }

}
