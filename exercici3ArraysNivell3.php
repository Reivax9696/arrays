<?php

function esPrimer($numero) {
    if ($numero < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false;
        }
    }
    return true;
}

$numeros = [2, 3, 5, 7, 8, 12, 13, 14];

$sumaPrimers = array_reduce($numeros, function ($acumular, $numero) {
    if (esPrimer($numero)) {
        return $acumular + $numero;
    }
    return $acumular;
}, 0);


echo "Array original: [ " . implode(", ", $numeros) . " ]<br>";
echo "Suma dels numeros primers del array: $sumaPrimers<br>";



?>