<?php /* Tilkobling til database-serveren */
$db = mysqli_connect("localhost", "root", "", "kahas0695");

if (!$db) {
    die("Ikke kontakt med database-serveren");
}
?>