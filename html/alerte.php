<?php
function alerte($etat, $debutMessage, $finMessage) {
    echo("<div id='alerteSucces' class='flexBoxColumn flexBoxCenter alert ".$etat."'>
        <b>".$debutMessage."</b></br>".$finMessage."
    </div>");
}
?>