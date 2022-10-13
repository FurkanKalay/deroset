<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["voornaam"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["date"])
        && !empty($_POST["adress"])
        && !empty($_POST["zipcode"])
        && !empty($_POST["city"])

    ) {
        $voornaam = $_POST["voornaam"]; // variabeles aan het zetten door post method te gebruiken
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["date"];
        $adress = $_POST["adress"];
        $zipcode = $_POST["zipcode"];
        $city = $_POST["city"];


        $rol = "klant";

        //database connectie
        include 'database.php';


        $sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, adress, zipcode, city, role)
                VALUES ('$voornaam', '$achternaam','$email', '$wachtwoord', '$geboortedatum', '$telefoonnummer','$adress','$zipcode','$city','$rol')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: http://localhost/deroset/login.php");
    }
}