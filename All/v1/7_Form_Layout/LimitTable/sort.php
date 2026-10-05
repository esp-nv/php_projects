<?php
/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */

require('db.php');
include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard - Secured Page</title>
        <link rel="stylesheet" href="css/limit.css" />

    </head>
    <body>

        <div>
            <span>Welcome to <?php echo $_SESSION['username']; ?>! Dashboard</span>
            <span style="float:right"><a  href="logout.php">Logout</a></span>
        </div>
        <hr>
        <ul>
            <li><a href="index.php">Home</a> </li>  
            <li><a href="sort.php">page Record</a> </li>
      </ul>

    </body>
</html>