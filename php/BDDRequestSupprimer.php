<?php
require_once("BDDConnect.php");

//*****************************
// SUPPRIMER UN JEU DE LA BDD
//*****************************
$mysqli->query("DELETE FROM descriptionJeux WHERE id = " . $_GET['id'] . "");

$mysqli->query("DELETE FROM presentationJeux WHERE id = " . $_GET['id'] . "");

header('Location: ../insertion.php?mode=insertion');

$mysqli->close();
?>