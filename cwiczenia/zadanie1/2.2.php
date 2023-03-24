<?php
function jaka_narodowosc($kraj) {
    $narodowosci = array(
        "Polska" => "Polska",
        "Niemcy" => "Niemiecka",
        "Francja" => "Francuska",
        "Włochy" => "Włoska",
        "Hiszpania" => "Hiszpańska",
        "Rosja" => "Rosyjska",
    );
    
    if (isset($narodowosci[$kraj])) {
        return $narodowosci[$kraj];
    } else {
        return "Nieznana narodowość";
    }
}
echo jaka_narodowosc("Niemcy");
?>