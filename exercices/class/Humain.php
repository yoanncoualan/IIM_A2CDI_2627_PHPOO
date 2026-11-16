<?php

class Humain{
    use HorlogeTrait;

    public function heure()
    {
        return $this->afficherHeure(true);
    }
}