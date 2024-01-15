<?php

function calcularMitjana($notas) {
    $totalClasse = 0;
    $totalNotas = 0;

    foreach ($notas as $estudiant => $notaEstudiant) {
        $estudiantTotal = array_sum($notaEstudiant);
        $estudiantMitjana = $estudiantTotal / count($notaEstudiant);

        echo "estudiant: $estudiant, Nota Mitjana: $estudiantMitjana<br>";

        $totalClasse += $estudiantTotal;
        $totalNotas += count($notaEstudiant);
    }

    $mitjanaClasse = $totalClasse / $totalNotas;

    echo "Nota Mitjana de la classe: $mitjanaClasse<br>";
}

$notas = [
    'Xavier' => [8, 9, 7, 10, 8],
    'Anna' => [7, 6, 8, 9, 7],
    'Alex' => [5, 2, 6, 4, 3],
    
];

foreach ($notas as $estudiant => $notaEstudiant) {
    echo "$estudiant: [ " . implode(", ", $notaEstudiant) . " ]<br>";
}

calcularMitjana($notas);


?>
