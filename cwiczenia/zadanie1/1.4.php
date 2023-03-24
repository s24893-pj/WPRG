<?php
function Birthdate($pesel) {
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);
    
    if ($month > 0 && $month < 13) {
        $year += 1900;
    } elseif ($month > 20 && $month < 33) {
        $year += 2000;
        $month -= 20;}
    
    $birthdate = printf('%02d-%02d-%02d', $day, $month, $year);
    return $birthdate;
}
Birthdate(11241203419);
?>