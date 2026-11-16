<?php
// Import de la class Produit
require_once './class/Produit.php';
require_once './class/ProduitPhysique.php';
 
// Création d'un objet 'livre' de type 'Produit'
$livre = new Produit('Nom du livre', null, 100, 10);

echo $livre;

$livre2 = new Produit('Nom du livre 2', null, 50, 15);

echo $livre2;

$chaise = new ProduitPhysique('Chaise', 'Chaise en bois', 20, 50, 5);
echo $chaise;