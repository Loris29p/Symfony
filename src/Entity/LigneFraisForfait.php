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

    #[ORM\ManyToOne(targetEntity: FicheFrais::class, inversedBy: 'ligneFraisForfaits')]
    private $fiche_frais;

    #[ORM\ManyToOne(targetEntity: FraisForfait::class, inversedBy: 'ligneFraisForfaits')]
    private $frais_forfais;

    #[ORM\Column(type: 'integer')]
    private $quantite;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\Column(type: 'integer')]
    private $montant;

    #[ORM\Column(type: 'string', length: 100)]
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFicheFrais(): ?FicheFrais
    {
        return $this->fiche_frais;
    }

    public function setFicheFrais(?FicheFrais $fiche_frais): self
    {
        $this->fiche_frais = $fiche_frais;

        return $this;
    }

    public function getFraisForfais(): ?FraisForfait
    {
        return $this->frais_forfais;
    }

    public function setFraisForfais(?FraisForfait $frais_forfais): self
    {
        $this->frais_forfais = $frais_forfais;

        return $this;
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
}
