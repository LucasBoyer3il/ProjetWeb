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
            require_once("./html/nav.php")
        ?>
        <section id="descriptionContainer">
        </section>
        <?php
        require_once("./html/footer.html");
        require_once("./html/alerte.php");
        ?>
    </body>

    <script src="./js/contactFooter.js"></script>
    <script src="./js/burgerMenu.js"></script>

    <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var id = urlParams.get('id');

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('descriptionContainer').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestDescription.php?id="+id, true);
        xmlHttp.send();
    </script>

    <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == 'ajoute') {
                alerte("succes","Jeu ajouté au panier : ", "Vous avez ".$_GET['nb']." jeux dans votre panier");
            } else if ($_GET['message'] == 'erreur') {
                alerte("erreur","Erreur d'ajout au panier : ", "Vous avez déjà ce jeu dans votre panier");
            }
        }
    ?>
</html>