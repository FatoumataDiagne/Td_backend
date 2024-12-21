<?php
 require_once './model/db.php';


 function getAll(){
    global $connexion;
    $sql="SELECT * FROM categories";
    $categories = pg_query($connexion,$sql);
    return $categories;
 }

 
 function addCategorie($libelle){
    global $connexion;
    $sql="INSERT INTO categories (libellec) values
     ('$libelle')";
     pg_query($connexion,$sql);
    
 }

 function deleteCategorie($id){
    global $connexion;
    $sql="DELETE from categories where id = $id";
    pg_query($connexion,$sql);  
 }

 
 function updateC($id,$libelle){
    global $connexion;
    $sql="UPDATE categories SET libellec ='$libelle' where id=$id";
     pg_query($connexion,$sql);
    
 }
 function getCategorieById($id){
   global $connexion;
   $sql="SELECT * FROM categories where id=$id";
   $categories = pg_fetch_assoc(pg_query($connexion,$sql));
   return $categories;
 }

?>