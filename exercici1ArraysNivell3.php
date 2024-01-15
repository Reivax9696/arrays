<?php

$arrayEnters = [1, 2, 3, 4, 5, 10, 20];
$numero;

function cub($numero){
    return $numero * $numero * $numero;
}


$cub = array_map('cub', $arrayEnters);

print_r($cub);

?>
