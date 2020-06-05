<?php 

require_once '../model/manager/PetManager.php';
$pet=new PetManager();
$pets=$pet->selectAllPetName($_SESSION['id']);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <title><?= $title ?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css.css">

    </head>
    <body>
        <div class="box">
            <div class="box1"> <a class="lien" href="espace_client.php"> <?= $accueil  ?> </a> </div>
            <div class="box2"> 
            
                <a class="nav-link dropdown-toggle lien" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fiche animal</a>
                <div class="dropdown-menu">
                <form action="../vue/fiche_animal.php" method="get">
                <?php foreach ($pets as $value){?>
                    <a  class="dropdown-item" href="../vue/fiche_animal.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
                </form>
                </div>
                
            </div>
            <div class="box3"><a class="lien" href="rendez_vous.php"> Rendez-vous </a> </div>
            <div class="box4"> <a class="lien" href="camera.php"> Acces caméra </a> </div>
            <div class="box5"> <a class="lien" href="geolocalisation.php"> Géolocalisation </a> </div>
            <div class="box6"> <a class="lien" href="contact.php"> Nous contacter </a> </div>
                </div>


            <div class="mobile">
                <div class="dropdown">
                geolocalisation.php
        <a class="dropdown-item" href="contact.php">Nous contacter </a>
        <div class="dropdown-divider"></div>
        <?php foreach ($pets as $value){?>
                    <a class="dropdown-item" href="../vue/fiche_animal.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
    </div>
    </div>

            </div>

    
    <?= $content ?>
    
    <footer class="footers">
        <p>2020 © PENSION PET.NET | Tout droits réservés     | <a href="../vue/mentionlegale.html">Mention légale</a>    </p>
        
    </footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    </body>
</html>
