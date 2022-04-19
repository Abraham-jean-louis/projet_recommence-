<?php

 include '../db_connexion.php';
 





    
    
  if(isset($_GET['delete'])){
    $deletedid=$_GET['delete'];

    $query =  "DELETE FROM produits WHERE id=?";
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$deletedid]);

}

$query =  'SELECT * FROM produits ';
$resultSet = $pdo->query($query);
$produits = $resultSet->fetchAll();
    









$template="produit_liste";
include "layout.phtml";

?>