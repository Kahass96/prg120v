<?php

$emnekode = $_POST['emnekode'];

$lovligEmnekode = true;

if (!$emnekode) /* emnekode er ikke fylt ut */ {
    $lovligEmnekode = false;
    echo "Emnekode er ikke fylt ut <br>";
}
elseif (strlen($emnekode)!=7) /* emnekode består ikke av 7 tegn */ {
    $lovligEmnekode = false;
    echo "Emnekode består ikke av 7 tegn <br>";
}
else {
    $del1 = substr($emnekode,0,3); /* henter ut de 3 første tegnene */
    $del2 = substr($emnekode,3,3); /* henter ut de 3 neste tegnene */
    $del3 = substr($emnekode,6,1); /* henter ut det siste tegnet */

    if (!ctype_alpha($del1)) /* de 3 første tegnene inneholder ikke bare bokstaver */ {
        $lovligEmnekode = false;
        echo "Tegn 1-3 inneholder ikke bare bokstaver <br>";
    }
    if (!ctype_digit($del2)) /* de 3 neste tegnene inneholder ikke bare sifre */ {
        $lovligEmnekode = false;
        echo "Tegn 4-6 inneholder ikke bare sifre <br>";
    }
    if (!ctype_alpha($del3) and !ctype_digit($del3)) /* det siste tegnet inneholder ikke bokstav eller siffer */ {
        $lovligEmnekode = false;
    }

    if ($lovligEmnekode) /* emnekode er korrekt fylt ut */ {
        echo "Emnekode er korrekt fylt ut <br>";
    }
}


?>