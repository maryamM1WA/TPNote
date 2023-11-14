

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\adresseDO.php');


class AccesAdresse{

public $acces;

//function pour récuperer les info des compte banquaire
 function recupererCompte() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_adresse,num_rue,nom_rue,ville,cdp FROM adresse");

  $i=0;

  $tabAdresse = [];
  foreach ($res as $row) {
    $adresse = new Adresse;
    $util->$id_adresse = $row['id_adresse'];
    $util->$num_rue = $row['num_rue'];
    $util->$nom_rue = $row['nom_rue'];
    $util->$ville = $row['ville'];
    $util->$cdp = $row['cdp'];
    $tabAdresse[i] = $adresse;
    $i++;
  }

	return $res;
}

}
  ?>
