<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Utenti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Connessione al database
$servername = "localhost";
$username = "UseresempioPHP";
$password = "Lucausai1978";
$dbname = "esercizio_iform";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica della connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Esecuzione della query
$sql = "SELECT * FROM utenti";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Stampa della tabella degli utenti
        ?>
    <table>
        <tr>
            <th> Id Utente </th>
            <th> Username </th>
            <th> e-mail </th>
            <th> Active </th>
            <th> IsAdmin </th>
            <th> Citta </th>
        </tr>
    <?php
    while($row = $result->fetch_assoc()) {
                ?>
        <tr>
            <td><?php echo $row["id_utente"] ?></td>
            <td><?php echo  $row["username"] ?></td>
            <td><?php echo  $row["email"] ?></td>
            <td><?php echo  $row["active_"] ?></td>
            <td><?php echo  $row["is_admin"] ?></td>
            <td><?php echo  $row["id_citta"] ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
} else {
    echo "Nessun risultato trovato";
}

$conn->close();
?>
</body>
</html>
