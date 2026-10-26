<?php
    if (isset($_POST['svar'])) {
        $svar = $_POST['svar'];
        $fasit = 9;

        if ($svar == $fasit) {
            echo "Riktig. 3 ganger 3 er $svar<br>";
        } else {
            echo "Feil. 3 ganger 3 er ikke $svar.<br> 3 ganger 3 er $fasit";
        }
    }
?>
