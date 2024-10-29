<?php
if (isset($_GET['recherche']) && $_GET['recherche'] == 'nom') {
    header('Location: ../jeux.php?recherche=nom&nom='.$_POST['rechercherValue'].'');
} else if (isset($_GET['recherche']) && $_GET['recherche'] == 'filtre') {
    header('Location: ../jeux.php?recherche=filtre&nbJmin='.$_POST['nombreJoueurMin'].'&nbJmax='.$_POST['nombreJoueurMax'].'&temps='.$_POST['temps'].'');
}
?>