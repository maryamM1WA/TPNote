

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\agenceDO.php');


class AccesAgence{

public $acces;

//function pour récuperer les info des clients
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_agence,nb_conseiller, nb_client FROM agence");

  $i=0;

  $tabAgence = [];
  foreach ($res as $row) {
    $agence = new Agence();
    $util->$id_client = $row['id_agence'];
    $util->$nb_conseiller = $row['nb_conseiller'];
    $util->$nb_client = $row['nb_client'];
    $tabAgence[i] = $agence;
    $i++;
  }

	return $res;
}

}
  ?>
