<?php

include '../db_connexion.php';
 
    $ajout=0;
    
if(isset($_POST['ajouter'])){
         $user=$_POST['user'];
         

        $taille_user=strlen($user);
        $password=md5($_POST['password']."3Wa".$user.($taille_user*3-1));

         
         

         $query =  "INSERT INTO admin (user,password) VALUES(?,?)";
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$user,$password]);



        
        $ajout=1;
     }








$template="ajout_admin";
include "layout.phtml";

?>