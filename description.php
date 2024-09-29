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
            <a class= "boutonNav" href="index.php">Accueil</a>
        </nav>
        <section id="descriptionContainer">
            <div >
            </div>
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