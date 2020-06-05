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
            <div class="box1"> <a href="espace_client.php"> <?= $accueil  ?> </a> </div>
            <div class="box2"> 
            
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fiche animal</a>
                <div class="dropdown-menu">
                <form action="../vue/fiche_animal.php" method="get">
                <?php foreach ($pets as $value){?>
                    <a class="dropdown-item" href="../vue/fiche_animal.php?nom=<?=implode($value) ?>" > <?= $value=implode($value) ?> </a>
                        <?php } ?>
                </form>
                </div>
                
            </div>
            <div class="box3"><a href="rendez_vous.php"> Rendez-vous </a> </div>
            <div class="box4"> <a href="camera.php"> Acces caméra </a> </div>
            <div class="box5"> <a href="geolocalisation.php"> Géolocalisation </a> </div>
            <div class="box6"> <a href="contact.php"> Nous contacter </a> </div>
                </div>
    
    <?= $content ?>
    

    
    </body>
</html>