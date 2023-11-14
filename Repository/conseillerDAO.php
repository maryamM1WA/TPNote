

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\conseillerDO.php');


class AccesConseiller{

public $acces;

//function pour récuperer les info des conseillers
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_conseiller,nom,prenom,ddn,agence FROM conseiller");

  $i=0;

  $tabConseiller = [];
  foreach ($res as $row) {
    $conseiller = new Conseiller();
    $conseiller->$id_conseiller = $row['id_conseiller'];
    $conseiller->$nom = $row['nom'];
    $conseiller->$prenom = $row['prenom'];
    $conseiller->$ddn = $row['ddn'];
    $conseiller->$agence = $row['agence'];
    $tabConseiller[i] = $conseiller;
    $i++;
  }

	return $res;
}

}
  ?>
