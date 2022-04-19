<?php 
include 'db_connexion.php';


$query='SELECT * FROM categories ';
$resultat=$pdo->query($query);
$categories=$resultat->fetchAll();


//requette sql:
$query='SELECT * FROM produits WHERE categorie_id='.$_GET['id'];
$resultat=$pdo->query($query);
$produits=$resultat->fetchAll();



 // definire le template:
$template='categorie';
include 'layout.phtml';


?>