<?php
session_start();
$_SESSION['card_number'] = $_POST['card_number'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['people'] = $_POST['people'];
?>

<!DOCTYPE html>
<html>
<body>

<h2>Rezerwacja hotelu - krok 2</h2>

<form action="p2.php" method="post">

    <?php
    for ($i = 1; $i <= $_SESSION['people']; $i++) {
        echo "Osoba $i - Imię: <input type='text' name='person$i' required><br>";
    }
    ?>

    <input type="submit">
</form>

</body>
</html>