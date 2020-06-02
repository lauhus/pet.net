<?php
session_start();

$accueil='Menu';
$title='Espace client';





ob_start();

?>
<h1> Bienvenue Mr/Mme <?=$_SESSION['nom']?> </h1>

<img src="../public/logo.jpg">
<?php

$content=ob_get_clean();

require '../templates/bases.php';