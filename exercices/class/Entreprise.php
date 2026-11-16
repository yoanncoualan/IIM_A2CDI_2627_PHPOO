<?php

class Entreprise{
    private $employes = [];

    public function addEmploye(EmployeInterface $employe): self
    {
        $this->employes[] = $employe;
        return $this;
    }

    public function getMasseSalariale(): float
    {
        $masseSalariale = 0;
        foreach($this->employes as $employe){
            $masseSalariale += $employe->getSalaire();
        }
        return $masseSalariale;
    }
}