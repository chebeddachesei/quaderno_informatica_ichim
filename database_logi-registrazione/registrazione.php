<?php
$host = 'localhost';
$db = 'nome_database';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $sql = "INSERT INTO utenti (nome, cognome, username, password) VALUES (:nome, :cognome, :username, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['nome' => $nome, 'cognome' => $cognome, 'username' => $username, 'password' => $password]);

        echo "Registrazione completata con successo!";
    }
} catch (PDOException $e) {
    echo "Errore: " . $e->getMessage();
}
?>
