<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kvittering - Teknotoppen</title>
    <style>
        body {
            font-family: 'Dubai Medium', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            text-align: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .kvittering {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        h1 {
            color: white;
        }

        #melding {
            font-size: 1.2em;
            margin-top: 20px;
            color: #555;
        }

        .back-to-home {
            margin-top: 30px;
        }

        .back-to-home a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Teknotoppen</h1>
        <nav>
            <a href="index.php">Hjem</a>
            <a href="produkter.php">Produkter</a>
            <a href="login.php">Logg inn</a>
            <a href="#">Kontakt</a>
        </nav>
    </header>

    <div class="kvittering">
        <h2>Kvittering</h2>
        <p id="melding">Takk for din bestilling! Du vil motta en bekreftelse på e-post.</p>
        <div class="back-to-home">
            <a href="index.php">Gå tilbake til startsiden</a>
        </div>
    </div>

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

    // Sett opp SQL-spørringen for å legge til bestilling
    $customerId = $_POST['idKunde'];
    $date = date('Y-m-d H:i:s'); // Bruk gjeldende dato og tid

    // Loop gjennom elementene i handlekurven og legg til i databasen
    foreach ($cartItems as $item) {
        $productId = $item['ProduktID'];  // Juster dette avhengig av strukturen på handlekurvobjektet
        $quantity = $item['antall'];  // Juster dette avhengig av strukturen på handlekurvobjektet

        $sql = "INSERT INTO bestilling (idbestilling, ProduktID idKunde, antall, ) VALUES ('$productId', '$customerId', '$quantity', '$date')";

        if ($conn->query($sql) !== TRUE) {
            // Feil ved lagring av bestilling
            echo "Feil ved lagring av bestilling: " . $conn->error;
            break; // Avslutt løkken hvis det oppstår en feil
        }
    }

    // Lukk tilkoblingen
    $conn->close();

    // Gi en tilbakemelding til brukeren etter vellykket bestilling
    // Dette kan inkluderes i kvitteringsmeldingen eller annen responsmekanisme du foretrekker
    // echo "Bestillingen ble lagt til vellykket!";
}
?>

</body>
</html>


