<!DOCTYPE html>
<html>
<head>
    <title>Elaborazione Login!</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Controlla se i dati sono stati inseriti
        if (!empty($email) && !empty($password)) {
            // Verifica i dati nel file
            if (file_exists("utenti.txt")) {
                $file = fopen("utenti.txt", "r");
                $email_registrato = trim(fgets($file)); // Prima riga: email
                $password_registrata = trim(fgets($file)); // Seconda riga: password
                fclose($file);

                // Confronta le credenziali
                if ($email == $email_registrato && $password == $password_registrata) {
                    echo "<h1>Login riuscito!</h1>";
                    echo "<p>Benvenuto!</p>";
                } else {
                    echo "<h1>Errore di login</h1>";
                    echo "<p>Email o password non corrette.</p>";
                }
            } else {
                echo "<p>Errore: nessun utente registrato!</p>";
            }
        } else {
            echo "<p>Errore: tutti i campi sono obbligatori!</p>";
        }
    } else {
        echo "<p>Errore: nessun dato inviato!</p>";
    }
    ?>
</body>
</html>
