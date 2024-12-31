<?php
class rvModel {

 function  getAllRv(){
    global $connexion;
    $sql = "SELECT r.*, c.nomcli,c.prenomcli FROM rendezvous r , clients c WHERE r.client = c.id";
    $query = $connexion->prepare($sql);
    $query->execute();
    $rv = $query->fetchAll(PDO::FETCH_ASSOC);
    return $rv;
 }
 function getClientsById($id) {
   global $connexion;
   $sql = "SELECT * FROM clients WHERE id = ?";
   $query = $connexion->prepare($sql);
   $query->execute([$id]);
   return $query->fetchAll(PDO::FETCH_ASSOC);
}

 function getAllClients(){
    global $connexion;
    $sql="SELECT * FROM clients";
   // $categories = $connexion->query($sql)->fetchAll();
    $query = $connexion->prepare($sql);
    $query->execute();
    $clients = $query->fetchAll(PDO::FETCH_ASSOC);
    return $clients;
 }


    function addRv($dates,$heure,$descriptions,$client){
        global $connexion;
        $sql = "INSERT INTO rendezvous (dates, heure, descriptions, client) VALUES 
        (?,?,?,?)";
        $query= $connexion->prepare($sql);
        $query->execute([$dates, $heure, $descriptions, $client]);
    }

        

    function getRvById($id) {
      global $connexion;
      $sql = "SELECT * FROM rendezvous WHERE id = ?";
      $query = $connexion->prepare($sql);
      $query->execute([$id]);
      return $query->fetch(PDO::FETCH_ASSOC);
  }

 function deleteRv($id){
    global $connexion;
    $sql="DELETE from rendezvous  where id = ?";
    $query= $connexion->prepare($sql);
    $query->execute([$id]);
 }


 function updateR($id, $dates, $heure, $descriptions, $client){
    global $connexion;
    $sql="UPDATE rendezvous SET dates =?,heure=?, descriptions =? , client= ? where id=? ";
    $query= $connexion->prepare($sql);
    $query->execute([$dates,$heure,$descriptions,$client,$id]);    
 }


}
?>
