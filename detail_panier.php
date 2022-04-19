<?php
include 'db_connexion.php';

//*** requette sql categories******
$query='SELECT * FROM categories ';
$resultat=$pdo->query($query);
$categories=$resultat->fetchAll();
//****************************///

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    supprimerArticle($id);
}






// definire le template:
$template='detail_panier';
include 'layout.phtml';

?>