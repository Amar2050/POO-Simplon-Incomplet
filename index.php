<?php
//Création d'un class


// class Ballon {

//     public $marque;
//     public $sport;

//     function lancer($distance=null){
//         echo "Vous avez lancé le ballon à $distance métres";
//     }
// }


// //On instancie 2 types de ballons

// //-----------Ballon de foot-------------
// $ballonFoot = new Ballon(); // Instanciation
// $ballonFoot->marque = "Nike";
// $ballonFoot->sport = "FootBall";
// //-----------Ballon de foot-------------
// $ballonRugby = new Ballon();
// $ballonRugby->marque = "Gilbert TM";
// $ballonRugby->sport = "Rugby";

// // Actions sur les objets

// echo "Sport: $ballonFoot->sport <br> Marque: $ballonFoot->marque";
// echo "<br>";
// $ballonFoot->lancer(42);

// echo "<br><br><hr>";

// echo "Sport: $ballonRugby->sport <br> Marque: $ballonRugby->marque";
// $ballonRugby->lancer();


class User {
    public $nom;
    public $age;

    function tchater($message){
        echo " - " . $message;

    }
}

$michel = new User();
$michel->age = 49;
$michel->nom = "Michel";


//Une propriété dans un argument d'un méthode d'un objet instancié par une classe
$michel->tchater("$michel->nom: Salut les devs FULL-STEACK !" );