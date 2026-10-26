<?php /* db-tilkobling */
$db = mysqli_connect("localhost", "root", "", "kahas0695");

if (!$db) {
    die("Ikke kontakt med database-server");
}
?>