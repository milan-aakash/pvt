<?php
error_reporting(0);
$_server = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = mysqli_connect($_server, $username, $password, $dbname);

if (!$conn) {
    echo "crash!!!!!!!!" . mysqli_connect_error();
}
?>
