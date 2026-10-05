<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//mysql_select_db('regdb',mysql_connect('localhost','root',''))or die(mysql_error());
$con = mysqli_connect("localhost", "root", "", "test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
