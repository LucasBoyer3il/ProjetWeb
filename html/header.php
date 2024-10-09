
    <header class="flexBoxRow flexBoxCenter">
        <img class="logo" src="./imgBoutique/logo.png" alt="logo">
        <section class="flexBoxRow flexBoxCenter ">
            <h1 class="bleu">LE CHAUDRON&nbsp</h1>
            <h1 class="rose">LUDIQUE</h1>
        </section>

<?php
    session_start();
    if (isset($_SESSION['user'])) {
        echo ('<a class="widthBouton bouton flexBoxRow flexBoxCenter shadow" href="./php/BDDRequestConnexion.php?mode=deconnexion">Déconnexion</a>');
    } else {
        echo ('<a class="widthBouton bouton flexBoxRow flexBoxCenter shadow" href="connexion.php">Connexion</a>');

    }
?>
    </header>
