<?php

session_start();
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if (
        !empty($_POST["name"])
        && !empty($_POST["priceperkg"])
        && !empty($_POST["flavorotweek"])
        && !empty($_POST["category"])

    ) {
        //var_dump($_POST);
        //allemaal moeten ze true zijn
        $name = $_POST["name"];
        $priceperkg = $_POST["priceperkg"];
        $flavorotweek = $_POST["flavorotweek"];
        $category = $_POST["category"];
      

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

        $sql = "UPDATE `products` SET 
        `name`='$name',
        `price_per_kg`='$priceperkg',
        `is_flavor_ot_week`='$flavorotweek',
        `category`='$category'
       
         WHERE id = '$id'";

        // Voer de INSERT INTO STATEMENT uit

        // var_dump(mysqli_query($conn, $sql));
        // die;

        if (mysqli_query($conn, $sql)) {
            header("location: http://localhost/deroset/product-overzicht.php");
        }

        //echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding
    } else {
        header("location: http://localhost/deroset/product-update.php?id=$id");
    }
}