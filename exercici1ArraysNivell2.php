<?php

function arrayNumeros($title, $array) {
    echo $title . ": [ " . implode(", ", $array) . " ]<br>";
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];


$interseccio = array_intersect($array1, $array2);
arrayNumeros("Array 1", $array1);
arrayNumeros("Array 2", $array2);
arrayNumeros("Interseccio", $interseccio);


$unio = array_merge($array1, $array2);
$unio = array_unique($unio);
arrayNumeros("Unio dels dos arrays", $unio);


?>