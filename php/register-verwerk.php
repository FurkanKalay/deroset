<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["voornaam"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["date"])

    ) {
        $voornaam = $_POST["voornaam"]; // variabeles aan het zetten door post method te gebruiken
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["date"];

        $rol = "klant";

        //database connectie
        include 'database.php';


        $sql = "INSERT INTO gebruikers (voornaam, achternaam, email, wachtwoord, telefoonnummer, geboortedatum, rol)
                VALUES ('$voornaam', '$achternaam','$email', '$wachtwoord', '$telefoonnummer','$geboortedatum','$rol')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: login.php");
    }
}
include "navigatie.php";