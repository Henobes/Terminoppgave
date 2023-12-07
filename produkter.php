<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produkter - Bare Vifter</title>
    <style>
        body {
            font-family: 'Dubai Medium', sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        header {
            background-color: #343a40;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }

        .container {
            width: 80%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Juster plasseringen av produkter horisontalt */
        }

        .product {
            width: calc(22% - 4%);
            margin: 2%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h2 {
            margin-top: 0;
        }

        .add-to-cart-btn {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
            margin-top: auto;
            align-self: center;
        }

        .cart-icon {
            font-size: 24px;
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
        <!-- Produktseksjoner med bilde, informasjon og legg til handlekurv-knapp -->
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
                <p> </p>
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
