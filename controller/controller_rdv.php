<?php 
session_start();
require '../model/manager/EventManager.php';
require '../model/manager/PetManager.php';



$id=$_SESSION['id'];

$date=htmlspecialchars($_POST['date']);
$start=htmlspecialchars($_POST['start']);
$name_pet=htmlspecialchars($_POST['name_pet']);



$pet=new PetManager();
$pets=$pet->selectOnePet($id,$name_pet);

$id_pet=$pets[0]['id_pet'];


$rdv=new EventManager();
$rdv->AddEvent($id,$date,$start,$id_pet);

if ($rdv){
    header('location:../vue/espace_client.php?message=Nouveau rendez-vous validé');
} else {
    header('location:../vue/rendez_vous.php?message=Erreur veuillez rééssayer');
}