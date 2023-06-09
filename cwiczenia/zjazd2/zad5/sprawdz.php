<!DOCTYPE html>
<html>
<head>
    <title>Wyniki</title>
</head>
<body>
<?php
if (isset($_GET['data_urodzenia'])) {
    $data_urodzenia = $_GET['data_urodzenia'];

    $dzien_tygodnia = date('l', strtotime($data_urodzenia));
    echo "Urodziłeś/aś się w dniu: $dzien_tygodnia<br>";

    $dzis = new DateTime();
    $urodziny = new DateTime($data_urodzenia);
    $roznica = $dzis->diff($urodziny);
    $ukończone_lata = $roznica->y;
    echo "Ukończyłeś/aś $ukończone_lata lat<br>";

    $nastepne_urodziny = new DateTime(date('Y-m-d', strtotime('+' . ($ukończone_lata + 1) . ' years', strtotime($data_urodzenia))));
    $dni_do_urodzin = $dzis->diff($nastepne_urodziny)->days;
    echo "Do najbliższych urodzin pozostało $dni_do_urodzin dni<br>";
} else {
    echo "Nieprawidłowe dane";
}
?>
</body>
</html>
