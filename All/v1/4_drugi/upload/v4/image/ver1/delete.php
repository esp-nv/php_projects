<?php
  //Database Connection
  $con = mysqli_connect("localhost","root","","test");
  
  //Delete image record from database
  $sql = "delete from tbl_images where id = {$_GET["id"]}";
  if($con->query($sql)){
    
    //delete image from server
    unlink("uploads/{$_GET["name"]}");
    
    //redirect to index page with status = 1
    header("location:index.php?status=1");
  }else{
    
    //redirect to index page with status = 0
    header("location:index.php?status=0");
  }


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

