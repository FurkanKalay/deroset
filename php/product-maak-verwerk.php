<?php

if (isset($_POST["submit"])) { // als submit gevult is en niet staat aan NULL voert hij de statement uit
    if (
        !empty($_POST["name"])     // ze moeten allemaal true zijn aka ze moeten niet leeg zijn
        && !empty($_POST["priceperkg"])
        && !empty($_POST["flavoroftheweek"])
        && !empty($_POST["category"])
        && !empty($_POST["plaatje"])
     

    ) {
        $name = $_POST["name"]; // variabeles aan het zetten door post method te gebruiken
        $priceperkg = $_POST["priceperkg"];
        
        $flavoroftheweek = $_POST["flavoroftheweek"];
        $category = $_POST["category"];
        $plaatje = $_POST["plaatje"];
        


        

        //database connectie
        include 'database.php';


        $sql = "INSERT INTO products (name, price_per_kg, is_flavor_ot_week, category, picture)
                VALUES ('$name', '$priceperkg','$flavoroftheweek', '$category' ,'$plaatje' )";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);

        echo "Inserted successfully";
        mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
        header("location: http://localhost/deroset/product-overzicht.php");
    }
}