<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connect.php';
$strCustomerID = null;
if (isset($_GET["CustomerID"])) {
    $strCustomerID = $_GET["CustomerID"];
}

$sql = "SELECT * FROM customer WHERE CustomerID = '" . $strCustomerID . "' ";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<html>
    <head>
        <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="list.php">List table</a></li>
            <li><a href="search.php">Search table</a></li>
        </ul>
        <table width="284" border="1">
            <tr>
                <th width="120">CustomerID</th>
                <td width="238"><?php echo $result["CustomerID"]; ?></td>
            </tr>
            <tr>
                <th width="120">Name</th>
                <td><?php echo $result["Name"]; ?></td>
            </tr>
            <tr>
                <th width="120">Email</th>
                <td><?php echo $result["Email"]; ?></td>
            </tr>
            <tr>
                <th width="120">CountryCode</th>
                <td><?php echo $result["CountryCode"]; ?></td>
            </tr>
            <tr>
                <th width="120">Budget</th>
                <td><?php echo $result["Budget"]; ?></td>
            </tr>
            <tr>
                <th width="120">Used</th>
                <td><?php echo $result["Used"]; ?></td>
            </tr>
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>
