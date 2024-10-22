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
        if ($_SESSION["user"] == 'admin') {
            header('Location: ../insertion.php?mode=insertion');
        } else {
            header('Location: ../jeux.php');
        }
    }

    $responseReq -> free_result();
} else if ($_GET['mode'] == 'inscription') {
    $mysqli->query("INSERT INTO utilisateurs (nomUtilisateur, motDePasse) 
                    VALUES(
                    '" . $_POST['login'] . "',
                    '" . $_POST['motdepasse'] . "')");
    header('Location: ../jeux.php');
} else if ($_GET['mode'] == 'deconnexion') {
    $mysqli->query("DELETE FROM panier");
    session_start();
    session_unset();
    header('Location: ../jeux.php');
}
$mysqli->close();
?>