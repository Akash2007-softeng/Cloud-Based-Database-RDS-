<?php

$servername = "localhost";      // Replace with your Amazon RDS endpoint
$username   = "root";           // Replace with your RDS username
$password   = "";               // Replace with your RDS password
$database   = "studentdb";      // Replace with your database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// echo "Database Connected Successfully!";

?>