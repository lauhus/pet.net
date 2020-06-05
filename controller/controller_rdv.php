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


$minutes_to_add=30;
$time=new DateTime($start);
$time->add(new DateInterval('PT'.$minutes_to_add.'M'));
$end=$time->format('H:i');


$rdv=new EventManager();
$rdv->AddEvent($id,$date,$start,$end,$id_pet);