<?php

class Designer implements EmployeInterface {
    private string $travail = "Faire des ronds";
    private float $salaire = 1500;

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