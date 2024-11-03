<?php
if (isset($_GET['recherche']) && $_GET['recherche'] == 'nom') {
    header('Location: ../jeux.php?recherche=nom&nom='.$_POST['rechercherValue'].'');
} else if (isset($_GET['recherche']) && $_GET['recherche'] == 'filtre') {
    header('Location: ../jeux.php?recherche=filtre&nbJmin='.$_POST['nombreJoueur'].'&ageMin='.$_POST['age'].'&temps='.$_POST['temps'].'');
}
?>