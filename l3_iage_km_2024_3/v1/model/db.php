<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="fatoumata";
$dbname="gestion";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   echo " ";
}
