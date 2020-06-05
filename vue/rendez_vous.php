<?php
session_start();

require '../model/manager/EventManager.php';
require '../model/class/classEvent.php';
require 'modal_rdv.php';

$title="Rendez-vous";
$accueil="Retour à l'accueil";

$id_u=$_SESSION['id'];


$rdv=new EventManager();
$rdvs=$rdv->selectDernierEvent($id_u);

$dernierRdv=new Event($rdvs);

$animal=new PetManager();
$animals=$animal->selectOnePetWithId($rdvs['pet_id_pet']);



ob_start(); ?>

<div class="jumbotron">
Prochain/Dernier rendez-vous : <br>
Date: <?= $dernierRdv->get_date(); ?> <br>
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