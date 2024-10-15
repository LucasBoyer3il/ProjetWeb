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
        <section  class="margin flexBoxRow flexBoxCenter">
            <section id="panierContainer" class="flexBoxRow flexBoxCenter">
            </section>
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>

    <script src="./js/contactFooter.js"></script>
    <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('panierContainer').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestPanier.php?mode=afficher", true);
        xmlHttp.send();
    </script>
</html>