<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Nie można dzielić przez zero!";
                return;
            }
            break;
    }

    echo "Wynik: $result";
}
?>
<html>
<body>
<form action="" method="POST">
    Liczba 1: <input type="number" name="num1" required><br>
    Liczba 2: <input type="number" name="num2" required><br>
    Działanie:
    <select name="operation" required>
        <option value="add">Dodawanie</option>
        <option value="subtract">Odejmowanie</option>
        <option value="multiply">Mnożenie</option>
        <option value="divide">Dzielenie</option>
    </select>
    <br>
    <input type="submit" value="Oblicz">
</form>
</body>
</html>
