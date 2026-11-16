<?php

class CompteBancaire{
    public function __construct(
        private string $titulaire,
        private float $solde = 0
    ){}

    public function setTitulaire(string $value): self
    {
        $this->titulaire = $value;
        return $this;
    }
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function setSolde(float $value): self
    {
        $this->solde = $value;
        return $this;
    }
    public function getSolde(): float
    {
        return $this->solde;
    }

    public function crediter(float $montant): self
    {
        $this->solde += $montant;
        return $this;
    }
    public function debiter(float $montant): self
    {
        $this->solde -= $montant;
        return $this;
    }
}