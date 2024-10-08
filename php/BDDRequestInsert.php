<?php
require_once("BDDConnect.php");

if (!isset($_GET['id'])) {
    $id = $_GET['id'];
    $mysqli->query("UPDATE presentationjeux 
                    SET nomFichier = '" . strtolower(str_replace(' ','',$_POST['nomJeu'])) . "',
                    nomJeu = '" . $_POST['nomJeu'] . "',
                    presentationJeu = '" . $_POST['presentationJeu'] . "'
                    WHERE id=$id");
} else {
    $mysqli->query("INSERT INTO presentationjeux (nomFichier, nomJeu, presentationJeu) 
                    VALUES ('" . strtolower(str_replace(' ','',$_POST['nomJeu'])) . "',
                    '" . $_POST['nomJeu'] . "',
                    '" . $_POST['presentationJeu'] . "')");
    $mysqli->query("INSERT INTO descriptionJeux (description, nombreJoueur, ageMinimum, tempsJeu) 
                    VALUES ('" . $_POST['descriptionJeu'] . "',
                    '" . $_POST['nombreJoueur'] . "',
                    '" . $_POST['ageMinimum'] . "',
                    '" . $_POST['tempsJeu'] . "')");
}

$mysqli->close();

$uploads_dir = '../img';
if ($_FILES["imageJeu"]["error"] == UPLOAD_ERR_OK) {
    $tmp_name = $_FILES["imageJeu"]["tmp_name"];
    $name = strtolower(str_replace(' ','',$_POST['nomJeu'])) . ".png";
    move_uploaded_file($tmp_name, "$uploads_dir/$name");
}

header('Location: ../insertion.php?mode=insertion');
exit();
?>