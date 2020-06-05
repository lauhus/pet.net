<?php 
session_start();
require '../model/manager/PetManager.php';

$_id=$_SESSION['id'];

$title="Voir vos animaux";
$accueil="Retour à l'accueil";

$pet=new PetManager();
$pets=$pet->selectAllPetName($_id);


ob_start(); ?>
<div class="pet_cam"> 

<?php foreach ($pets as $value){?>
    <input type="button" class="btn btn-primary" onclick="window.location.href='live.php?nom=<?=implode($value)?>'; " value="<?=implode($value)?>"</input>
        <?php } ?>

        


<?php 
$content=ob_get_clean();

require '../templates/bases.php';