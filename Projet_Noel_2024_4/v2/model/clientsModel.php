<?php

class ClientsModel{


 function getAllClients(){
    global $connexion;
    $sql="SELECT * FROM clients";
    $query = $connexion->prepare($sql);
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);
    return $clients;
 }

 
 function addclients($nomcli, $prenomcli, $emailcli, $telcli) {
   global $connexion; 
   $sql = "INSERT INTO clients (nomcli, prenomcli, emailcli, telcli) VALUES (?, ?, ?, ?)";
   $query = $connexion->prepare($sql);
   $query->execute([$nomcli, $prenomcli, $emailcli, $telcli]);

}



 function deleteClients($id){
    global $connexion;
    $sql="DELETE from clients  where id = ?";
    $query= $connexion->prepare($sql);
    $query->execute([$id]);
    
 }

 
 function updateClients($id,$nomcli,$prenomcli,$emailcli,$telcli){
    global $connexion;
    $sql="UPDATE clients SET nomcli =?,prenomcli=?,emailcli=?,telcli=? where id= ?";
    $query= $connexion->prepare($sql);
    $query->execute([$nomcli,$prenomcli,$emailcli,$telcli,$id]);
    
 }
 function getClientsById($id){
   global $connexion;
   $sql="SELECT * FROM clients where id= ?";
   $query= $connexion->prepare($sql);
   $query->execute([$id]);
   $clients = $query->fetch(PDO::FETCH_ASSOC);
   return $clients;
 }

}

?>