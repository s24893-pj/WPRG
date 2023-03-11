<?php
function rzut_kostka()
{
    echo("wynik rzutu kostka to:");
    return rand(1, 6);
}

echo(rzut_kostka());
?>