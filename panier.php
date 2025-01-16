<?php
session_start();

if (isset($_GET['remove'])) {
    $productName = $_GET['remove'];
    unset($_SESSION['cart'][$productName]);
}

function loadCart() {
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        $total = 0;
        echo "<div id='cart-container'>";
        foreach ($_SESSION['cart'] as $name => $details) {
            $itemTotal = $details['price'] * $details['quantity'];
            $total += $itemTotal;

            echo "<div class='cart-item'>
                    <p>$name: " . number_format($itemTotal, 2) . "€</p>
                    <a class='remove-btn' href='?remove=$name'>Supprimer</a>
                  </div>";
        }
        
        echo "<div><h3>Total: " . number_format($total, 2) . "€</h3></div>";
        echo "</div>";
    } else {
        echo "<p>Votre panier est vide.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plushevee</title>
    <link rel="stylesheet" href="css/stylecart.css">
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

    <h1>Votre Panier</h1>
    
    <?php loadCart(); ?>

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
