<?php
session_start();

$accueil='Menu';
$title='Espace client';





ob_start();

?>
<div class="bienvenue">
<h1> Bienvenue Mr/Mme <?=$_SESSION['nom']?> </h1>
</div>
<div class="image">
<img src="../public/logo.jpg">
</div>
<?php

$content=ob_get_clean();

require '../templates/bases.php';