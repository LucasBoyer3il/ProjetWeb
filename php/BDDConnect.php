<?php
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