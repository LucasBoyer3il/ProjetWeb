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
            <section class="widthTexte flexBoxColumn flexBoxCenter">
                <h2>Contactez-nous</h2>
                <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter. Nous serons ravis de vous répondre !</p>
            </section>
            <!-- Section des informations de contact -->
            <section id="contactInfo">

            </section>
            <!-- Carte Google Maps intégrée -->
             <section>
                <h3>Nous trouver</h3>
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2616.252586374971!2d2.570294313151315!3d44.35017211024333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b27d5e63810f75%3A0xc979da6e461218bf!2sLe%20Chaudron%20Ludique!5e0!3m2!1sfr!2sfr!4v1728226574128!5m2!1sfr!2sfr' 
                    width='600'
                    height='450' 
                    style='border:0;'
                    allowfullscreen=''
                    loading='lazy' 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </section>

            <!-- Formulaire de contact -->
            <section id="formMessage" class="flexBoxColumn flexBoxCenter">

            </section>
        </section>
        <?php
            require_once("./html/footer.html");
            require_once("./html/alerte.php")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script src="./js/burgerMenu.js"></script>

    <script>
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('contactInfo').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestContact.php", true);
        xmlHttp.send();

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('formMessage').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestMessage.php", true);
        xmlHttp.send();
    </script>

    <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == 'envoye') {
                alerte("succes","Message envoyé : ", "Nous traiterons votre message le plus rapidement possible");
            } else if ($_GET['message'] == 'connexionErreur') {
                alerte("erreur","Erreur de connexion : ", "Utilisateur ou mot de passe incorrect");
            }
        }
    ?>
</html>