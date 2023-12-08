<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teknotoppen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
    /* Generelle stiler for hele nettsiden */
    body {
        font-family: 'Dubai Medium', sans-serif; /* Bruker Dubai Medium som skrifttype */
        margin: 0; /* Nullstiller marginen for å unngå unødvendig mellomrom */
        padding: 0; /* Nullstiller padding for å unngå unødvendig polstring */
        background-color: #f8f9fa; /* Setter bakgrunnsfargen til lys grå */
        color: #495057; /* Setter tekstfargen til mørk grå */
    }

    /* Stiler for header-seksjonen øverst på siden */
    header {
        background-color: #343a40; /* Bakgrunnsfarge for header-seksjonen */
        color: #fff; /* Tekstfargen i header-seksjonen er hvit */
        padding: 10px; /* Polstring rundt innholdet i header-seksjonen */
        text-align: center; /* Senterjusterer tekst i header */
        display: flex; /* Bruker flex-boks modellen for plassering av elementene i header */
        align-items: center; /* Sentrerer vertikalt innholdet i header */
        justify-content: space-between; /* Plasserer elementer jevnt mellomrom i header */
    }

    /* Stiler for lenker i header-seksjonen */
    header a {
        color: #fff; /* Farge for lenkene i header er hvit */
        text-decoration: none; /* Fjerner understrekning under lenkene */
        margin: 0 15px; /* Legger til mellomrom mellom lenkene */
        font-weight: bold; /* Setter fet skrift for lenkene */
    }

    /* Stiler for logo-bildet i header-seksjonen */
    .logo img {
        max-width: 80px; /* Setter maks bredde for logo-bildet */
        max-height: 80px; /* Setter maks høyde for logo-bildet */
    }

    /* Stiler for hovedtekstboksen */
    .tekst {
        width: 90%; /* Setter bredden til 90% av foreldrecontaineren */
        margin: auto; /* Sentrerer teksten horisontalt ved hjelp av automatisk margin */
        padding: 20px; /* Legger til polstring rundt innholdet i tekstboksen */
        text-align: justify; /* Justerer tekst til venstre og høyre i tekstboksen */
        background-color: #fff; /* Bakgrunnsfargen for tekstboksen er hvit */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Legger til en lett skyggeeffekt */
        border-radius: 10px; /* Legger til avrundede hjørner */
        margin-top: 20px; /* Legger til mellomrom over tekstboksen */
    }

    /* Stiler for overskriftsnivå 2 (h2) */
    h2 {
        color: #343a40; /* Farge for overskriftsnivå 2 er mørk grå */
    }

    /* Stiler for hovedinnholdet */
    .main-content {
        padding: 20px; /* Legger til polstring rundt hovedinnholdet */
    }

    /* Stiler for handlekurvknappen */
    .cart-button {
        display: block; /* Viser handlekurvknappen som et blokk-element */
        background-color: #343a40; /* Bakgrunnsfarge for handlekurvknappen */
        color: #fff; /* Tekstfarge for handlekurvknappen er hvit */
        text-decoration: none; /* Fjerner understrekning under teksten */
        padding: 15px; /* Legger til polstring rundt teksten i handlekurvknappen */
        border-radius: 5px; /* Legger til avrundede hjørner */
        margin: 20px auto; /* Sentrerer handlekurvknappen og legger til mellomrom */
        text-align: center; /* Senterjusterer teksten i handlekurvknappen */
        font-size: 18px; /* Setter skriftstørrelsen for teksten i handlekurvknappen */
        transition: background-color 0.3s ease; /* Legger til en overgangseffekt på bakgrunnsfargen */
    }

    /* Endrer bakgrunnsfargen når musepekeren svever over handlekurvknappen */
    .cart-button:hover {
        background-color: #495057; /* Ny bakgrunnsfarge ved hover-effekt */
    }

    /* Stiler for bunntekstseksjonen (footer) */
    .footer {
        background-color: #343a40; /* Bakgrunnsfarge for bunntekstseksjonen */
        color: #fff; /* Tekstfarge for bunntekstseksjonen er hvit */
        padding: 20px; /* Legger til polstring rundt innholdet i bunntekstseksjonen */
        text-align: center; /* Senterjusterer tekst i bunntekstseksjonen */
        margin-top: 30px; /* Legger til mellomrom over bunntekstseksjonen */
    }

    /* Stiler for avsnitt i bunntekstseksjonen */
    .footer p {
        margin: 0; /* Nullstiller margen for å unngå unødvendig mellomrom */
    }

    /* Stiler for sosiale medieikoner */
    .social-icons {
        margin-top: 20px; /* Legger til mellomrom over sosiale medieikonene */
    }

    /* Stiler for lenker til sosiale medieikoner */
    .social-icons a i {
        display: inline-block; /* Viser sosiale medieikoner som blokk-elementer */
        margin: 0 10px; /* Legger til mellomrom mellom sosiale medieikoner */
        color: #fff; /* Farge for sosiale medieikoner er hvit */
        font-size: 24px; /* Setter skriftstørrelsen for sosiale medieikoner */
        text-decoration: none; /* Fjerner understrekning under sosiale medieikoner */
        transition: color 0.3s ease; /* Legger til en overgangseffekt på fargeendring */
    }

    /* Endrer fargen når musepekeren svever over sosiale medieikoner */
    .social-icons a i:hover {
        color: #55acee; /* Ny farge ved hover-effekt */
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
            <!-- meny og handlekurv --> 
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
        <a href="produkter.php" class="cart-button">Se på vårt utvalg</a>
    </div>

    <!-- Footer -->
  <!-- Footer -->
<footer class="footer">
    <div class="social-icons">
        <a href="brukerveiledning.php" target="_blank"><i class="fas fa-book"></i> </a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <!-- Legg til flere sosiale medier etter behov -->
    </div>
    <p>&copy; <?php echo date('Y'); ?> Teknotoppen. Alle rettigheter reservert.</p>
    <p>Kontakt: <a href="mailto:info@teknotoppen.no">info@teknotoppen.no</a></p>
</footer>

</body>

</html>
