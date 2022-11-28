<?php
//Création d'objet via INSTANCIATION
// Conversion d'un tableau en objet 


$ballonFoot= new stdClass();
$ballonFoot->type = "Football";
$ballonFoot->marque = "Nike";
$ballonFoot->taille = 5;
$ballonFoot->status = "crevé";

if(!property_exists($ballonFoot, "prix")){
    $ballonFoot->prix = 5;
    echo "Le ballon coute $ballonFoot->prix €";
}