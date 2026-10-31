<?php
/* Programmet sletter et registrert klasse */

include("db-tilkobling.php");

?>

<h3>Slett klasse</h3>

<form action="" method="post" id="slettKlasse" name="slettKlasse">
    Velg klassekode
    
    <select name="klassekode" id="klassekode" required>
        <option value="">Velg klassekode</option>

        <?php
        $sqlSetning = "SELECT * FROM klasse";
        $sqlResultat = mysqli_real_query($db, $sqlSetning);

        while ($rad = mysqli_fetch_array($sqlResultat))
        {
            $klassekode = $rad["klassekode"];
            print("<option value='$klassekode'>$klassekode</option");
        }
        ?>
    </select>

    <br><br>

    <input type="submit" name="slett klasse" value="Slett klasse">

</form>

<?php

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


<br>
<a href="indexobli.html">Tilbake</a>