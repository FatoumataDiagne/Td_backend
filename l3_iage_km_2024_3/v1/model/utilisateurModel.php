<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT * FROM utilisateur";
    $utilisateur = pg_query($connexion,$sql);
    return $utilisateur;
 }

 
 function addUtilisateur($nom,$prenom,$email,$mdp){
    global $connexion;
    $sql="INSERT INTO utilisateur (nom,prenom,email,mdp) values
     ('$nom','$prenom','$email','$mdp')";
     pg_query($connexion,$sql);
    
 }

 function deleteUtilisateur($id){
    global $connexion;
    $sql="DELETE from utilisateur where id = $id";
    pg_query($connexion,$sql);  
 }

 
 function updateU($id,$nom,$prenom,$email,$mdp){
    global $connexion;
    $sql="UPDATE utilisateur SET nom ='$nom',prenom ='$prenom',email ='$email',mdp ='$mdp' where id=$id";
     pg_query($connexion,$sql);
    
 }
 function getUtilisateurById($id){
   global $connexion;
   $sql="SELECT * FROM utilisateur where id=$id";
   $utilisateur = pg_fetch_assoc(pg_query($connexion,$sql));
   return $utilisateur;
 }

?>