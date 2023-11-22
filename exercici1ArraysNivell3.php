<?php

function elevatCub($numero) {
    return $numero ** 3;
}

$numeros = [1, 2, 3, 4, 5];

$elevatCubdnumeros = [];

foreach ($numeros as $numero) {
    $elevatCubdnumeros[] = elevatCub($numero);
}

echo "Array original: [ " . implode(", ", $numeros) . " ]<br>";
echo "Numeros del array elevats al cub: [ " . implode(", ", $elevatCubdnumeros) . " ]<br>";


?>
