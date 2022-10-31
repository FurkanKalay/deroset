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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <meta name=description content="website van De Roset">
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Product Update
        </div>

        <p class="paddingforform">Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a>
        </p>

        <form method="POST" action="php/product-update-verwerk.php">
            <div class="form">
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                <div class="inputfield">
                    <label>Naam</label>
                    <input type="text" class="input" name="name" value="<?php echo $user["name"] ?>">
                </div>
                <div class="inputfield">
                    <label>Prijs per kg</label>
                    <input type="text" class="input" name="priceperkg" value="<?php echo $user["price_per_kg"] ?>">
                </div>
                <div class="inputfield">
                    <label>Smaak van de week</label>
                    <input type="text" class="input" name="flavorotweek"
                        value="<?php echo $user["is_flavor_ot_week"] ?>">
                </div>
                <div class="inputfield">
                    <label>Category</label>
                    <input type="text" class="input" name="category" value="<?php echo $user["category"] ?>">
                </div>
                <div class="inputfield">
                    <label>Foto</label>
                    <input type="text" class="input" name="picture" value="<?php echo $user["picture"] ?>">
                </div>
                <div class="inputfield">
                    <label>Omschrijving</label>
                    <textarea class="textarea" name="description"><?php echo $user["description"] ?></textarea>
                </div>


                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>



            </div>
        </form>
    </div>

</body>

</html>