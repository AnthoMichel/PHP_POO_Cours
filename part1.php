<?php

// // Conversion d'un tableau en objet
// $tab["couleur"] = "bleu";
// $tab["type"] = "plume";
// $tab["prix"] = 5;

// $stylo = (object) $tab;
// // var_dump aussi comme un array

// var_dump($stylo);


// Création d'un objet par instanciation

$ballonFoot = new stdClass;
$ballonFoot->type="Football";
$ballonFoot->marque="Nike";
$ballonFoot->taille=5;
$ballonFoot->status="crevé";

echo "hey le ballon de $ballonFoot->type. $ballonFoot->marque est $ballonFoot->status, Ismaël !";



