<?php  // hallo met pc
include 'php/database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

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
                <h1>Update Product</h1>
                <p>Of ga terug naar het beginpagina <a href="index.php" class="link-primary">hier.</a> </p>




                <form class="py-5 px-5 " method="POST" action="php/product-update-verwerk.php">
                    <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                    <div class="form-group">
                        <label for="exampleInputUser1">Naam</label>
                        <input type="text" class="form-control" id="voornaam" name="name" aria-describedby="userHelp"
                            value="<?php echo $user["name"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">prijs per kg</label>
                        <input type="text" class="form-control" id="achternaam" name="priceperkg"
                            aria-describedby="userHelp" value="<?php echo $user["price_per_kg"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">smaak van de week?</label>
                        <input type="text" class="form-control" id="achternaam" name="flavorotweek"
                            aria-describedby="userHelp" value="<?php echo $user["is_flavor_ot_week"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">category</label>
                        <input type="text" class="form-control" id="achternaam" name="category"
                            aria-describedby="userHelp" value="<?php echo $user["category"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">picture</label>
                        <input type="text" class="form-control" id="achternaam" name="picture"
                            aria-describedby="userHelp" value="<?php echo $user["picture"] ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputUser1">description</label>
                        <input type="text" class="form-control" id="achternaam" name="description"
                            aria-describedby="userHelp" value="<?php echo $user["description"] ?>">

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