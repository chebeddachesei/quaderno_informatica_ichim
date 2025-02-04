<!DOCTYPE html>
<html>
<body>

<!-- Introduzione-->
<h2>Risultato della tua scelta </h2>
<p>Questo script riceve il nome di un'auto che hai selezionato dal modulo precedente e mostra la tua scelta a schermo.</p>

<?php
// Controllo se il metodo della richiesta è POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupero della scelta dell'utente dal campo 'car'
  $car = $_POST['car'];

  // Visualizzazione della scelta con protezione contro input dannosi
  echo "<p><strong>Hai scelto:</strong> " . htmlspecialchars($car) . "</p>";
}
?>

<!-- Messaggio aggiuntivo per l'utente -->
<p>Se non hai fatto una selezione, torna indietro e scegli un'auto dal modulo precedente.</p>

</body>
</html>
