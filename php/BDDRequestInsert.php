<?php
require_once("BDDConnect.php");


$mysqli->query("INSERT INTO presentationjeux VALUES ('nomfichier','jjj','jjj')");

$mysqli->query("INSERT INTO descriptionJeux VALUES ('descriptionJeu','nombreJoueur','ageMinimum','tempsJeu')");

header('Location: ../insertion.php?mode=insertion');
exit();

$mysqli->close();
?>