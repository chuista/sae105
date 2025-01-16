<?php
$images = [
    "img/bulbizarre.png",
    "img/pokemondecon.png",
    "img/rondoudou.jpg"
];

?>



<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plushevee</title>
        <link rel="stylesheet" href="css/homestyle.css">
    </head>

<body>
    <header>
        <div class="header-container">
            <img src="img/plushevee.png" alt="Logo Peluches Pokémon" class="logo" id="plusheveetitre">
            <h1>Bienvenue chez Plushevee</h1>
            <a href="panier.php" class="cart-link">Panier</a>
        </div>
    <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="catalogue.php">Peluches</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Découvrez nos peluches Pokémon</h2>
            <p>Nos peluches Pokémon sont conçues avec soin et passion pour apporter joie et confort à tous les fans de Pokémon, petits et grands.</p>
            <p>Que vous soyez un collectionneur ou que vous cherchiez un cadeau parfait, notre collection variée saura vous ravir.</p>
        </section>

        <section>
            <h2>Regardez Pokémon en action</h2>
            <video controls>
                <source src="img/pokemon_episode.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture vidéo.
            </video>
            <figcaption>Regardez cet épisode classique de Pokémon et plongez dans l'univers fantastique de Sacha et Pikachu.</figcaption>
        </section>
    </main>

    <div class="carousel">
    <div class="carousel-inner">
        <?php foreach ($images as $index => $image): ?>
            <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                <img src="<?php echo $image; ?>" alt="Image <?php echo $index + 1; ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-btn prev-btn">&lt;</button>
    <button class="carousel-btn next-btn">&gt;</button>
    </div>

<script>
    const carouselInner = document.querySelector('.carousel-inner');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    let currentIndex = 0;
    const totalImages = document.querySelectorAll('.carousel-item').length;

    function updateCarousel() {
        carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        updateCarousel();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % totalImages;
        updateCarousel();
    });
</script>


    <div class="container">
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
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