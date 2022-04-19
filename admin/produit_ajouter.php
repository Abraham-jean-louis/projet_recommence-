<?php

include '../db_connexion.php';
 
    $ajout=0;
    
if(isset($_POST['ajouter'])){
         $titre=$_POST['titre'];
         $prix=$_POST['prix'];
         $qte=$_POST['qte'];
         $categorie_id=$_POST['categorie_id'];
         $image=$_POST['image'];



         $query =  "INSERT INTO produits (titre,prix,qte,categorie_id,image) VALUES(?,?,?,?,?)";
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$titre,$prix,$qte,$categorie_id,$image]);



        
        $ajout=1;
     }

     

    $query =  'SELECT * FROM categories';
    $resultSet = $pdo->query($query);
    $categories = $resultSet->fetchAll();

    








$template="produit_ajouter";
include "layout.phtml";

?>