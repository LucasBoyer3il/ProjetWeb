<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <header>
            <h1>header</h1>
        </header>
        <nav>
            <a class= "bouton" href="index.php">Accueil</a>
        </nav>
        <section>
            <h2>Description de l'item</h2>
            <div class="containerDescription" id="container">
        </section>
        <footer>
            Pied de page
        </footer>
    </body>

    <script>
        var queryString = window.location.search;
        console.log(queryString);
        var urlParams = new URLSearchParams(queryString);
        var image = urlParams.get('image');
        console.log(image);

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('container').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestDescription.php?image="+image, true);
        xmlHttp.send();
        /*var description = new XMLHttpRequest();
        description.onload = function() {
            document.getElementById("description").innerHTML = description.responseText;
        };
        description.open("GET", "description.txt", true);
        description.send();

        var image = new XMLHttpRequest();
        image.onload = function() {
            var respXML = this.responseXML;
            var imgName = respXML.getElementsByTagName("DESCRIPTION")[0].innerHTML;
            document.getElementById("image").setAttribute("src", imgName);
        };
        image.open("GET", "./xml/images.xml", true);
        image.send();
        xhttp.open("GET", "./desciption.txt?var=2", true);
        xhttp.send();
        */
    </script>
</html>