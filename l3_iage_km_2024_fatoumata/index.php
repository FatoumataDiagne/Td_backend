<?php

    require_once './controller/produitController.php';
    require_once './controller/categorieController.php';
    require_once './view/header.php';


    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='add'){
            $categories = getAllCategories();
            require_once 'view/add.php';

        
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit'){
            $id = $_GET['id'];
           $produit= getProduitById($id) ;
           $categories = getAllCategories();
             require_once 'view/edit.php';
         
          
        }
        if($_GET['action']=='editProduit'){
         
            updateP();
        }
        
        if($_GET['action']=='listCategorie'){
            indexCat();
        }
        if($_GET['action']=='deleteCategorie'){
            removeCat();
        }
        if($_GET['action']=='addCategorie'){
           
            require_once 'view/categorie/add.php';

        
        }
        if($_GET['action']=='saveCat'){
            saveC();
        }
        if($_GET['action']=='editCategorie'){
            $id = $_GET['id'];
            $categorie=getCategorieById($id) ;
            require_once 'view/categorie/edit.php';
        }
        if($_GET['action']=='updateCat'){
         
            updateCat();
        }
    }else{
        index();
    }
    
?>