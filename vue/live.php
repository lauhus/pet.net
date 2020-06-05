<?php 

session_start();
require '../model/manager/PetManager.php';
require '../model/class/classPet.php';
require '../model/manager/EventManager.php';

$accueil="Retour à l'accueil";
$title='Vidéo du box';

$id=$_SESSION['id'];

$name_pet=$_GET['nom'];

$pet=new PetManager();

$pets=$pet->selectOnePet($id,$name_pet);

$animal=new Pet($pets);
$type=$animal->get_type();




ob_start(); ?>

<div class="container">
    <p> Vous regardez <?= $animal->get_name_pet();?> qui est dans le box n°<?=$animal->get_box();?> </p>
    
<video controls width="400">
    <?php if ($type == 'chien'){?>
    <source src="../public/dog1.mp4" type="video/mp4"> <?php 
    } elseif ($type =='chat'){ ?>
    <source src="../public/cat1.mp4" type="video/mp4"> <?php } ?>

    }
</video>
</div>




<?php

$content=ob_get_clean();

require '../templates/bases.php';


