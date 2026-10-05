

<?php
// Database Connection file
include('db.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Export excel</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <ul>
            <?php include("menu.php"); ?>
        </ul>
<table border="1">
    <thead>

        <tr>
            <th>Sr.</th>
            <th>Name</th>
            <th>Age</th>
            
        </tr>
    </thead>
    <?php
// File name
    $filename = "EmpData";
// Fetching data from data base
    $query = mysqli_query($con, "select * from new_record");
    $cnt = 1;
    while ($row = mysqli_fetch_array($query)) {
        ?>

        <tr>
            <td><?php echo $cnt;  ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
        </tr>
        <?php
        $cnt++;
// Genrating Execel  filess
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=" . $filename . "-Report.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
    }
    ?>

</table>

