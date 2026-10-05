<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>dir</title>
    </head>
    <body>
        <p><a href="v1.php">v1</a> ver 1</p> 
        <p><a href="v2.php">v2</a> ver 2</p>
        <p><a href="v3/index.php">v3</a> ver 3</p> 
        <p><a href="v4/index.php">v4</a> ver 4</p>
        <p><a href="v5/index.php">v5</a> ver 5</p>
        <p><a href="v6/index.php">v6</a> ver 6</p>
        <p><a href="v7/index.php">v7</a> ver 7</p>
        <p><a href="v8/index.php">v8</a> ver 8</p>
        <p><a href="v9/index.php">v9</a> ver 9</p>
        <?php
        echo $_SERVER['DOCUMENT_ROOT'];
        echo '<br>';
        $filename = basename(dirname($_SERVER['PHP_SELF']));
        echo 'FILENAME = ' . $filename;
        echo '<br>';
        $filename1 = getcwd();
        echo 'FILENAME1 = ' . $filename1;
        echo '<br>';
        $filename2 = realpath_cache_get();
        //var_dump($filename1);
        print_r($filename1);
        echo '<br>';
        echo "https://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        echo '<hr>';
        echo realpath(__DIR__ . '/..');
        echo '<br>';
        echo realpath(__DIR__);
        echo '<br>';
        echo $_SERVER['REQUEST_URI'];
        echo '<br>';
        $uri_dir = dirname(__FILE__);
        echo $uri_dir;
        echo '<hr>';
        $url = $_SERVER['PHP_SELF']; // OR $_SERVER['REQUEST_URI']
        echo parse_url($url, PHP_URL_PATH);
        echo '<br>';
        echo(' PHP_SELF <br>' . $_SERVER['PHP_SELF'] . '<br><br>');
        ?>
    </body>
</html>
