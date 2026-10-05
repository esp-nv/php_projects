<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>

</div>
     <ul>
            <li><a href="index.php">Home</a> </li>
            <li> <a href="dashboard.php">Dashboard</a></li>
            <li><a href="sort.php">Sort</a></li>
            <li><a href="logout.php">Logout</a> </li>
        </ul>
</body>
</html>