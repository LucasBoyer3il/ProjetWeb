<?php
require_once("BDDConnect.php");

if (isset($_GET['mode'])) { //ET RAJOUTER CONDITION CONNECTE EN TANT QUADMIN
    if ($_GET['mode'] == "insertion") {
        echo ("
            <label for=\"nomJeu\">Nom du jeu : </label>
            <input name=\"nomJeu\" id=\"nomJeu\" type=\"text\">
        
            <label for=\"avatar\">Image du jeu :</label>
            <input name=\"avatar\" id=\"imageJeu\" type=\"file\" accept=\"image/png\" />

            <label for=\"presentationJeu\">Présentation du jeu : </label>
            <textarea name=\"presentationJeu\" id=\"presentationJeu\" type=\"text\" rows=\"10\" cols=\"30\"></textarea>
        
            <label for=\"descriptionJeu\">Description du jeu : </label>
            <textarea name=\"descriptionJeu\" id=\"descriptionJeu\" type=\"text\" rows=\"10\" cols=\"30\"></textarea>

            <label for=\"nombreJoueur\">Nombre de personne : </label>
            <input name=\"nombreJoueur\" id=\"nombreJoueur\" type=\"text\">

            <label for=\"ageMinimum\">Âge minimal : </label>
            <input name=\"ageMinimum\" id=\"ageMinimum\" type=\"text\">

            <label for=\"tempsJeu\">Temps de jeu : </label>
            <input name=\"tempsJeu\" id=\"tempsJeu\" type=\"text\">
    
            <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"valider\">Valider</button>
            ");
    } else if ($_GET['mode'] == "modifier") {
        $id = $_GET['id'];
        $descriptionRequest = "SELECT * FROM descriptionJeux WHERE id = ".$id."";
        $responseDescReq = $mysqli->query($descriptionRequest);
        $rowDescription = $responseDescReq -> fetch_object();
    
        $presentationRequest = "SELECT * FROM presentationJeux WHERE id = ".$id."";
        $responsePresReq = $mysqli->query($presentationRequest);
        $rowPresentation = $responsePresReq -> fetch_object();
        echo ("
            <label for=\"nomJeu\">Nom du jeu : </label>
            <input name=\"nomJeu\" id=\"nomJeu\" type=\"text\" value=\"".$rowPresentation->nomJeu."\">
        
            <label for=\"presentationJeu\">Présentation du jeu : </label>
            <input name=\"presentationJeu\" id=\"presentationJeu\" type=\"text\" value=\"".$rowPresentation->presentationJeu."\">
        
            <label for=\"descriptionJeu\">Description du jeu : </label>
            <input name=\"descriptionJeu\" id=\"descriptionJeu\" type=\"text\" value=\"".$rowDescription->description."\">

            <label for=\"nombreJoueur\">Nombre de personne : </label>
            <input name=\"nombreJoueur\" id=\"nombreJoueur\" type=\"text\" value=\"".$rowDescription->nombreJoueur."\">

            <label for=\"ageMinimum\">Âge minimal : </label>
            <input name=\"ageMinimum\" id=\"ageMinimum\" type=\"text\" value=\"".$rowDescription->ageMinimum."\">

            <label for=\"tempsJeu\">Temps de jeu : </label>
            <input name=\"tempsJeu\" id=\"tempsJeu\" type=\"text\" value=\"".$rowDescription->tempsJeu."\">
    
            <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"valider\">Valider</button>
            ");
        $responsePresReq -> free_result();
        $responseDescReq -> free_result();
    }
}
$mysqli->close();
?>