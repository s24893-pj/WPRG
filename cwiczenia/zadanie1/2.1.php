<?php
function losowa_tablica($indeks) {
    $tablica = array(); 
    for ($i = 0; $i < 10; $i++) {
        $tablica[] = rand(1, 100);
    }
    if (isset($tablica[$indeks])) { 
        return $tablica[$indeks];
    } else {
        return "Nie ma takiego indeksu w tablicy."; 
    }
}
echo losowa_tablica(3);
?>