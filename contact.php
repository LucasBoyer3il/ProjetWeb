<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <header>
            <h1>header</h1>
        </header>
        <?php
            require_once("./html/nav.html")
        ?>
        <section class="margin flexBoxColumn flexBoxCenter">
            <h2>Contactez-nous</h2>
            <p>Pour toute question ou demande d'information, n'hésitez pas à nous contacter. Nous serons ravis de vous répondre !</p>

            <!-- Section des informations de contact -->
            <section class="contact-info">
                <h3>Nos coordonnées</h3>
                <p><b>Adresse :</b> Cité de l'Entreprise et de la Formation, 5 Rue de Bruxelles, 12000 Rodez</p>
                <p><b>Téléphone :</b> <a href="tel:+33565123456">+33 5 65 12 34 56</a></p>
                <p><b>Email :</b> <a href="mailto:contact@caverneludique.fr">contact@caverneludique.fr</a></p>
                <p><b>Horaires d'ouverture :</b></p>
                <ul>
                    <li>Lundi - Vendredi : 10h - 19h</li>
                    <li>Samedi : 10h - 20h</li>
                    <li>Dimanche : Fermé</li>
                </ul>

                <!-- Carte Google Maps intégrée -->
                <h3>Nous trouver</h3>
                <div class="map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2241.9914281260935!2d2.558031880052586!3d44.35933080479563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84443e6a6d54aa81%3A0x9488ef8eccef88f5!2sCampus%20XIIe%20Avenue!5e0!3m2!1sfr!2sfr&output=embed" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
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
        /*
        image.open("GET", "./xml/images.xml", true);
        image.send();
        xhttp.open("GET", "./description.txt?var=2", true);
        xhttp.send();
        */
    </script>
</html>