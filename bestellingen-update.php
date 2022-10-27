<?php  // hallo met pc
include 'php/database.php';
session_start();
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





    <div class="hoi " style="grid-column-start: 1;
  grid-column-end: 3;
  grid-row-start: 1;
  grid-row-end: 2;">

        <div class="hoi1 ">

            <div class="hoi2 py-5 px-5">
                <h1>Update Account</h1>
                <p>Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a> </p>
                <p>log uit <a href="php/loguit-verwerk.php" class="link-primary">hier.</a> </p>
                <p>of verwijder je account hier <a href="php/klanten1-delete-verwerk.php?id=<?php echo $id ?>"
                        class="link-primary">hier.</a> </p>



                <form class="py-5 px-5 " method="POST" action="php/gebruiker-update-verwerk.php">
                    <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                    <div class="form-group">
                        <label for="exampleInputUser1">Naam</label>
                        <input type="text" class="form-control" id="voornaam" name="date" aria-describedby="userHelp"
                            value="<?php echo $user["date"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">Achternaam</label>
                        <input type="text" class="form-control" id="achternaam" name="ordermethod"
                            aria-describedby="userHelp" value="<?php echo $user["ordermethod"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">adress</label>
                        <input type="text" class="form-control" id="voornaam" name="isrecieved"
                            aria-describedby="userHelp" value="<?php echo $user["isRecieved"] ?>">

                    </div>



                    <div class="form-group py-5">
                        <!-- Submit button -->
                        <button class="btn btn-light" name="submit" type="submit">Submit</button>
                    </div>







                </form>







            </div>
        </div>
    </div>


























</body>

</html>