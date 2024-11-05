<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.php")
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
    <script src="./js/description.js"></script>

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