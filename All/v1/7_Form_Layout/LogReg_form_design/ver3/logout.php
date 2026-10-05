<?php

/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */

session_start();
if (session_destroy()) // Destroying All Sessions
{
  //  setcookie("user", "", time() - 5);
    session_destroy();
    
    header("Location: login.php"); // Redirecting To Home Page
    exit();
}
