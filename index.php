<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolatrice</title>
</head>
<body>

    <form method="post">
        <label for="numero1">Inserisci numero 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <label for="numero2">Inserisci numero 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <label for="op">Scegli un operatore (1-addizione; 2-sottrazione; 3-moltiplicazione; 4-divisione):</label>
        <input type="number" id="op" name="op" required>
        <button type="submit">Calcola</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $op = $_POST["op"];

        // Controllo dell'operatore e calcolo del risultato
        if ($op == 1) {
            $risultato = $numero1 + $numero2;
            echo "<p>Il risultato è: $risultato</p>";
        } elseif ($op == 2) {
            $risultato = $numero1 - $numero2;
            echo "<p>Il risultato è: $risultato</p>";
        } elseif ($op == 3) {
            $risultato = $numero1 * $numero2;
            echo "<p>Il risultato è: $risultato</p>";
        } elseif ($op == 4) {
            if ($numero2 != 0) {
                $risultato = $numero1 / $numero2;
                echo "<p>Il risultato è: $risultato</p>";
            } else {
                echo "<p>Errore: divisione per zero non consentita.</p>";
            }
        } else {
            echo "<p>Errore: operatore non valido. Inserisci un numero tra 1 e 4.</p>";
        }
    }
    ?>
</body>
</html>

