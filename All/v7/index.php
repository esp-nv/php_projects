<?php
session_start();
$_SESSION["strName"] = "Mr.Weerachai Nukitram";
$_SESSION["strSiteName"] = "ThaiCreate.Com";
session_write_close();
?>
<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
    <a a href="../index.php">Back to home menu</a>
    <br><br>
Session Created.<br><br>
<a href="v2.php">Check Session</a>
</body>
</html>