<?php 
	//mysql_connect("localhost","root","") or die("Couldn't connet to SQL server");
	//mysql_select_db("ebuybd") or die("Couldn'ttt select DB");
        $con = mysqli_connect("localhost", "root", "", "ebuybd");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>