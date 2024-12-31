<?php
 require_once './database.php';


 function  getAllCours(){
    global $connexion;
    $sql="SELECT * FROM cours";
    $cours = pg_query($connexion,$sql);
    return $cours;
 }
 

            function addCours($nomc,$codec,$nbheure){
                global $connexion;
                $sql = "INSERT INTO cours (nomc, codec, nbheure) VALUES 
                ('$nomc', '$codec', $nbheure)";
                pg_query($connexion,$sql);
            }
        

function getCoursById($id){
    global $connexion;
    $sql="SELECT * FROM cours where id=$id";
    $cours = pg_fetch_assoc(pg_query($connexion,$sql));
    return $cours;
  }

 function deleteCours($id){
    global $connexion;
    $sql="DELETE from cours  where id = $id";
     pg_query($connexion,$sql);
 }


 function updateC($id,$nomc,$codec,$nbheure){
    global $connexion;
    $sql="UPDATE cours SET nomc ='$nomc',codec='$codec', nbheure =$nbheure where id=$id ";
     pg_query($connexion,$sql);
    
 }

?>