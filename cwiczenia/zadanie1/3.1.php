<?php
function maksFor($tablica) {
    $n = count($tablica);
    $maks = $tablica[0];
    for ($i = 1; $i < $n; $i++) {
        if ($tablica[$i] > $maks) {
            $maks = $tablica[$i];
        }
    }
    return $maks;
}
function maksWhile($tablica) {
    $n = count($tablica);
    $maks = $tablica[0];
    $i = 1;
    while ($i < $n) {
        if ($tablica[$i] > $maks) {
            $maks = $tablica[$i];
        }
        $i++;
    }
    return $maks;
}
function maksDoWhile($tablica) {
    $n = count($tablica);
    $maks = $tablica[0];
    $i = 1;
    do {
        if ($tablica[$i] > $maks) {
            $maks = $tablica[$i];
        }
        $i++;
    } while ($i < $n);
    return $maks;
}
function maksForeach($tablica) {
    $maks = $tablica[0];
    foreach ($tablica as $element) {
        if ($element > $maks) {
            $maks = $element;
        }
    }
    return $maks;
}
$tablica = array(3, 8, 2, 5, 1, 9, 4);
echo maksFor($tablica); 
echo maksWhile($tablica); 
echo maksDoWhilehile($tablica); 
echo maksForeach($tablica);
?>