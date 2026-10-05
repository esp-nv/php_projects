<?php
include("./loginserv.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="ver2/style.css" />

    </head>
    <body>
        <div class="login">
            <h1 align="center">Login</h1>
            <form action="" method="post" style="text-align:center;">
                User name:<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
                Password:<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
                <input type="submit" value="Login" name="submit">
                <!-- Error Message -->
                <span><?php echo $error; ?></span>
            </form>
        </div>
        <br>
        <li> <a href="../index.php">Home LogReg_form_design</a> </li>
        <li> <a href="../../index.php">FormLayout</a> </li>
        <br>
        <hr>
        mysqli_connect -> "localhost", "root", "",user
        <br>
        query -> SELECT * FROM user WHERE pass='$pass' AND user_name='$user'
        <table border="1">
            <tr>
                <td>id</td>
                <td>user_name</td>
                <td>name</td>
                <td>pass</td>
            </tr>
            
            <tr>
                <td>1</td>
                <td>esp_nv</td>
                <td>esp</td>  
                <td>123</td>  
            </tr>
            <tr>
                <td>2</td>
                <td>hope_nv</td>
                <td>hope</td>  
                <td>asd</td>  
            </tr>

        </table>
        
        <li> <a href="../index.php">Home LogReg_form_design</a> </li>
        <li> <a href="../../index.php">FormLayout</a> </li>
        
        <li><a href="login.php">login page</a></li>
    </body>
</html>