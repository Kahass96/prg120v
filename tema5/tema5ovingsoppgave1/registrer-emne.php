<?php

/* registrer-studium */
/*
  Programmet lager et html-skjema for å registrere et studium.
  Programmet registrerer data (emnekode, emnenavn og studiumkode) i databasen.
*/
?>

<h3>Registrer Emne</h3>

<form action="" method="post" id="registrerEmneskjema" name="registrerEmneskjema">
    Emnekode
    <input type="text" id="emnekode" name="emnekode" required>
    <br><br>

    Emnenavn
    <input type="text" id="emnenavn" name="emnenavn" required>
    <br><br>

    Studiumkode
    <input type="text" id="studiumkode" name="studiumkode" required>
    <br>

    <input type="submit" value="Registrer Emne" id="registreremneknapp" name="registreremneknapp">
    <br>

    <input type="reset" value="Nullstill" name="nullstill">
    <br>
</form>

<?php
if (isset($_POST["registreremneknapp"])) 
  {
    $emnekode = $_POST["emnekode"];
    $emnenavn = $_POST["emnenavn"];
    $studiumkode = $_POST["studiumkode"];

    if (!$emnekode || !$emnenavn || !$studiumkode) 
      {
        print("Emnekode, emnenavn og studiumkode må fylles ut");
      }
    else
      {
        include("db-tilkobling.php");  /* tilkobling til database-serveren utført og valg av database foretatt */

        $sqlSetning = "SELECT * FROM EMNE WHERE emnekode = '$emnekode';";
        $sqlResultat = mysqli_query($db,$sqlSetning) or die ("ikke mulig å hente data fra databasen");
        $antallRader = mysqli_num_rows($sqlResultat);

        if ($antallRader!=0) 
          {
            print ("Emne er registrert fra før");
          }
        else 
          {
            $sqlSetning = "INSERT INTO EMNE VALUES('$emnekode', '$emnenavn', '$studiumkode');";

            mysqli_query($db, $sqlSetning) or die("Ikke mulig å registrere data i databasen");
              /* SQL-setning sendt til databasen-serveren */

            print("Følgende Emne er nå registrert: $emnekode $emnenavn $studiumkode"); 
          }
    }
      
  }
?>
<br>
<a href="indextema5.html">Tilbake</a>