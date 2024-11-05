<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="title" content="Le Chaudron Ludique"/>
    <meta name="description" content="Bienvenue dans le royaume des jeux de société à Rodez" />
    <meta name="keywords" content="mots-clé, mot" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/vnd.icon" href="imgBoutique/logoFavicon.png">
    <link rel="stylesheet" type="text/css" href="css/bibliotheque.css" media="screen"/>
    <link rel="stylesheet" href="css/bibliotheque.css" type="text/css" media="print">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,600;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
</head>

<?php
    $url = $_SERVER['PHP_SELF'];
    $urlFichier = str_replace('/ProjetWeb/',"",$url);
    $urlNomFichier =  str_replace(".php", "", $urlFichier);
    echo("<link rel='stylesheet' href='./css/".$urlNomFichier.".css' type='text/css'>");

?>