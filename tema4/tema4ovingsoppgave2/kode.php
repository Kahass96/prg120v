<?php

$klassekode = $_POST['klassekode'];
$lovligKlassekode=true;

if (!$klassekode) /* klassekode er ikke fylt ut */ {
    $lovligKlassekode=false;
    echo "Klassekode er ikke fylt ut <br>";
}

elseif (strlen($klassekode) !=3) /* Klassekode består ikke av 3 tegn */ {
    $lovligKlassekode=false;
    echo "Klassekode består ikke av 3 tegn <br>";
}

else {
    // Sjekk om de to første tegnene er bokstaver
    if (!ctype_alpha($klassekode[0]) || !ctype_alpha($klassekode[1])) {
        $lovligKlassekode = false;
        echo "De to første tegnene må være bokstaver <br>";
    }
}

// Sjekk om siste tegn er et siffer
if (!ctype_digit($klassekode[2])) {
    $lovligKlassekode = false;
    echo "Det siste tegnet må være et siffer <br>";
}

if ($lovligKlassekode) {
    echo "Klassekoden $klassekode er gyldig";
}
?>