<?php
require_once './model/coursModel.php';

 function index(){
    $cours = getAllCours();
    require_once './view/cours/show.php';
}

function remove(){
    $id =$_GET['id'];
    deleteCours($id);
    header('location:index.php?controller=cours');

}
function update() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
         $id = $_POST['id']; 
        $nomc = $_POST['nomc'];
         $codec = $_POST['codec']; 
         $nbheure = $_POST['nbheure'] ;
          if ( $id && $nomc && $codec && $nbheure) { 
            updateC( $id, $nomc, $codec, $nbheure);
             header('Location: index.php?controller=cours');
             } else { echo "Tous les champs sont obligatoires."; }
            }
        }
function create(){
    $cours = getAllCours();
    require_once './view/cours/add.php';
}

function edit(){
     $id = $_GET['id'];  
     $cours = getCoursById($id);
     require_once './view/cours/edit.php';
}

function save() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        $nomc = $_POST['nomc'];
         $codec = $_POST['codec']; 
         $nbheure = $_POST['nbheure'] ;
          if ($nomc && $codec && $nbheure) { 
            addCours($nomc, $codec, $nbheure);
            header('location:index.php?controller=cours&action=show');
        } else { 
            echo "Tous les champs sont obligatoires.";
        }
    }
}



?>