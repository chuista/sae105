<?php
session_start();
$products = [
    1 => ['name' => 'MewTwo', 'price' => '19.99', 'image' => 'img/mewtoo.png', 'description' => 'Une peluche MewTwo ultra douce et câline.'],
    2 => ['name' => 'Salamèche', 'price' => '19.99', 'image' => 'img/salamechejpg.jpg', 'description' => 'Une peluche Salamèche parfaite pour les fans de Pokémon.'],
    3 => ['name' => 'Noctali', 'price' => '19.99', 'image' => 'img/noctali.jpg', 'description' => 'Une peluche Noctali fidèle à l’original.'],
    4 => ['name' => 'Evoli', 'price' => '19.99', 'image' => 'img/evoli.webp', 'description' => 'Une peluche Evoli trop mignone.'],
    5 => ['name' => 'Aquali', 'price' => '19.99', 'image' => 'img/aquali.jpg', 'description' => 'Une peluche Aquali fidèle à l’original.'],
    6 => ['name' => 'Rondoudou', 'price' => '19.99', 'image' => 'img/rondoudou.jpg', 'description' => 'Une peluche Rondoudou fidèle à l’original.'],
    7 => ['name' => 'Ronflex', 'price' => '19.99', 'image' => 'img/ronflexx.webp', 'description' => 'Une peluche Ronflex pour dormir.'],
    8 => ['name' => 'Amphinobi', 'price' => '19.99', 'image' => 'img/amphinobi.avif', 'description' => 'Une peluche Amphinobi pour gagner tout t’es combat.'],
    
];

$productId = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$product = $products[$productId] ?? null;

if (!$product) {
    echo "Produit introuvable.";
    exit;
}

if (isset($_POST['add_to_cart'])) {
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $quantity = 1;
    $size = $_POST['size'];

    if (!isset($_SESSION['cart'][$productName])) {
        $_SESSION['cart'][$productName] = ['price' => $productPrice, 'quantity' => 0, 'size' => $size];
    }
    $_SESSION['cart'][$productName]['quantity'] += $quantity;
    $_SESSION['cart'][$productName]['size'] = $size;

    header("Location: panier.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du produit - <?= htmlspecialchars($product['name']); ?></title>
    <link rel="stylesheet" href="css/produit.css">
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

    <main>
        <div class="product-details">
            <div class="product-image-container">
                <img src="<?= htmlspecialchars($product['image']); ?>" alt="<?= htmlspecialchars($product['name']); ?>" class="product-image">
            </div>
            <div class="product-info">
                <h2><?= htmlspecialchars($product['name']); ?></h2>
                <p><?= htmlspecialchars($product['description']); ?></p>
                <p><strong>Prix : </strong><?= htmlspecialchars($product['price']); ?> €</p>
                <form method="POST" action="">
                    <input type="hidden" name="product_name" value="<?= htmlspecialchars($product['name']); ?>">
                    <input type="hidden" name="product_price" value="<?= htmlspecialchars($product['price']); ?>">
                    <label for="size">Taille :</label>
                    <select name="size" id="size" required>
                        <option value="petite">Petite</option>
                        <option value="moyenne">Moyenne</option>
                        <option value="grande">Grande</option>
                    </select>
                    <button type="submit" name="add_to_cart">Ajouter au panier</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Peluches Pokémon. Tous droits réservés.</p>
            <ul class="footer-menu">
                <li><a href="contact.php">Contact</a></li>
                <li><a href="legal.php">Mentions légales</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
