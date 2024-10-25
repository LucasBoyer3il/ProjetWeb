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

if (isset($_GET['mode'])) {
    if ($_GET['mode'] == 'footer') {
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
    } else if ($_GET['mode'] == 'modifier') {
        $mysqli->query("UPDATE contact
        SET information = '".str_replace("'", "\'", $_POST['adresse'])."'
        WHERE nom = 'Adresse'");
        $mysqli->query("UPDATE contact
            SET information = '".$_POST['telephone']."'
            WHERE nom = 'Telephone'");
        $mysqli->query("UPDATE contact
            SET information = '".$_POST['email']."'
            WHERE nom = 'Email'");
        $mysqli->query("UPDATE contact
            SET information = '".$_POST['horaires']."'
            WHERE nom = 'Horaires'");
        header('Location: ../contact.php');
    }
} else {
session_start();
if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
    echo ("
    <h3>Modifier les coordonnées</h3>
    <form id=\"formInsertionModification\" class=\"flexBoxColumn flexBoxFlexStart\" action=\"./php/BDDRequestContact.php?mode=modifier\" method=\"post\" enctype=\"multipart/form-data\">               
        <label>Adresse : </label>
        <input name=\"adresse\" id=\"adresse\" type=\"text\" value=\"".$adresseRow->information."\">
    
        <label>Téléphone : </label>
        <input name=\"telephone\" id=\"telephone\" type=\"text\" value=\"".$telephoneRow->information."\">
    
        <label>Email : </label>
        <input name=\"email\" id=\"email\" type=\"text\" value=\"".$emailRow->information."\">

        <label>Horaires : </label>
        <textarea name=\"horaires\" id=\"horaires\" type=\"text\" rows=\"10\" cols=\"30\">$horairesRow->information</textarea>

        <button class=\"widthFull bouton flexBoxRow flexBoxCenter shadow\" type=\"submit\">Modifier</button>
    </form>
    ");
} else {
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
    }
}
$adresseResponse -> free_result();
$telephoneResponse -> free_result();
$emailResponse -> free_result();
$horairesResponse -> free_result();

$mysqli->close();

?>