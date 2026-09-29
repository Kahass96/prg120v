<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 8</title>
</head>
<body>

    <form action="" method="post">
        <label>Hva er 3 ganger 3?</label>
        <input type="number" name="svar" required>
        <input type="submit" value="Send inn">
    </form>

    <?php
    if (isset($_POST['svar'])) {
        $svar = $_POST['svar'];
        $fasit = 9;

        if ($svar == $fasit) {
            echo "Riktig. 3 ganger 3 er $svar<br>";
        } else {
            echo "Feil. 3 ganger 3 er ikke $svar.<br> 3 ganger 3 er $fasit";
        }
    }
    ?>

</body>
</html>