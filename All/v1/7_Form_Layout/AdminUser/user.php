<?php
session_start();

if ($_SESSION['role'] != 'user') {
    header("Location: index.php");
}

// User-specific functionality and HTML content here
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h2>Welcome, User!</h2>
    <p>User dashboard content goes here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>