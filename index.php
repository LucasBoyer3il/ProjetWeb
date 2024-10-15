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
        <section class="flexBoxColumn flexBoxCenter">
            <h2>Jeux de société</h2>
              <section class="widthFull flexBoxRow flexBoxCenterJustify flexBoxFlexStartAlign">
                <section id="filterContainer" class="flexBoxColumn flexBoxCenterAlign shadow">
                    <h1>Filtres de recherche</h1>
                    <form id="formInsertionModification" class="flexBoxColumn flexBoxFlexStart" action="./php/BDDRequestIndex.php" method="post" enctype="multipart/form-data"></form>
                </section>
                <section>
                    <form id="recherche" action="insertion.php" method="post">
                            <input name="rechercherValue" id="rechercherValue" class="shadow" type="text" placeholder="Nom à rechercher : ">
                            <button class="boutonRechercher shadow">Rechercher</button>
                    </form>
                    <section id="jeuxContainer" class="flexBoxRow flexBoxCenter">
                        <!-- Generé en php fichier BDDRequestIndex.php-->
                    </section> 
                </section> 
            </section>           
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script>
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('jeuxContainer').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestIndex.php?affichage=jeux", true);
        xmlHttp.send();

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('formInsertionModification').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestIndex.php?affichage=filtres", true);
        xmlHttp.send();

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", "./php/BDDRequestIndex.php?affichage=filtres", true);
        xmlHttp.send();
    </script>
</html>