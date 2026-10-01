<?php

function validerKlassekode($klassekode) {
    if (!$klassekode) {
        echo "Klassekode er ikke fylt ut <br>";
        return false;
    }

    elseif (strlen($klassekode) != 3) {
        echo "Klassekode består ikke av 3 tegn <br>";
        return false;
    }

    else {
        // Første to tegn må være bokstaver
        if (!ctype_alpha($klassekode[0]) and !ctype_alpha($klassekode[1])) {
            echo "De to første tegnene må være bokstaver <br>";
            return false;
        }

        // Siste tegn må være et siffer
        if (!ctype_digit($klassekode[2])) {
            echo "Det siste tegnet må være et siffer <br>";
            return false;
        }

        return true; // alt OK
    }
}

$klassekode = $_POST['klassekode'];

if (validerKlassekode($klassekode)) {
        echo "klassekode $klassekode er gyldig";

}

?>