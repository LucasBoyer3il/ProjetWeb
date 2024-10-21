<?php
require_once("BDDConnect.php");

if ($_GET['mode'] == 'ajouter') {
    session_start();
    if (isset($_SESSION['user'])) {
        $mysqli->query("INSERT INTO panier (idJeux) VALUES ('" . $_GET['id'] . "')");
        header('Location: ../description.php?id='.$_GET['id'].'');
    } else {
        header('Location: ../connexion.php');
    }
} else if ($_GET['mode'] == 'afficher') {
    $panierRequest = "SELECT * FROM panier";
    $panierResponse = $mysqli->query($panierRequest);
    if ($panierResponse->num_rows == 0) {
        echo("<h3>Votre panier est vide</h3>");
    } else {
        echo("<h3>Votre panier</h3>");

        while ($rowpanier = $panierResponse -> fetch_object()) {
                $presentationRequest = "SELECT * FROM presentationJeux WHERE id=" .$rowpanier->idJeux . " ";
                $responsePresReq = $mysqli->query($presentationRequest);

            
                $rowPresentation = $responsePresReq -> fetch_object();
                if (strlen($rowPresentation->presentationJeu) > 100) {
                    $presentationJeu = substr($rowPresentation->presentationJeu,0,100) . "...";
                }
                echo ("
                        <section class=\"flexBoxColumn flexBoxCenter shadow white\">
                            <h3 class=\"flexBoxRow flexBoxCenter\">".$rowPresentation->nomJeu."</h3>
                            <a class=\"imageContainer\"  href=\"description.php?id=".$rowPresentation->id."\">
                                <img src=\"./img/".$rowPresentation->nomFichier.".png\" alt=\"$rowPresentation->nomJeu\"/>
                            </a>
                            <figurecaption class=\"widthFull flexBoxRow flexBoxCenter\">".$presentationJeu."</figurecaption>  
                            <a class=\"margin widthAuto bouton flexBoxRow flexBoxCenter shadow\" href=\"./php/BDDRequestPanier.php?mode=supprimer&id=".$rowpanier->idJeux."\">Supprimer du panier</a>     
                        </section>");
        } 
    }
} else if ($_GET['mode'] == 'supprimer') {    
    $mysqli->query("DELETE FROM panier WHERE idJeux = " . $_GET['id'] . "");
    header('Location: ../panier.php?mode=afficher');
}

$mysqli->close();
?>