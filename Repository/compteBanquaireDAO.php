

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\compteBanquaireDO.php');


class AccesCompteBanquaire{

public $acces;

//function pour récuperer les info des compte banquaire
 function recupererCompte() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_compte,type,nb_personne FROM compteBanquaire");

  $i=0;

  $tabCompte = [];
  foreach ($res as $row) {
    $compte = new compteBanquaire();
    $compte->$id_compte = $row['id_compte'];
    $compte->$type = $row['type'];
    $compte->$nb_personne = $row['nb_personne'];
    $tabCompte[i] = $compte;
    $i++;
  }

	return $res;
}

}
  ?>
