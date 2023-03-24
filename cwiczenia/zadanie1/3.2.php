<?php
function rzut_kostka($ilosc_rzutow)
{
    $wyniki = array();
    for ($i = 0; $i < $ilosc_rzutow; $i++) {
        $wynik = rand(1, 6);
        echo "Wynik rzutu nr " . ($i+1) . " to: " . $wynik . " \n";
        array_push($wyniki, $wynik);
    }
    return $wyniki;
}

$wyniki = rzut_kostka(5);
print_r($wyniki);
?>