<?php
session_start();


if (isset($_POST['add_to_cart'])) {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = 1;
    if (!isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] = ['price' => $productPrice, 'quantity' => 0];
    }
    $_SESSION['cart'][$productName]['quantity'] += $quantity;
}

$totalItems = 0;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $totalItems += $product['quantity'];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plushevee</title>
    <link rel="stylesheet" href="css/catalogue.css">
</head>

<body>
    <header>
        <div class="header-container">
            <img src="img/plushevee.png" alt="Logo Peluches Pokémon" class="logo" id="plusheveetitre">
            <h1>Bienvenue chez Plushevee !</h1>
            <a href="panier.php" class="cart-link">Panier</a>
        </div>
    <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="catalogue.php">Peluches</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

            <div class="products-container">
            <div class="product" data-name="MewTwo" data-price="19,99">
                <h2>MewTwo</h2>
                <img src="img/mewtoo.png" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="MewTwo">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=1" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>

            <div class="product" data-name="Salameche" data-price="19,99">
                <h2>Salameche</h2>
                <img src="img/salamechejpg.jpg" id="sala">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Salameche">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=2" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>            
            </div>
            
            <div class="product" data-name="Noctali" data-price="19,99">
                <h2>Noctali</h2>
                <img src="img/noctali.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Noctali">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=3" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
            
            <div class="product" data-name="Evoli" data-price="19,99">
                <h2>Evoli</h2>
                <img src="img/evoli.webp" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Evoli">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=4" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>            
            </div>
            
            <div class="product" data-name="Aquali" data-price="19,99">
                <h2>Aquali</h2>
                <img src="img/aquali.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Aquali">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=5" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>            
            </div>
            
            <div class="product" data-name="Rondoudou" data-price="19,99">
                <h2>Rondoudou</h2>
                <img src="img/rondoudou.jpg" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Rondoudou">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=6" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>            
            </div>
            
            <div class="product" data-name="Ronflex" data-price="19,99">
                <h2>Ronflex</h2>
                <img src="img/ronflexx.webp" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Ronflex">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=7" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>            
            </div>

            <div class="product" data-name="Amphinobi" data-price="19,99">
                <h2>Amphinobi</h2>
                <img src="img/amphinobi.avif" id="mewtoo">
                <p>19,99€</p>
                <form method="POST" action="index.php">
                <input type="hidden" name="product_name" value="Amphinobi">
                <input type="hidden" name="product_price" value="19.99">
                <a href="produit.php?id=8" class="product-link">Voir le produit</a>
                <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
        </div>
        
</body>

    
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Peluches Pokémon. Tous droits réservés.</p>
            <ul class="footer-menu">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legal.php">Mentions légales</a></li>
            </ul>
        </div>
    </footer>
</html>