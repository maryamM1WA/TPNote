<?php
// connexion a la base de donnée

 function connexionBDD(){

//déclaration des variables de connexion

$DB_HOST="127.0.0.1";
$DB_NAME = "banque";
$DB_PORT = 3306;
$DB_USER = "root";
$DB_PSWD = "paris9242";

//connexion
try {
  $connString =
    "mysql:host=".$DB_HOST.";dbname=".$DB_NAME.";
    port=".$DB_PORT.";charset=utf8";
    $conn = new PDO($connString, $DB_USER, $DB_PSWD);
    return $conn;
}
catch(PDOException $e) {
  die("Erreur : " . $e->getMessage());
}

}

//function pour récuperer les info des clients
function recupererClient() {
	$conn = connectionBdd();
	$res = $conn->query("SELECT nom, prenom,ddn,statut_matrimonial,nbEnfants,statutPro FROM client");
	return $res;
}



 ?>