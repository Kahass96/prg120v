<?php

/* registrer-studium */
/*
  Programmet lager et html-skjema for å registrere et klasse.
  Programmet registrerer data (klassekode, klassenavn og studiumkode) i databasen.
*/
?>

<h3>Registrer Klasse</h3>

<form action="" method="post" id="registrerKlasseskjema" name="registrerKlasseskjema">
    Klassekode
    <input type="text" id="klassekode" name="klassekode" required>
    <br><br>

    Klassenavn
    <input type="text" id="klassenavn" name="klassenavn" required>
    <br><br>

    Studiumkode
    <input type="text" id="studiumkode" name="studiumkode" required>
    <br><br>

    <input type="submit" value="Registrer Klasse" id="registrerklasseknapp" name="registrerklasseknapp">
    <br>

    <input type="reset" value="Nullstill" name="nullstill">
    <br>
</form>

<?php
if (isset($_POST["registrerklasseknapp"])) 
  {
    $klassekode = $_POST["klassekode"];
    $klassenavn = $_POST["klassenavn"];
    $studiumkode = $_POST["studiumkode"];

    if (!$klassekode || !$klassenavn || !$studiumkode) 
      {
        print("Klassekode, klassenavn og studiumkode må fylles ut");
      }
    else
      {
        include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

        $sqlSetning = "SELECT * FROM klasse WHERE klassekode = '$klassekode';";
        $sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
          {
            print ("Klasse er registrert fra før");
          }
        else 
          {
            $sqlSetning = "INSERT INTO klasse VALUES('$klassekode', '$klassenavn', '$studiumkode');";

            mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen");
              /* SQL-setning sendt til databasen-serveren */

            print("Følgende klasse er nå registrert: $klassekode $klassenavn $studiumkode"); 
          }
    }
      
  }
?>
<br>
<a href="../index.html">Tilbake til hovedmenyen</a>