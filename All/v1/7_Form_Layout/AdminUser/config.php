<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "login_system";

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>