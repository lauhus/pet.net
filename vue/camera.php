<?php 
session_start();
require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();

require '../model/manager/PetManager.php';
require '../model/class/classPet.php';

$_id=$_SESSION['id'];


$title="Voir vos animaux";
$accueil="Retour à l'accueil";

$pet=new PetManager();
$pets=$pet->selectAllPetName($_id);



ob_start(); ?>


<div class="pet_cam"> 
    <?php foreach ($pets as $value){?>
    <input type="button" class="btn btn-primary" onclick="window.location.href='camera.php?nom=<?=implode($value)?>'; " value="<?=implode($value)?>"</input>
        <?php } ?> 
</div> <?php

if (!empty($_GET['nom'])){ 
    $Oneanimal=$pet->selectOnePet($_id,$_GET['nom']);
    $animal=new Pet($Oneanimal);
    $type=$animal->get_type(); ?>
    <div class="jumbotron">
        <p class="pet_video"> Vous regardez <?= $animal->get_name_pet();?> qui est dans le box n°<?=$animal->get_box();?> </p>
    
    <video class="pet_video" controls width="600">
        <?php if ($type == 'chien'){?>
            <source src="../public/dog1.mp4" type="video/mp4"> <?php 
                } elseif ($type =='chat'){ ?>
                    <source src="../public/cat1.mp4" type="video/mp4"> <?php } ?>

   <?php } ?>



        


<?php 
$content=ob_get_clean();



require '../templates/bases.php';