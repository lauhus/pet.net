<?php
session_start();
require '../model/manager/classPetManager.php';
$accueil="Retour à l'accueil";
$title="Informations sur votre animal";

$animal=new PetManager();
$animals=$animal->selectOnePet($_SESSION['id'],$_GET);

ob_start(); ?>

<? var_dump($animals); ?>




<?php $content=ob_get_clean();


require '../templates/bases.php';