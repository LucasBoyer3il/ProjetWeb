<?php
require_once('BDDConnect.php');
$adresseRequest = 'SELECT * FROM contact WHERE nom = "Adresse"';
$adresseResponse = $mysqli->query($adresseRequest);
$adresseRow = $adresseResponse -> fetch_object();

$telephoneRequest = 'SELECT * FROM contact WHERE nom = "Telephone"';
$telephoneResponse = $mysqli->query($telephoneRequest);
$telephoneRow = $telephoneResponse -> fetch_object();

$emailRequest = 'SELECT * FROM contact WHERE nom = "Email"';
$emailResponse = $mysqli->query($emailRequest);
$emailRow = $emailResponse -> fetch_object();

$horairesRequest = 'SELECT * FROM contact WHERE nom = "Horaires"';
$horairesResponse = $mysqli->query($horairesRequest);
$horairesRow = $horairesResponse -> fetch_object();

echo ('
    <h3>Nos coordonnées</h3>
    <p><b>Adresse : </b>'.$adresseRow->information.'</p>
    <p><b>Téléphone :</b> <a href="tel:+33'.str_replace(' ','',substr($telephoneRow->information,1,strlen($telephoneRow->information))).'">'.$telephoneRow->information.'</a></p>
    <p><b>Email :</b> <a href="mailto:contact@chaudronludique.fr">'.$emailRow->information.'</a></p>
    <p><b>Horaires d\'ouverture :</b></p>
    <ul>
    '.$horairesRow->information.'
    </ul>
');

$adresseResponse -> free_result();
$telephoneResponse -> free_result();
$emailResponse -> free_result();
$horairesResponse -> free_result();

$mysqli->close();

?>