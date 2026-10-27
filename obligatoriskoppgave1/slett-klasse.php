<?php
/* Programmet sletter et registrert klasse */

include("db-tilkobling.php");

if (isset($_POST["slett"])) {
    
    $klassekode = $_POST["klassekode"];

    /* SQL-setning laget */
    $sqlSetning = "SELECT * FROM klasse WHERE klassekode = '$klassekode';";

    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    if ($antallRader == 0) {
        print("Klassen finnes ikke.");
    }
    else {
        /* SQL-setning laget */
        $sqlSetning = "DELETE FROM klasse WHERE klassekode = '$klassekode';";

        mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette klassen fra databasen");

        print("Klassen er slettet.");
    }
}
?>

<h3>Slett klasse</h3>

<form action="" method="post" onsubmit="return confirm('Er du sikker?')">
    klassekode:
    <input type="text" name="klassekode" placeholder="IT1" required>

    <input type="submit" name="slett" value="Slett klasse">

</form>

<br>
<a href="indexobli.html">Tilbake</a>