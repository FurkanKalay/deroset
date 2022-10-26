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

            <div id="winkelmand" class="winkelmand">
                <div class="buttondelete" id="buttondelete" onclick="deleteProduct()">
                    delete all
                </div>
            </div>
            <form>
                <label for="fname">Naam</label>
                <input type="text" id="fname" name="fname" value="John">
                <label for="lname">Adres</label>
                <input type="text" id="lname" name="lname" value="Doe">

                <label for="fname">Postcode</label>
                <input type="text" id="fname" name="fname" value="John">
                <label for="lname">Plaats</label>
                <input type="text" id="lname" name="lname" value="Doe">

                <label for="lname">Telefoonnummer </label>
                <input type="text" id="lname" name="lname" value="Doe">





                <div class="bezorgenophalen">
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">Bezorgen</label>
                </div>
                <div class="bezorgenophalen">
                      <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                      <label for="javascript">Ophalen</label>
                </div>



                <button class="btn btn-light" name="submit" type="submit">Submit</button>
            </form>



        </div>


    </div>






    <?php
    require 'footer.php';
?>
</body>

</html>