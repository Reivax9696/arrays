<?php

$integerArray = array(10, 20, 30, 40, 50, 60);

echo "Tamany del array abans de eliminar un numero: " . count($integerArray) . "<br>";

array_splice($integerArray, 2, 1);

echo "Integers en el array despres de eliminar un numero:<br>";
$length = count($integerArray);

for ($i = 0; $i < $length; $i++) {
    echo $integerArray[$i] . "<br>";
}

echo "Tamany del array despres de normalitzar els indexs: " . count($integerArray) . "<br>";



?>