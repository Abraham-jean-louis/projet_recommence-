<?php
include 'db_connexion.php';

function debug($Var){
    echo '<pre>';
    var_dump($Var);
       // print_r($Var);
    echo'</pre>';
}

    //*** requette sql categories******
    $query='SELECT * FROM categories ';
    $resultat=$pdo->query($query);
    $categories=$resultat->fetchAll();
    //****************************///
    
    
    
    //*******inscription*******************************************
    $inscription_ok=0;
    
    if(isset($_POST['inscription'])){
        $nom=$_POST['nom'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        //$password=md5($_POST['password']."3Wa".$email.($taille_user*3-1));
        
        $query= "INSERT INTO users (nom,email,password) VALUES('$nom','$email','$password')";
        $resultat=$pdo->query($query);
        
        $inscription_ok=1;


    }
    //***********************************************************


    
   
    
    //************connexion*******
  $connexion_error=0;
    if(isset($_POST['connexion'])){
          
          $cemail=$_POST['cemail'];
          $cpassword=$_POST['cpassword'];
          
          //$password=md5($_POST['password']."3Wa".$email.($taille_user*3-1));

         $query = "SELECT * FROM users WHERE email=:email AND password=:password";
   
         // On prépare la requête
         $requete = $pdo->prepare($query);
         //$resultSet->execute([$cemail,$cpassword]);

               // On injecte les valeurs "bindValue"
         $requete->bindValue(":email",$cemail, PDO::PARAM_STR);
         $requete->bindValue(":password",$cpassword, PDO::PARAM_STR);

         // On exécute
         $requete->execute();

         
         debug($requete);
         
         
          $utilisateur=$requete->fetch();
          
          if(!isset($utilisateur['id'])){
              $connexion_error=1; 
          }else{
              $_SESSION['login_nom']=$utilisateur['nom'];
              $_SESSION['login_id']=$utilisateur['id'];
              header('location:index.php');
              
              
          }
          //***********************************************************
          
        
        
        
        
        
        
        
    }
    //*****************************
    
    
    
    
    
$template='login';
include 'layout.phtml';

?>