<?php
function tabliczka_mnozenia($bok) {
    // pętla zewnętrzna iteruje po wierszach
    for ($i = 1; $i <= $bok; $i++) {
        // pętla wewnętrzna iteruje po kolumnach
        for ($j = 1; $j <= $bok; $j++) {
            // obliczenie wyniku mnożenia i wyświetlenie w konsoli
            $wynik = $i * $j;
            printf("%4d", $wynik);
        }
        // przejście do nowego wiersza
        echo "\n";
    }
}

// wywołanie funkcji z bokiem 10
tabliczka_mnozenia(10);
?>