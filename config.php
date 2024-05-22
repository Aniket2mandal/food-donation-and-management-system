<?php
// Database configuration
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root";
$password = "admin";
$database = "dinner";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
