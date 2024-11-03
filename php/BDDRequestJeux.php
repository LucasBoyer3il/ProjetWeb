<?php
require_once("BDDConnect.php");


if (isset($_GET['recherche']) && $_GET['recherche'] == 'nom') {
    $nom = $_GET['nom'];
    $presentationRequest = "SELECT * FROM presentationJeux WHERE nomJeu LIKE '%$nom%'";
    $responsePresReq = $mysqli->query($presentationRequest);

    echo("<h3>Résultat pour la recherche : ".$nom."</h3>");
    while ($rowPresentation = $responsePresReq -> fetch_object()) {
        $descriptionRequest = "SELECT nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE id = '$rowPresentation->id'";
        $responseDescReq = $mysqli->query($descriptionRequest);
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
        echo("
                    </section>        
                </section>");
                $responseDescReq -> free_result();

    }
    $responsePresReq -> free_result();
} else if (isset($_GET['recherche']) && $_GET['recherche'] == 'filtre') {
    $nbJmin = null;
    if (isset($_GET['nbJmin'])) {
        $nbJmin = $_GET['nbJmin'];
    }
    $ageMinimum = null;
    echo($_GET["ageMin"]);
    if (isset($_GET['ageMin'])) {
        $ageMinimum = $_GET['ageMin'];
    }
    $temps = null;
    if (isset($_GET['temps'])) {
        $temps = $_GET['temps'];
    }
    
    $nombreJoueurReq = null;
    $ageReq = null;
    $tempsReq = null;
    $descriptionRequest = null;

    echo("<h3><b>Résultat pour la recherche pour : </b>");

    if ($nbJmin != null) {
        //Requête de filtre sur le nombre de joueur
        $descriptionRequest = "SELECT id, nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE nombreJoueurMin <= $nbJmin AND nombreJoueurMax >= $nbJmin";
        echo(" Nombre de joueur = ".$nbJmin);
    } 
    if ($ageMinimum != null) {
        //Requête de filtre sur l'age
        $ageReq = "SELECT id, nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE ageMinimum >= $ageMinimum";   
        if ($descriptionRequest != null) {
            $descriptionRequest = $descriptionRequest . " INTERSECT " . $ageReq;
        } else {
            $descriptionRequest = $ageReq;
        }
        echo(" Age minimum = ".$ageMinimum);
    } 
    if ($temps != null) {
        //Requête de filtre sur le temps de jeu
        if ($temps == 1) {
            //Moins de 30 min
            $tempsReq = "SELECT id, nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE tempsJeu < 30";
            echo(" Temps de jeu inférieur à 30 min");
        } else if ($temps == 2) {
            //Entre 30 et 45 min
            $tempsReq = "SELECT id, nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE tempsJeu >= 30 AND tempsJeu <= 45";
            echo(" Temps de jeu entre 30 et 45 min");
        } else if ($temps == 3) {
            //Plus d'une heure
            $tempsReq = "SELECT id, nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux WHERE tempsJeu >= 60";
            echo(" Temps de jeu supérieur à 1 heure");
        }
        if ($descriptionRequest != null) {
            $descriptionRequest = $descriptionRequest . " INTERSECT " . $tempsReq;
        } else {
            $descriptionRequest = $tempsReq;
        }
    }

    echo("</h3>");
    $responseDescReq = $mysqli->query($descriptionRequest);

    while ($rowDescription = $responseDescReq -> fetch_object()) {
        $presentationRequest = "SELECT * FROM presentationJeux WHERE id = '$rowDescription->id'";
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
                    <section class=\"widthFull flexBoxRow flexBoxSpaceEvenly\">");
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
        echo("
                    </section>        
                </section>");
                $responsePresReq -> free_result();

    }
    $responseDescReq -> free_result();
} else if (isset($_GET['affichage']) && $_GET['affichage'] == "jeux") {

    $descriptionRequest = "SELECT nombreJoueurMin, nombreJoueurMax, ageMinimum, tempsJeu FROM descriptionJeux";
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
        echo("
                    </section>        
                </section>");
    }
    $responseDescReq -> free_result();
    $responsePresReq -> free_result();
} 
$mysqli->close();