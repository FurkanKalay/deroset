<?php
require 'database.php';

if (isset($_POST["submit"])) {
    $id = $_SESSION['gebruiker_id'];

    if (
        !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["geboortedatum"])
    ) {
        //var_dump($_POST);
        //allemaal moeten ze true zijn
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = trim($_POST["email"]);
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = htmlentities($_POST['geboortedatum']);
        $date = date('Y-m-d', strtotime($geboortedatum));
        $city = $_POST["city"];
        $adress = $_POST["adress"];
        $zipcode = $_POST["zipcode"];

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
        `date_of_birth`='$date',
        `phonenumber`='$telefoonnummer',
        `adress`='$adress',
        `zipcode`='$zipcode',
        `city`='$city',
        
         WHERE id = '$id'";

        // Voer de INSERT INTO STATEMENT uit

        // var_dump(mysqli_query($conn, $sql));
        // die;

        if (mysqli_query($conn, $sql)) {
            header("location: ../gebruiker-update.php");
        }

        //echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding
    } else {
        header("location: ../gebruiker-update.php?id=$id");
    }
}