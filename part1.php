<?php

// // Conversion d'un tableau en objet
// $tab["couleur"] = "bleu";
// $tab["type"] = "plume";
// $tab["prix"] = 5;

// $stylo = (object) $tab;
// // var_dump aussi comme un array

// var_dump($stylo);


// Création d'un objet par instanciation

// $ballonFoot = new stdClass;
// $ballonFoot->type="Football";
// $ballonFoot->marque="Nike";
// $ballonFoot->taille=5;
// $ballonFoot->status="crevé";

// echo "hey le ballon de $ballonFoot->type. $ballonFoot->marque est $ballonFoot->status, Ismaël !";



//----------------------Fonctions OBJETS

// if (!property_exists($ballonFoot,'prix')) {
//     $ballonFoot->prix=5;
//     echo "Le ballon coute $ballonFoot->prix €";
// }
// var_dump(get_declared_classes());

// ------------------------

//Créer une classe

//------V1-----------
// class Ballon {
//     public $marque;
//     public $sport;

//     function lancer() {
//         echo "Vous avez lancé le ballon ! <br>";
//     }

// };


// //------------Ballon de foot---------------
// $ballonFoot = new Ballon();
// $ballonFoot->marque = "Nike";
// $ballonFoot->sport = "footBall";
//  //-----------Ballon de Rugby-----------------
//  $ballonRugby =new Ballon();
// $ballonRugby->marque = "Gilbert TM";
// $ballonRugby->sport = "Rugby";

// // ------------------ACTION sur les objets--------------

// echo "Sport: $ballonFoot->sport <br> Marque: $ballonFoot->marque";
// echo "<br>";
// $ballonFoot->lancer();

// echo "<br><br><hr>";
// echo "Sport: $ballonRugby->sport <br> Marque : $ballonRugby->marque";

