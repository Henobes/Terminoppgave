<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>123</title>
    <style>
        body {
            font-family: 'Dubai Medium';
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        header {
            background-color: #333;
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
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .cart-item {
            margin-bottom: 10px;
        }

        #totalPrice {
            font-weight: bold;
            margin-top: 10px;
        }

        #checkoutBtn {
            display: block;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Teknotoppen</h1>
        <nav>
            <a href="index.php">Hjem</a>
            <a href="register.php">Registrering</a>
            <a href="login.php">Logg inn</a>
            <a href="#">Kontakt</a>
        </nav>
    </header>

    <div class="container">
        <h2>Handlekurv</h2>
        <div id="cartItems" class="cart-item"></div>
        <div id="totalPrice">Totalpris: 0 kr</div>
        <button id="checkoutBtn" onclick="checkout()">Bestill nå</button>
    </div>

    <script>
    // Hent handlekurvdataene fra localStorage
    let cartItems = [];

    // Sjekk om det er lagret handlekurvdata i localStorage
    if (localStorage.getItem('cartItems')) {
        retrieveCartFromLocalStorage();
    }

    // Oppdater handlekurven og teller
    function updateCart() {
        console.log('Updating cart...');
        showCart();
        updateCartCount();
        saveCartToLocalStorage(); // Lagre handlekurven etter endringer
    }

    function showCart() {
        const cartContainer = document.getElementById('cartItems');
        const totalPriceContainer = document.getElementById('totalPrice');

        if (cartItems.length === 0) {
            cartContainer.innerHTML = '<p>Handlekurven er tom.</p>';
            totalPriceContainer.innerText = 'Totalpris: 0 kr';
        } else {
            cartContainer.innerHTML = cartItems.map((item, index) => `
                <div class="cart-item">
                    <div>${item.name} - ${item.price}kr</div>
                    <button class="delete-btn" onclick="deleteItem(${index})">Slett</button>
                </div>`).join('');

            // Beregn totalprisen
            const totalPrice = cartItems.reduce((acc, item) => acc + item.price, 0);
            totalPriceContainer.innerText = `Totalpris: ${totalPrice} kr`;
        }
    }

    // Slett et produkt fra handlekurven
    function deleteItem(index) {
        console.log('Deleting item at index:', index);
        cartItems.splice(index, 1);
        saveCartToLocalStorage();
        updateCart();
    }

    // Oppdater telleren for antall produkter i handlekurven
    function updateCartCount() {
        // Du må legge til en teller i HTML for dette for å oppdatere den
        // For eksempel:
        // document.getElementById('cartCount').innerText = cartItems.length;
    }

    // Lagre handlekurvdataene i localStorage
    function saveCartToLocalStorage() {
        try {
            console.log('Saving to localStorage...', cartItems);
            localStorage.setItem('cartItems', JSON.stringify(cartItems));
            console.log('Saved in localStorage:', localStorage.getItem('cartItems'));
        } catch (error) {
            console.error('Error saving to localStorage:', error);
        }
    }

    // Hent handlekurvdataene fra localStorage
    function retrieveCartFromLocalStorage() {
        try {
            const storedCartItems = localStorage.getItem('cartItems');
            if (storedCartItems) {
                cartItems = JSON.parse(storedCartItems);
            }
            console.log('Retrieved from localStorage:', cartItems);
        } catch (error) {
            console.error('Error retrieving from localStorage:', error);
        }
    }

    // Initialiser handlekurven ved lasting av siden
    showCart();

    // Funksjon for bestilling
    function checkout() {
        // Her kan du legge til logikken for å sende bestillingen eller omdirigere til en kvitteringsside
        alert('Bestillingen er sendt!');

        // Omdirigere til kvitteringssiden
        window.location.href = 'kvittering.php';
        
        // Du kan også tilbakestille handlekurven etter bestillingen hvis det er ønskelig
        cartItems = [];
        saveCartToLocalStorage();
        updateCart();
    }
</script>


</body>
</html>
