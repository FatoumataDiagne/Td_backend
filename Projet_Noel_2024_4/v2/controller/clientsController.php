<?php

class clientsController{

    function index(){
        global $climodel;
        $clients = $climodel->getAllClients();
        require_once './view/clients/show.php';
    }

    function create(){
        require_once './view/clients/add.php';
    }

    function save(){
        global $climodel;
        $nomcli =$_POST['nomcli'];
        $prenomcli =$_POST['prenomcli'];
        $emailcli =$_POST['emailcli'];
        $telcli =$_POST['telcli'];
        $climodel->addClients($nomcli,$prenomcli,$emailcli,$telcli);
        header('location:index.php?controller=clients');
    }

    function remove(){
        global $climodel;
        $id =$_GET['id'];
        $climodel->deleteClients($id);
        header('location:index.php?controller=clients');

    }

    function edit(){
        global $climodel;
        $id =$_GET['id'];
        $clients = $climodel->getClientsById($id);
         require_once './view/clients/edit.php';
    }

    function update(){
        global $climodel;
        extract($_POST);
        $climodel->updateClients($id,$nomcli,$prenomcli,$emailcli,$telcli);
        header('location:index.php?controller=clients');
    }


}



?>