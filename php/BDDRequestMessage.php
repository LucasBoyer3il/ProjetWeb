<?php
require_once("BDDConnect.php");

if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message'])) { 
    $mysqli->query("INSERT INTO message (nomUtilisateur, emailUtilisateur, messageUtilisateur) 
                VALUES ('".$_POST['nom']."',
                '" . $_POST['email'] . "',
                '" . addSlashes($_POST['message']) . "')");
    $mysqli->close();
    header('Location: ../contact.php?message=envoye');
} else if (isset($_GET['mode']) && $_GET['mode'] == "supprimer") {
    $mysqli->query("DELETE FROM message WHERE id = " . $_GET['id'] . "");

    header('Location: ../contact.php');

    $mysqli->close();
} else {
    session_start();
    if (isset($_SESSION['user']) && $_SESSION['user'] == 'admin') {
        $req = "SELECT * FROM message";
        $resReq = $mysqli->query($req);
        echo("<h3 class='widthFull'>Gestion des messages</h3>
            <table>
                <tr>
                    <td><b>Nom</td>
                    <td><b>Email</td>
                    <td><b>Message</td>
                </tr>");
        while ($rowMessage = $resReq -> fetch_object()) {
            echo ("
                <tr>
                    <td>".$rowMessage->nomUtilisateur."</td>
                    <td>".$rowMessage->emailUtilisateur."</td>
                    <td>".$rowMessage->messageUtilisateur."</td>
                    <td><a class=\"widthBouton bouton flexBoxRow flexBoxCenter shadow\" href=\"./php/BDDRequestMessage.php?id=".$rowMessage->id."&mode=supprimer\">Supprimer</a></td>
                </tr>
            ");
        }
        echo("</table>");
    } else {
        echo("
        <h3>Envoyez-nous un message</h3>
        <form  class='flexBoxColumn flexBoxCenter' action='./php/BDDRequestMessage.php' method='post'>
            <label for='nom'>Nom</label>
            <input type='text' id='nom' name='nom' required>

            <label for='email'>Email</label>
            <input type='text' id='email' name='email' required>

            <label for='message'>Message</label>
            <textarea id='message' name='message' rows='10' cols='50' required></textarea>

            <button class='bouton shadow' type='submit'>Envoyer</button>
        </form>
        ");
    }   
}
$mysqli->close();

?>