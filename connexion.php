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
        <section class="margin flexBoxColumn flexBoxCenter">
            <section class="flexBoxColumn flexBoxCenter" >
                <h3 class="flexBoxRow flexBoxCenter">Connectez-vous</h3>
                <form class="flexBoxColumn flexBoxCenter" action="./php/BDDRequestConnexion.php?mode=connexion" method="post">
                    <label>Nom d'utilisateur</label>
                    <input type="text" id="login" name="login" required>

                    <label>Mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>

                    <button class="bouton shadow" type="submit">Connexion</button>
                </form>
                <section class="flexBoxColumn flexBoxCenter" >
                <h3 class="flexBoxRow flexBoxCenter">Inscrivez-vous</h3>
                <form class="flexBoxColumn flexBoxCenter" action="./php/BDDRequestConnexion.php?mode=inscription" method="post">
                    <label>Nom d'utilisateur</label>
                    <input type="text" id="login" name="login" required>

                    <label>Mot de passe</label>
                    <input type="password" id="motdepasse" name="motdepasse" required>

                    <button class="bouton shadow" type="submit">Inscription</button>
                </form>
            </section>
            </section>
        </section>
        <?php
            require_once("./html/footer.html")
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
</html>