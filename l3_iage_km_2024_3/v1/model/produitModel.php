<?php
 require_once './model/db.php';


 function  getAllProduit(){
    global $connexion;
    $sql = "SELECT p.id, p.libelle, p.quantite,p.prix, c.libellec FROM produit p , categories c WHERE p.idc = c.id";
    $result = pg_query($connexion,$sql);
    $produit  = pg_fetch_all($result);
    return $produit;
 }
 
        function getAllCategorie(){
            global $connexion;
            $sql="SELECT * FROM categories";
            $result = pg_query($connexion,$sql);
            $categories = pg_fetch_all($result);
            return $categories;
        }


        function addProduit($libelle,$qt,$prix,$idc){
        global $connexion;
        $sql = "INSERT INTO produit (libelle, quantite, prix, idc) VALUES 
        ('$libelle', $qt, $prix, $idc)";
        pg_query($connexion,$sql);
        }
        
 
function getProduitById($id){
    global $connexion;
    $sql="SELECT * FROM produit where id=$id";
    $produit = pg_fetch_assoc(pg_query($connexion,$sql));
    return $produit;
  }

 function deleteProduit($id){
    global $connexion;
    $sql="DELETE from produit  where id = $id";
     pg_query($connexion,$sql);
 }


 function updateP($id,$libelle,$qt,$prix,$idc){
    global $connexion;
    $sql="UPDATE produit SET libelle ='$libelle',quantite=$qt, prix =$prix , idc=$idc where id=$id ";
     pg_query($connexion,$sql);
    
 }

?>