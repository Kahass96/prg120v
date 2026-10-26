<?php
/* Vis-studium */
/* Programmet viser alle Emner i tabellen EMNE. */

include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM EMNE;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");
 /* SQL-setning sendt til database-serveren */

$antallRader = mysqli_num_rows($sqlResultat);
/* Antall rader i resultatet beregnet */

print("<h3>Registrerte studier</h3>");
print("<table border=1>");
print("<tr>
        <th align=left>Emnekode</th>
        <th align=left>Emnenavn</th>
        <th align=left>Studiumkode</th></tr>");

for ($r = 1; $r <= $antallRader; $r++)
{
    $rad = mysqli_fetch_array($sqlResultat);

    $emnekode = $rad["emnekode"];
    $emnenavn = $rad["emnenavn"];
    $studiumkode = $rad["studiumkode"];

    print
    ("<tr>
        <td>$emnekode</td>
        <td>$emnenavn</td>
        <td>$studiumkode</td>
    </tr>");
}

print("</table>");

?>
<br>
<a href="index.html">Tilbake til hovedmenyen</a>