

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\clientDO.php');


class AccesClient{

public $acces;
//connexion à la BDD



//function pour récuperer les info des clients
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT nom, prenom,ddn,statut_matrimonial,nbEnfants,statutPro FROM client");

  $i=0;

  $tabClient = [];
  foreach ($res as $row) {
    $client = new Client;
    $client->$id_client = $row['id_client'];
    $util->$nom = $row['nom'];
    $util->$prenom = $row['prenom'];
    $tabClient[i] = $client;
    $i++;
  }

	return $res;
}

}
  ?>
