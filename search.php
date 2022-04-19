<?php
include 'db_connexion.php';


//*** requette sql categories******
$query='SELECT * FROM categories ';
$resultat=$pdo->query($query);
$categories=$resultat->fetchAll();
//****************************///

////*********recherche********************************//////
if(isset($_GET['recherche'])AND !empty($_GET['recherche'])){
    $recherche = htmlspecialchars($_GET['recherche']);
    $produits = $pdo->query('SELECT * FROM produits WHERE titre LIKE "%'. $recherche.'%" '); 


    
}
/////**************************************************************************************/////







// definire le template:
$template='search';
include 'layout.phtml';

?>