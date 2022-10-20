<?php  // hallo met pc


include 'php/database.php';

$sql = "SELECT * FROM products";

if ($result = mysqli_query($conn, $sql)) {
    $melding = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php  // hallo met pc
        include 'php/links.php';
    ?>
</head>

<body>

    <?php  // hallo met pc
        include 'navigatie.php';
?>

    <div class="front">

        <div class="bestellen">
            <?php foreach ($melding as $mel) : ?>

            <div class="flip-card">

                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="smaken/<?php echo $mel["picture"] ?>" alt="Avatar"
                            style="width:100%;height:100%;border-radius:50%;">
                    </div>
                    <div class="flip-card-back">
                        <p><?php echo $mel["name"] ?></p>
                        <p>$<?php echo $mel["price_per_kg"] ?></p>
                        <a href="php/addtocart.php?id=<?php echo $mel["id"] ?>"><button>+ winkelwagen</button>
                        </a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

        </div>

    </div>






    <?php
 require 'footer.php';
?>
</body>

</html>