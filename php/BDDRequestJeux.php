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
                </section>");
    }
    $responseDescReq -> free_result();
    $responsePresReq -> free_result();
} else if ($_GET['affichage'] == "filtres") {
    echo ("
    <hr/>

    <label>Nombre de joueurs : </label>
    <select id=\"nombreJoueur\" name=\"nombreJoueur\">
        <option value=\"\"></option>
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
        <option value=\"11\">plus de 10</option>
    </select>

    <hr/>

    <label>Âge :</label>
    <select id=\"age\" name=\"age\">
        <option value=\"\"></option>
        <option value=\"6\">6 ans</option>
        <option value=\"7\">7 ans</option>
        <option value=\"8\">8 ans</option>
        <option value=\"9\">9 ans</option>
        <option value=\"10\">10 ans</option>
        <option value=\"11\">11 ans</option>
        <option value=\"12\">12 ans</option>
    </select>

    <hr/>

    <label>Temps de jeu : </label>
    <select id=\"temps\" name=\"temps\">
        <option value=\"\"></option>
        <option value=\"1\">moins de 30 min</option>
        <option value=\"2\">entre 30 min et 45 min</option>
        <option value=\"3\">entre 1 h et plus</option>
    </select>

    <hr/>

    <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"submit\">Valider</button>
    ");
}
$mysqli->close();