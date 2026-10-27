<?php
/* Programmet sletter et registrert emne */

include("db-tilkobling.php");

if (isset($_POST["slett"])) {
    
    $emnekode = $_POST["emnekode"];

    /* SQL-setning laget */
    $sqlSetning = "SELECT * FROM EMNE WHERE emnekode = '$emnekode';";

    $sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");

    $antallRader = mysqli_num_rows($sqlResultat);

    if ($antallRader == 0) {
        print("Emnet finnes ikke.");
    }
    else {
        /* SQL-setning laget */
        $sqlSetning = "DELETE FROM EMNE WHERE emnekode = '$emnekode';";

        mysqli_query($db, $sqlSetning) or die("Ikke mulig å slette emnet fra databasen");

        print("Emnet er slettet.");
    }
}
?>

<h3>Slett emne</h3>

<form action="" method="post">
    Emnekode:
    <input type="text" name="emnekode" required>

    <input type="submit" name="slett" value="Slett emne">
</form>

<br>
<a href="tema5/indextema5.html">Tilbake</a>