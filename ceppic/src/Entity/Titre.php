<?php

namespace App\Entity;

use App\Repository\TitreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TitreRepository::class)]
class Titre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $discription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiscription(): ?string
    {
        return $this->discription;
    }

    public function setDiscription(string $discription): self
    {
        $this->discription = $discription;

        return $this;
    }
}
