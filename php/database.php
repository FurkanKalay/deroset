<?php

// Database configuratie
$dbhost  = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "deroset";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Maak een  database connectie
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
session_start();

// // Controleer de verbinding
// if (mysqli_connect_error()) {
//   echo "Connection establishing failed!";
// } else {
//   echo "Connection established successfully.";
// }