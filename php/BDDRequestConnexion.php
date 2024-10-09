<?php
require_once("BDDConnect.php");

if ($_GET['mode'] == 'connexion') {
    $connexionRequest = "SELECT COUNT(*) as resultat FROM utilisateurs WHERE nomUtilisateur = '" . $_POST['login'] . "' AND motDePasse = '" . $_POST['motdepasse']. "' ";
    $responseReq = $mysqli->query($connexionRequest);
    $rowConnexion = $responseReq -> fetch_object();

    if ($rowConnexion->resultat == 0) {
        header('Location: ../connexion.php');
    } else {
        session_start();
        $_SESSION["user"] = $_POST['login'];
        header('Location: ../insertion.php?mode=insertion');
    }

    $responseReq -> free_result();
} else if ($_GET['mode'] == 'inscription') {
    $mysqli->query("INSERT INTO utilisateurs (nomUtilisateur, motDePasse) 
                    VALUES(
                    '" . $_POST['login'] . "',
                    '" . $_POST['motdepasse'] . "')");
    header('Location: ../index.php');
} else if ($_GET['mode'] == 'deconnexion') {
    session_start();
    session_unset();
    header('Location: ../index.php');
}
$mysqli->close();
?>