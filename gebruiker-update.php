<?php  // hallo met pc
include 'php/database.php';

$id =  $_SESSION['gebruiker_id'];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

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
            Account Update
        </div>

        <p>Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a> </p>
        <p>log uit <a href="php/loguit-verwerk.php" class="link-primary">hier.</a> </p>
        <p class="paddingforform">of verwijder je account <a href="php/klanten1-delete-verwerk.php?id=<?php echo $id ?>"
                class="link-primary">hier.</a> </p>
        <form method="POST" action="php/gebruiker-update-verwerk.php">
            <div class="form">
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                <div class="inputfield">
                    <label>First Name</label>
                    <input type="text" class="input" name="voornaam" value="<?php echo $user["firstname"] ?>">
                </div>
                <div class="inputfield">
                    <label>Last Name</label>
                    <input type="text" class="input" name="achternaam" value="<?php echo $user["lastname"] ?>">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="text" class="input" name="email" value="<?php echo $user["email"] ?>">
                </div>
                <div class="inputfield">
                    <label>Phone number</label>
                    <input type="text" class="input" name="telefoonnummer" value="<?php echo $user["phonenumber"] ?>">
                </div>
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" class="input" name="wachtwoord" value="<?php echo $user["password"] ?>">
                </div>
                <div class="inputfield">
                    <label>Geboortedatum</label>
                    <input type="text" class="input" name="geboortedatum" value="<?php echo $user["date_of_birth"] ?>">
                </div>





                <div class="inputfield">
                    <label>Address</label>
                    <input type="text" class="input" name="adress" value="<?php echo $user["adress"] ?>">
                </div>
                <div class="inputfield">
                    <label>Postal Code</label>
                    <input type="text" class="input" name="zipcode" value="<?php echo $user["zipcode"] ?>">
                </div>
                <div class="inputfield">
                    <label>City</label>
                    <input type="text" class="input" name="city" value="<?php echo $user["city"] ?>">
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>

</body>

</html>