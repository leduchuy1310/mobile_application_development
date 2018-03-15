<?php
$latA = isset($_POST['latA']) ? $_POST['latA'] : false;
$longA = isset($_POST['longA']) ? $_POST['longA'] : false;
$latB = isset($_POST['latB']) ? $_POST['latB'] : false;
$longB = isset($_POST['longB']) ? $_POST['longB'] : false;



$R = 6371;
	$dLat = ($latB - $latA) * (pi() / 180);
$dLon = ($longB - $longA) * (pi() / 180);
$la1ToRad = $latA * (pi() / 180);
$la2ToRad = $latB * (pi() / 180);
$a = sin($dLat / 2) * sin($dLat / 2) + cos($la1ToRad)
* cos($la2ToRad) * sin($dLon / 2) * sin($dLon / 2);
$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
$d = $R * $c;

echo($d);

//echo ($latA.$latB.$longA.$longB);
?>
