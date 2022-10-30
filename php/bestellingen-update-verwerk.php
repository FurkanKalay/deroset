<?php

require 'database.php';
if (isset($_POST["submit"])) {
    $id = $_POST["id"];


    if (
        !empty($_POST["date"])
        && !empty($_POST["ordermethod"])
        && !empty($_POST["isrecieved"])


    ) {
        //var_dump($_POST);
        //allemaal moeten ze true zijn
        $date = $_POST["date"];
        $ordermethod = $_POST["ordermethod"];
        $isrecieved = $_POST["isrecieved"];

        // var_dump($_POST);
        // die;

        //database connectie

        

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

        $sql = "UPDATE `orders` SET 
        `date`='$date',
        `ordermethod`='$ordermethod',
        `isRecieved`='$isrecieved'
    
       
         WHERE id = '$id'";

        // Voer de INSERT INTO STATEMENT uit

        // var_dump(mysqli_query($conn, $sql));
        // die;

        if (mysqli_query($conn, $sql)) {
            header("location: http://localhost/deroset/bestellingen-overzicht.php");
        }

        //echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding
    } else {
        header("location: http://localhost/deroset/bestellingen-update.php?id=$id");
    }
}