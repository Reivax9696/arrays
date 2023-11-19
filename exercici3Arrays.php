<?php

function lletraParaules($paraules, $caracter) {
    
    foreach ($paraules as $paraula) {
        
        if (strpos($paraula, $caracter) === false) {
            
            return false;
        }
    }
    return true;
}


$paraules1 = ["hola", "php", "html"];
$caracter1 = "h";
$resultat1 = lletraParaules($paraules1, $caracter1);
echo "Resultat 1: " . ($resultat1 ? "true" : "false") . "<br>";

$paraules2 = ["hola", "php", "html"];
$caracter2 = "l";
$resultat2 = lletraParaules($paraules2, $caracter2);
echo "Resultat 2: " . ($resultat2 ? "true" : "false") . "<br>";


?>