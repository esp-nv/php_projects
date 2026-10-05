<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css" />

    </head>
    <body>
        <?php
        require('db.php');
// If form submitted, insert values into the database.
        if (isset($_POST['username']))
        {
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username'and password='" . $password . "'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $rows = mysqli_num_rows($result);
            if ($rows == 1)
            {
                $_SESSION['username'] = $username;
                // Redirect user to index.php
                header("Location: index.php");
                exit();
            }
            else
            {
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            }
        }
        else
        {
            ?>
            <!-- comment  
                    <div class="form">
                        <h1>Log In</h1>
                        <form action="" method="post" name="login">
                            <input type="text" name="username" placeholder="Username" required />
                            <input type="password" name="password" placeholder="Password" required />
                            <input name="submit" type="submit" value="Login" />
                        </form>
                        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
                    </div>-->
            <div class="login">
                <h1>Login to Web App</h1>
                <form method="post" action="" name="login">
                    <label for="first">Username:</label><input type="text" name="username" value="" placeholder="Username">
                    <label>Password</label><input type="password" name="password" value="" placeholder="Password">
                    <p class="remember_me">
                        Not registered yet? <a href='registration.php'>Register Here</a>
                    </p>
                    <p class="submit"><input name="submit" type="submit" value="Login" /></p>
                </form>
            </div>
            <!-- comment
                        <div class="login-help">
                            <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
                        </div>-->
<?php } ?>
        <hr>
        <P>database -- reg; table --users</P>
        <P>hope-nv -- hope -- asd </P>
        <P>esp_nv --  esp  -- 123</P>
        <footer>
            <a href="../index.php">Home page - Admin forms</a>
        </footer>
    </body>
</html>