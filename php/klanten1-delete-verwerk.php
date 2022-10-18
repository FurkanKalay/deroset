<?php
session_start();
print_r($_GET["id"]);

require 'database.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    if (isset($_SESSION['rol'])) {
        session_unset();
        header("Location: http://localhost/deroset/index.php");
    }
}