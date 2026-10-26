<?php
$fornavn = $_POST['fornavn'];
$etternavn = $_POST['etternavn'];

echo '<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
    <style>
        .back-button {
            display: inline-block;
            padding: 0.5rem 0.75rem;
            border: 1px solid #555;
            border-radius: 4px;
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <p>God dag ' . htmlspecialchars($fornavn, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($etternavn, ENT_QUOTES, 'UTF-8') . '</p>
    <a class="back-button" href="../indextema1.html">Tilbake til Tema 1</a>
</body>
</html>';
?>
