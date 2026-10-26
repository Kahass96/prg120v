<?php /* db-tilkobling */
$db = mysqli_connect("localhost", "root", "", "");

if (!$db) {
    die("Ikke kontakt med database-server");
}
?>