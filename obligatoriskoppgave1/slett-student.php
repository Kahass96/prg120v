<?php
/* Programmet sletter et registrert student */

include("db-tilkobling.php");

if (isset($_POST["slett"])) {
    
    $brukernavn = $_POST["brukernavn"];

    /* SQL-setning laget */
    $sqlSetning = "SELECT * FROM student WHERE brukernavn = '$brukernavn';";

    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    if ($antallRader == 0) {
        print("Klassen finnes ikke.");
    }
    else {
        /* SQL-setning laget */
        $sqlSetning = "DELETE FROM student WHERE brukernavn = '$brukernavn';";

        mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette studenten fra databasen");

        print("Studenten er slettet.");
    }
}
?>

<h3>Slett student</h3>

<form action="" method="post" onsubmit="return confirm('Er du sikker?')">
    Brukernavn:
    <input type="text" name="brukernavn" required>

    <input type="submit" name="slett" value="Slett student">

</form>

<br>
<a href="indexobli.html">Tilbake</a>