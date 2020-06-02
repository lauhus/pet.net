<?php 
require '../model/manager/classUserManager.php';

$email=htmlspecialchars($_POST['email']);
$mdp=htmlspecialchars($_POST['mot_de_passe']);

$user= new UserManager();

$users=$user->selectUser($email,$mdp);


if  (empty($users['id_user'])){
    header("location:../index.php?message=Erreur dans les identifiants renseignés.");
} else {
    session_start();
    $_SESSION['id']=$users['id_user'];
    $_SESSION['nom']=$users['name_user'];
    header('location:../vue/espace_client.php');
}



