<?php  // hallo met pc
include 'php/database.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3f5b3fe9f7.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <?php  // hallo met pc
        include 'php/links.php';
?>

</head>

<body>

    <?php  // hallo met pc
    include 'navigatie.php';
?>

    <div class="front">

        <form class="py-5 px-5 " method="POST" action="register.php">
            <div class="form-group">
                <label for="exampleInputUser1">Name</label>
                <input type="text" class="form-control" id="voornaam" name="voornaam" aria-describedby="userHelp"
                    placeholder="Enter Username">

            </div>
            <div class="form-group">
                <label for="exampleInputUser1">Surname</label>
                <input type="text" class="form-control" id="achternaam" name="achternaam" aria-describedby="userHelp"
                    placeholder="Enter Username">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyon else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Phonenumber</label>
                <input type="text" class="form-control" id="telefoonnummer" name="telefoonnummer"
                    aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyon else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="wachtwoord" name="wachtwoord" placeholder="Password">
            </div>

            <div class="bootstrap-iso">
                <div class="container-fluid px-0">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <!-- Form code begins -->
                            <form method="post">
                                <div class="form-group">
                                    <!-- Date input -->
                                    <label class="control-label" for="date">Date</label>
                                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY"
                                        type="date" />
                                </div>
                                <div class="form-group py-5">
                                    <!-- Submit button -->
                                    <button class="btn btn-primary " name="submit" type="submit">Submit</button>
                                </div>
                            </form>
                            <!-- Form code ends -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="link">
                Already have a account? Log in <a href="http://localhost/eindproject/login.php"
                    class="link-primary">here.</a>
            </div>

        </form>



    </div>


    <?php
    require 'footer.php';
?>
</body>

</html>