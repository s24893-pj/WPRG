<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zad 4</title>
</head>
<body>
    
<?php
$ip_file = fopen("ip.txt", "r");

while ($ip = fgets($ip_file)) {
    if (trim($ip) === $_SERVER['REMOTE_ADDR']) {
        include 'admin.html';
        fclose($ip_file);
        exit();
    }
}

include 'user.html';
fclose($ip_file);
?>


</body>
</html>