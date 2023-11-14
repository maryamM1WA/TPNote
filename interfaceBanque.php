<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Interface de la banque</title>
  </head>
  <body>
<h1>Liste des Clients</h1>
<div id="detailClient" class="details"></div>


<?php
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\BO\clientBO.php');

//Création de l'objet clientBO

$clientBO=new ClientBO();

//Récupèration des noms et prenoms des Clients

$listeClient=$clientBO->getClients();

//Affichage de la listeClient

echo"<ul>";
foreach ($listeClient as $client) {
  echo"<li class='client' data-id='{$client->id_client}'>";
  echo "<p> {$client->nom} {$client->prenom}</p>";

//bloc contient les details client

echo "<div class='details'>";
echo "<p>ID:{$client->id_client}</p>";
echo "<p>Date de naissance: {$client->ddn}</p>";
echo "<p>Statut matrimonial: {$client->statut_matrimonial}</p>";
echo "<p>Nombre d'enfants: {$client->nbEnfants}</p>";
echo "<p>Statut professionnel: {$client->statutPro}</p>";
echo "</div>";


echo "</li>"

}
echo "</ul>";
 ?>

 <script >

 // Écouteur d'événement au clic sur un client
     document.querySelectorAll('.client').forEach(function(client) {
         client.addEventListener('click', function() {
             // Trouver la div de détails du client liée à ce client
             var detailsDiv = this.querySelector('.details');

             // Inverser le style 'display' entre 'block' et 'none'
             detailsDiv.style.display = (detailsDiv.style.display === 'block') ? 'none' : 'block';
         });
     });


}
 </script>
  </body>
</html>
