var queryString = window.location.search;
var urlParams = new URLSearchParams(queryString);
var id = urlParams.get('id');

var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('descriptionContainer').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestDescription.php?id="+id, true);
xmlHttp.send();