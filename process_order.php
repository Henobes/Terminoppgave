<?php
// Koble til databasen
session_start();
include "database.php";

// Sjekk tilkobling
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Legg til bestilling i databasen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hent data fra handlekurven (antatt at det er lagret i localStorage)
    $cartItems = json_decode($_POST['cartItems'], true);

    // Her kan du legge til mer logikk for å håndtere bestillingsdataene etter behov

    // Sett opp SQL-spørringen for å legge til bestilling
    $customerId = $_POST['customerId'];
    $date = date('Y-m-d H:i:s'); // Bruk gjeldende dato og tid

    $sql = "INSERT INTO bestilling (idbestilling, kundeid, dato) VALUES ('$customerId', '$date')";

    if ($conn->query($sql) === TRUE) {
        // Bestillingen ble lagt til vellykket
        echo "Bestillingen ble lagt til!";
    } else {
        // Feil ved lagring av bestilling
        echo "Feil ved lagring av bestilling: " . $conn->error;
    }

    // Lukk tilkoblingen
    $conn->close();
}
?>
