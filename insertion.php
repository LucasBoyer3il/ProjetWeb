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
        <section id="insertionEtJeuContainer">
            <section id="insertionContainer"></section>
            <section id="listeDesJeux">
                <form id="recherche" class="flexBoxRow flexBoxCenter" action="insertion.php" method="post">
                    <input name="rechercherValue" id="rechercherValue" type="text" placeholder="Nom à rechercher : ">
                    <button class="widthBouton bouton flexBoxRow flexBoxCenter shadow">Rechercher</button>
                </form>
                <section id=sectionimgdesc>
                </section>
            </section>
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script src="./js/insertion.js"></script>
</html>