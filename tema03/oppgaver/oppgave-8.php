<?php

// Mottar tallene som et array
$tall = $_POST['tall'];

// Skriver ut tallene i samme rekkefølge
foreach ($tall as $verdi) {
    echo $verdi . " ";
}

echo "<br>";

// Skriver ut tallene i motsatt rekkefølge
for ($i = count($tall) - 1; $i >= 0; $i--) {
    echo $tall[$i] . " ";
}

?>
