<?php  $naam = $_SESSION['naam'];

?>


<header>

    <ul>

        <li><a href="overons.php">Over Ons</a></li>
        <li><a href="bestellen.php">Bestellen</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="">Winkelmandje</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="blog.php">Producten</a></li>
        <li><a href="blog.php">Klanten</a></li>

        <li><a href="gebruiker-update.php" i class="fa-regular fa-user"></i></a>
            <?php echo $naam; ?>
        </li>









    </ul>
</header>