<?php
/* slett-studium */
/*
   Programmet sletter et studium fra databasen.
*/

include("db-tilkobling.php");

?>

<h3>Slett Studium</h3>

<form action="" method="post" id="slettStudiumSkjema" name="slettStudiumSkjema">

    Velg studium

    <select name="studiumkode" id="studiumkode" required>
        <option value="">Velg studium</option>

        <?php
        $sqlSetning = "SELECT * FROM STUDIUM";
        $sqlResultat = mysqli_query($db, $sqlSetning);

        while ($rad = mysqli_fetch_array($sqlResultat))
        {
            $studiumkode = $rad["studiumkode"];
            print("<option value='$studiumkode'>$studiumkode</option>");
        }
        ?>
    </select>

    <br><br>

    <input type="submit" value="Slett studium" name="slettStudiumKnapp">

</form>

<?php

if (isset($_POST["slettStudiumKnapp"])) {
    
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

<br>
<a href="../indextema5.html">Tilbake</a>