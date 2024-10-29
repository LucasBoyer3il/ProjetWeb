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
        <section class="flexBoxColumn flexBoxCenter">
            <h2>Jeux de société</h2>
              <section class="widthFull flexBoxRow flexBoxCenterJustify flexBoxFlexStartAlign">
                <section id="filterContainer" class="flexBoxColumn flexBoxCenterAlign shadow">
                    <h1>Filtres de recherche</h1>
                    <form id="formInsertionModification" class="flexBoxColumn flexBoxFlexStart" action="./php/TraitementRecherche.php?recherche=filtre" method="post" enctype="multipart/form-data"></form>
                </section>
                <section>
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

    <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var param = urlParams.get('recherche');
        console.log(param);
        if (param == null) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                document.getElementById('jeuxContainer').innerHTML = this.responseText;
            };
            xmlHttp.open("GET", "./php/BDDRequestJeux.php?affichage=jeux", true);
            xmlHttp.send();
        } else if (param == 'nom'){
            var nom = urlParams.get('nom');
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                document.getElementById('jeuxContainer').innerHTML = this.responseText;
            };
            xmlHttp.open("GET", "./php/BDDRequestJeux.php?recherche=nom&nom="+nom, true);
            xmlHttp.send();
        } else if (param == 'filtre'){
            var nbJmin = urlParams.get('nbJmin');
            var nbJmax = urlParams.get('nbJmax');
            var agemin = urlParams.get('agemin');
            var agemax = urlParams.get('agemax');
            var temps = urlParams.get('temps');
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                document.getElementById('jeuxContainer').innerHTML = this.responseText;
            };
            xmlHttp.open("GET", "./php/BDDRequestJeux.php?recherche=filtre&nbJmin="+nbJmin+"&nbJmax="+nbJmax+"&agemin="+agemin+"&agemax="+agemax+"&temps="+temps, true);
            xmlHttp.send();
        }
    </script>


    <script>
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('formInsertionModification').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestJeux.php?affichage=filtres", true);
        xmlHttp.send();

    </script>
</html>