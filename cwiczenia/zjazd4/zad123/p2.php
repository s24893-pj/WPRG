<?php
session_start();

for ($i = 1; $i <= $_SESSION['people']; $i++) {
    $_SESSION["person$i"] = $_POST["person$i"];
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Rezerwacja hotelu - krok 3</h2>

<p>Podsumowanie rezerwacji:</p>
<p>Numer karty: <?php echo $_SESSION['card_number']; ?></p>
<p>Imię: <?php echo $_SESSION['first_name']; ?></p>
<p>Nazwisko: <?php echo $_SESSION['last_name']; ?></p>
<p>Ilość osób: <?php echo $_SESSION['people']; ?></p>

<?php
for ($i = 1; $i <= $_SESSION['people']; $i++) {
    echo "<p>Osoba $i - Imię: " . $_SESSION["person$i"] . "</p>";
}
?>

</body>
</html>
