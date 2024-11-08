<?php
require_once("BDDConnect.php");

if (isset($_GET['mode'])) { 
    if ($_GET['mode'] == "insertion" || $_GET['mode'] == "modifier") {
        $mode = $_GET['mode'];
        $req = "SELECT * FROM presentationJeux";
        $resReq = $mysqli->query($req);
        while ($row = $resReq -> fetch_object()) {
            echo ("
                    <section class=\"flexBoxColumn flexBoxCenter shadow\">
                        <h3 class=\"flexBoxRow flexBoxCenter\">".$row->nomJeu."</h3>
                        <a class=\"imageContainer\"  href=\"description.php?id=".$row->id."\">
                            <img src=\"./img/".$row->nomFichier.".png\" alt=\"\"/>
                        </a>
                        <div class=\"widthFull flexBoxRow flexBoxSpaceEvenly\">
                            <a class=\"widthBouton bouton flexBoxRow flexBoxCenter shadow\" href=\"insertion.php?id=".$row->id."&mode=modifier\">Modifier</a>
                            <a class=\"widthBouton bouton flexBoxRow flexBoxCenter shadow\" href=\"./php/BDDRequestSupprimer.php?id=".$row->id."\">Supprimer</a>
                        </div>
                    </section>
                ");
        }
        $resReq -> free_result();
    }
} 
$mysqli->close();
?>