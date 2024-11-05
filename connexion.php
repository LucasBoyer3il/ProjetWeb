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
        <section class="margin flexBoxColumn flexBoxCenter">
            <section class="flexBoxColumn flexBoxCenter" >
                <h3 class="flexBoxRow flexBoxCenter">Connectez-vous</h3>
                <form id="formConnexion" class="flexBoxColumn flexBoxCenter" action="./php/BDDRequestConnexion.php?mode=connexion" method="post">
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
            require_once("./html/footer.html");
            require_once("./html/alerte.php");
        ?>
    </body>

    <script src="./js/contactFooter.js"></script>
    <script src="./js/burgerMenu.js"></script>

    <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == 'connexionReussi') {
            alerte("succes","Connexion réussi : ", "Bienvenue sur votre compte");
        } else if ($_GET['message'] == 'connexionErreur') {
            alerte("erreur","Erreur de connexion : ", "Utilisateur ou mot de passe incorrect");
        } else if ($_GET['message'] == 'connectezVous') {
            alerte("erreur","Merci de vous connectez : ", "Vous pourrez ensuite ajouter des jeux à votre panier");
        }
    }
    ?>
</html>