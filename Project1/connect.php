<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "min026";

$con = mysqli_connect($host, $user, $pass, $dbname);
if (!$con) {
    echo "การเชื่อมต่อผิดพลาด" . mysqli_connect_error();
    exit;
}