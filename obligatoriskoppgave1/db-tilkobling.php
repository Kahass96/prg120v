<?php /* Tilkobling til database-serveren */
$db = mysqli_connect("localhost", "root", "", "prg120v_obligatorisk_oppgave1");

if (!$db) {
    die("Ikke kontakt med database-serveren");
}
?>