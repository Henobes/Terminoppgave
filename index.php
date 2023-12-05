<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknotoppen</title>
    <style>
        body {
            font-family: 'Dubai Medium', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #495057;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .logo img {
            max-width: 80px;
            max-height: 80px;
        }

        .tekst {
            width: 90%;
            margin: auto;
            padding: 20px;
            text-align: justify;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }

        h2 {
            color: #343a40;
        }

        .main-content {
            padding: 20px;
        }

        .cta-button {
            display: block;
            background-color: #343a40;
            color: #fff;
            text-decoration: none;
            padding: 15px;
            border-radius: 5px;
            margin: 20px auto;
            text-align: center;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #495057;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
        }

        .footer p {
            margin: 0;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #55acee;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="" alt="">
        </div>
        <h1>Teknotoppen</h1>
        <nav>
            <a href="login.php">Logg inn/Registrering</a>
            <a href="produkter.php">Produkter</a>
            <a href="kontakt.php">Kontakt</a>
        </nav>
        <a href="handlekurv.php" class="cart-link" onclick="showCart()">
            <div class="cart-icon">&#128722;</div>
            <div class="cart-text">Handlekurv (<span id="cartCount">0</span>)</div>
        </a>
    </header>

    <!-- Tekst boks om Teknotoppen -->
    <div class="tekst">
        <div class="main-content">
            <h2>Velkommen til Teknotoppen</h2>
            <p>
                Teknotoppen er ditt ultimate reisemål for den nyeste og mest avanserte teknologien.
                Vi kuraterer et utvalg av innovative og kvalitetsprodukter som vil berike ditt digitale liv.
                Utforsk den digitale fremtiden med toppmoderne smarttelefoner, bærbare datamaskiner, høykvalitets
                hodetelefoner og mye mer.
            </p>
            <p>
                Vårt fokus er å levere ikke bare nyskapende, men også pålitelige og holdbare produkter. Handle med
                trygghet gjennom våre sikre betalingsalternativer og brukervennlige plattform. Vi er ikke bare en
                butikk; vi er din partner på veien til et smartere og mer tilkoblet liv.
            </p>
        </div>
        <a href="produkter.php" class="cta-button">Se på vårt utvalg</a>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-icons">
            <a href="matteriel.php" target="_blank">Facebook</a>
            <a href="#" target="_blank">Twitter</a>
            <a href="#" target="_blank">Instagram</a>
            <!-- Legg til flere sosiale medier etter behov -->
        </div>
        <p>&copy; <?php echo date('Y'); ?> Teknotoppen. Alle rettigheter reservert.</p>
    </footer>
</body>

</html>
