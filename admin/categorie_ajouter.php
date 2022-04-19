<?php

include '../db_connexion.php';
 
    $ajout=0;
    
if(isset($_POST['ajouter'])){
         $titre=$_POST['titre'];



         $query =  "INSERT INTO categories (titre) VALUES(?)";
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$titre]);



        
        $ajout=1;
     }








$template="categorie_ajouter";
include "layout.phtml";

?>