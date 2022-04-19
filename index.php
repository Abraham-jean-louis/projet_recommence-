<?php
include 'db_connexion.php';

//*** requette sql categories******
$query='SELECT * FROM categories ';
$resultat=$pdo->query($query);
$categories=$resultat->fetchAll();
//****************************///

// requette sql produits*********************************************************
$query='SELECT * FROM produits ORDER BY id DESC LIMIT 8';
//execution de la requette
    // query(): c'est une fonction predefine qui permer l'exexution de la requette 
$resultat=$pdo->query($query);
// la recuperation des donner 
//fetchAll() c'est une fonction qui me permet de recuparer les donner
$produits=$resultat->fetchAll();
//*******************************************************************************


// definire le template:
$template='index';
include 'layout.phtml';




?>
