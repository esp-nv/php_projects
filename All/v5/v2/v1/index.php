<html>
    <head>
        <title>ThaiCreate.Com Tutorial</title>
    </head>
    <?php
    $con = mysqli_connect("localhost", "root", "", "reg");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>
    <body>
        <form action="phpLlistmenuDatebase.php" method="post" name="form1">
            List Menu<br>
            <select name="lmName1">
                <option value=""><-- Please Select Item --></option>
                <?php
                $strSQL = "SELECT * FROM customer ORDER BY CustomerID ASC";
                $objQuery = mysqli_query($con,$strSQL);
                while ($objResuut = mysqli_fetch_array($objQuery))
                {
                    ?>
                    <option value="<?php echo $objResuut["CustomerID"]; ?>"><?php echo $objResuut["CustomerID"] . " - " . $objResuut["Name"]; ?></option>
                    <?php
                }
                ?>
            </select>
            <input name="btnSubmit" type="submit" value="Submit">
        </form>
        <hr>
        <a href="../../index.php">Back to home</a>
    </body>
</html>
