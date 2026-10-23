<?php
    $postnr = $_POST['postnr'];


if (!$postnr) {
    echo "Postnr er ikke fylt ut <br>";
    
}
elseif (strlen($postnr)!=4) {
    echo "Postnr består ikke av 4 tegn <br>";
}

elseif (!ctype_digit($postnr)) {
    echo "Postnr består ikke bare av siffre <br>";
}
else {
    echo "Postnr er korrekt fylt ut <br>";
}

?>