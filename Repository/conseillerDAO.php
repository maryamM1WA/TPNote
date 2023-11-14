

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
    $util->$id_conseiller = $row['id_conseiller'];
    $util->$nom = $row['nom'];
    $util->$prenom = $row['prenom'];
    $util->$ddn = $row['ddn'];
    $util->$agence = $row['agence'];
    $tabConseiller[i] = $conseiller;
    $i++;
  }

	return $res;
}

}
  ?>
