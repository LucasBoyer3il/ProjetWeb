<?php
require_once("BDDConnect.php");

if (isset($_GET['mode'])) { //ET RAJOUTER CONDITION CONNECTE EN TANT QUADMIN
    if ($_GET['mode'] == "insertion") {
        echo ("
            <h3>Insérer un jeu</h3>
            <form id=\"formInsertionModification\" class=\"flexBoxColumn flexBoxFlexStart\" action=\"./php/BDDRequestInsert.php?id=". $_GET['id'] ."\" method=\"post\" enctype=\"multipart/form-data\">               
                <label>Nom du jeu : </label>
                <input name=\"nomJeu\" id=\"nomJeu\" type=\"text\" required>
            
                <label>Image du jeu :</label>
                <input name=\"imageJeu\" id=\"imageJeu\" type=\"file\" accept=\"image/png\">
                <ul></ul>

                <label>Présentation du jeu : </label>
                <textarea name=\"presentationJeu\" id=\"presentationJeu\" type=\"text\" rows=\"10\" cols=\"30\" required></textarea>
            
                <label>Description du jeu : </label>
                <textarea name=\"descriptionJeu\" id=\"descriptionJeu\" type=\"text\" rows=\"10\" cols=\"30\" required></textarea>

                <label>Nombre de personne minimum : </label>
                <input name=\"nombreJoueurMin\" id=\"nombreJoueurMin\" type=\"text\">

                <label>Nombre de personne maximum : </label>
                <input name=\"nombreJoueurMax\" id=\"nombreJoueurMax\" type=\"text\">

                <label>Âge minimal : </label>
                <input name=\"ageMinimum\" id=\"ageMinimum\" type=\"text\">

                <label>Temps de jeu : </label>
                <input name=\"tempsJeu\" id=\"tempsJeu\" type=\"text\">
        
                <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"submit\">Valider</button>
            </form>
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
            <h3 class='flexBoxRow flexBoxCenterAlign flexBoxSpaceAroundJustify'>
                Insérer un jeu
                <a class=\"widthBouton bouton flexBoxRow flexBoxCenter shadow\" href=\"insertion.php?mode=insertion\">Initialiser</a>
            </h3>
            <form id=\"formInsertionModification\" class=\"flexBoxColumn flexBoxFlexStart\" action=\"./php/BDDRequestInsert.php?id=". $_GET['id'] ."\" method=\"post\" enctype=\"multipart/form-data\">               
                <label>Nom du jeu : </label>
                <input name=\"nomJeu\" id=\"nomJeu\" type=\"text\" value=\"".$rowPresentation->nomJeu."\" required>
            
                <label>Image du jeu :</label>
                <input name=\"imageJeu\" id=\"imageJeu\" type=\"file\" accept=\"image/png\">
                <ul></ul>

                <label>Présentation du jeu : </label>
                <textarea name=\"presentationJeu\" id=\"presentationJeu\" type=\"text\" rows=\"10\" cols=\"30\" required>".$rowPresentation->presentationJeu."</textarea>
            
                <label>Description du jeu : </label>
                <textarea name=\"descriptionJeu\" id=\"descriptionJeu\" type=\"text\" rows=\"10\" cols=\"30\" required>".$rowDescription->description."</textarea>

                <label>Nombre de personne minimum : </label>
                <input name=\"nombreJoueurMin\" id=\"nombreJoueurMin\" type=\"text\" value=\"".$rowDescription->nombreJoueurMin."\">

                <label>Nombre de personne maximum : </label>
                <input name=\"nombreJoueurMax\" id=\"nombreJoueurMax\" type=\"text\" value=\"".$rowDescription->nombreJoueurMax."\">

                <label>Âge minimal : </label>
                <input name=\"ageMinimum\" id=\"ageMinimum\" type=\"text\" value=\"".$rowDescription->ageMinimum."\">

                <label>Temps de jeu : </label>
                <input name=\"tempsJeu\" id=\"tempsJeu\" type=\"text\" value=\"".$rowDescription->tempsJeu."\">
        
                <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"submit\">Valider</button>
            </form>
            ");
        $responsePresReq -> free_result();
        $responseDescReq -> free_result();
    }
}
$mysqli->close();
?>