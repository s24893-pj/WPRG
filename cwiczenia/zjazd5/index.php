<!DOCTYPE html>
<html>
<head>
    <title>Moja Baza Samochodów</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mojaBaza";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<a href='?page=home'>Strona główna</a> | ";
echo "<a href='?page=all'>Wszystkie samochody</a> | ";
echo "<a href='?page=add'>Dodaj samochód</a>";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'home':
        $sql = "SELECT id, marka, model, cena FROM samochody ORDER BY cena ASC LIMIT 5";
        $result = $conn->query($sql);
        echo "<table>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['marka']}</td><td>{$row['model']}</td><td>{$row['cena']}</td></tr>";
        }
        echo "</table>";
        break;

    case 'all':
        $sql = "SELECT id, marka, model, cena, rok, opis FROM samochody ORDER BY rok DESC";
        $result = $conn->query($sql);
        echo "<table>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['marka']}</td><td>{$row['model']}</td><td>{$row['cena']}</td><td>{$row['rok']}</td><td>{$row['opis']}</td></tr>";
        }
        echo "</table>";
        break;

    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $marka = $conn->real_escape_string($_POST['marka']);
            $model = $conn->real_escape_string($_POST['model']);
            $cena = $conn->real_escape_string($_POST['cena']);
            $rok = $conn->real_escape_string($_POST['rok']);
            $opis = $conn->real_escape_string($_POST['opis']);

            $sql = "INSERT INTO samochody (marka, model, cena, rok, opis) VALUES ('$marka', '$model', $cena, $rok, '$opis')";
            if ($conn->query($sql) === TRUE) {
                echo "New car created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<form method='POST'>";
            echo "Marka: <input type='text' name='marka'><br>";
            echo "Model: <input type='text' name='model'><br>";
            echo "Cena: <input type='text' name='cena'><br>";
            echo "Rok: <input type='text' name='rok'><br>";
            echo "Opis: <textarea name='opis'></textarea><br>";
            echo "<input type='submit' value='Dodaj samochód'>";
            echo "</form>";
        }
        break;

    case 'details':
        $id = $_GET['id'];
        $sql = "SELECT * FROM samochody WHERE id=$id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "Marka: {$row['marka']}<br>";
        echo "Model: {$row['model']}<br>";
        echo "Cena: {$row['cena']}<br>";
        echo "Rok: {$row['rok']}<br>";
        echo "Opis: {$row['opis']}<br>";
        break;
}

$conn->close();
?>

</body>
</html>