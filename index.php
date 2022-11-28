<?php
//Création d'un class


class Ballon {

    public $marque;
    public $sport;

    function lancer(){
        echo "Vous avez lancé le ballon !";
    }
}


//On instancie 2 types de ballons

//-----------Ballon de foot-------------
$ballonFoot = new Ballon(); // Instanciation
$ballonFoot->marque = "Nike";
$ballonFoot->sport = "FootBall";
//-----------Ballon de foot-------------
$ballonRugby = new Ballon();
$ballonRugby->marque = "Gilbert TM";
$ballonRugby->sport = "Rugby";

// Actions sur les objets

echo "Sport: $ballonFoot->sport <br> Marque: $ballonFoot->marque";
echo "<br>";
$ballonFoot->lancer();

echo "<br><br><hr>";

echo "Sport: $ballonRugby->sport <br> Marque: $ballonRugby->marque";
