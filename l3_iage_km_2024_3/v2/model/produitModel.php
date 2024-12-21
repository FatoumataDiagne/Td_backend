<?php
 require_once './model/db.php';

 class ProduitModel {

   private $connexion;

   public function __construct($dbConnection) {
       $this->connexion = $dbConnection;
   }

   public function getAll() {
       $sql = "SELECT * FROM produit";
       return pg_query($this->connexion, $sql);
   }

   public function addProduit($libelle, $qt, $prix) {
       $sql = "INSERT INTO produit (libelle, quantite, prix) VALUES ('$libelle', $qt, $prix)";
       pg_query($this->connexion, $sql);
   }

   public function deleteProduit($id) {
       $sql = "DELETE FROM produit WHERE id = $id";
       pg_query($this->connexion, $sql);
   }

   public function updateProduit($id, $libelle, $qt, $prix) {
       $sql = "UPDATE produit SET libelle = '$libelle', quantite = $qt, prix = $prix WHERE id = $id";
       pg_query($this->connexion, $sql);
   }
}


?>