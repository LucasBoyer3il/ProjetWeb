var xmlHttp = new XMLHttpRequest();
xmlHttp.onload = function() {
    document.getElementById('contactInfoFooter').innerHTML = this.responseText;
};
xmlHttp.open("GET", "./php/BDDRequestContact.php?mode=footer", true);
xmlHttp.send();