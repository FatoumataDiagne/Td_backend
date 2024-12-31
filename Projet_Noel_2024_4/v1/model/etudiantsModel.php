<?php
 require_once './database.php';


 function getAll(){
    global $connexion;
    $sql="SELECT * FROM etudiants";
    $etudiants = pg_query($connexion,$sql);
    return $etudiants;
 }

 
 function addEtudiant($nom,$prenom,$email,$filiere){
    global $connexion;
    $sql="INSERT INTO etudiants (nom,prenom,email,filiere) values
     ('$nom','$prenom','$email','$filiere')";
     pg_query($connexion,$sql);
    
 }

 function deleteEtudiant($id){
    global $connexion;
    $sql="DELETE from etudiants where id = $id";
    pg_query($connexion,$sql);  
 }

 
 function updateE($id,$nom,$prenom,$email,$filiere){
    global $connexion;
    $sql="UPDATE etudiants SET nom ='$nom',prenom ='$prenom',email ='$email',filiere ='$filiere' where id=$id";
     pg_query($connexion,$sql);
    
 }
 function getEtudiantById($id){
   global $connexion;
   $sql="SELECT * FROM etudiants where id=$id";
   $etudiants = pg_fetch_assoc(pg_query($connexion,$sql));
   return $etudiants;
 }

?>