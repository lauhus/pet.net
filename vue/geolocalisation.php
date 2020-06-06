
<?php 
session_start();
require '../model/manager/UserManager.php';
$connecte=new UserManager();
$connecte->connecte();

require '../model/manager/PetManager.php';
require '../model/class/classPet.php';
$id=$_SESSION['id'];
$title='Géolocalisation';
$accueil="Retour à l'accueil";

$pet=new PetManager();
$pets=$pet->selectAllPetName($id);


ob_start(); ?>

<div class="pet_cam"> 

<?php foreach ($pets as $value){?>
    <input type="button" class="btn btn-primary" onclick="window.location.href='geolocalisation.php?nom=<?=implode($value)?>'; " value="<?=implode($value)?>"</input>
        <?php } ?>
</div>
<?php 

if (!empty($_GET['nom'])){
    $oneAnimal=$pet->selectOnePet($id,$_GET['nom']);
    $animal=new Pet($oneAnimal);
    $latitude=json_encode($animal->get_gps_latitude());
    $longitude=json_encode($animal->get_gps_longitude());
?>
    <head>
        <script src='https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js'></script>
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css' rel='stylesheet' />
    </head>
    <div class="map" id='map' style='width: 600px; height: 500px;'></div>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoibGF1aHUiLCJhIjoiY2tiMHc1bDNtMGMwMjJ5czkzZGllMXVrNCJ9.McURjL2T6sVt5GyGk529CA';
            var longitude=<?php echo $longitude; ?>;
            var latitude=<?php echo $latitude;  ?>;
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center:[longitude,latitude],
            zoom: 14
            });
                map.on('load', function() {
                map.loadImage(
                'https://upload.wikimedia.org/wikipedia/commons/7/7c/201408_cat.png',
            function(error, image) {
                if (error) throw error;
                    map.addImage('cat', image);
                    map.addSource('point', {
                            'type': 'geojson',
                            'data': {
                            'type': 'FeatureCollection',
                            'features': [
                        {
                        'type': 'Feature',
                        'geometry': {
                        'type': 'Point',
                        'coordinates': [longitude,latitude]
                            }
                        }
                    ]
                }
            });
                    map.addLayer({
                        'id': 'points',
                        'type': 'symbol',
                        'source': 'point',
                        'layout': {
                        'icon-image': 'cat',
                        'icon-size': 0.25
                        }
                    });
                }
            );
        });
    </script>

<?php } ?>

<?php 
$content=ob_get_clean();

require '../templates/bases.php';
