<?php

session_start();
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

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
        //var_dump($_POST);
        //allemaal moeten ze true zijn
        $voornaam = $_POST["voornaam"]; // variabeles aan het zetten door post method te gebruiken
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["date"];
        $adress = $_POST["adress"];
        $zipcode = $_POST["zipcode"];
        $city = $_POST["city"];
       

        //database connectie

        require 'database.php';

        // $sql = "UPDATE users SET
        //  firstname = '$voornaam',
        //  lastname = '$achternaam',
        //  email = '$email',
        //  password = '$wachtwoord',
        //  date_of_birth = '$date',
        //  adress = '$telefoonnummer',
        //  zipcode = '$zipcode',
        //  city = '$city',
        //   WHERE id = '$id' ";

        $sql = "UPDATE `users` SET 
        `firstname`='$voornaam',
        `lastname`='$achternaam',
        `email`='$email',
        `password`='$wachtwoord',
        `date_of_birth`='$geboortedatum',
        `phonenumber`='$telefoonnummer',
        `adress`='$adress',
        `zipcode`='$zipcode',
        `city`='$city',
       
         WHERE id = '$id'";

        // Voer de INSERT INTO STATEMENT uit

        // var_dump(mysqli_query($conn, $sql));
        // die;

        if (mysqli_query($conn, $sql)) {
            header("location: http://localhost/deroset/klanten-overzicht.php");
        }

        //echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding
    } else {
        header("location: http://localhost/deroset/klanten-update.php?id=$id");
    }
}