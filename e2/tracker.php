<?php

/*
<?php
$name = "SANA" ;
$weightKg = 48;
$heightCm = 158 ;
$heightM = $heightCm/100;
$heightM2 = $heightM **2;

$IMC = $weightKg / $heightM2;

echo "Bonjour $name , votre IMC est $IMC";

?>

*/

function CalculerImc($name,$weightKg,$heightCm){ // fonction pour calculer IMC d'un utilisateur

$IMC = $weightKg / ($heightCm/100)**2;
    $message = "Bonjour $name , votre IMC est $IMC";
    return $message;



}

$message = CalculerImc("Sana",48,158);

echo $message;


?>