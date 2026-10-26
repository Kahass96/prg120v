<?php

/* registrer-studium */
/*
  Programmet lager et html-skjema for å registrere et studium.
  Programmet registrerer data (studiumkode og studiumnavn) i databasen.
*/
?>

<h3>Registrer studium</h3>

<form action="" method="post" id="registrerstudiumskjema" name="registrerstudiumskjema">
    Studiumkode
    <input type="text" id="studiumkode" name="studiumkode" required>
    <br><br>

    Studiumnavn
    <input type="text" id="studiumnavn" name="studiumnavn" required>
    <br><br>

    <input type="submit" value="Registrer studium" id="registrerstudiumknapp" name="registrerstudiumknapp">
    <br>

    <input type="reset" value="Nullstill" name="nullstill">
    <br>
</form>

<?php
if (isset($_POST["registrerstudiumknapp"])) 
  {
    $studiumkode = $_POST["studiumkode"];
    $studiumnavn = $_POST["studiumnavn"];

    if (!$studiumkode || !$studiumnavn) 
      {
        print("Både studiumkode og studiumnavn må fylles ut");
      }
    else
      {
        include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

        $sqlSetning = "SELECT * FROM STUDIUM WHERE studiumkode = '$studiumkode';";
        $sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
          {
            print ("Studiet er registrert fra før");
          }
        else 
          {
            $sqlSetning = "INSERT INTO STUDIUM VALUES('$studiumkode', '$studiumnavn');";

            mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen");
              /* SQL-setning sendt til databasen-serveren */

            print("Følgende studium er nå registrert: $studiumkode $studiumnavn"); 
          }
    }
      
  }
?>
<br>
<a href="../index.html">Tilbake til hovedmenyen</a>