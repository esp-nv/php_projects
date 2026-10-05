<?php
 
// Check if form submits
if (isset($_GET["submit"]))
{
    // Get searched query
    $search = $_GET["search"];
 
    // Connect with database
    $conn = mysqli_connect("localhost", "root", "", "test");
}
 
?>