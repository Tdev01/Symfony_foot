<?php

namespace App\Entity;

use App\Repository\CaracteristiqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaracteristiqueRepository::class)]
class Caracteristique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $vitesse = null;

    #[ORM\Column]
    private ?int $dribble = null;

    #[ORM\Column]
    private ?int $tir = null;

    #[ORM\Column]
    private ?int $renommee = null;

    #[ORM\Column]
    private ?int $salaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getDribble(): ?int
    {
        return $this->dribble;
    }

    public function setDribble(int $dribble): self
    {
        $this->dribble = $dribble;

        return $this;
    }

    public function getTir(): ?int
    {
        return $this->tir;
    }

    public function setTir(int $tir): self
    {
        $this->tir = $tir;

        return $this;
    }

    public function getRenommee(): ?int
    {
        return $this->renommee;
    }

    public function setRenommee(int $renommee): self
    {
        $this->renommee = $renommee;

        return $this;
    }

    public function getSalaire(): ?int
    {
        return $this->salaire;
    }

    public function setSalaire(int $salaire): self
    {
        $this->salaire = $salaire;

        return $this;
    }
}
