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
                <section class=\"flexBoxColumn flexBoxCenter\">");
                if (isset($rowDescription->nombreJoueur)) {
                    echo("<figurecaption class=\"description\">Nombre de joueur : ".$rowDescription->nombreJoueur."</figurecaption>");
                }
                if (isset($rowDescription->ageMinimum)) {
                    echo("<figurecaption class=\"description\">Âge minimum requis : ".$rowDescription->ageMinimum." ans</figurecaption>");
                }
                if (isset($rowDescription->tempsJeu)) {
                    echo("<figurecaption class=\"description\">Temps de jeu : ".$rowDescription->tempsJeu."</figurecaption>");
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