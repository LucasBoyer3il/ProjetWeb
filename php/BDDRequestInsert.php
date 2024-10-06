<?php
require_once("BDDConnect.php");

if (isset($_POST["nomJeu"])) {
    echo $_POST["nomJeu"];
}
$mysqli->close();
?>