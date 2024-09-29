<?php
require_once("BDDConnect.php");

if (isset($_GET['mode'])) { //ET RAJOUTER CONDITION CONNECTE EN TANT QUADMIN
    if ($_GET['mode'] == "insertion" || $_GET['mode'] == "modifier") {
        $mode = $_GET['mode'];
        $req = "SELECT * FROM presentationJeux";
        $resReq = $mysqli->query($req);
        while ($row = $resReq -> fetch_object()) {
            echo ("
                    <div id=imgdesc>
                        <h3>".$row->nomJeu."</h3>
                        <a class=\"imageContainer\"  href=\"description.php?id=".$row->id."\">
                            <img src=\"./img/".$row->nomFichier.".png\" alt=\"\"/>
                        </a>
                        <div class=\"flexBoxRow\">
                            <a class=\"bouton\" href=\"insertion.php?id=".$row->id."&mode=modifier\">Modifier</a>
                            <a class=\"bouton\" href=\"supprimer.php?id=".$row->id."\">Supprimer</a>
                        </div>
                    </div>");
        }
        $resReq -> free_result();
    } else if ($_GET['mode'] == "modifier") {

    }
} else {
    $req = "SELECT * FROM presentationJeux";
    $resReq = $mysqli->query($req);
    while ($row = $resReq -> fetch_object()) {
        if (strlen($row->presentationJeu) > 100) {
            $presentationJeu = substr($row->presentationJeu,0,100) . "...";
        }
        echo ("
                <div id=imgdesc>
                    <h3>".$row->nomJeu."</h3>
                    <a class=\"imageContainer\"  href=\"description.php?id=".$row->id."\">
                        <img src=\"./img/".$row->nomFichier.".png\" alt=\"\"/>
                    </a>
                    <figurecaption id=\"presentationTexte\">".$presentationJeu."</figurecaption>
                </div>");
    }
    $resReq -> free_result();
}
$mysqli->close();
?>