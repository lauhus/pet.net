<?php

session_start();
$id=$_SESSION['id'];

require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();

require '../model/manager/PetManager.php';
require '../model/class/classPet.php';


$accueil="Retour à l'accueil";
$title="Informations sur votre animal";
$name_pet=$_GET['nom'];

$animal=new PetManager();
$animals=$animal->selectOnePet($id,$name_pet);

$Oneanimal=new Pet($animals);


ob_start();
?>

<div class="jumbotron">
    <div class="container">
        <h4>Votre animal :</h4><br>
        Nom : <?=$Oneanimal-> get_name_pet(); ?> <br>
        Type : <?=$Oneanimal->get_type(); ?><br>
        Genre : <?=$Oneanimal->get_genre(); ?><br>
        Numéro d'identifiacation : <?=$Oneanimal->get_identification(); ?> <br>
        Dernier passage du vétérinaire : <?=$Oneanimal->get_veterinaire()->format('d/m/y'); ?><br>
        Dernier soin effectué : <?=$Oneanimal->get_soins(); ?><br>
        Nourriture : <?=$Oneanimal->get_nourriture(); ?><br>
        Eau : <?=$Oneanimal->get_eau(); ?><br>
        Numéro de box : <?=$Oneanimal->get_box(); ?><br>
        Remarque : <?=$Oneanimal->get_remarque(); ?><br>
        <hr>
        Date entrée en pensions : <?=$Oneanimal->get_entree()->format('d/m/y'); ?><br>
        Date prévu de sortie : <?=$Oneanimal->get_sortie()->format('d/m/y'); ?><br>
    </div>
</div>


<?php $content=ob_get_clean();


require '../templates/bases.php';
