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
        <section class="margin flexBoxColumn flexBoxCenter">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter. Nous serons ravis de vous répondre !</p>

            <!-- Section des informations de contact -->
            <section id="contact-info">

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
            <section>
                <h3>Envoyez-nous un message</h3>
                <form class="flexBoxColumn flexBoxCenter" action="traitement_formulaire.php" method="post">
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="10" cols="50" required></textarea>

                    <button class="bouton shadow" type="submit">Envoyer</button>
                </form>
            </section>
        </section>
        <?php
            require_once("./html/footer.html")
        ?>
    </body>

    <script src="./js/contact.js"></script>
</html>