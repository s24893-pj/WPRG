<?php
function is_prime($number) {
    $iterations = 0;
    if ($number < 2) {
        echo "Liczba iteracji: $iterations<br>";
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        $iterations++;
        if ($number % $i == 0) {
            echo "Liczba iteracji: $iterations<br>";
            return false;
        }
    }
    echo "Liczba iteracji: $iterations<br>";
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    if (!is_numeric($number) || $number < 1 || $number != round($number)) {
        echo "Błąd: Wprowadzona wartość nie jest dodatnią liczbą całkowitą.";
    } else {
        if (is_prime($number)) {
            echo "Podana liczba $number jest liczbą pierwszą.";
        } else {
            echo "Podana liczba $number nie jest liczbą pierwszą.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<body>

<h2>Sprawdź czy liczba jest liczbą pierwszą</h2>

<form action="" method="post">
    Liczba: <input type="number" name="number" min="1" required><br>
    <input type="submit">
</form>

</body>
</html>
