<?php
session_start();
require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();

$title="Contactez-nous";
$accueil="Retour à l'accueil";





ob_start(); ?>

<div class="jumbotron contact">
    <div class="adresse">
7 Pension pour Chats et Chiens <br>
Rue des Animaux<br>
57000 METZ France<br>
</div>
<hr>
<div class="tel">
Contactez-nous :
+33 0300000000
</div>
<hr>
<div class="mail">
pension.petnet@mail.fr
</div>
</div>

<?php
$content=ob_get_clean();


require '../templates/bases.php';