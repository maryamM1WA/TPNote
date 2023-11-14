

<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\possedeDO.php');


class AccesPossede{

public $acces;

//function pour récuperer les info des conseillers
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_client,id_compte FROM possede");

  $i=0;

  $tabPossede= [];
  foreach ($res as $row) {
    $possede = new Possede();
    $possede->$id_client = $row['id_client'];
    $possede->$id_compte = $row['id_compte'];
    $tabPossede[i] = $possede;
    $i++;
  }

	return $res;
}

}
  ?>
