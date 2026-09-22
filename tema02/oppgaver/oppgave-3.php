<?php

$svar=$_POST ['student'];

if (!$svar)
    {
        echo "Du har ikke svart på spørsmålet om du er student";
    }
else if ($svar == 'ja')
    {
        echo "Du har svart ja på spørsmålet om du er student";
    }
else if ($svar == 'nei')
    {
        echo "Du har svart nei på spørsmålet om du er student";
    }
else 
    {
        echo "Du har ikke svart på ja eller nei på spørsmålet om du er student";
    }
?>
