
<?php 

session_start();
$id=$_SESSION['id'];
$title='Géolocalisation';
$accueil="Retour à l'accueil";



ob_start(); ?>
<head>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.10.1/mapbox-gl.css' rel='stylesheet' />
</head>
<div id='map' style='width: 400px; height: 300px;'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoibGF1aHUiLCJhIjoiY2tiMHc1bDNtMGMwMjJ5czkzZGllMXVrNCJ9.McURjL2T6sVt5GyGk529CA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
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
'coordinates': [6.1352739,49.1938424]
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

<?php 
$content=ob_get_clean();

require '../templates/bases.php';
