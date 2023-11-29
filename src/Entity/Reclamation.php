<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $reclamation = null;

    #[ORM\Column(length: 255)]
    private ?string $member = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getReclamation(): ?string
    {
        return $this->reclamation;
    }

    public function setReclamation(string $reclamation): static
    {
        $this->reclamation = $reclamation;

        return $this;
    }

    public function getMember(): ?string
    {
        return $this->member;
    }

    public function setMember(string $member): static
    {
        $this->member = $member;

        return $this;
    }
}
