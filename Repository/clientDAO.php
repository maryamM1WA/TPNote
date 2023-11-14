

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\clientDO.php');


class AccesClient{

public $acces;

//function pour récuperer les info des clients
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_client,nom, prenom,ddn,statut_matrimonial,nbEnfants,statutPro FROM client");

  $i=0;

  $tabClient = [];
  foreach ($res as $row) {
    $client = new Client();
    $client->$id_client = $row['id_client'];
    $client->$nom = $row['nom'];
    $client->$prenom = $row['prenom'];
    $client->$ddn = $row['ddn'];
    $client->$statut_matrimonial = $row['statut_matrimonial'];
    $client->$nbEnfants = $row['nbEnfants'];
    $client->$statutPro  = $row['statutPro '];
    $tabClient[i] = $client;
    $i++;
  }

	return $res;
}

}
  ?>
