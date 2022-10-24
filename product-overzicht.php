<?php


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
    <link rel="stylesheet" href="css/table.css">
    <title>Document</title>
</head>

<body>
    <div class="table-container">
        <h1 class="heading">Klanten overzicht</h1>
        <a href="index.php" class="link-primary">home</a>
        <a href="product-maak.php" class="btn btn-danger"><button class="button-11" role="button">voeg
                product</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>price_per_kg</th>
                    <th>is_flavor_ot_week</th>
                    <th>category</th>
                    <th>picturename</th>
                    <th>update</th>
                    <th>verwijder</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($melding as $mel) : ?>
                <tr>
                    <td data-label="id"><?php echo $mel["id"] ?></td>
                    <td data-label="name"><?php echo $mel["name"] ?></td>
                    <td data-label="price_per_kg"><?php echo $mel["price_per_kg"] ?></td>
                    <td data-label="is_flavor_ot_week"><?php echo $mel["is_flavor_ot_week"] ?></td>
                    <td data-label="category"><?php echo $mel["category"] ?></td>

                    <td data-label="picturename"><?php echo $mel["picture"] ?></td>

                    <td data-label="update"><a href="product-update.php?id=<?php echo $mel["id"] ?>"
                            class="btn">update</a></td>

                    <td data-label="verwijder"><a href="php/product-delete-verwerk.php?id=<?php echo $mel["id"] ?>"
                            class="btn">verwijder</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>