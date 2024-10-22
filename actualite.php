<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <?php
            require_once("./html/header.php")
        ?>
        <?php
            require_once("./html/nav.html")
        ?>
        <!-- Carrousel Flexbox des nouveaux jeux -->
        <section class="flexBoxRow flexBoxCenter">
            <section class="margin widthSection flexBoxRow flexBoxCenter slider-wrapper">
                <button class="slide-arrow" id="slide-arrow-prev">
                    &#8249;
                </button>
                <button class="slide-arrow" id="slide-arrow-next">
                    &#8250;
                </button>
                <ul class="slides-container" id="slides-container">

                </ul>
            </section>
    </section>
        <?php
            require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script src="./js/caroussel.js"></script>
    <script>
                var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('slides-container').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestJeux.php?affichage=jeux", true);
        xmlHttp.send();
    </script>

</html>