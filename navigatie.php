<div class="deroset">
    <img src="assets/cake.jpg" alt="" srcset="">
    <p>De Roset</p>

</div>


<?php session_start();

// die('hoi');
if (isset($_SESSION['rol'])) {
    $naam = $_SESSION['naam'];
    if ($_SESSION['rol'] == 'klant') {
        include 'klant.php';
    } elseif ($_SESSION['rol'] == 'medewerker') {
        include 'medewerker.php';
    } elseif ($_SESSION['rol'] == 'manager') {
        include 'manager.php';
    }
} else {
    include 'bezoeker.php';
}



?>




















<div class="smaakdag">
    <h4>Smaak van de dag</h4>
</div>

<div class="smaakpop">
    <h4>Populaire smaken</h4>
</div>