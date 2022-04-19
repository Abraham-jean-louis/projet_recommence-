<?php

include '../db_connexion.php';
 
    $modif_ok=0;
    
if(isset($_POST['modifier'])){
         $titre=$_POST['titre'];



         $query =  "UPDATE categories set titre=? WHERE id=?";
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$titre,$_GET['id']]);



        
        $modif_ok=1;
     }




     $query =  'SELECT * FROM categories WHERE id=?';
    $resultSet = $pdo->prepare($query);
    $resultSet->execute([$_GET['titre']]);
    $categorie = $resultSet->fetch();








$template="modifier_categorie";
include "layout.phtml";

?>