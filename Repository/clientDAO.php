

<?php

require_once('accesBDD.php');
require_once('Entity\clientDO.php');

use AccesBDD;

class AccesClient{

public $acces
//connexion à la BDD
$acces = new AccesBDD;


//function pour récuperer les info des clients
 function recupererClient() {
	$this = $acces-> connectionBdd();
	$res = $this-> $conn->query("SELECT nom, prenom,ddn,statut_matrimonial,nbEnfants,statutPro FROM client");

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
