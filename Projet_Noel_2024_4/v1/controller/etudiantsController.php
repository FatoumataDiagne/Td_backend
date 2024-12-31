<?php
 require_once './model/etudiantsModel.php';

    function index(){
        $etudiants = getAll(); 
        require_once './view/etudiants/show.php';
    }

    function create(){
        require_once './view/etudiants/add.php';
    }

    function save() { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $nom = $_POST['nom'];
             $prenom = $_POST['prenom']; 
             $email = $_POST['email'] ;
              $filiere = $_POST['filiere'];
              if ($nom && $prenom && $email && $filiere) { 
                addEtudiant($nom, $prenom, $email, $filiere);
                header('location:index.php?controller=etudiants&action=show');
            } else { 
                echo "Tous les champs sont obligatoires.";
            }
        }
    }

    function remove(){
        $id =$_GET['id'];
        deleteEtudiant($id);
        header('location:index.php?controller=etudiants');

    }

    function edit(){
        $id =$_GET['id'];
        $etudiants = getEtudiantById($id);
         require_once './view/etudiants/edit.php';
    }

    function update() { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
             $id = $_POST['id']; 
             $nom = $_POST['nom'];
             $prenom = $_POST['prenom']; 
             $email = $_POST['email'] ;
              $filiere = $_POST['filiere'];
              if ($nom && $prenom && $email && $filiere) { 
                updateE( $id,$nom, $prenom, $email, $filiere);
                 header('Location: index.php?controller=etudiants');
                 } else { echo "Tous les champs sont obligatoires."; }
    
    
                }
            }






?>