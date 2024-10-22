<!DOCTYPE html>
<html>
    <?php
        require_once("./html/head.html")
    ?>
    <body onload="functLoad()">
        <?php
            require_once("./html/header.php")
        ?>
        <?php
        require_once("./html/nav.html")
        ?>
        <section id="accueil" class="margin flexBoxColumn flexBoxCenter">
          
        </section>        
        <?php
        require_once("./html/footer.html")
        ?>
    </body>
    <script src="./js/contactFooter.js"></script>
    <script>
        function functLoad(){
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                var myXml = this.responseXML;
                var tabImg = myXml.getElementsByTagName("DESCRIPTION");
                var tmpHtml = ""
                for(let i = 0; i < tabImg.length; i++){
                    console.log(tabImg[i].innerHTML);
                    tmpHtml += "<div class=\"mySlides fade\"><img src = '"+tabImg[i].innerHTML+"' class=\"widthTexte\"/></div>"
                }
                document.getElementById("accueil").innerHTML = tmpHtml;
            };
            xmlHttp.open("GET", "./xml/images.xml", true);
            xmlHttp.send();
            showSlides();
        }    
            function showSlides() {
                let slideIndex = 0;
                let slides = document.getElementsByClassName("mySlides");
                for (let i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }    
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        
    </script>
</html>