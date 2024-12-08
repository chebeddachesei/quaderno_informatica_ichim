<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione Registrazione!</title>
</head>
<body>
    <?php
    // Controlla se i dati sono stati inviati
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera i dati inviati dal modulo
        $nome = $_POST['nome']; // Nome inserito dall'utente
        $email = $_POST['email']; // Email inserita dall'utente
        $password = $_POST['password']; // Password inserita dall'utente

        // Salva i dati in un file
        $file = fopen("utenti.txt", "w");
        fwrite($file, $email . "\n" . $password);
        fclose($file);

        // Messaggio di successo
        echo "<h1>Registrazione completata</h1>";
        echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Ora puoi accedere con le tue credenziali.</p>";

        // Link alla pagina di login
        echo '<p><a href="esercizio3.html">Vai alla pagina di login</a></p>';
    } else {
        // Messaggio di errore se la pagina è visitata senza inviare dati
        echo "<p>Errore: nessun dato inviato!</p>";
    }
    ?>
</body>
</html>
