<?php


require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\Repository\clientDAO.php');
require_once('C:\Users\eidma\OneDrive\Bureau\XAMPP\htdocs\TPNote\DTO\clientDTO.php');

class ClientBO{
  public $recupClient;

  function getClients(){

    $this->recupClient=new AccesClient();
    $res=$this->recupClient->recupererClient() ;


    $tabClientBO=[];
    foreach ($res as $row) {
      $client = new ClientDTO();
      $util->$id_client = $row['id_client'];
      $util->$nom = $row['nom'];
      $util->$prenom = $row['prenom'];
      $util->$ddn = $row['ddn'];
      $util->$statut_matrimonial = $row['statut_matrimonial'];
      $util->$nbEnfants = $row['nbEnfants'];
      $util->$statutPro  = $row['statutPro '];
      $tabClient[i] = $client;
      $i++;
    }

    return $res;
  }
  }




}



 ?>
