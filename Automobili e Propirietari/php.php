<?php
// Connessione al database
$conn = new mysqli("localhost", "root", "", "gestioneautomobili");

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Inserimento automobile
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targa = $_POST["targa"];
    $modello = $_POST["modello"];
    $marca = $_POST["marca"];
    $colore = $_POST["colore"];

    $sql = "INSERT INTO Automobili (Targa, Modello, Marca, Colore) VALUES ('$targa', '$modello', '$marca', '$colore')";

    if ($conn->query($sql) === TRUE) {
        echo "Automobile inserita con successo!";
    } else {
        echo "Errore: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
