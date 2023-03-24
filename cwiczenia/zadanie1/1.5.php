<?php

function poleTrojkata() {
    $a = readline("Podaj długość podstawy: ");
    $h = readline("Podaj wysokość: ");
    $pole = 0.5 * $a * $h;
    echo "Pole trójkąta wynosi: " . $pole . "\n";
}

function poleProstokata() {
    $a = readline("Podaj długość boku a: ");
    $b = readline("Podaj długość boku b: ");
    $pole = $a * $b;
    echo "Pole prostokąta wynosi: " . $pole . "\n";
}

function poleTrapezu() {
    $a = readline("Podaj długość podstawy a: ");
    $b = readline("Podaj długość podstawy b: ");
    $h = readline("Podaj wysokość: ");
    $pole = 0.5 * ($a + $b) * $h;
    echo "Pole trapezu wynosi: " . $pole . "\n";
}

$figura = readline("Jaką figurę chcesz obliczyc");

switch ($figura) {
    case "trojkat":
        poleTrojkata();
        break;
    case "prostokat":
        poleProstokata();
        break;
    case "trapez":
        poleTrapezu();
        break;
    default:
        echo "nie ma takiej figury\n";
}
?>