<?php

echo "Hola mundo en PHP \n";

// Variables
$nombre = "Rauling";
$apellido = "Arias";

// Concatenación
echo "Yo me llamo " . $nombre . " " . $apellido . "\n";

// Podemos agregarlo directamente dentro de comillas dobles "", comillas simples '' no se puede
echo "Mi nombre es $nombre $apellido \n";

$number_1 = 3;
$number_2 = 7;

// No suma
echo $number_1 . $number_2 . "\n";

echo ($number_1 + $number_2) . "\n";

$personas = [
    "Carlos" => 22,
    "Mr. Reymond" => 15,
    "Juan" => 54
];

// Ver información de variables
echo "var_dum: ";
var_dump($personas);

echo "print_r: ";
print_r($personas);

echo "\n";

