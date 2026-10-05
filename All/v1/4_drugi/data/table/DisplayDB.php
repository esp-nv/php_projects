<?php

//First Block- Database Information
$servername="localhost";
$username="root";
$password="";
$database="test";
$table="user";

//Second Block- Connection to Database
$conn = mysqli_connect("localhost", "root", "", "reg");
//@mysql_select_db($database) or die("Unable to select database");

//Third Block- Selects the Table You Want To Display
$result= mysqli_query ($conn,"SELECT * FROM $table") or die("SELECT Error: ".mysql_error());

//Fourth Block- Prints Out and Displays the Table
print "<table width=540 border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
    /*
$images_field= $row['ProfilePic'];
$Type= $row['FirstName'];
$price= $row['LastName'];
$image_show= "profilepics/$images_field";
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<div align=center><img src=". $image_show." width=100 height=100></div>";
print "</td>\n";
print "\t<td>\n"; 
print "<font face=arial size=4/><div align=center>$Type</div></font>"; 
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$price</font>";
print "</td>\n";
print "</tr>\n"; */
$id= $row['id'];
$user= $row['user_name'];
$name= $row['name'];
$pass= $row['pass'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<div align=center>". $id."</div>";
print "</td>\n";
print "\t<td>\n"; 
print "<font face=arial size=4/><div align=center>$user</div></font>"; 
print "</td>\n";
print "\t<td>\n"; 
print "<font face=arial size=4/><div align=center>$name</div></font>"; 
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$pass</font>";
print "</td>\n";
print "</tr>\n"; 
} 

print "</table>\n"; 

?>