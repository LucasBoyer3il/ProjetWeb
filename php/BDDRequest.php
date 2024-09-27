<?php
require_once("BDDConnect.php");

$req = "SELECT * FROM jeux";
$resReq = $mysqli->query($req);
while ($row = $resReq -> fetch_object()) {
     echo ("
            <a class=\"lienImage\" href=\"description.php?image=".$row->image."\">
                <div id=imgdesc>
                    <h3>".$row->nom."</h3>
                    <div class=\"imageContainer\">
                        <img src=\"./img/".$row->image.".png\" alt=\"\"/>
                    </div>
                    <figurecaption id=\"description\">".$row->présentation."</figurecaption>
                </div>
            </a>");
  }
  $resReq -> free_result();

$mysqli->close();
?>