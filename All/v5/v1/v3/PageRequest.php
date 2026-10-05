<html>
    <head>
        <title>ThaiCreate.Com Tutorial</title>
    </head>
    <body>
        <?php
        echo $_REQUEST["txtName"] . "<br>"; // txtName
        echo $_REQUEST["txtSiteName"] . "<br>"; // txtSiteName
        echo "<hr>";

        foreach ($_REQUEST as $key => $val) // All Key & Value
        {
            echo $key . " : " . $val . "<br>";
        }
        ?>
        <hr>
        <a href="../v2/PageGet3.php">Back</a>
    </body>
</html>