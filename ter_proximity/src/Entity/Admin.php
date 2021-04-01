<?php

namespace App\Entity;

use App\Repository\AdminRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRepository::class)
 */
class Admin
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
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity=Service::class, mappedBy="Admin")
     */
    private $services;

    /**
     * @ORM\OneToMany(targetEntity=TypeService::class, mappedBy="admin")
     */
    private $typeServices;

    public function __construct()
    {
        $this->services = new ArrayCollection();
        $this->typeServices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection|Service[]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(Service $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
            $service->setAdmin($this);
        }

        return $this;
    }

    public function removeService(Service $service): self
    {
        if ($this->services->removeElement($service)) {
            // set the owning side to null (unless already changed)
            if ($service->getAdmin() === $this) {
                $service->setAdmin(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TypeService[]
     */
    public function getTypeServices(): Collection
    {
        return $this->typeServices;
    }

    public function addTypeService(TypeService $typeService): self
    {
        if (!$this->typeServices->contains($typeService)) {
            $this->typeServices[] = $typeService;
            $typeService->setAdmin($this);
        }

        return $this;
    }

    public function removeTypeService(TypeService $typeService): self
    {
        if ($this->typeServices->removeElement($typeService)) {
            // set the owning side to null (unless already changed)
            if ($typeService->getAdmin() === $this) {
                $typeService->setAdmin(null);
            }
        }

        return $this;
    }

}
