<?php
$michis_felinos = true;
$michis_4_patas = true;
$michis_vuelan = false;
$michis_programan = false;

// And
echo "Los michis son felinos y tienen cuatro patas: ";
var_dump($michis_felinos && $michis_4_patas);

echo "Los michis son felinos y vuelan: ";
var_dump($michis_felinos && $michis_vuelan);

// Or
echo "Los michis tienen 4 patas O programan: ";
var_dump($michis_4_patas || $michis_programan);

echo "Los michis vuelan O programan: ";
var_dump($michis_vuelan || $michis_programan);

// Not
echo "Los michis NO vuelan: ";
var_dump(!$michis_vuelan);