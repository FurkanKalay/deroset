<?php  // hallo met pc
include 'php/database.php';
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
        <div class="winkelmanden">
            <div class="buttondelete" id="buttondelete" onclick="deleteProduct()">
                delete all
            </div>
            <div type="text" id="winkelmand" class="winkelmand">
            </div>
            <form method="POST" action="php/bestelling-verwerk.php">
                <!-- <label for="fname">Naam</label>
                <input type="text" id="fname" name="fname" value="John">
                <label for="lname">Adres</label>
                <input type="text" id="lname" name="lname" value="Doe">

                <label for="fname">Postcode</label>
                <input type="text" id="fname" name="fname" value="John">
                <label for="lname">Plaats</label>
                <input type="text" id="lname" name="lname" value="Doe">

                <label for="lname">Telefoonnummer </label>
                <input type="text" id="lname" name="lname" value="Doe"> -->





                <div class="bezorgenophalen">
                      <input type="radio" id="css" name="method" value="bezorgen">
                      <label for="css">Bezorgen</label>
                </div>
                <div class="bezorgenophalen">
                      <input type="radio" id="javascript" name="method" value="ophalen">
                      <label for="javascript">Ophalen</label>
                </div>

                <div class="form-group">
                    <!-- Date input -->
                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
                </div>



                <button class="btn btn-light" name="submit" type="submit" onclick="deleteProduct()">Submit</button>
            </form>



        </div>


    </div>






    <?php
    require 'footer.php';
?>
</body>

</html>