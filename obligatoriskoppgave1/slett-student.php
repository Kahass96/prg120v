<?php
/* Programmet sletter et registrert student */

include("db-tilkobling.php");

?>

<h3>Slett Student</h3>

<form action="" method="post" id="slettStudentSkjema" name="slettStudentSkjema">
    Velg brukernavn

    <select name="brukernavn" id="brukernavn" required>
        <option value="">Velg brukernavn</option>

        <?php
        $sqlSetning = "SELECT * FROM student";
        $sqlResultat = mysqli_query($db, $sqlSetning);

        while ($rad = mysqli_fetch_array($sqlResultat))
        {
            $brukernavn = $rad["brukernavn"];
            print("<option value='$brukernavn'>$brukernavn</option>");
        }
        ?>
    </select>
    <br><br>
<input type="submit"
       name="slett"
       value="Slett student"
       onclick="return confirm('Er du sikker på at du vil slette denne studenten?');"></form>

<?php
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

<br>
<a href="indexobli.html">Tilbake</a>