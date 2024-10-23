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
        <section class="flexBoxColumn flexBoxCenter margin">
            <!-- Section des photos du magasin avec texte descriptif -->
            <section class="widthSection flexBoxColumn flexBoxCenter">
                <h2>Qui sommes-nous ?</h2>
                <p>
                    Bienvenue au Chaudron Ludique, votre boutique spécialisée dans les jeux de société, située à Rodez. Notre mission est de vous offrir un espace dédié au divertissement, où l'on peut découvrir et jouer à une multitude de jeux adaptés à tous les âges et à tous les goûts.
                </p>
                <section class="flexBoxColumn flexBoxCenter">
                    <h3>Découvrez notre boutique</h3>

                    <!-- 1ère image avec texte -->
                    <section class="widthFull flexBoxRow flexBoxCenter shadow margin">
                        <img class="descriptionImage" src="./imgBoutique/Facade.png" alt="Photo de l'extérieur du magasin">
                        <figurecaption class=" widthTexte flexBoxColumn margin">
                            <b class="flexBoxRow flexBoxCenter margin">La façade de notre boutique</b><br>
                            Située en plein cœur de Rodez, notre boutique vous accueille dans une ambiance conviviale. L'extérieur est coloré et facilement identifiable grâce à nos enseignes ludiques qui reflètent l'atmosphère chaleureuse du magasin.
                        </figurecaption>
                    </section>

                    <section class="widthFull flexBoxRow flexBoxCenter shadow margin">
                        <figurecaption class=" widthTexte flexBoxColumn margin">
                            <b class="flexBoxRow flexBoxCenter margin">Nos rayons de jeux</b><br>
                            À l'intérieur, vous trouverez un vaste choix de jeux de société, soigneusement organisés par catégories : jeux de stratégie, jeux familiaux, jeux pour enfants, etc. Chaque rayon est pensé pour vous permettre de découvrir facilement les nouveautés et les classiques.                        
                        </figurecaption>
                        <img class="descriptionImage" src="./imgBoutique/Interieur.png" alt="Photo de l'extérieur du magasin">
                    </section>

                    <section class="widthFull flexBoxRow flexBoxCenter shadow margin">
                        <img class="descriptionImage" src="./imgBoutique/espaceLudique.png" alt="Photo de l'extérieur du magasin">
                        <figurecaption class=" widthTexte flexBoxColumn margin">
                            <b class="flexBoxRow flexBoxCenter margin">Espace de jeu pour les clients</b><br>
                            Nous avons également aménagé un espace dédié pour vous permettre d'essayer les jeux sur place. Que vous veniez seul, en famille ou entre amis, cet espace convivial est parfait pour des moments de détente et de découverte.
                        </figurecaption>
                    </section>
                </section>

                <!-- Section des valeurs de l'entreprise -->
                <section class="flexBoxColumn">
                    <h3>Nos valeurs</h3>
                    <p>
                        Chez le Chaudron Ludique, nous croyons que les jeux de société sont bien plus qu'un simple divertissement. Ils sont un moyen de renforcer les liens familiaux, de développer des compétences stratégiques et de partager des moments inoubliables. Nous nous engageons à :
                    </p>
                    <ul>
                        <li>Offrir un large choix de jeux pour tous les âges et tous les niveaux.</li>
                        <li>Créer une communauté de joueurs passionnés.</li>
                        <li>Organiser des événements ludiques pour encourager l'interaction et le plaisir de jouer ensemble.</li>
                        <li>Proposer des conseils personnalisés pour que chacun trouve le jeu idéal.</li>
                    </ul>
                </section>

                <!-- Section pour l'histoire du magasin -->
                <section class="flexBoxColumn">
                    <h3>Notre histoire</h3>
                    <p>
                        Le Chaudron Ludique a ouvert ses portes en avril 2023 à Rodez, avec l'objectif de devenir un lieu de rencontre incontournable pour les amateurs de jeux de société. Depuis, nous n'avons cessé de grandir, en étoffant notre catalogue et en multipliant les événements pour satisfaire tous les goûts. Nous sommes fiers de faire partie de la communauté ludique de Rodez et de contribuer à faire découvrir ce merveilleux univers à de nouveaux passionnés.
                    </p>
                </section>
            </section>
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script src="./js/burgerMenu.js"></script>

</html>