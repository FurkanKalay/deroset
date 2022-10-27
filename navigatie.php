<?php  // hallo met pc


include 'php/database.php';

$sql4 = "SELECT * FROM products WHERE is_flavor_ot_week = '3' LIMIT 3";

if ($result1 = mysqli_query($conn, $sql4)) {
    $melding2 = mysqli_fetch_all($result1, MYSQLI_ASSOC);
}


$sql3 = "SELECT * FROM products WHERE is_flavor_ot_week = '1' LIMIT 1";

if ($result2 = mysqli_query($conn, $sql3)) {
    $melding3 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
}
?>




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
    <?php foreach ($melding3 as $mel3) : ?>

    <div class="flip-card">

        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="smaken/<?php echo $mel3["picture"] ?>" alt="Avatar"
                    style="width:100%;height:100%;border-radius:50%;">
            </div>
            <div class="flip-card-back">
                <p><?php echo $mel3["name"] ?></p>
                <p>$<?php echo $mel3["price_per_kg"] ?></p>
                <a href="#" class="addbutton"
                    onclick="addProduct('<?php echo $mel3['name'] ?>', '$<?php echo $mel3['price_per_kg'] ?>', '<?php echo $mel3['id'] ?>')">add
                </a>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

</div>

<div class="smaakpop">
    <h4>Populaire smaken</h4>

    <div class="combine">
        <?php foreach ($melding2 as $mel2) : ?>
        <div class="flip-card">

            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="smaken/<?php echo $mel2["picture"] ?>" alt="Avatar"
                        style="width:100%;height:100%;border-radius:50%;">
                </div>
                <div class="flip-card-back">
                    <p><?php echo $mel2["name"] ?></p>
                    <p>$<?php echo $mel2["price_per_kg"] ?></p>
                    <a href="#" class="addbutton"
                        onclick="addProduct('<?php echo $mel2['name'] ?>', '$<?php echo $mel2['price_per_kg'] ?>', '<?php echo $mel2['id'] ?>')">add
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>




</div>