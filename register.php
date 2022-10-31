<?php  // hallo met pc
include 'php/database.php';


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
            Registreer
        </div>

        <p class="paddingforform">Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a>
        </p>

        <form method="POST" action="php/register-verwerk.php">
            <div class="form">
                <input type="hidden" name="id">
                <div class="inputfield">
                    <label>Naam</label>
                    <input type="text" class="input" name="voornaam">
                </div>
                <div class="inputfield">
                    <label>Achternaam</label>
                    <input type="text" class="input" name="achternaam">
                </div>
                <div class="inputfield">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div>
                <div class="inputfield">
                    <label>Telefoonnummer</label>
                    <input type="text" class="input" name="telefoonnummer">
                </div>
                <div class="inputfield">
                    <label>Wachtwoord</label>
                    <input type="password" class="input" name="wachtwoord">
                </div>
                <div class="inputfield">
                    <label>Geboortedatum</label>

                    <input class="input" id="date" name="date" placeholder="MM/DD/YYY" type="date" />
                </div>
                <div class="inputfield">
                    <label>Address</label>
                    <input type="text" class="input" name="adress">
                </div>
                <div class="inputfield">
                    <label>Postcode</label>
                    <input type="text" class="input" name="zipcode">
                </div>
                <div class="inputfield">
                    <label>Stad</label>
                    <input type="text" class="input" name="city">
                </div>
                <div class="paddingforform">
                    Heb je al een account? Log in <a href="login.php" class="link-primary"> hier.</a>
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>




</body>

</html>