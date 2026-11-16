<?php

class Robot{
    use HorlogeTrait;

    public function heure()
    {
        return $this->afficherHeure(false);
    }
}