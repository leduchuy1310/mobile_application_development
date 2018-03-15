<?php
$lat = isset($_POST['lat']) ? $_POST['lat'] : false;
$long = isset($_POST['long']) ? $_POST['long'] : false;

	$geocode = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$lat.','.$long.'&key=AIzaSyAeXuUgJUBsmL9JEFM1K2AjdYJ8S6S1Lok');
	$data = json_decode($geocode);
	echo $data->results[0]->formatted_address;
?>
