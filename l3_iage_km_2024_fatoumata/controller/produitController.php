<?php
 require_once './model/produitModel.php';

 function index(){
    $produits = getAll();
    require_once './view/list.php';
}

function remove(){
    $id =$_GET['id'];
    deleteProduit($id);
    header('location:index.php');

}
function create(){
    require_once './view/add.php';
}

function save() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $libelle = $_POST['libelle'];
         $qt = $_POST['qt']; 
         $prix = $_POST['prix'] ;
          $idc = $_POST['idc'];
          if ($libelle && $qt && $prix && $idc) { 
            addProduit($libelle, $qt, $prix, $idc);
             header('Location: index.php');
             } else { echo "Tous les champs sont obligatoires."; }


            }
        }
        function updateP() { 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
                 $id = $_POST['id']; 
                $libelle = $_POST['libelle'];
                 $qt = $_POST['qt']; 
                 $prix = $_POST['prix'] ;
                  $idc = $_POST['idc'];
                  if ( $id && $libelle && $qt && $prix && $idc) { 
                    updateProduit( $id, $libelle, $qt, $prix, $idc);
                     header('Location: index.php');
                     } else { echo "Tous les champs sont obligatoires."; }
        
        
                    }
                }
        ?>

