<?php
$svar = $_POST['svar'] ?? ''; // Tar imot svaret, tom streng hvis

if ($svar === '') {
    echo "Du har ikke svart på spørsmålet om du er student";
} elseif ($svar === 'j') {
    echo "Du har svart ja på spørsmålet om du er student";
} elseif ($svar === 'n') {
    echo "Du har svart nei på spørsmålet om du er student";
} else {
    echo "Du har ikke svar ja eller nei på spørsmålet om du er student";
}

?>
