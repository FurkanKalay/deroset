<?php


include 'php/database.php';





$sql = "SELECT orders.id as 'orders_id', user_id, name, date, ordermethod, isRecieved, name, adress, zipcode, city, phonenumber FROM orders
   
    JOIN products on products.id = orders.product_id";

if ($result = mysqli_query($conn, $sql)) {
    $melding1 = mysqli_fetch_all($result, MYSQLI_ASSOC);
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

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>username </th>
                    <th>productname</th>
                    <th>date</th>
                    <th>ordermethod</th>
                    <th>isRecieved</th>
                    <th>update</th>
                    <th>delete</th>
                    <th>accountname</th>
                    <th>adress</th>
                    <th>zipcode</th>
                    <th>city</th>
                    <th>phonenumber</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($melding1 as $mel5) : ?>
                <tr>
                    <td data-label="id"><?php echo $mel5["orders_id"] ?></td>
                    <td data-label="name"><?php echo $mel5["user_id"] ?></td>
                    <td data-label="name"><?php echo $mel5["name"] ?></td>
                    <td data-label="date"><?php echo $mel5["date"] ?></td>
                    <td data-label="ordermethod"><?php echo $mel5["ordermethod"] ?></td>

                    <td data-label="recieved"><?php echo $mel5["isRecieved"] ?></td>

                    <td data-label="username"><?php echo $mel5["name"] ?></td>
                    <td data-label="adress"><?php echo $mel5["adress"] ?></td>
                    <td data-label="zipcode"><?php echo $mel5["zipcode"] ?></td>
                    <td data-label="city"><?php echo $mel5["city"] ?></td>
                    <td data-label="phonenumber"><?php echo $mel5["phonenumber"] ?></td>

                    <td data-label="update"><a href="bestellingen-update.php?id=<?php echo $mel5["orders_id"] ?>"
                            class="btn">update</a></td>

                    <td data-label="verwijder"><a
                            href="php/product-delete-verwerk.php?id=<?php echo $mel5["orders_id"] ?>"
                            class="btn">verwijder</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>