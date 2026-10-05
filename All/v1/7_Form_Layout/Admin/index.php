
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
            <li><a href="insert.php">Insert New Record</a></li>
            <li><a href="view.php">View Records</a> </li>
            <li><a href="php_html_table_data_filter.php">Find Record</a> </li>
            <li><a href="logout.php">Logout</a> </li>
        </ul>
    <footer>
    <a href="../index.php">Home page - Admin forms</a>
    </footer>
</body>
</html>