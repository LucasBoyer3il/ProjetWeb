var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('contactInfo').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestContact.php", true);
xmlHttp.send();

var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('formMessage').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestMessage.php", true);
xmlHttp.send();