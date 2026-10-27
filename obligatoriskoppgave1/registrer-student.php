<?php

/* registrer-studium */
/*
  Programmet lager et html-skjema for å registrere en student.
  Programmet registrerer data (Brukernavn, fornavn, etternavn og klassekode) i databasen.
*/
?>

<h3>Registrer Student</h3>

<form action="" method="post" id="registrerStudentskjema" name="registrerStudentskjema">
    Brukernavn
    <input type="text" id="brukernavn" name="brukernavn" placeholder="gb" required>
    <br><br>

    Fornavn
    <input type="text" id="fornavn" name="fornavn" placeholder="Geir" required>
    <br><br>

    Etternavn
    <input type="text" id="etternavn" name="etternavn" placeholder="Bjarvin" required>
    <br><br>

    Klassekode
    <input type="text" id="klassekode" name="klassekode" placeholder="IT1" required>
    <br><br>

    <input type="submit" value="Registrer Student" id="registrerStudentknapp" name="registrerStudentknapp">
    <br>

    <input type="reset" value="Nullstill" name="nullstill">
    <br>
</form>

<?php
if (isset($_POST["registrerStudentknapp"])) 
  {
    $brukernavn = $_POST["brukernavn"];
    $fornavn = $_POST["fornavn"];
    $etternavn = $_POST["etternavn"];
    $klassekode = $_POST["klassekode"];

    if (!$brukernavn || !$fornavn || !$etternavn || !$klassekode) 
      {
        print("Brukernavn, fornavn, etternavn og klassekode må fylles ut");
      }
    else
      {
        include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

        $sqlSetning = "SELECT * FROM student WHERE brukernavn = '$brukernavn';";
        $sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
          {
            print ("Student er registrert fra før");
          }
        else 
          {
            $sqlSetning = "INSERT INTO student VALUES('$brukernavn', '$fornavn', '$etternavn', '$klassekode');";

            mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen");
              /* SQL-setning sendt til databasen-serveren */

            print("Følgende klasse er nå registrert: $brukernavn $fornavn $etternavn $klassekode"); 
          }
    }
      
  }
?>
<br>
<a href="indexobli.html">Tilbake</a>