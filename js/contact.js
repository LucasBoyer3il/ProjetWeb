var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('contact-info').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestContact.php", true);
xmlHttp.send();