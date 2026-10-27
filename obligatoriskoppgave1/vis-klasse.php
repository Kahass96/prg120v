<?php
/* Vis-studium */
/* Programmet viser alle klasser i tabellen klasse. */

include("db-tilkobling.php");

$sqlSetning = "SELECT * FROM klasse;";
$sqlResultat = mysqli_query($db, $sqlSetning) or die("Ikke mulig å hente data fra databasen");
 /* SQL-setning sendt til database-serveren */

$antallRader = mysqli_num_rows($sqlResultat);
/* Antall rader i resultatet beregnet */

print("<h3>Registrerte klasser</h3>");
print("<table border=1>");
print("<tr>
        <th align=left>Klassekode</th>
        <th align=left>Klassenavn</th>
        <th align=left>Studiumkode</th></tr>");

for ($r = 1; $r <= $antallRader; $r++)
{
    $rad = mysqli_fetch_array($sqlResultat);

    $klassekode = $rad["klassekode"];
    $klassenavn = $rad["klassenavn"];
    $studiumkode = $rad["studiumkode"];

    print
    ("<tr>
        <td>$klassekode</td>
        <td>$klassenavn</td>
        <td>$studiumkode</td>
    </tr>");
}

print("</table>");

?>
<br>
<a href="indexobli.html">Tilbake</a>