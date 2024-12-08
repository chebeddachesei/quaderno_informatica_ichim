<!DOCTYPE html>
<html>
<head>
    <title>Tabella Pitagorica!</title>
</head>
<body>
    <!-- Inizio della tabella -->
    <table border="1">
        <?php
        // Ciclo esterno: crea le righe della tabella
        for ($riga = 1; $riga <= 10; $riga++) {
            echo "<tr>"; // Inizio di una nuova riga
            // Ciclo interno: crea le celle di ogni riga
            for ($colonna = 1; $colonna <= 10; $colonna++) {
                // Calcola il prodotto di riga e colonna e lo inserisce in una cella
                echo "<td>" . ($riga * $colonna) . "</td>";
            }
            echo "</tr>"; // Fine della riga
        }
        ?>
    </table>
    <!-- Fine della tabella -->
</body>
</html>
