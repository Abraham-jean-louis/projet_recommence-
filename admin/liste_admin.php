<?php
include '../db_connexion.php';


    
   
$query =  'SELECT * FROM admin';
$resultSet = $pdo->query($query);
$admin = $resultSet->fetchAll();

if(isset($_GET['delete'])){
    $deletedid=$_GET['delete'];

    $query =  "DELETE FROM admin WHERE id=?";
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$deletedid]);
    
    
} 
    
$template='liste_admin';
include 'layout.phtml';

?>