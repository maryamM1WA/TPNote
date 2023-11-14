<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Interface de la banque</title>
  </head>
  <body>
<h1>Liste des Clients</h1>



<?php
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\BO\clientBO.php');

//Création de l'objet clientBO

$clientBO=new ClientBO();

//Récupèration des noms et prenoms des Clients

$listeClient=$clientBO->getClients();

//Affichage de la listeClient

echo"<ul>";
foreach ($listeClient as $client) {
  echo"<li>";
  echo "<p>{$client->id_client} {$client->nom} {$client->prenom}</p>";
}
echo "</ul>";


 ?>
  </body>
</html>
