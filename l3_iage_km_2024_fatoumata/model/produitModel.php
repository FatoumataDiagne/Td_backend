<?php
require_once './model/db.php';




function getAll() {
    global $connexion;
    $sql = "SELECT p.id, p.libelle, p.quantite,p.prix, c.libellec FROM produits p , categories c WHERE p.idc = c.id";
    $result = $connexion->query($sql);
    $produits = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $produits[] = $row;
        }
    }
    return $produits;
}
function getProduitById($id) {
    global $connexion;
    $sql = "SELECT * FROM produits WHERE id = $id";
    $result = $connexion->query($sql);
    $produit = [];

    if ($result->num_rows > 0) {
        $produit = $result->fetch_assoc();
    }
    return $produit;
}


function addProduit($libelle, $qt, $prix,$idc) {
    global $connexion;
    $sql = "INSERT INTO produits (libelle, quantite, prix, idc) VALUES ('$libelle', $qt, $prix, $idc)";
    if ($connexion->query($sql) === TRUE) {
        echo "Produit ajoute avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}


function deleteProduit($id) {
    global $connexion;
    $sql = "DELETE FROM produits WHERE id = $id";
    if ($connexion->query($sql) === TRUE) {
        echo "Produit supprime avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}


function updateProduit($id, $libelle, $qt, $prix) {
    global $connexion;
    $sql = "UPDATE produits SET libelle = '$libelle', quantite = $qt, prix = $prix WHERE id = $id";
    if ($connexion->query($sql) === TRUE) {
        echo "Produit mis a jour avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}
?>
