<?php

$host = "your-rds-endpoint.amazonaws.com";
$username = "admin";
$password = "your_password";
$database = "studentdb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// echo "Database Connected Successfully!";

?>