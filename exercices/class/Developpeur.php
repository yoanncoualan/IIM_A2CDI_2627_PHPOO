<?php

class Developpeur implements EmployeInterface {
    private string $travail = "Tapoter sur un clavier";
    private float $salaire = 2000;

    public function __construct(
        string $travail,
        ?float $salaire
    )
    {
        $this->travail = $travail;
        $this->salaire = $salaire;
    }

    public function travailler(): string
    {
        return $this->travail;
    }
    public function getSalaire(): float
    {
        return $this->salaire;
    }
}