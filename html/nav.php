<nav>
    <a class="boutonNav flexBoxRow flexBoxCenter" href="jeux.php">Jeux</a>
    <a class="boutonNav flexBoxRow flexBoxCenter" href="quiSommesNous.php">Qui nous sommes</a>
    <a class="boutonNav flexBoxRow flexBoxCenter" href="contact.php">Contact</a>
</nav>

<section id="menuOverlay" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="toggleMenu()">&times;</a>
    <div class="overlay-content flexBoxColumn flexBoxCenter">
        <a class="boutonNav flexBoxRow flexBoxCenter" href="jeux.php">Jeux</a>
        <a class="boutonNav flexBoxRow flexBoxCenter" href="actualite.php">Actualité</a>
        <a class="boutonNav flexBoxRow flexBoxCenter" href="quiSommesNous.php">Qui nous sommes</a>
        <a class="boutonNav flexBoxRow flexBoxCenter" href="contact.php">Contact</a>
        <?php
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
    </div>
</section>

<div class="burger-menu" onclick="toggleMenu()">
    <div class="bar"></div>
    <div class="bar"></div>
    <div class="bar"></div>
</div>