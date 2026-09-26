<?php

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}

$antall = 10;
$gjennomsnitt = $sum / $antall;

echo "Summen av tallene fra 1 til 10 er $sum<br>";

echo "Gjennomsnittet av tallene fra 1 til 10 er $gjennomsnitt";

?>
