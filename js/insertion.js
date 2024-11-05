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
    document.getElementById('insertionContainer').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestForm.php?id="+id+"&mode="+mode, true);
xmlHttp.send();

var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('imageJeu').addEventListener("change", function(event) {

    var output = document.querySelector("ul");
    var files = event.target.files;

    for (var i=0; i<files.length; i++) {
        var item = document.createElement("li");
        item.innerHTML = files[i].webkitRelativePath;
        output.appendChild(item);
    };
    }, false);
}
xmlHttp.open("POST", "./php/UploadFile.php", true);
xmlHttp.send();