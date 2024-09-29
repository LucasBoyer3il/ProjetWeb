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
        <section id="insertionEtJeuContainer">
            <section id="insertionContainer">
                <h1>Insérer un jeu</h1>
                <form id="formInsertionModification" class="flexBoxColumn flexBoxFlexStart" action="insertion.php" method="post" enctype="multipart/form-data">               
                </form>
            </section>
            <section id="listeDesJeux">
                <form id="recherche" class="flexBoxRow flexBoxCenter" action="insertion.php" method="post">
                    <input name="rechercherValue" id="rechercherValue" type="text" placeholder="Nom à rechercher : ">
                    <button class="widthBouton bouton flexBoxRow flexBoxCenter shadow">Rechercher</button>
                </form>
                <section id=sectionimgdesc>
                </section>
            </section>
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
        <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var mode = urlParams.get('mode');
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('sectionimgdesc').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequest.php?mode="+mode, true);
        xmlHttp.send();

        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var id = urlParams.get('id');
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('formInsertionModification').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestForm.php?id="+id+"&mode="+mode, true);
        xmlHttp.send();
    </script>
    </body>
</html>