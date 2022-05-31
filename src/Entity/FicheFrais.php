<?php

namespace App\Entity;

use App\Repository\FicheFraisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FicheFraisRepository::class)]
class FicheFrais
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $nbJustificatif;

    #[ORM\Column(type: 'float')]
    private $montantValide;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ficheFrais')]
    private $idVisiteur;

    #[ORM\ManyToOne(targetEntity: Etat::class, inversedBy: 'ficheFrais')]
    private $Etat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbJustificatif(): ?int
    {
        return $this->nbJustificatif;
    }

    public function setNbJustificatif(int $nbJustificatif): self
    {
        $this->nbJustificatif = $nbJustificatif;

        return $this;
    }

    public function getMontantValide(): ?float
    {
        return $this->montantValide;
    }

    public function setMontantValide(float $montantValide): self
    {
        $this->montantValide = $montantValide;

        return $this;
    }

    public function getIdVisiteur(): ?User
    {
        return $this->idVisiteur;
    }

    public function setIdVisiteur(?User $idVisiteur): self
    {
        $this->idVisiteur = $idVisiteur;

        return $this;
    }

    public function getEtat(): ?Etat
    {
        return $this->Etat;
    }

    public function setEtat(?Etat $Etat): self
    {
        $this->Etat = $Etat;

        return $this;
    }
}
