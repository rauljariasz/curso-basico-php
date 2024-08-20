<?php

$numerito = "5";

var_dump($numerito); // string(1)

// casting
$numerito = (int) $numerito;

var_dump($numerito); // int(5)

// Lo inicializamos como float
$float = 4.22;

var_dump($float); // float

// Lo cambiamos a int (Le quite los decimales, NO LO REDONDEA)
$float = (int) $float; 

var_dump($float); // int

echo "\n";