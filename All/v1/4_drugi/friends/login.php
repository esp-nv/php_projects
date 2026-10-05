<?php

session_start();
$login = trim($_POST['ime']);
$pass = trim($_POST['parola']);
//if ((strlen($login) > 2) && (strlen($pass) > 2))
//{
    if ($login == "login" && $pass == "asd")
    {
        $_SESSION['is_logged'] = true;
        header('Location:index.php');
    } else
    {

        header('Location: index.php?error=1');
    }
?>
