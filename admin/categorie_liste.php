<?php

 include '../db_connexion.php';
 


 if(isset($_GET['delete'])){
        $deletedid=$_GET['delete'];

        $query =  "DELETE FROM categories WHERE id=?";
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$deletedid]);

}

    
    $query =  'SELECT * FROM categories';
    $resultSet = $pdo->query($query);
    $categories = $resultSet->fetchAll();
    
    









$template="categorie_liste";
include "layout.phtml";

?>