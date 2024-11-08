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
        require_once("./html/nav.php");
        ?>
        <section class="marginLeftRight flexBoxColumn flexBoxCenter">
            <h2>Jeux de société</h2>
              <section class="widthFull flexBoxRow flexBoxCenterJustify flexBoxFlexStartAlign">
                <section id="filterContainer" class="flexBoxColumn flexBoxCenterAlign shadow">
                    <h1>Filtres de recherche</h1>
                    <form id="formInsertionModification" class="flexBoxColumn flexBoxFlexStart" action="./php/TraitementRecherche.php?recherche=filtre" method="post" enctype="multipart/form-data">
                        <hr/>

                        <label>Nombre de joueurs : </label>
                        <select id="nombreJoueur" name="nombreJoueur">
                            <option value=""></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">plus de 10</option>
                        </select>
                        <hr/>

                        <label>Âge :</label>
                        <select id="age" name="age">
                            <option value=""></option>
                            <option value="6">6 ans</option>
                            <option value="7">7 ans</option>
                            <option value="8">8 ans</option>
                            <option value="9">9 ans</option>
                            <option value="10">10 ans</option>
                            <option value="11">11 ans</option>
                            <option value="12">12 ans</option>
                        </select>

                        <hr/>

                        <label>Temps de jeu : </label>
                        <select id="temps" name="temps">
                            <option value=""></option>
                            <option value="1">moins de 30 min</option>
                            <option value="2">entre 30 min et 45 min</option>
                            <option value="3">entre 1 h et plus</option>
                        </select>

                        <hr/>

    <button class="widthFull bouton flexBoxRow flexBoxCenter shadow" type="submit">Valider</button>
                    </form>
                </section>
                <section id="jeuxEtRechercheContainer" class="flexBoxColumn flexBoxCenterAlign">
                    <form id="recherche" action="./php/TraitementRecherche.php?recherche=nom" method="post">
                            <input name="rechercherValue" id="rechercherValue" class="shadow" type="text" placeholder="Nom à rechercher : ">
                            <button class="boutonRechercher shadow">Rechercher</button>
                    </form>
                    <section id="jeuxContainer" class="flexBoxRow flexBoxCenter">
                        <!-- Generé en php fichier BDDRequestJeux.php-->
                    </section> 
                </section> 
            </section>           
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script src="./js/burgerMenu.js"></script>
    <script src="./js/jeux.js"></script>
</html>