<?php
//Création d'objet via INSTANCIATION
// Conversion d'un tableau en objet 


$ballonFoot= new stdClass();
$ballonFoot->type = "Football";
$ballonFoot->marque = "Nike";
$ballonFoot->taille = 5;
$ballonFoot->status = "crevé";

var_dump(get_declared_classes());