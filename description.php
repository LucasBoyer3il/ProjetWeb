<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body>
        <?php
            require_once("./html/header.html")
        ?>
        <?php
            require_once("./html/nav.html")
        ?>
        <section id="descriptionContainer">
        </section>
        <?php
        require_once("./html/footer.html")
        ?>
        <?php
        require_once("./html/footer.html")
        ?>
    </body>

    <script>
        var queryString = window.location.search;
        var urlParams = new URLSearchParams(queryString);
        var id = urlParams.get('id');
        var id = urlParams.get('id');

        var xmlHttp = new XMLHttpRequest();
        xmlHttp.onload = function() {
            document.getElementById('descriptionContainer').innerHTML = this.responseText;
            document.getElementById('descriptionContainer').innerHTML = this.responseText;
        };
        xmlHttp.open("GET", "./php/BDDRequestDescription.php?id="+id, true);
        xmlHttp.open("GET", "./php/BDDRequestDescription.php?id="+id, true);
        xmlHttp.send();
        /*
        /*
        image.open("GET", "./xml/images.xml", true);
        image.send();
        xhttp.open("GET", "./description.txt?var=2", true);
        xhttp.open("GET", "./description.txt?var=2", true);
        xhttp.send();
        */
    </script>
</html>