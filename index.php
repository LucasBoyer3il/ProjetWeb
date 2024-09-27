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
            <a class= "bouton" href="description.php">Jeux</a>
            <a class= "bouton" href="">Catégories</a>
            <a class= "bouton" href="">Contact</a>
        </nav>
        <section>
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