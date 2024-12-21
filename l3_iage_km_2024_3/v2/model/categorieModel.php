<?php
 require_once './model/db.php';


class CategorieModel {

    private $connexion;

    public function __construct($dbConnection) {
        $this->connexion = $dbConnection;
    }

    public function getAll() {
        $sql = "SELECT * FROM categorie";
        return pg_query($this->connexion, $sql);
    }

    public function addCategorie($libelle) {
        $sql = "INSERT INTO categorie (libelle) VALUES ('$libelle')";
        pg_query($this->connexion, $sql);
    }

    public function deleteCategorie($id) {
        $sql = "DELETE FROM categorie WHERE id = $id";
        pg_query($this->connexion, $sql);
    }

    public function updateCategorie($id, $libelle) {
        $sql = "UPDATE categorie SET libelle = '$libelle' WHERE id = $id";
        pg_query($this->connexion, $sql);
    }

    public function getCategorieById($id) {
        $sql = "SELECT * FROM categorie WHERE id = $id";
        return pg_fetch_assoc(pg_query($this->connexion, $sql));
    }
}
?>