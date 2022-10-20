<?php  // hallo met pc
include 'database.php';
session_start();
$id = $_GET["id"];

$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {
    $user = mysqli_fetch_assoc($result);
    print_r($user);
   
    $_SESSION['product_id'] = $user['id'];
    header("location: http://localhost/deroset/bestellen.php");
}


?>