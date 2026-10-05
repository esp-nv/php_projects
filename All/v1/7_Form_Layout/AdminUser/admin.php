<?php
session_start();

if ($_SESSION['role'] != 'admin') {
    header("Location: index.php");
}

// Admin-specific functionality and HTML content here
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <p>Admin dashboard content goes here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>