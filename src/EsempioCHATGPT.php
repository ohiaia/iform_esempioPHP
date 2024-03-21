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
$username = "username";
$password = "password";
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
    <?
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><? $row["id_utente"] ?></td>
            <td><? $row["username"] ?></td>
            <td><? $row["email"] ?></td>
            <td><? $row["active_"] ?></td>
            <td><? $row["is_admin"] ?></td>
            <td><? $row["id_citta"] ?></td>
        </tr>
        <?
    }
    ?>
    </table>
    <?
} else {
    echo "Nessun risultato trovato";
}

$conn->close();
?>
</body>
</html>
