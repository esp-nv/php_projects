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
        <?php
        echo $_POST["lmName1"];

        echo "<hr>";

        $strSQL = "SELECT * FROM customer WHERE CustomerID = '" . $_POST["lmName1"] . "' ";
        $objQuery = mysqli_query($con,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);

        echo $objResult["Name"];
        ?>
        <hr>
        <a href="../v1/index.php">Back</a>
    </body>
</html>
