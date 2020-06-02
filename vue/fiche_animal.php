<?php


session_start();



$accueil="Retour à l'accueil";
$title="Informations sur votre animal";
$name_pet=implode($_GET);

$animal=new PetManager();
$animals=$animal->selectOnePet($_SESSION['id'],$name_pet);

ob_start(); ?>

<? var_dump($animals); ?>




<?php $content=ob_get_clean();


require '../templates/bases.php';