<?php  // hallo met pc
include 'php/database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM orders WHERE id = $id LIMIT 1";

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
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Bestellingen update
        </div>

        <p class="paddingforform">Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a>
        </p>


        <form method="POST" action="php/bestellingen-update-verwerk.php">
            <div class="form">
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                <div class="inputfield">
                    <label>Datum</label>
                    <input type="text" class="input" name="date" value="<?php echo $user["date"] ?>">
                </div>
                <div class="inputfield">
                    <label>Bestelmethode</label>
                    <input type="text" class="input" name="ordermethod" value="<?php echo $user["ordermethod"] ?>">
                </div>

                <div class="inputfield">
                    <label>Is het Afgenomen?</label>
                    <div class="custom_select">
                        <select name="isrecieved">
                            <option value="">Selecteer</option>
                            <option value="no">Nee</option>
                            <option value="yes">Ja</option>
                        </select>
                    </div>
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>

</body>

</html>