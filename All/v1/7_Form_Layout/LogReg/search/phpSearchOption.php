<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "regdb";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$sql = "select * from member where $column like '%$search%'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result) ){
    
    
    
	echo $row["member_id"]."  ".$row["firstname"]."  ".$row["lastname"]."<br>";
}
} else {
	echo "0 records";
}

mysqli_close($conn);

?>