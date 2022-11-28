<?php
//Création d'objet via INSTANCIATION
// Conversion d'un tableau en objet 


$ballonFoot= new stdClass();
$ballonFoot->type = "Football";
$ballonFoot->marque = "Nike";
$ballonFoot->taille = 5;
$ballonFoot->status = "crevé";

// var_dump($ballonFoot);

echo "- Hey le ballon de $ballonFoot->type, $ballonFoot->marque est $ballonFoot->status, Ismaël ! <br><br>
    - C'était un taille $ballonFoot->taille, Isaac c'est ça ? ";
