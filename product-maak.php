<?php  // hallo met pc
include 'php/database.php';
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
            Product maak
        </div>

        <p class="paddingforform">Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a>
        </p>

        <form method="POST" action="php/product-maak-verwerk.php">
            <div class="form">
                <input type="hidden" name="id">
                <div class="inputfield">
                    <label>Naam</label>
                    <input type="text" class="input" name="name">
                </div>
                <div class="inputfield">
                    <label>Prijs per kg</label>
                    <input type="text" class="input" name="priceperkg">
                </div>
                <div class="inputfield">
                    <label>Smaak van de week</label>
                    <input type="text" class="input" name="flavoroftheweek">
                </div>
                <div class="inputfield">
                    <label>Category</label>
                    <input type="text" class="input" name="category">
                </div>
                <div class="inputfield">
                    <label>Foto</label>
                    <input type="text" class="input" name="plaatje">
                </div>
                <div class="inputfield">
                    <label>Omschrijving</label>
                    <textarea class="textarea" name="description"></textarea>
                </div>


                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>



            </div>
        </form>
    </div>

</body>

</html>