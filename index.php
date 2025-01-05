<?php
session_start(); // Start the session to track cart items

// Check if the "Ajouter au panier" button was clicked
if (isset($_POST['add_to_cart'])) {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = $_POST['quantity'];

    // Add the product to the session cart
    if (!isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] = ['price' => $productPrice, 'quantity' => 0];
    }
    $_SESSION['cart'][$productName]['quantity'] += $quantity;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Plushevee</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="index.php">Peluches</a>
            <a href="panier.php">Voir Panier</a>
        </nav>
    </header>

    <body>
        <div class="products-container">
            <div class="product" data-name="MewTwo" data-price="19,99">
                <h2>MewTwo</h2>
                <img src="mewtoo.png" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>
            </div>

            <div class="product" data-name="Salameche" data-price="19,99">
                <h2>Salameche</h2>
                <img src="salamechejpg.jpg" id="sala">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>            
            </div>
            
            <div class="product" data-name="Noctali" data-price="19,99">
                <h2>Noctali</h2>
                <img src="noctali.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>
            </div>
            
            <div class="product" data-name="Evoli" data-price="19,99">
                <h2>Evoli</h2>
                <img src="evoli.webp" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>            
            </div>
            
            <div class="product" data-name="Aquali" data-price="19,99">
                <h2>Aquali</h2>
                <img src="aquali.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>            
            </div>
            
            <div class="product" data-name="Rondoudou" data-price="19,99">
                <h2>Rondoudou</h2>
                <img src="rondoudou.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>            
            </div>
            
            <div class="product" data-name="Ronflex" data-price="19,99">
                <h2>Ronflex</h2>
                <img src="ronflex.jpeg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>            
            </div>

            <div class="product" data-name="Amphinobi" data-price="19,99">
                <h2>Amphinobi</h2>
                <img src="amphinobi.avif" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <input type="number" name="quantity" value="1" min="1">
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
            </form>
            </div>
        </div>
        
    </body>

    <script>
        function showQuantityInput(button) {
            // Vérifie si le champ d'entrée existe déjà
            if (button.nextElementSibling && button.nextElementSibling.tagName === "INPUT") {
                return;
            }

            // Crée un champ pour entrer la quantité
            const input = document.createElement("input");
            input.type = "number";
            input.min = "1";
            input.value = "1"; // Par défaut, 1
            input.style.marginLeft = "10px";

            // Crée un bouton pour confirmer
            const confirmButton = document.createElement("button");
            confirmButton.textContent = "Confirmer";
            confirmButton.style.marginLeft = "10px";

            // Ajoute un événement pour enregistrer la quantité
            confirmButton.onclick = function () {
                const quantity = parseInt(input.value, 10);
                if (isNaN(quantity) || quantity < 1) {
                    alert("Veuillez entrer une quantité valide !");
                    return;
                }
                addToCart(button, quantity); // Passe la quantité à la fonction du panier
                input.remove();
                confirmButton.remove();
            };

            // Insère les éléments après le bouton "Ajouter au panier"
            button.parentElement.appendChild(input);
            button.parentElement.appendChild(confirmButton);
        }

        function addToCart(button, quantity) {
            const product = button.parentElement;
            const name = product.dataset.name;
            const price = parseFloat(product.dataset.price);

            const cart = JSON.parse(localStorage.getItem("cart")) || {};
            if (!cart[name]) {
                cart[name] = { price: price, quantity: 0 };
            }
            cart[name].quantity += quantity; // Ajoute la quantité au panier
            localStorage.setItem("cart", JSON.stringify(cart));
            updateCartLink();
        }

        function updateCartLink() {
            const cart = JSON.parse(localStorage.getItem("cart")) || {};
            const totalItems = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
            const cartLink = document.getElementById("cart-link");
            cartLink.textContent = `Voir Panier (${totalItems})`;
        }

        window.onload = updateCartLink;
    </script>

    <footer>
        <p>Copyright © Charlotte Pacaud et Ines Kibach</p>
    </footer>