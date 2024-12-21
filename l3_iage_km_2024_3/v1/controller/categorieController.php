<?php
 require_once './model/categorieModel.php';

    function index(){
        $categories = getAll();
        require_once './view/categorie/list.php';
    }

    function create(){
        require_once './view/categorie/add.php';
    }

    function save(){
        $libelle =$_POST['libellec'];
        addCategorie($libelle);
        header('location:index.php?controller=categorie');
    }

    function remove(){
        $id =$_GET['id'];
        deleteCategorie($id);
        header('location:index.php?controller=categorie');

    }

    function edit(){
        $id =$_GET['id'];
        $categorie = getCategorieById($id);
         require_once './view/categorie/edit.php';
    }

    function update() { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
             $id = $_POST['id']; 
            $libelle = $_POST['libelle'];
              if ( $id && $libelle) { 
                updateC( $id, $libelle);
                 header('Location: index.php?controller=categorie');
                 } else { echo "Tous les champs sont obligatoires."; }
    
    
                }
            }






?>