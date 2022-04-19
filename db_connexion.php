<?php   
session_start();
// fichier de connecion 
// PDO php data objet 
include "fonctions_panier.php";
creationPanier();




$pdo=new PDO
    (
        'mysql:host=localhost;dbname=ecommerce_1;charset=UTF8',
        // nom de l'utilisateur (dans un serveur local c'est root)
        
        
     //   Identifiants Mysql
     
     
    //Identifiants 
        'root',
        
    // Password
        'root'
        
        
    );

?>