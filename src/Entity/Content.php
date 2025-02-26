<?php

namespace App\Entity;

use App\Repository\ContentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContentRepository::class)]
class Content
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'contents')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Tutoriel $tutoriel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTutoriel(): ?Tutoriel
    {
        return $this->tutoriel;
    }

    public function setTutoriel(?Tutoriel $tutoriel): static
    {
        $this->tutoriel = $tutoriel;

        return $this;
    }
}
