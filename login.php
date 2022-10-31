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
            Login
        </div>

        <p class="paddingforform">Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a>
        </p>

        <form method="POST" action="php/login-verwerk.php">
            <div class="form">
                <input type="hidden" name="id">

                <div class="inputfield">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div>

                <div class="inputfield">
                    <label>Wachtwoord</label>
                    <input type="password" class="input" name="password">
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>




</body>

</html>