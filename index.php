<?php
session_start();
require 'vue/modal_connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Pet.net</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css.css">
    </head>
    <body>
    <div class="bloc1">
        <img src="public/logo.jpg" alt="logo pet.net" height="150px" width="150px" />
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Se connecter
</button>
    <?php if (!empty($_SESSION['id'])){ ?>
         <input type="button" class="btn btn-primary" onclick="window.location.href='vue/espace_client.php'" value="Acceder à l'espace client"</input>
    <?php }?>
    </div>
    <div class="bloc2">
    <?php if (!empty($_GET)){ $message=implode($_GET);
    ?> <div class="alert alert-danger message" role="alert">
        <?= $message;
            session_destroy();} ?> 
        </div>
        <h1 class="titre"> Pet.net </h1>
        <div class="photo-para">
        <p> Bienvenue sur Pet.net la solution tranquillité pour faire garder vos animaux </p>
        <img class="img-responsive photo" src="public/background.jpg" alt="photo avec un chaton et un chiot"/>
        </div>
    </div>
    <div class="bloc3">
        <div class="mibloc1">
            <p>
        Pension pour Chats et Chiens<br>
Rue des Animaux<br>
57000 METZ France<br>

Contactez-nous : <br>

+33 0300000000 <br>
pension.petnet@mail.fr
            </p>
        </div>
        <div class="mibloc2">
            <p>
            Ouvert 7 jours sur 7<br>
De 09h00 à 18h00<br>

Inscription sur place <br> 
avec rendez-vous<br>
            </p>
        </div>
        <div class="mibloc3">
            <p>
            Box individuel et spacieux avec chauffage <br>
Parc extérieur de 600m²<br>
Balade individuelle ou en groupe <br>
Soigneur aux petits soins<br>
            </p>
        </div>
    </div>
    <footer class="footers">
    2020 © PENSION DE PET.NET | Tout droits réservés
        <a href="/vue/mentionlegale.html">Mention légale</a>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

