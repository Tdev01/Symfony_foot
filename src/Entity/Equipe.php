<?php

namespace App\Entity;

use App\Repository\EquipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipeRepository::class)]
class Equipe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column]
    private ?int $budget = null;

    #[ORM\Column(length: 255)]
    private ?int $renommee = null;

    // public function __construct($nom, $ville, $budget,$renommee){
        
    //     $this->nom = $nom;
    //     $this->ville = $ville;
    //     $this->budget = $budget;
    //     $this->renommee = $renommee;
    // }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

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
}
