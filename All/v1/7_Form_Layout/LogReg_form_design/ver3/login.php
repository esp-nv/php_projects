<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Login</h2>
  </div>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" >
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Not yet a member? <a href="register.php">Sign up</a>
        </p>
  </form>
     <br>
     
    <br>
        <a href="../index.php">Home</a>
        <hr>
        mysqli_connect('localhost', 'root', '', 'reg')<br>
        query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1"
        <br>
        <table border="1">
            <tr>
                <td>id</td>
                <td>username</td>
                <td>email</td>
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
           <tr>
                <td>3</td>
                <td>esp</td>
                <td>esp_nv@abv.bg</td>  
                <td>123</td>  
            </tr>

        </table>
        <script src="cookies.js"></script> 
</body>
</html>
