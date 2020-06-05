<?php
session_start();

require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();

$accueil='Menu';
$title='Espace client';

ob_start();

if (!empty($_GET)){ $message=implode($_GET);
        ?> <div class="alert alert-primary" role="alert">
                <?= $message;  ?>
        </div> <?php } else {?>
                <div class="bienvenue"> 
                        <h1> Bienvenue Mr/Mme <?=$_SESSION['nom']?> </h1>
                        </div> <?php } ?>
                        <div class="image">
                        <img src="../public/logo.jpg">
                        </div>

                        <input type="button" class="btn btn-danger" onclick="window.location.href='../index.php?message=Vous avez été déconnecté'" value="deconnexion" </input>
<?php

$content=ob_get_clean();

require '../templates/bases.php';

