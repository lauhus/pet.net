<?php 

require '../model/manager/classPetManager.php';
$pet=new PetManager();
$pets=$pet->selectAllPetName($_SESSION['id']);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?= $title ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="../public/css.css">
    </head>
    <body>
        <nav>
            <div class="box1"> <a href="espace_client.php"> <?= $accueil  ?> </a> </div>
            <div class="box2"> 
            <form action="fiche_animal.php" method="get">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fiche animal</a>
                <div class="dropdown-menu" style="">
                <?php foreach ($pets as $value){?>
                    <a class="dropdown-item" href="../vue/fiche_animal.php" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
                </div>
                </form>
            </div>
            <div class="box3"><a href="rendez_vous.php"> Rendez-vous </a> </div>
            <div class="box4"> <a href="camera.php"> Acces caméra </a> </div>
            <div class="box5"> <a href="geolocalisation.php"> Géolocalisation </a> </div>
            <div class="box6"> <a href="contact.php"> Nous contacter </a> </div>
        </nav>
    
    <?= $content ?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>