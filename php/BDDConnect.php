<?php
/*
$server = "mysql-l-boyer-3il.alwaysdata.net";
$db = "l-boyer-3il_jeuxdesociete";
$user="381270";
$password="SiteInternet3il";
*/
//BDD Locale

$server = "localhost";
$db = "jeuxdesociete";
$user="root";
$password="";


$mysqli = new mysqli($server,$user,$password,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?> 