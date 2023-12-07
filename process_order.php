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
    $customerId = $_POST['idKunde'];

    // Loop gjennom handlekurvdataene og legg dem til i databasen
    foreach ($cartItems as $item) {
        $productId = $item['ProduktID']; // Anta at 'ProduktID' er det unike produktidentifikatoren i handlekurven
        $quantity = $item['antall']++; // Anta at 'antall' er antall av dette produktet i handlekurven

        // Sett opp SQL-spørringen for å legge til bestilling
        $sql = "INSERT INTO bestilling (ProduktID, idKunde, antall) VALUES ('$productId', '$customerId', '$quantity')";

        if ($conn->query($sql) !== TRUE) {
            // Noe gikk galt ved lagring av bestilling
            echo "Feil ved lagring av bestilling: " . $conn->error;
            $conn->close();
            exit(); // Avslutt skriptet etter feil
        }
    }

    // Bestillingen ble lagt til vellykket
    echo "Bestillingen ble lagt til!";

    // Lukk tilkoblingen
    $conn->close();
}
?>
