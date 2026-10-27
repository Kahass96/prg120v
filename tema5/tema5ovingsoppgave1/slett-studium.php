<?php
/* Programmet sletter et registrert studie */

include("db-tilkobling.php");

if (isset($_POST["slett"])) {
    
    $studiumkode = $_POST["studiumkode"];

    /* SQL-setning laget */
    $sqlSetning = "SELECT * FROM STUDIUM WHERE studiumkode = '$studiumkode';";

    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    if ($antallRader == 0) {
        print("Studiet finnes ikke.");
    }
    else {
        /* SQL-setning laget */
        $sqlSetning = "DELETE FROM STUDIUM WHERE studiumkode = '$studiumkode';";

        mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette studiet fra databasen");

        print("Studiet er slettet.");
    }
}
?>

<h3>Slett studium</h3>

<form action="" method="post">
    Studiumkode:
    <input type="text" name="studiumkode" required>

    <input type="submit" name="slett" value="Slett studium">
</form>

<br>
<a href="tema5/indextema5.html">Tilbake</a>