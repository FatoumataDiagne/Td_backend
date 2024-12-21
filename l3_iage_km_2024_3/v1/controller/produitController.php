<?php
 require_once './model/produitModel.php';

 function index(){
    $produit = getAllProduit();
    require_once './view/produit/list.php';
}

function remove(){
    $id =$_GET['id'];
    deleteProduit($id);
    header('location:index.php?controller=produit');

}
function update() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
         $id = $_POST['id']; 
        $libelle = $_POST['libelle'];
         $qt = $_POST['qt']; 
         $prix = $_POST['prix'] ;
          $idc = $_POST['idc'];
          if ( $id && $libelle && $qt && $prix && $idc) { 
            updateP( $id, $libelle, $qt, $prix, $idc);
             header('Location: index.php?controller=produit');
             } else { echo "Tous les champs sont obligatoires."; }


            }
        }
function create(){
    $categories = getAllCategorie();
    require_once './view/produit/add.php';
}

function edit(){
     $id = $_GET['id'];  
     $produit = getProduitById($id);
    $categories = getAllCategorie();
     require_once './view/produit/edit.php';
}

function save() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $libelle = $_POST['libelle'];
         $qt = $_POST['qt']; 
         $prix = $_POST['prix'] ;
          $idc = $_POST['idc'];
          if ($libelle && $qt && $prix && $idc) { 
            addProduit($libelle, $qt, $prix, $idc);
            header('location:index.php?controller=produit&action=list');
        } else { 
            echo "Tous les champs sont obligatoires.";
        }
    }
}


?>