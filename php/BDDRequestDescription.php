<?php
require_once("BDDConnect.php");

if(isset($_GET['image'])){
    $image = $_GET['image'];
    $req = "SELECT * FROM jeux WHERE image = '".$image."'";
    $resReq = $mysqli->query($req);
    $row = $resReq -> fetch_object();
    echo ("
        <a class=\"lienImage\" href=\"description.php\">
            <div id=imgdesc>
                <h3>".$row->nom."</h3>
                <div class=\"imageContainer\">
                    <img src=\"./img/".$row->image.".png\" alt=\"\"/>
                </div>
                <figurecaption id=\"description\">".$row->description."</figurecaption>
            </div>
        </a>");
    $resReq -> free_result();

}else{
    echo "Rien du tout !!!";
}

$mysqli->close();

?>