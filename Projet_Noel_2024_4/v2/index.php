<?php

    require_once './database.php';
    require_once './header.php';
    require_once './model/clientsModel.php';
    require_once './model/rendez-vousModel.php';
    $database =new Database();
    $connexion = $database->get_Connexion();
    $climodel = new clientsModel();
    $rvmodel = new rvModel();

    $controller = isset($_GET["controller"]) ? $_GET["controller"] : "";

    if($controller == 'clients'){
        require_once './controller/clientsController.php';
        $ctl =new clientsController();
    }else{
        require_once './controller/rendez-vousController.php';
        $ctl =new rvController();
    }

    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='delete'){
            $ctl-> remove();
        }
        if($_GET['action']=='add'){
            $ctl->create();
        }
        if($_GET['action']=='save'){
            $ctl->save();
        }
        if($_GET['action']=='edit'){
            $ctl->edit();
        }
        if($_GET['action']=='update'){
            $ctl->update();
        }
    }else{
        $ctl->index();
    }
    
?>