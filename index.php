<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body onload="functLoad()">
        <?php
            require_once("./html/header.php")
        ?>
        <?php
        require_once("./html/nav.html")
        ?>
        <section class="flexBoxColumn flexBoxCenter">
            <section class="widthTexte flexBoxColumn flexBoxCenter">
                <h3 class="flexBoxColumn flexBoxCenter">Bienvenue dans le royaume des jeux de société à Rodez</h3>
                <p>Un espace dédié aux jeux de société pour petits et grands</p>
            </section>
            <section id="accueil" class="margin flexBoxColumn flexBoxCenter">
            
            </section>   
        </section>     
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script>
        function functLoad() {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                var myXml = this.responseXML;
                var tabImg = myXml.getElementsByTagName("DESCRIPTION");
                var tmpHtml = "";
                for (let i = 0; i < tabImg.length; i++) {
                    console.log(tabImg[i].innerHTML);
                    tmpHtml += "<div class=\"mySlides fade\"><img src='" + tabImg[i].innerHTML + "'/></div>";
                }
                document.getElementById("accueil").innerHTML = tmpHtml;

                // Appeler showSlides une fois que les images sont chargées
                showSlides();
            };
            xmlHttp.open("GET", "./xml/images.xml", true);
            xmlHttp.send();
        }

        function showSlides() {
            var slideIndex = 0;
            var slides = document.getElementsByClassName("mySlides");

            function displayNextSlide() {
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  // Cacher toutes les images
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;  // Revenir à la première image si on dépasse la dernière
                }
                slides[slideIndex - 1].style.display = "block";  // Afficher l'image suivante
                setTimeout(displayNextSlide, 2000);  // Changer d'image toutes les 2 secondes
            }

            // Démarrer le carrousel
            displayNextSlide();
        }

        
    </script>
</html>