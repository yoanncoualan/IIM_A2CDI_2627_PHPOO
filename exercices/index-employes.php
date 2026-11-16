<?php

require_once './interface/EmployeInterface.php';
require_once './class/Developpeur.php';
require_once './class/Designer.php';
require_once './class/Entreprise.php';

$entreprise = new Entreprise();

$developpeur = new Developpeur("Tapoter sur un clavier", 2000);
$entreprise->addEmploye($developpeur);

$designer = new Designer("Faire des ronds", 1000);
$entreprise->addEmploye($designer);

echo "Masse salariale : " . $entreprise->getMasseSalariale() . "€\n";
