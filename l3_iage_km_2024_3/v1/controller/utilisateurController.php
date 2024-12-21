<?php
 require_once './model/utilisateurModel.php';

    function index(){
        $utilisateur = getAll();
        require_once './view/utilisateur/list.php';
    }

    function create(){
        require_once './view/utilisateur/add.php';
    }

    function save(){
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        $email =$_POST['email'];
        $mdp =$_POST['mdp'];
        addUtilisateur($nom,$prenom,$email,$mdp);
        header('location:index.php?controller=utilisateur');
    }

    function remove(){
        $id =$_GET['id'];
        deleteUtilisateur($id);
        header('location:index.php?controller=utilisateur');

    }

    function edit(){
        $id =$_GET['id'];
        $utilisateur = getUtilisateurById($id);
         require_once './view/utilisateur/edit.php';
    }

    function update() { 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            $id =$_POST['id'];
            $nom =$_POST['nom'];         
            $prenom =$_POST['prenom'];
            $email =$_POST['email'];
            $mdp =$_POST['mdp'];
              if ($id && $nom && $prenom && $email && $mdp) { 
                updateU( $id, $nom, $prenom, $email, $mdp);
                 header('Location: index.php?controller=utilisateur');
                 } else { echo "Tous les champs sont obligatoires."; }
    
    
                }
            }






?>