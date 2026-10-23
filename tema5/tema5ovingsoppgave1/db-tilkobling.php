<?php /* db-tilkobling */
$db = mysqli_connect("localhost", "root", "", "ovingsoppgave5_d1");

if (!$db) {
    die("Ikke kontakt med database-server");
}
?>