<?php

require_once('accesBDD.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Entity\transactionHistoriqueDO.php');


class AccesTransaction{

public $acces;

//function pour récuperer les info des conseillers
 function recupererClient() {
	$this ->acces= new AccesBDD();
	$res = $this-> acces->connexionBDD()->query("SELECT id_transaction,date_transaction,heure_transaction,montant_transaction,id_client FROM transactionHistorique");

  $i=0;

  $tabTransaction= [];
  foreach ($res as $row) {
    $transaction = new transactionHis();
    $util->$id_transaction = $row['id_transaction'];
    $util->$date_transaction = $row['date_transaction'];
    $util->$heure_transaction = $row['heure_transaction'];
    $util->$montant_transaction = $row['montant_transaction'];
    $util->$id_client = $row['id_client'];
    $util->$date_transaction = $row['date_transaction'];
    $tabTransaction[i] = $transaction;
    $i++;
  }

	return $res;
}

}
  ?>
