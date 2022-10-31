<?php


include 'php/database.php';





$sql = "SELECT * FROM users WHERE role = 'klant'";

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
        <thead>
            <tr>
                <th>id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th>birthdate</th>
                <th>phonenumber</th>
                <th>adress</th>
                <th>zipcode</th>
                <th>city</th>
                <th>role</th>


            </tr>
        </thead>
        <tbody>
            <?php foreach ($melding as $mel) : ?>
            <tr>
                <td><?php echo $mel["id"] ?></td>
                <td><?php echo $mel["firstname"] ?></td>
                <td><?php echo $mel["lastname"] ?></td>
                <td><?php echo $mel["email"] ?></td>
                <td><?php echo $mel["password"] ?></td>
                <td><?php echo $mel["date_of_birth"] ?></td>
                <td><?php echo $mel["phonenumber"] ?></td>
                <td><?php echo $mel["adress"] ?></td>
                <td><?php echo $mel["zipcode"] ?></td>
                <td><?php echo $mel["city"] ?></td>
                <td><?php echo $mel["role"] ?></td>



                <td><a href="klanten-update.php?id=<?php echo $mel["id"] ?>" class="btn btn-danger"><button
                            class="button-11" role="button">update</button></a></td>

                <td><a href="php/klanten-delete-verwerk.php?id=<?php echo $mel["id"] ?>" class="btn btn-danger"><button
                            class="button-11" role="button">verwijder</button></a></td>








            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>