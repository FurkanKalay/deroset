<?php

session_start();


// die('hoi');
if (isset($_SESSION['rol'])) {
    $naam = $_SESSION['naam'];
    if ($_SESSION['rol'] == 'klant') {
        echo '<nav class="navbar navbar-expand-lg bg-dark">';
        echo '<div class="container-fluid">';
        echo '<a class="navbar-brand text-white" href="#">Melding Management Systeem </a>';
        echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
        echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';
        echo '<div class="collapse navbar-collapse" id="navbarNav">';
        echo '<ul class="navbar-nav">';
        echo ' <li class="nav-item">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/index.php">Home</a>';
        echo '</li>';
        echo '<li class="nav-item  ">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/loguit.php">Loguit</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo ' </nav>';
        echo '<h2 class="px-5 py-2">';
        echo 'welkom ';
        echo $naam;
        echo '</h2>';
    } elseif ($_SESSION['rol'] == 'admin') {
        echo '<nav class="navbar navbar-expand-lg bg-dark">';
        echo '<div class="container-fluid">';
        echo '<a class="navbar-brand text-white" href="#">Melding Management Systeem </a>';
        echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
        echo '<span class="navbar-toggler-icon"></span>';
        echo '</button>';
        echo '<div class="collapse navbar-collapse" id="navbarNav">';
        echo '<ul class="navbar-nav">';
        echo ' <li class="nav-item">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/index.php">Home</a>';
        echo '</li>';
        echo '<li class="nav-item  ">';
        echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/loguit.php">Loguit</a>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/gebruikeroverzicht.php">Gebruikers overzicht</a>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/categorie.php">Categorie aanmaken</a>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/categorieoverzicht.php">Categorie overzicht</a>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/meldingenoverzicht.php">Melding overzicht</a>';
        echo '</li>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/personeelslidmaak.php">maak een personeelslid aan</a>';
        echo '</li>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/personeelsoverzicht.php">personeelslid overzicht</a>';
        echo '</li>';
        echo '</li>';
        echo ' <li class="nav-item  ">';
        echo ' <a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/updateaccount.php">update eigen account</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo ' </nav>';
        echo '<h2 class="px-5 py-2">';
        echo 'welkom ';
        echo $naam;
        echo '</h2>';
    }
} else {
    echo '<nav class="navbar navbar-expand-lg bg-dark">';
    echo '<div class="container-fluid">';
    echo '<a class="navbar-brand text-white" href="#">Melding Management Systeem </a>';
    echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">';
    echo '<span class="navbar-toggler-icon"></span>';
    echo '</button>';
    echo '<div class="collapse navbar-collapse" id="navbarNav">';
    echo '<ul class="navbar-nav">';
    echo ' <li class="nav-item">';
    echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/index1.php">Home</a>';
    echo '</li>';
    echo '<li class="nav-item  ">';
    echo '<a class="nav-link active text-white" aria-current="page" href="http://localhost/eindproject/login.php">Login</a>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo ' </nav>';
}