<?php
require_once("BDDConnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo($id);
    $mysqli->query("UPDATE presentationJeux 
                    SET nomFichier = '" . strtolower(str_replace(' ','',$_POST['nomJeu'])) . "',
                    nomJeu = '" . $_POST['nomJeu'] . "',
                    presentationJeu = '" . str_replace("'", "\'", $_POST['presentationJeu']) . "'
                    WHERE id=$id");
    $mysqli->query("UPDATE descriptionJeux 
                    SET description = '" . nl2br(str_replace("'", "\'", $_POST['descriptionJeu'])) . "',
                    nombreJoueurMin = '" . $_POST['nombreJoueurMin'] . "',
                    nombreJoueurMax = '" . $_POST['nombreJoueurMax'] . "',
                    ageMinimum = '" . $_POST['ageMinimum'] . "',
                    tempsJeu = '" . $_POST['tempsJeu'] . "'
                    WHERE id=$id");
} else {
    $mysqli->query("INSERT INTO presentationJeux (nomFichier, nomJeu, presentationJeu) 
                    VALUES ('" . strtolower(str_replace(' ','',$_POST['nomJeu'])) . "',
                    '" . $_POST['nomJeu'] . "',
                    '" . $_POST['presentationJeu'] . "')");
    $mysqli->query("INSERT INTO descriptionJeux (description, nombreJoueur, ageMinimum, tempsJeu) 
                    VALUES ('" .str_replace("'", "\'",(nl2br($_POST['descriptionJeu']))) . "',
                    '" . $_POST['nombreJoueurMin'] . "',
                    '" . $_POST['nombreJoueurMax'] . "'
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
?>