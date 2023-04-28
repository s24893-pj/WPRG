<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $file = $_POST['plik'];

        if (file_exists($file)) {
            $fileContents = file($file);
            $fileContents = array_reverse($fileContents);
            file_put_contents($file, implode('', $fileContents));
            echo "Plik został zaktualizowany.";
        } else {
            echo "Podany plik nie istnieje.";
        }
    }
    ?>

    <form method="post" action="index.php">
        <label for="plik">Wybierz plik:</label>
        <input type="file" name="plik" id="plik" required>
        <br>
        <input type="submit" value="Wyślij">
    </form>

</body>
</html>