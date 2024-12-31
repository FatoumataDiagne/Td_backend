<?php
class rvController{

 function index(){
    global $rvmodel;
    $rv = $rvmodel->getAllRv();
    require_once './view/rendez-vous/show.php';
}

function remove(){
    global $rvmodel;
    $id =$_GET['id'];
    $rvmodel->deleteRv($id);
    header('location:index.php?controller=rendez-vous');

}
function update() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        global $rvmodel;
         $id = $_POST['id']; 
         $dates =$_POST['dates'];
         $heure =$_POST['heure'];
         $descriptions =$_POST['descriptions'];
         $client =$_POST['client'];
          if ( $id && $dates && $heure && $descriptions && $client) { 
            $rvmodel->updateR( $id, $dates, $heure, $descriptions, $client);
             header('Location: index.php?controller=rendez-vous');
             } else { echo "Tous les champs sont obligatoires."; }


            }
        }
function create(){
    global $climodel;
    global $rvmodel;
    $rv = $rvmodel->getAllRv();
    $clients = $climodel->getAllClients();
    require_once './view/rendez-vous/add.php';
}

function edit(){
    global $climodel;
     global $rvmodel;
     $id =$_GET['id'];
     $clients = $climodel->getAllClients($id);
     $rv = $rvmodel->getRvById($id);
     require_once './view/rendez-vous/edit.php';
}

function save() { 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
        global $rvmodel;
        $dates =$_POST['dates'];
        $heure =$_POST['heure'];
        $descriptions =$_POST['descriptions'];
        $client =$_POST['client'];
          if ($dates && $heure && $descriptions && $client) { 
            $rvmodel->addRv($dates, $heure, $descriptions, $client);
            header('location:index.php?controller=rendez-vous');
        } else { 
            echo "Tous les champs sont obligatoires.";
        }
    }
}



}
?>