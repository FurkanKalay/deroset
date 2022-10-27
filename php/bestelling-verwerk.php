<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["date"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn
        // && !empty($_POST["achternaam"])
        // && !empty($_POST["email"])
        // && !empty($_POST["wachtwoord"])
        // && !empty($_POST["telefoonnummer"])
        // && !empty($_POST["date"])
        // && !empty($_POST["adress"])
        // && !empty($_POST["zipcode"])
        // && !empty($_POST["city"])

    ) {
        session_start();
        // variabeles aan het zetten door post method te gebruiken
        $id = $_SESSION['gebruiker_id'];
        $date = $_POST["date"];
        $method = $_POST["method"];
        $productid = $_POST["idvanproduct"];
        $recieved = "no";



        //database connectie
        include 'database.php';


        $sql = "INSERT INTO orders (user_id, product_id, date, ordermethod, isRecieved)
                VALUES ('$id', '$productid','$date', '$method', '$recieved')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: http://localhost/deroset/bestellen.php");
    }
}