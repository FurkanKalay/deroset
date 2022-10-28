<?php  // hallo met pc
include 'php/database.php';


$id = $_SESSION['gebruiker_id'];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

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
        <div class="winkelmanden">

            <h2>Winkelmand</h2>
            <div class="inwinkelmand">
                <div id="winkelmand" class="winkelmand">
                    <div class="buttondelete" id="buttondelete" onclick="deleteProduct()">
                        delete all
                    </div>
                </div>
                <form method="POST" action="php/bestelling-verwerk.php">


                    <label for="fname">Naam</label>
                    <input type="text" id="fname" name="name" value="<?php echo $user["firstname"] ?>">
                    <label for="lname">Adress</label>
                    <input type="text" id="lname" name="adress" value="<?php echo $user["adress"] ?>">

                    <label for="fname">Postcode</label>
                    <input type="text" id="fname" name="zipcode" value="<?php echo $user["zipcode"] ?>">
                    <label for="lname">Plaats</label>
                    <input type="text" id="lname" name="city" value="<?php echo $user["city"] ?>">

                    <label for="lname">Telefoonnummer</label>
                    <input type="text" id="lname" name="number" value="<?php echo $user["phonenumber"] ?>">






                    <div class="form-group">
                        <!-- Date input -->
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
                    </div>


                    <div class="bezorgenophalen">
                          <input type="radio" id="css" name="method" value="bezorgen">
                          <label for="css">Bezorgen</label>
                    </div>
                    <div class="bezorgenophalen">
                          <input type="radio" id="javascript" name="method" value="ophalen">
                          <label for="javascript">Ophalen</label>
                    </div>


                    <button class="btn btn-light" name="submit" type="submit" onclick="deleteProduct()">Submit</button>
                </form>

            </div>




        </div>


    </div>






    <?php
    require 'footer.php';
?>
</body>

</html>