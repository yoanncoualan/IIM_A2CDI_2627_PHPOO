<?php

require_once './trait/HorlogeTrait.php';
require_once './class/Humain.php';
require_once './class/Robot.php';

$humain = new Humain();
echo 'Humain : '.$humain->heure();
echo '<br>';
$robot = new Robot();
echo 'Robot : '.$robot->heure();