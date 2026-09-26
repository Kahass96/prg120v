<?php

$navn = $_POST['navn'];

// Del navnet ved mellomrom
$del = explode(" ", $navn);

// fornavn er første del
$fornavn = $del[0];

// Etternavn er siste del
$etternavn = $del[count($del) - 1];

echo "Fornavnet er $fornavn<br>";
echo "Etternavnet er $etternavn<br>";


?>
