<?php
include '../db_connexion.php';


    
   
    
    //************connexion*******
  $connexion_error=0;
    if(isset($_POST['connexion'])){
          $user=$_POST['user'];
         
          
          $taille_user=strlen($user);
         $password=md5($_POST['password']."3Wa".$user.($taille_user*3-1));
         


         $query = "SELECT * FROM admin WHERE user=? AND password=?";
         $resultSet = $pdo->prepare($query);
         $resultSet->execute([$user,$password]);
         $admin=$resultSet->fetch();
          


          if(!isset($admin['id'])){
            $connexion_error=1;

          }else{
            $_SESSION['admin_user']=$admin['user'];
            $_SESSION['admin_id']=$admin['id'];
            header('location:home.php');
           
            
          }
          //***********************************************************
          
        
        
        
        
        
        
        
    }
    //*****************************
    
    
    
    
    
$template='index';
include 'login_admin.phtml';

?>