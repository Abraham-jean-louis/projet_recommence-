<?php

include '../db_connexion.php';
 


   
$modif_okr=0;


if(isset($_POST['ModifierProduit'])){

	$titre=$_POST['titre'];
	$prix=$_POST['prix'];
	$qte=$_POST['qte'];
	$categorie_id=$_POST['categorie_id'];
	$image=$_POST['image'];

	$query="UPDATE produits set titre=? , prix=? , qte=? ,categorie_id=? , image=? WHERE id=? ";
	$resultSet=$pdo->prepare($query);
	$resultSet->execute([$titre,$prix,$qte,$categorie_id,$image,$_GET['id']]);

	$modif_ok=1;
}
   
    $query ='SELECT * FROM produits where id=?';
    $resultSet=$pdo->prepare($query);
	$resultSet->execute([$_GET['id']]);
	$produit = $resultSet->fetch();

 	$query =  'SELECT * FROM categories';
    $resultSet = $pdo->query($query);
    $categories = $resultSet->fetchAll();
    

  
    

$template="modifier_liste";
include 'layout.phtml';
?>


