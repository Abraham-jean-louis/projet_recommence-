<?php

include 'db_connexion.php';
 


/* Requête 1 : En cliquant sur "continue shopping", il faut enregistrer la commande dans la table commande 
               (inscription_id, total, date)
               Essayer de modifier le champ date de la table commandes pour que la date s'enregistre automatiquement
               (utiliser la fonction date() )*/

//Faire avec if (si la personne n'est pas connectée, afficher un message connectez-vous pour procéder au paiement)

if(!isset($_SESSION["login_id"]))
{

    echo "Connectez-vous pour procéder au paiement";
    
}
else
{
    $query="INSERT INTO `commandes`(`inscription_id`, `total`) VALUES (?, ?)";
    $result = $pdo-> prepare($query);
    $result -> execute([$_SESSION["login_id"], $_SESSION["total_commande"]]);
}








/*Requête 2 : On enregistre chaque ligne de commande dans la table de détails (commande_id, produit_id, qte, prix)*/


/*Redirection vers la page paiement avec un paramètre GET et le numéro de commande 
    Exemple -> paiement.php?numcommande=1; (bien sûr, le 1 est dynamique donc variable)*/
    //$id_commande = "SELECT commande_id FROM details";
    //header(Location:"paiement.php?numcommande=$id_commande");