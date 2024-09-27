<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <header>
            <h1>C'est le site internet</h1>
        </header>
        <nav>
            <a class="boutonNav" href="">Jeux</a>
            <a class="boutonNav" href="">Catégories</a>
            <a class="boutonNav" href="">Contact</a>
            <a class="boutonNav" href="insertion.php?mode=insertion">Insérer jeu</a>
        </nav>
        <section id="indexSection">
            <h2>Liste des items</h2>
            <div id="container">
                <!-- Generé en php fichier BDDRequest.php-->
            </div>             
        </section>
        <footer>
            Pied de page
        </footer>
    </body>
    <script>
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('container').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequest.php", true);
        xmlHttp.send();
    </script>
</html>