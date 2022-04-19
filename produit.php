<?php
include 'db_connexion.php';

//*** requette sql categories******
$query='SELECT * FROM categories ';
$resultat=$pdo->query($query);
$categories=$resultat->fetchAll();
//****************************///

// requette sql produits*********************************************************
$query='SELECT * FROM produits WHERE id='.$_GET['id'];
//execution de la requette
    // query(): c'est une fonction predefine qui permer l'exexution de la requette 
$resultat=$pdo->query($query);
// la recuperation des donner 
$produits=$resultat->fetch();
//*******************************************************************************

//************requtte produits similaires*******************
$query='SELECT * FROM produits  WHERE  categorie_id='.$produits['categorie_id'].' LIMIT 5' ;
$resultat=$pdo->query($query);
$similaires=$resultat->fetchAll();
//**************************************************

//AJOUTER AU PANIER
if(isset($_POST['panier'])){
    $id=$_GET['id'];
    $titre=$produits['titre'];
    $qte=$_POST['qte'];
    $prix=$produits['prix'];
    $image=$produits['image'];

    ajouterArticle($id,$titre,$qte,$prix,$image);
}

// definire le template:
$template='produit';
include 'layout.phtml';

?>