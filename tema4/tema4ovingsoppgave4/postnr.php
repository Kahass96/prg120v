<?php

function validerPostnr($postnr) {

    if (!$postnr) { 
        echo "Postnr er ikke fylt ut <br>";
        return false;
    }
    elseif (strlen($postnr) != 4) {
        echo "Postnr består ikke av 4 tegn <br>";
        return false;
    }
    elseif (!ctype_digit($postnr)) {
        echo "Postnr består ikke bare av siffre <br>";
        return false;
    }
    else {
        return true;
    }
}

$postnr = $_POST['postnr'];

if (validerPostnr($postnr)) {
    echo "Postnr er korrekt fylt ut <br>";
}

?>
