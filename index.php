<?php
//Création d'objet via CONVERSION
// Conversion d'un tableau en objet 

$tab["couleur"] = "bleu";
$tab["type"] = "plume";
$tab["prix"] = 5;

$stylo = (object) $tab;

var_dump($stylo);