<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './dbcon.php';
 
	if($_REQUEST['file_id']){
		$file_id=$_REQUEST['file_id'];
 
		$query=mysqli_query($conn, "SELECT * FROM `file` WHERE `file_id`='$file_id'") or die(mysqli_error());
		$fetch=mysqli_fetch_array($query);
 
		$location=$fetch['location'];
 
 
		if(unlink($location)){
			mysqli_query($conn, "DELETE FROM `file` WHERE `file_id`='$file_id'") or die(mysqli_error());
 
			header('location: index.php');
		}
 
	}
 
?>