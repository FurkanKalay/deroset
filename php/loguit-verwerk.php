<?php
session_start();


if (isset($_SESSION['rol'])) {
    session_unset();
    header("Location: http://localhost/deroset/index.php");
}