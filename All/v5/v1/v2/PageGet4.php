<html>
    <head>
        <title>ThaiCreate.Com Tutorial</title>
    </head>
    <body>
        <?php
        echo $_SERVER["REQUEST_URI"] . "<br>"; // URL
        echo "<hr>";
        echo $_GET["txtName"] . "<br>"; // Get txtName
        echo $_GET["txtSiteName"] . "<br>"; // Get txtSiteName
        echo "<hr>";

        foreach ($_GET as $key => $val) // Get All Key & Value
        {
            echo $key . " : " . $val . "<br>";
        }
        ?>
        <hr>
        <a href="../v2/PageGet3.php">Back</a>
    </body>
</html>