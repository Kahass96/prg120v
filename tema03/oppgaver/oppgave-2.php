<?php

/*
Programmet skriver ut tallene fra 1 til 10 på hver sin linje.
Eksempelet viser bruk av for-setning.
kvadratet av et tall er tallet ganget med seg selv). Det skal være ett tall og tilhørende kvadrat på hver linje.
*/

for ($i=1;$i <= 10;$i++){
    $kvadrat = $i * $i;
    echo "$i kvadratet $kvadrat<br>";
}

?>
