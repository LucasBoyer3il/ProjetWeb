var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var param = urlParams.get("recherche");
console.log(param);
if (param == null) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onload = function() {
        document.getElementById("jeuxContainer").innerHTML = this.responseText;
    };
    xmlHttp.open("GET", "./php/BDDRequestJeux.php?affichage=jeux", true);
    xmlHttp.send();
} else if (param == "nom"){
    var nom = urlParams.get("nom");
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onload = function() {
        document.getElementById("jeuxContainer").innerHTML = this.responseText;
    };
    xmlHttp.open("GET", "./php/BDDRequestJeux.php?recherche=nom&nom="+nom, true);
    xmlHttp.send();
} else if (param == "filtre"){
    var nbJmin = urlParams.get("nbJmin");
    var agemin = urlParams.get("ageMin");
    var temps = urlParams.get("temps");
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onload = function() {
        let myResponse = this.responseText;
        document.getElementById("jeuxContainer").innerHTML = myResponse;

    };
    xmlHttp.open("GET", "./php/BDDRequestJeux.php?recherche=filtre&nbJmin="+nbJmin+"&ageMin="+agemin+"&temps="+temps, true);
    xmlHttp.send();
}