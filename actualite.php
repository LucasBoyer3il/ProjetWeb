<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <?php
            require_once("./html/header.html")
        ?>
        <?php
            require_once("./html/nav.html")
        ?>
        <!-- Carrousel Flexbox des nouveaux jeux -->
    <div class="carousel-container">
        <div class="carousel-wrapper">

            <!-- Jeu 1 -->
            <div class="carousel-item">
                <img src="./img/kamisado.png" alt="Jeu 1">
                <div class="carousel-details">
                    <h3>Nom du Jeu 1</h3>
                    <p>Un jeu de stratégie captivant pour toute la famille.</p>
                    <div class="game-info">
                        <span>Âge : 10+</span>
                        <span>Joueurs : 2-4</span>
                        <span>Durée : 60 min</span>
                    </div>
                </div>
            </div>

            <!-- Jeu 2 -->
            <div class="carousel-item">
                <img src="./img/kamisado.png" alt="Jeu 2">
                <div class="carousel-details">
                    <h3>Nom du Jeu 2</h3>
                    <p>Un jeu coopératif pour surmonter des défis inattendus.</p>
                    <div class="game-info">
                        <span>Âge : 12+</span>
                        <span>Joueurs : 3-5</span>
                        <span>Durée : 90 min</span>
                    </div>
                </div>
            </div>

            <!-- Jeu 3 -->
            <div class="carousel-item">
                <img src="./img/kamisado.png" alt="Jeu 3">
                <div class="carousel-details">
                    <h3>Nom du Jeu 3</h3>
                    <p>Un jeu d'aventure captivant avec des énigmes pour la famille.</p>
                    <div class="game-info">
                        <span>Âge : 8+</span>
                        <span>Joueurs : 2-6</span>
                        <span>Durée : 45 min</span>
                    </div>
                </div>
            </div>

            <!-- Jeu 4 -->
            <div class="carousel-item">
                <img src="./img/kamisado.png" alt="Jeu 4">
                <div class="carousel-details">
                    <h3>Nom du Jeu 4</h3>
                    <p>Un jeu de cartes rapide et amusant pour tous.</p>
                    <div class="game-info">
                        <span>Âge : 6+</span>
                        <span>Joueurs : 2-4</span>
                        <span>Durée : 30 min</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Boutons de navigation -->
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelector('.carousel-wrapper');
        const totalSlides = document.querySelectorAll('.carousel-item').length;

        function moveSlide(direction) {
            slideIndex += direction;

            if (slideIndex < 0) {
                slideIndex = totalSlides - 1;
            }
            if (slideIndex >= totalSlides) {
                slideIndex = 0;
            }

            slides.style.transform = 'translateX(' + (-slideIndex * 320) + 'px)';
        }
    </script>
    </body>
</html>