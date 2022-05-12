<?php


class database {
    public $db; //database
    public $appart;


    function __construct(){

        $this->db= new PDO('mysql:host=localhost;dbname=immo', "root",""); //Connexion a la BDD

    }

    function statusBDD(){
        var_dump($this->db->getAttribute(PDO::ATTR_CONNECTION_STATUS));
    }

    function fletchAll(){
        $req  = $this->db->prepare("SELECT * FROM logement"); // la requete pour tout recuperer (SELECT *) de la table logement (FROM)
        $req->execute(); 
        $this->appart = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

    }
    function create($titre,$adresse,$ville,$cp,$surface,$prix,$photo,$type,$description){
        $req = "INSERT INTO logement (titre,adresse,ville,cp,surface,prix,photo,type,description) VALUES         
                         (:titre, 
                         :adresse,
                         :ville,
                         :cp,
                         :surface,
                         :prix,
                         :photo,
                         :type,
                         :description)";
            
             $stmt = $this->db->prepare($req);
             $stmt->bindValue(":titre",$titre, PDO::PARAM_STR);
             $stmt->bindValue(":adresse",$adresse, PDO::PARAM_STR);
             $stmt->bindValue(":ville",$ville, PDO::PARAM_STR);
             $stmt->bindValue(":cp",$cp, PDO::PARAM_INT);
             $stmt->bindValue(":surface",$surface, PDO::PARAM_INT);
             $stmt->bindValue(":prix",$prix, PDO::PARAM_INT);
             $stmt->bindValue(":photo",$photo, PDO::PARAM_STR);
             $stmt->bindValue(":type",$type, PDO::PARAM_STR);
             $stmt->bindValue(":description",$description, PDO::PARAM_STR);
             $stmt->execute();
             $stmt->closeCursor();
    }

}

$ds = new database;

$ds->statusBDD();
$ds->fletchAll();

var_dump($ds->appart);

