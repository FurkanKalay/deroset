<?php
//gfefe

include 'php/database.php';





$sql = "SELECT * FROM products";

if ($result = mysqli_query($conn, $sql)) {
    $melding = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabs.css">
    <title>Document</title>
</head>

<body>
    <table class="table ">
        <a href="product-maak.php" class="btn btn-danger"><button class="button-11" role="button">voeg
                product</button></a>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price_per_kg</th>
                <th>is_flavor_ot_week</th>
                <th>category</th>
                <th>picturename</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($melding as $mel) : ?>
            <tr>
                <td><?php echo $mel["id"] ?></td>
                <td><?php echo $mel["name"] ?></td>
                <td><?php echo $mel["price_per_kg"] ?></td>
                <td><?php echo $mel["is_flavor_ot_week"] ?></td>
                <td><?php echo $mel["category"] ?></td>
                <td><?php echo $mel["picture"] ?></td>


                <td><a href="product-update.php?id=<?php echo $mel["id"] ?>" class="btn btn-danger"><button
                            class="button-11" role="button">update</button></a></td>

                <td><a href="php/product-delete-verwerk.php?id=<?php echo $mel["id"] ?>" class="btn btn-danger"><button
                            class="button-11" role="button">verwijder</button></a></td>








            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>