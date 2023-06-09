<?php
function silniaRekurencyjna($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * silniaRekurencyjna($n - 1);
}

function silniaNierekurencyjna($n) {
    $silnia = 1;
    for ($i = 2; $i <= $n; $i++) {
        $silnia *= $i;
    }
    return $silnia;
}

function fibRekurencyjny($n) {
    if ($n <= 1) {
        return $n;
    }
    return fibRekurencyjny($n - 1) + fibRekurencyjny($n - 2);
}

function fibNierekurencyjny($n) {
    if ($n <= 1) {
        return $n;
    }
    $prev = 0;
    $current = 1;
    for ($i = 2; $i <= $n; $i++) {
        $temp = $current;
        $current = $prev + $current;
        $prev = $temp;
    }
    return $current;
}

$argument = 10;

$start = microtime(true);
$wynikRekurencyjna = silniaRekurencyjna($argument);
$czasRekurencyjna = round((microtime(true) - $start) * 1000000, 2);

$start = microtime(true);
$wynikNierekurencyjna = silniaNierekurencyjna($argument);
$czasNierekurencyjna = round((microtime(true) - $start) * 1000000, 2);

$start = microtime(true);
$wynikRekurencyjnaFib = fibRekurencyjny($argument);
$czasRekurencyjnaFib = round((microtime(true) - $start) * 1000000, 2);

$start = microtime(true);
$wynikNierekurencyjnaFib = fibNierekurencyjny($argument);
$czasNierekurencyjnaFib = round((microtime(true) - $start) * 1000000, 2);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Obliczenia</title>
</head>
<body>
<h1>Obliczenia silni i ciągu Fibonacciego</h1>

<h2>Silnia</h2>
<p>Argument: <?php echo $argument; ?></p>
<p>Funkcja rekurencyjna: <?php echo $wynikRekurencyjna; ?>, czas wykonania: <?php echo $czasRekurencyjna; ?> mikrosekundy</p>
<p>Funkcja nierekurencyjna: <?php echo $wynikNierekurencyjna; ?>, czas wykonania: <?php echo $czasNierekurencyjna; ?> mikrosekundy</p>

<h2>Ciąg Fibonacciego</h2>
<p>Argument: <?php echo $argument; ?></p>
<p>Funkcja rekurencyjna: <?php echo $wynikRekurencyjnaFib; ?>, czas wykonania: <?php echo $czasRekurencyjnaFib; ?> mikrosekundy</p>
<p>Funkcja nierekurencyjna: <?php echo $wynikNierekurencyjnaFib; ?>, czas wykonania: <?php echo $czasNierekurencyjnaFib; ?> mikrosekundy</p>
</body>
</html>
