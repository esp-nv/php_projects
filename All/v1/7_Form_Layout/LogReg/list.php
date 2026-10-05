<?php
include 'connect.php';
$sql = "SELECT * FROM customer";
$query = mysqli_query($conn, $sql);
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
        <table width="600" border="1">
            <tr>
                <th width="91"> <div align="center">CustomerID </div></th>
                <th width="98"> <div align="center">Name </div></th>
                <th width="198"> <div align="center">Email </div></th>
                <th width="97"> <div align="center">CountryCode </div></th>
                <th width="59"> <div align="center">Budget </div></th>
                <th width="71"> <div align="center">Used </div></th>
                <th width="71"> <div align="center">Detail </div></th>
            </tr>
            <?php
            while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC))
            {
                ?>
                <tr>
                    <td><div align="center"><?php echo $result["CustomerID"]; ?></div></td>
                    <td><?php echo $result["Name"]; ?></td>
                    <td><?php echo $result["Email"]; ?></td>
                    <td><div align="center"><?php echo $result["CountryCode"]; ?></div></td>
                    <td align="right"><?php echo $result["Budget"]; ?></td>
                    <td align="right"><?php echo $result["Used"]; ?></td>
                    <td align="right"><a href="detail.php?CustomerID=<?php echo $result["CustomerID"]; ?>">Detail</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php
        mysqli_close($conn);
        ?>
    </body>
</html>

