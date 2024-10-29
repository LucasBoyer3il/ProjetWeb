<?php
require_once("BDDConnect.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $descriptionRequest = "SELECT * FROM descriptionJeux WHERE id = ".$id."";
    $responseDescReq = $mysqli->query($descriptionRequest);
    $rowDescription = $responseDescReq -> fetch_object();

    $presentationRequest = "SELECT * FROM presentationJeux WHERE id = ".$id."";
    $responsePresReq = $mysqli->query($presentationRequest);
    $rowPresentation = $responsePresReq -> fetch_object();

    echo ("
        <section class=\"widthFull flexBoxColumn flexBoxCenter shadow\">
            <h2>".$rowPresentation->nomJeu."</h2>
            <section class=\"widthFull flexBoxRow flexBoxSpaceAroundJustify\">
                <img class=\"descriptionImage\" src=\"./img/".$rowPresentation->nomFichier.".png\" alt=\"".$rowPresentation->nomJeu."\"/>
                <section class=\"flexBoxColumn flexBoxCenter\">
                    <a class=\"margin widthBouton bouton flexBoxRow flexBoxCenter shadow\" href=\"./php/BDDRequestPanier.php?mode=ajouter&id=".$id."\">Ajouter au panier</a>");
                        if (isset($rowDescription->nombreJoueurMin)) {
                            if ($rowDescription->nombreJoueurMin == $rowDescription->nombreJoueurMax) {
                                echo("<figurecaption>".$rowDescription->nombreJoueurMin." joueur(s)</figurecaption>");
                            } else {
                                echo("<figurecaption>".$rowDescription->nombreJoueurMin."-".$rowDescription->nombreJoueurMax." joueur(s)</figurecaption>");
                            }
                        }
                        if (isset($rowDescription->ageMinimum)) {
                            echo("<figurecaption>< ".$rowDescription->ageMinimum." ans</figurecaption>");
                        }
                        if (isset($rowDescription->tempsJeu)) {
                            echo("<figurecaption>".$rowDescription->tempsJeu." min</figurecaption>");
                        }
    echo(
                "</section>
            </section>
        <figurecaption class=\"flexBoxRow flexBoxSpaceAroundJustify\">".$rowDescription->description."</figurecaption>
        </section>");
    $responseDescReq -> free_result();
    $responsePresReq -> free_result();
}
$mysqli->close();

?>