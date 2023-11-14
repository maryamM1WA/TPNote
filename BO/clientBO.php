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
      $clientDTO = new ClientDTO();
      $clientDTO->$id_client = $row['id_client'];
      $clientDTO->$nom = $row['nom'];
      $clientDTO->$prenom = $row['prenom'];
      $clientDTO->$ddn = $row['ddn'];
      $clientDTO->$statut_matrimonial = $row['statut_matrimonial'];
      $clientDTO->$nbEnfants = $row['nbEnfants'];
      $clientDTO->$statutPro  = $row['statutPro '];
      $tabClientBO[i] = $clientDTO;
      $i++;
    }

    return $res;
  }
  }




}



 ?>
