<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "user"; 

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
