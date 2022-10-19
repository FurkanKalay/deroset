<?php  // hallo met pc
include 'php/database.php';


$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {
    $user = mysqli_fetch_assoc($result);
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
        <div class="bestel">

            <img src="smaken/<?php echo $user["picture"]?>">
            <h1><?php echo $user["name"] ?></h1>
            <p class="price">$<?php echo $user["price_per_kg"]?> per kg</p>

            <button>Add to Cart</button>




        </div>
    </div>






    <?php
    require 'footer.php';
?>
</body>

</html>