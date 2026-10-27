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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tema3/indextema3.html">Tilbake</a>
</body>
</html>