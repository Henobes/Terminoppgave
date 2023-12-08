<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkter - Bare Vifter</title>
    <style>
    /* Generelle stiler for hele nettsiden */
    body {
        font-family: 'Dubai Medium', sans-serif; /* Bruker Dubai Medium som skrifttype */
        margin: 0; /* Nullstiller marginen for å unngå unødvendig mellomrom */
        padding: 0; /* Nullstiller padding for å unngå unødvendig polstring */
        background-color: white; /* Setter bakgrunnsfargen til hvit */
    }

    /* Stiler for header-seksjonen øverst på siden */
    header {
        background-color: #343a40; /* Bakgrunnsfarge for header-seksjonen */
        color: #fff; /* Tekstfargen i header-seksjonen er hvit */
        padding: 10px 0; /* Polstring over og under innholdet i header-seksjonen */
        text-align: center; /* Senterjusterer tekst i header */
    }

    /* Stiler for lenker i header-seksjonen */
    header a {
        color: #fff; /* Farge for lenkene i header er hvit */
        text-decoration: none; /* Fjerner understrekning under lenkene */
        margin: 0 15px; /* Legger til mellomrom mellom lenkene */
        font-weight: bold; /* Setter fet skrift for lenkene */
    }

    /* Stiler for hovedcontaineren som inneholder produktene */
    .container {
        width: 80%; /* Setter bredden til 80% av visningsvinduet */
        margin: auto; /* Sentrerer containeren horisontalt */
        display: flex; /* Bruker flex-boks modellen for plassering av produktene */
        flex-wrap: wrap; /* Tillater at produkter går over til neste rad ved plassmangel */
        justify-content: space-around; /* Justerer plasseringen av produkter horisontalt */
    }

    /* Stiler for hvert produkt */
    .product {
        width: calc(22% - 4%); /* Beregner bredden for hvert produkt med avstand */
        margin: 2%; /* Legger til mellomrom mellom produktene */
        background-color: #fff; /* Bakgrunnsfarge for hvert produkt er hvit */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Legger til en lett skyggeeffekt */
        padding: 15px; /* Legger til polstring rundt produktet */
        display: flex; /* Bruker flex-boks modellen for plassering av elementene i produktet */
        flex-direction: column; /* Stapler elementene vertikalt i produktet */
        position: relative; /* Setter produktet i relativ posisjon for å tillate absolutt plassering */
    }

    /* Stiler for bilder i hvert produkt */
    .product img {
        width: 100%; /* Bildet fyller hele bredden av foreldrecontaineren */
        height: auto; /* Beholder proporsjonene for bildet */
    }

    /* Stiler for produktinformasjonen */
    .product-info {
        padding: 15px; /* Legger til polstring rundt produktinformasjonen */
    }

    /* Stiler for overskriftsnivå 2 (h2) i produktinformasjonen */
    .product-info h2 {
        margin-top: 0; /* Nullstiller toppmargen for å unngå unødvendig mellomrom */
    }

    /* Stiler for knappen for å legge til i handlekurven */
    .add-to-cart-btn {
        background-color: #4CAF50; /* Bakgrunnsfarge for knappen er grønn */
        color: #fff; /* Tekstfargen for knappen er hvit */
        border: none; /* Fjerner grensen rundt knappen */
        padding: 8px 12px; /* Legger til polstring rundt teksten i knappen */
        text-align: center; /* Senterjusterer teksten i knappen */
        text-decoration: none; /* Fjerner understrekning under teksten */
        display: inline-block; /* Viser knappen som et inline-blokk-element */
        font-size: 14px; /* Setter skriftstørrelsen for teksten i knappen */
        cursor: pointer; /* Gir musepekeren en håndpeker når den svever over knappen */
        border-radius: 4px; /* Legger til avrundede hjørner for knappen */
        margin-top: auto; /* Plasserer knappen nederst i produktet */
        align-self: center; /* Senterjusterer knappen innenfor produktet */
    }

    /* Stiler for handlekurvikonet */
    .cart-icon {
        font-size: 24px; /* Setter skriftstørrelsen for handlekurvikonet */
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
</style>


</head>
<body>
    <header>
        <h1>Teknotoppen</h1>
        <nav>
            <a href="index.php">Hjem</a>
            <a href="register.php">Loginn/Registrering</a>
            <a href="kontakt.php">Kontakt</a>
        </nav>
        <a href="handlekurv.php" class="cart-link" onclick="showCart()">
            <div class="cart-icon">&#128722;</div>
            <div class="cart-text">Handlekurv ( <span id="cartCount">0</span> )</div>
        </a>
    </header>

    <div class="container">
        <!-- Produktene til nettside med bilde og informasjon om produktet -->
        <div class="product">
            <img src="bilder/hode.jpg" alt="iphone 15">
            <div class="product-info">
                <h2> JBL hodetelefon</h2>
                <p>Type: hodetelefon</p>
                <p>levetid: 48 timer</p>
                <p>Pris: 300kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('JBl hodetelefon', 300, 'bilder/hode.jpg')">Legg til handlekurv</button>
        </div>

        <div class="product">
            <img src="bilder/laptop.jpg" alt="laptop">
            <div class="product-info">
                <h2>Surface Laptop 5</h2>
                <p>Type: Microsoft</p>
                <p>levetid  12 timer: </p>
                <p>Pris: 13 0000 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('laptop', 13000)">Legg til handlekurv</button>
        </div>

        
        <div class="product">
            <img src="bilder/macbook.jpg" alt="laptop">
            <div class="product-info">
                <h2>Apple MacBook pro 13</h2>
                <p>Type: Apple</p>
                <p>Størrelse: 256 gb</p>
                <p>Hastighet: </p>
                <p>Pris: 19 0000 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('MacBook', 19000)">Legg til handlekurv</button>

        </div>

        <div class="product">
            <img src="bilder/airpod.jpg" alt="laptop">
            <div class="product-info">
                <h2>Airpods (3gen)</h2>
                <p>Type: Apple</p>
                <p>levetid:20 timer </p>
                <p>Pris: 2000 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('Airpods', 2000)">Legg til handlekurv</button>
        </div>

        <div class="product">
            <img src="bilder/lenovo.jpg" alt="laptop">
            <div class="product-info">
                <h2>Lenovo thinkpad</h2>
                <p>Type: E14 gen 5</p>
                <p> </p>
                <p>levetid:20 timer </p>
                <p>Pris: 6500 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('Lenovo laptop', 6500)">Legg til handlekurv</button>
        </div>

        <div class="product">
            <img src="bilder/samsung.jpg" alt="laptop">
            <div class="product-info">
                <h2>Samsung</h2>
                <p>Type: Galaxy s22</p>
                <p> lagring: 256 gb</p>
                <p>levetid:20 timer </p>
                <p>Pris: 8400 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('Samsung Galaxy s22', 8400)">Legg til handlekurv</button>
        </div>

        <div class="product">
            <img src="bilder/logitech.jpg" alt="laptop">
            <div class="product-info">
                <h2>Logitech gaming headsett</h2>
                <p>Type: G433</p>
                <p> lagring: 256 gb</p>
                <p>levetid:20 timer </p>
                <p>Pris: 1300 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('Samsung Galaxy s22', 8400)">Legg til handlekurv</button>
        </div>

        <div class="product">
            <img src="bilder/ps5.jpg" alt="laptop">
            <div class="product-info">
                <h2>Playstation 5</h2>
                <p>Type: Standard editon</p>
                <p> lagring: 256 gb</p>
                <p>levetid:20 timer </p>
                <p>Pris: 6800 kr</p>
            </div>
            <button class="add-to-cart-btn" onclick="addToCart('Ps5', 6800)">Legg til handlekurv</button>
        </div>
        <!-- Legg til flere produkter her... -->

    </div>

    <!-- JavaScript-seksjonen -->
    <script>
        // Initialiser en tom handlekurvliste
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Legg til produkt i handlekurven ved klikk på "Legg til handlekurv"-knappen
        function addToCart(productName, productPrice) {
            cartItems.push({ name: productName, price: productPrice });
            updateCart();
            showConfirmation(productName);
        }

        // Oppdater handlekurven og teller
        function updateCart() {
            updateCartCount();
            saveCartToLocalStorage();
        }

        // Oppdater telleren for antall produkter i handlekurven
        function updateCartCount() {
            document.getElementById('cartCount').innerText = cartItems.length;
        }

        // Lagre handlekurvdataene i localStorage
        function saveCartToLocalStorage() {
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
        }

        // Vis en bekreftelsesmelding når et produkt blir lagt til i handlekurven
        function showConfirmation(productName) {
            alert(`${productName} er lagt til i handlekurven!`);
        }
    </script>
    <footer class="footer">
    <div class="social-icons">
        <a href="brukerveiledning.php" target="_blank">Brukerveiledning</a>
        <a href="#" target="_blank">Twitter</a>
        <a href="#" target="_blank">Instagram</a>
        <!-- Legg til flere sosiale medier etter behov -->
    </div>
    <p>&copy; <?php echo date('Y'); ?> Teknotoppen. Alle rettigheter reservert.</p>
    <p>Kontakt: <a href="mailto:info@teknotoppen.no">info@teknotoppen.no</a></p>
</footer>
</body>
</html>
