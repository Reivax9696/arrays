<?php

$strings = ["taula", "cadira", "llit", "telefon", "televisio"];

function esParell($string) {
    return strlen($string) % 2 === 0;
}

$stringsParells = array_filter($strings, 'esParell');

echo "Array Original: [ " . implode(", ", $strings) . " ]<br>";
echo "Strings parells en el Array: [ " . implode(", ", $stringsParells) . " ]<br>";


?>