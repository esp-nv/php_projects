<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connect.php';

?>
<html>
    <head>
        <title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
       
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="list.php">List table</a></li>
            <li><a href="search.php">Search table</a></li>
            <li><a href="add.php">Add table</a></li>

        </ul>
        <?php
        $strKeyword = null;
        if (isset($_POST["txtKeyword"])) {
            $strKeyword = $_POST["txtKeyword"];
        }
        ?>
        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
            <table width="599" border="1">
                <tr>
                    <th>Keyword name
                        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; ?>">
                        <input type="submit" value="Search"></th>
                </tr>
            </table>
        </form>
<?php
$sql = "SELECT * FROM customer WHERE Name LIKE '%" . $strKeyword . "%' ";
$query = mysqli_query($conn, $sql);
?>
        <table width="600" border="1">
            <tr>
                <th width="91"> <div align="center">CustomerID </div></th>
                <th width="98"> <div align="center">Name </div></th>
                <th width="198"> <div align="center">Email </div></th>
                <th width="97"> <div align="center">CountryCode </div></th>
                <th width="59"> <div align="center">Budget </div></th>
                <th width="71"> <div align="center">Used </div></th>
            </tr>
<?php
while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    ?>
                <tr>
                    <td><div align="center"><?php echo $result["CustomerID"]; ?></div></td>
                    <td><?php echo $result["Name"]; ?></td>
                    <td><?php echo $result["Email"]; ?></td>
                    <td><div align="center"><?php echo $result["CountryCode"]; ?></div></td>
                    <td align="right"><?php echo $result["Budget"]; ?></td>
                    <td align="right"><?php echo $result["Used"]; ?></td>
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

