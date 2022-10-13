<?php


if (isset($_POST['submit']) && $_POST['email'] != '' && $_POST['password'] != '') {
    //code wordt uitgevoerd als het formulier goed wordt ingevuld

    require 'database.php';
    $wachtwoord = $_POST['password'];
    $email = $_POST['email'];
    $sql = "SELECT * FROM gebruikers WHERE email ='$email' AND wachtwoord ='$wachtwoord'";
    // $sql = "SELECT * FROM gebruikers WHERE wachtwoord ='$wachtwoord'";

    $result = $mysqli->query($sql);

    $rows = $result->fetch_assoc(); // 1 rij zetten naar een associate array


    print_r($rows);


    $_SESSION['rol'] = $rows['rol'];

    $_SESSION['gebruiker_id'] = $rows['id'];
    $_SESSION['naam'] = $rows['voornaam'];

    print_r($rows);

    header("location: index.php");
} else {
    // echo 'fill out the form';
}