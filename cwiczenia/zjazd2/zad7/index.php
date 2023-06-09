<?php
function handleDirectory($path, $directory, $operation = 'read') {
    if (substr($path, -1) !== '/') {
        $path .= '/';
    }

    if (!is_dir($path . $directory)) {
        if ($operation === 'delete') {
            return "Katalog nie istnieje.";
        } elseif ($operation === 'read') {
            return "Katalog nie istnieje.";
        }
    }

    if ($operation === 'delete') {
        if (count(glob($path . $directory . '/*')) === 0) {
            // Usuń katalog
            if (rmdir($path . $directory)) {
                return "Katalog został usunięty.";
            } else {
                return "Nie udało się usunąć katalogu.";
            }
        } else {
            return "Katalog nie jest pusty. Nie można go usunąć.";
        }
    } elseif ($operation === 'create') {
        if (is_dir($path . $directory)) {
            return "Katalog już istnieje.";
        } else {
            if (mkdir($path . $directory)) {
                return "Katalog został utworzony.";
            } else {
                return "Nie udało się utworzyć katalogu.";
            }
        }
    } else {
        $contents = glob($path . $directory . '/*');

        if (count($contents) === 0) {
            return "Katalog jest pusty.";
        } else {
            return "Zawartość katalogu: " . implode(", ", $contents);
        }
    }
}

$path = "C:\Users\Mateusz\PhpstormProjects";
$directory = "zjazd2";
$operation = "read";

$result = handleDirectory($path, $directory, $operation);
echo $result;
?>
