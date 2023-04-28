<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Lista odnośników</title>
</head>
<body>

<?php
$filename = "odnosniki.txt";
$file = fopen($filename, "r");

echo "<h1>Lista odnośników</h1>";
echo "<ul>";

while (!feof($file)) {
    $line = fgets($file);
    $parts = explode(";", $line);
    $url = trim($parts[0]);
    $desc = trim($parts[1]);
    echo "<li><a href=\"$url\">$desc</a></li>";
}

echo "</ul>";
fclose($file);
?>

</body>
</html>