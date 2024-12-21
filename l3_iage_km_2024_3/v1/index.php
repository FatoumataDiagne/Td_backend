<?php
    require_once './header.php';

    $controller = isset($_GET["controller"]) ? $_GET["controller"] : " ";
    if($controller == 'produit'){
        require_once './controller/produitController.php';
    } else if($controller == 'categorie'){
        require_once './controller/categorieController.php';
    } else if($controller == 'utilisateur'){ 
        require_once './controller/utilisateurController.php';
    }

    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='delete'){
            remove(); 
        }
        if($_GET['action']=='add'){
            create();
        }
        if($_GET['action']=='save'){
            save();
        }
        if($_GET['action']=='edit'){
            edit();
        }
        if($_GET['action']=='update'){
            update();
        }
        if($_GET['action']=='list'){
            index();
        }
        
    }else{
        index();
    }
    
?>