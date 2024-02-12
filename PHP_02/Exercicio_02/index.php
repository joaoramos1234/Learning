<?php

$celsius = 32;
$fahrenheit = $celsius * 1.8 + 32;
$kelvin =  $celsius + 273.15;

echo "<h1 style = 'font-size: 55px;' >===== Convertendo Temperatura com PHP =====</h1>";

echo "<h2 style = 'font-size: 40px;'>CELSIUS: " . $celsius . "°C </h2><hr>";
echo "<h2 style = 'font-size: 40px;'>". $celsius . "°C = " . round($fahrenheit, 1) . "F </h2<br><br>";
echo "<h2 style = 'font-size: 40px;'>". $celsius . "°C = " . round($kelvin, 2) . "°K </h2>";


?>