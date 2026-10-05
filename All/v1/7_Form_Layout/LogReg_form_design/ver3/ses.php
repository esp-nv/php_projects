<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//index.php
if (isset($_COOKIE['cookieCheck'])) {
    echo 'true';
} else {
    if (isset($_GET['reload'])) {
        echo 'false';
         header('Location: logout.php');
    } else {
        session_destroy();
        setcookie('cookieCheck', '1', time() + 60);
        header('Location: logout.php');
        exit();
    }
}
 //echo 'foo: '.(isset($_COOKIE['foo']) && $_COOKIE['foo']=='bar') ? 'enabled' : 'disabled';
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
//auth.php
session_start();
if (!isset($_SESSION['EXPIRES']) || $_SESSION['EXPIRES'] < time()+3600) {
    session_destroy();
    $_SESSION = array();
}
$_SESSION['EXPIRES'] = time() + 3600;

//login
// echo (isset($_COOKIE['foo']) && $_COOKIE['foo']=='bar') ? 'enabled' : 'disabled';
        if (isset($_COOKIE['cookieCheck']))
        {
            echo '1true';
            header("Location: index.php");
        }
        else
        {
            if (isset($_GET['reload']))
            {
                echo '2false';
            }
            else
            {
                setcookie('cookieCheck', '1', time() + 1);
                header('Location: ' . $_SERVER['PHP_SELF'] . '?reload');
                exit();
            }
        }
        if (count($_COOKIE) > 0)
        {
            echo "Cookies are enabled.";
        }
        else
        {
            echo "Cookies are disabled.";
        }
