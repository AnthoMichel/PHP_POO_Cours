<?php


class Verre {
    public $nom;
    public $materiaux;
    public $contenu;

    function __construct($nom, $materiaux, $contenu){

        $this->nom = $nom;
        $this->materiaux = $materiaux;
        $this->contenu = $contenu;
    }

}

$goblet= new Verre("gobelet", "plastique", "eau");

var_dump($goblet);

$fut= new Verre("fût", "chêne", "biere");

var_dump($fut);