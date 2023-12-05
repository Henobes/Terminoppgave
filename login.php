<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chatt app</title>
</head>
<body>
    <!-- Container for hele siden -->
    <div class="container">
        <!-- Header-seksjon -->
        <header>
            <!-- Logo og overaskrift -->
            <div class="logo">
            </div>
            <h1>Teknotoppen</h1>
        </header>

        <!-- meny -->
        <nav>
            <ul>
                <!-- Lenker til forskjellige sider -->
                <li><a href="index.php.">Hjem</a></li>
                <li><a href="produkter.php">Produkter</a></li>
                <li><a href="#">Hjelp</a></li>
            </ul>
        </nav>

        <!-- Hovedinnhold -->
        <div class="main-content">
            <!-- Seksjon for pålogging -->
            <section class="login-section">
                <h2>Login</h2>
                <!-- Skjema for pålogging -->
                <form action="produkter.php" method="post">
                    <!-- Brukernavn-inndatafelt -->
                    <div class="form-group">
                        <label for="brukernavn">Brukernavn:</label>
                        <input type="text" id="brukernavn" name="brukernavn" placeholder="Skriv inn ditt brukernavn" required>
                    </div>

                    <!-- Passord-inndatafelt -->
                    <div class="form-group">
                        <label for="passord">Passord:</label>
                        <input type="password" id="passord" name="passord" placeholder="Skriv inn ditt passord" required>
                    </div>

                    <!-- Innsending-knapp -->
                    <button type="submit">Logg inn</button>
                </form>
                <!-- Seksjon for registrering -->
                <div class="register-section">
                    <p>Har du ikke en konto? <a href="register.php">Registrer deg</a></p>
                </div>
            </section>
            <!-- PHP-kode for innlogging -->
            <?php
session_start();
include "database.php";

if (isset($_POST['brukernavn']) && isset($_POST['passord'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $brukernavn = validate($_POST['brukernavn']);
    $passord = validate($_POST['passord']);

    if (empty($brukernavn) || empty($passord)) {
        echo "Begge feltene må fylles ut.";
        exit();
    }

    $sql = "SELECT * FROM kunde WHERE brukernavn='$brukernavn'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($passord, $row['passord'])) {
                $_SESSION['brukernavn'] = $row['brukernavn'];
                $_SESSION['idkunde'] = $row['idKunde'];

                // Velkomstmelding
                // ...

                // Omdirigering etter vellykket innlogging
                $redirect_path = "/path/til/din/nettsted/produkter.php";
                if (header("Location: $redirect_path")) {
                    exit();
                } else {
                    echo "Feil ved omdirigering.";
                }
            } else {
                echo "Feil passord.";
            }
        } else {
            echo "Ingen bruker funnet med dette brukernavnet.";
        }
    } else {
        echo "Feil med spørring: " . mysqli_error($conn);
    }

    // Lukk resultatsettet
    mysqli_free_result($result);
    // Lukk databasetilkoblingen
    mysqli_close($conn);
} else {
    echo "Mangler nødvendige data.";
    exit();
}
?>



        </div>

        <!-- Footer-seksjon -->
        <footer>
            <!-- Copyright-merknad -->
            <p>&copy;  .</p>
        </footer>
    </div>
</body>
</html>
