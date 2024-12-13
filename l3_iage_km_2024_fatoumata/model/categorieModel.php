<?php
require_once './model/db.php';





function getAllCategories() {
    global $connexion;
    $sql = "SELECT * FROM categories";
    $result = $connexion->query($sql);
    $categories = [];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }
    }
    return $categories;
}

function getCategorieById($id) {
    global $connexion;
    $sql = "SELECT * FROM categories WHERE id = $id";
    $result = $connexion->query($sql);
    $categorie = [];

    if ($result->num_rows > 0) {
        $categorie = $result->fetch_assoc();
    }
    return $categorie;
}

function addCategorie($libelle) {
    global $connexion;
    $sql = "INSERT INTO categories (libellec) VALUES ('$libelle')";
    if ($connexion->query($sql) === TRUE) {
        echo "Categorie ajoute avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}


function deleteCategorie($id) {
    global $connexion;
    $sql = "DELETE FROM categories WHERE id = $id";
    if ($connexion->query($sql) === TRUE) {
        echo "Categorie supprime avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}


function updateCategorie($id, $libelle) {
    global $connexion;
    $sql = "UPDATE categories SET libellec = '$libelle'WHERE id = $id";
    if ($connexion->query($sql) === TRUE) {
        echo "Categorie mis a jour avec succes";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connexion->error;
    }
}
?>
