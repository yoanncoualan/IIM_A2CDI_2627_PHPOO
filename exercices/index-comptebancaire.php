<?php

require_once './class/CompteBancaire.php';

$compte1 = new CompteBancaire('Jean Dupont', 1000);

echo '<h2>'. $compte1->getTitulaire() . '</h2>';
echo '<p>Solde : ' . $compte1->getSolde() . ' €</p>';

$compte1->crediter(500);

echo '<p>Solde après crédit : ' . $compte1->getSolde() . ' €</p>';

$compte1->debiter(200);

echo '<p>Solde après débit : ' . $compte1->getSolde() . ' €</p>';