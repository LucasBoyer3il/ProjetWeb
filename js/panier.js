var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);

var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('panierContainer').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestPanier.php?mode=afficher", true);
xmlHttp.send();