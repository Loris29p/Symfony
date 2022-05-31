<?php

namespace App\Entity;

use App\Repository\LigneFraisForfaitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFraisForfaitRepository::class)]
class LigneFraisForfait
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'ligneFraisForfaits')]
    private $idVisiteur;

    #[ORM\ManyToOne(targetEntity: FraisForfait::class, inversedBy: 'ligneFraisForfaits')]
    private $idFraisForfait;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

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

    public function getIdFraisForfait(): ?FraisForfait
    {
        return $this->idFraisForfait;
    }

    public function setIdFraisForfait(?FraisForfait $idFraisForfait): self
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }
}
