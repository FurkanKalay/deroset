<?php


include 'php/database.php';





$sql = "SELECT orders.id as 'orders_id', firstname, name, date, ordermethod, isRecieved FROM orders
    JOIN users on users.id = orders.user_id
    JOIN products on products.id = orders.product_id";

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
        <h1 class="heading">Bestellingen overzicht</h1>
        <a href="index.php" class="link-primary">home</a>
        <a href="product-maak.php" class="btn btn-danger"><button class="button-11" role="button">voeg
                product</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username </th>
                    <th>productname</th>
                    <th>date</th>
                    <th>ordermethod</th>
                    <th>isRecieved</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($melding as $mel) : ?>
                <tr>
                    <td data-label="id"><?php echo $mel["orders_id"] ?></td>
                    <td data-label="name"><?php echo $mel["firstname"] ?></td>
                    <td data-label="name"><?php echo $mel["name"] ?></td>
                    <td data-label="date"><?php echo $mel["date"] ?></td>
                    <td data-label="ordermethod"><?php echo $mel["ordermethod"] ?></td>

                    <td data-label="recieved"><?php echo $mel["isRecieved"] ?></td>

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