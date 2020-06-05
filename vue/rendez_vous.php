<?php
session_start();
require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();


require '../model/manager/EventManager.php';
require '../model/class/classEvent.php';
require '../model/manager/PetManager.php';


$title="Rendez-vous";
$accueil="Retour à l'accueil";

$id_u=$_SESSION['id'];


$rdv=new EventManager();
$rdvs=$rdv->selectDernierEvent($id_u);


    if (empty($rdvs)){
        ob_start(); 
            require 'modal_rdv.php';?>

            <div class="jumbotron">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Prendre un nouveau rendez-vous</button>
            </div>
<?php $content=ob_get_clean();

        require '../templates/bases.php';
    } else {

$dernierRdv=new Event($rdvs);

$animal=new PetManager();
$animals=$animal->selectOnePetWithId($rdvs['pet_id_pet']);



ob_start(); 
require 'modal_rdv.php';?>

<div class="jumbotron">
Prochain rendez-vous : <br>
Date: <?= $dernierRdv->get_date()->format('d/m/y'); ?> <br>
Heure de début : <?=$dernierRdv->get_start();?> <br>
Heure de fin : <?= $dernierRdv->get_end(); ?> <br>
Avec : <?= $animals[0]['name_pet']; ?> <br>
<hr>
<a href="https://zoom.us/join"><button type="button" class="btn btn-primary">Assister au rendez-vous</button> </a> <br>
</div>
<div class="jumbotron">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Prendre un nouveau rendez-vous
</button>
</div>
<?php
$content=ob_get_clean();

require '../templates/bases.php';
}