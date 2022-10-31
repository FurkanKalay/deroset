<?php  $naam = $_SESSION['naam'];

?>


<header>


    <ul>

        <li><a href="overons.php">Over Ons</a></li>

        <li><a href="blog.php">Blog</a></li>



        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="product-overzicht.php">Producten</a></li>
        <li><a href="bestellingen-overzicht.php">Bestellingen</a></li>
        <li><a href="klanten-overzicht.php">Klanten</a></li>
        <li><a href="contact.php"><i class="fa-solid fa-phone"></i></a></li>
        <li><a href="winkelmand.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <li><a href="gebruiker-update.php" i class="fa-regular fa-user"></i></a>
            <?php echo $naam; ?>
        </li>








    </ul>

</header>