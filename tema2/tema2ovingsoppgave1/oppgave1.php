<?php

$svar = $_POST['svar'];
$fasit = 9;

if ($svar == $fasit) {
    echo "Riktig. 3 ganger 3 er $svar";
} else {
    echo "Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er $fasit.";
}

?>