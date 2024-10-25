<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo ('<a class="margin widthBouton bouton flexBoxRow flexBoxCenter shadow" href="./php/BDDRequestConnexion.php?mode=deconnexion">Déconnexion</a>');
        if ($_SESSION['user'] == 'admin') {
            echo ('<a class="margin widthBouton bouton flexBoxRow flexBoxCenter shadow" href="insertion.php?mode=insertion">Gestion des jeux</a>');
        } else {
            echo ('<a class="margin widthBouton bouton flexBoxRow flexBoxCenter shadow" href="panier.php">Panier</a>');
        }
    } else {
        echo ('<a class="margin widthBouton bouton flexBoxRow flexBoxCenter shadow" href="connexion.php">Connexion</a>
            <a class="margin widthBouton bouton flexBoxRow flexBoxCenter shadow" href="panier.php?mode=afficher">Panier</a>');

    }
?>