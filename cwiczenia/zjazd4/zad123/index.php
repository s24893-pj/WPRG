<?php
$visitCount = 0;
$lastVisit = 0;
$targetVisits = 10;
$refreshThreshold = 30;

if (isset($_COOKIE["visitCount"])) {
    $visitCount = $_COOKIE["visitCount"];
}
if (isset($_COOKIE["lastVisit"])) {
    $lastVisit = $_COOKIE["lastVisit"];
}

$currentTime = time();

if (($currentTime - $lastVisit) > $refreshThreshold) {
    $visitCount++;
    setcookie("visitCount", $visitCount, $currentTime + (86400 * 30), "/");
}

setcookie("lastVisit", $currentTime, $currentTime + (86400 * 30), "/");

if ($visitCount >= $targetVisits) {
    echo "Gratulacje! Odwiedziłeś naszą stronę już " . $visitCount . " razy!";
} else {
    echo "Witaj! To twoja " . $visitCount . " unikalna wizyta na naszej stronie.";
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Rezerwacja hotelu - krok 1</h2>

<form action="p1.php" action="" method="post">
    Numer karty: <input type="number" name="card_number" required><br>
    Imię: <input type="text" name="first_name" required><br>
    Nazwisko: <input type="text" name="last_name" required><br>
    Ilość osób: <input type="number" name="people" min="1" max="4" required><br>
    <input type="submit">
</form>

</body>
</html>
