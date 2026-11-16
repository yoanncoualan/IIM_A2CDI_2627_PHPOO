<?php

trait HorlogeTrait {
  public function afficherHeure(bool $isHuman): string
  {
    date_default_timezone_set('Europe/Paris');
    if($isHuman) {
      return date('H:i:s') . "\n";
    } 
    return time() . "\n";
  }
}