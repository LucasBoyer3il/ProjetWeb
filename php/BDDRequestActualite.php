<?php
require_once("BDDConnect.php");

if ($_GET['affichage'] == "jeux") {
    $descriptionRequest = "SELECT nombreJoueur, ageMinimum, tempsJeu FROM descriptionJeux";
    $responseDescReq = $mysqli->query($descriptionRequest);

    $presentationRequest = "SELECT * FROM presentationJeux";
    $responsePresReq = $mysqli->query($presentationRequest);
    while ($rowPresentation = $responsePresReq -> fetch_object()) {
        $rowDescription = $responseDescReq -> fetch_object();
        if (strlen($rowPresentation->presentationJeu) > 100) {
            $presentationJeu = substr($rowPresentation->presentationJeu,0,100) . "...";
        }
        echo ("
                <li class=\"slide\">
                    <section class=\"flexBoxColumn flexBoxCenter shadow white\">
                        <h3 class=\"flexBoxRow flexBoxCenter\">".$rowPresentation->nomJeu."</h3>
                        <a class=\"imageContainer\"  href=\"description.php?id=".$rowPresentation->id."\">
                            <img src=\"./img/".$rowPresentation->nomFichier.".png\" alt=\"$rowPresentation->nomJeu\"/>
                        </a>
                        <figurecaption class=\"widthFull flexBoxRow flexBoxCenter\">".$presentationJeu."</figurecaption>
                        <section class=\"widthFull flexBoxRow flexBoxSpaceEvenly\">");
                            if (isset($rowDescription->nombreJoueur)) {
                                echo("<figurecaption>".$rowDescription->nombreJoueur." joueur(s)</figurecaption>");
                            }
                            if (isset($rowDescription->ageMinimum)) {
                                echo("<figurecaption>< ".$rowDescription->ageMinimum." ans</figurecaption>");
                            }
                            if (isset($rowDescription->tempsJeu)) {
                                echo("<figurecaption>".$rowDescription->tempsJeu."</figurecaption>");
                            }
        echo("
                        </section>        
                    </section>
                </li>");
    }
    $responseDescReq -> free_result();
    $responsePresReq -> free_result();
}
?>