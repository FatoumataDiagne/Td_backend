<?php
    require_once './header.php';

    $controller = isset($_GET["controller"]) ? $_GET["controller"] : " ";
    if($controller == 'etudiants'){
        require_once './controller/etudiantsController.php';
    } else {
        require_once './controller/coursController.php';
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
        if($_GET['action']=='show'){
            index();
        }
        
    }else{
        index();
    }
    
?>