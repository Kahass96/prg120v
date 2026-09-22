<?php

$tall1=$_POST['tall1'];
$tall2=$_POST['tall2'];
$operasjon=$_POST['operasjon'];

if ($operasjon == 1)
    {
        $navn = "Addisjon";
        $resultat = $tall1 + $tall2;


        echo "Regneoperasjonen er $navn<br>";
        echo "Resultatet av operasjonen er $resultat<br>"; 
    }
else if ($operasjon ==3)
    {
        $navn = "Multiplikasjon";
        $resultat = $tall1 * $tall2;

        echo "Regneoperasjonen er Multiplikasjon<br>";
        echo "Resultatet er regneoperasjonen er $resultat";
    }
else 
echo "Det er ikke angitt en gyldig regneoperasjon";


?>