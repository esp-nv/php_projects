<?php
$server_name = "localhost";
$uname = "root";
$password = "";
$db_name = "vanhalla";
//$conn = false;
$conn = mysqli_connect($server_name, $uname, $password, $db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
