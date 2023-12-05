<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer deg - Chatt app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                
                 
            </div>
            <h1> Teknotoppen</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Hjem</a></li>
                <li><a href="chat.php">Produkter</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <section class="register-section">
                <h2>Registrer deg</h2>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="brukernavn">Brukernavn:</label>
                        <input type="text" id="brukernavn" name="brukernavn" placeholder="Velg et brukernavn" required>
                    </div>

                    <div class="form-group">
                        <label for="passord">Passord:</label>
                        <input type="password" id="passord" name="passord" placeholder="Velg et passord" required>
                    </div>

                    <button type="submit">Registrer deg</button>
                </form>
            </section>
            <?php
include 'database.php';

// Behandle registreringsforespørsel
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sjekk om nødvendige POST-variabler er satt
    if (isset($_POST["brukernavn"]) && isset($_POST["passord"])) {
        $brukernavn = $_POST["brukernavn"];
        $passord = password_hash($_POST["passord"], PASSWORD_BCRYPT); // Krypterer passordet

        // Sett opp SQL-spørring for å legge til bruker i databasen med standardverdi for kontaktinformasjon og leveringsadresse
        $sql = "INSERT INTO kunde (brukernavn, epost, leveringsadresse, passord) VALUES ('$brukernavn', '', '', '$passord')";

        // meldinger feilsøking
        if ($conn->query($sql) === TRUE) {
            echo "Registrering vellykket!";
        } else {
            echo "Feil ved registrering: " . $conn->error;
        }
    } else {
        echo "Mangler nødvendige data for registrering.";
    }
} else {
    echo "Ingen data mottatt fra skjema.";
}

// Lukk tilkoblingen
$conn->close();
?>


        </div>

        <footer>
       
            <p>&copy; <?php echo date('Y'); ?> </p>
        </footer>
    </div>
</body>
</html>

