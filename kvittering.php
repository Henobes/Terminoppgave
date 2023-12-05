<!-- receipt.php -->
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
            width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #melding {
            font-size: 1.5em;
            margin-top: 20px;
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

        // Her kan du legge til mer logikk for å håndtere bestillingsdataene etter behov

        // Sett opp SQL-spørringen for å legge til bestilling
        $customerId = $_POST['customerId'];
        $date = date('Y-m-d H:i:s'); // Bruk gjeldende dato og tid

        $sql = "INSERT INTO bestilling (kundeid, dato) VALUES ('$customerId', '$date')";

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
</body>
</html>
