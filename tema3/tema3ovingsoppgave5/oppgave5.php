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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="tema3">Tilbake</a>
</body>
</html>