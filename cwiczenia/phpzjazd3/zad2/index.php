<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 2</title>
</head>
<body>
    
<?php
$filename = "licznik.txt";
$count = 1;

if (file_exists($filename)) {
    $count = (int) file_get_contents($filename);
    $count++;
}

file_put_contents($filename, $count);

echo "Liczba odwiedzin: $count";
?>

</body>
</html>