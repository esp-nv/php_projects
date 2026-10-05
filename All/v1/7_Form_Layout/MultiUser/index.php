<?php
// Include database connection file
include_once('config.php');
if (isset($_POST['submit']))
{

    $username = $con->real_escape_string($_POST['username']);
    $password = $con->real_escape_string(md5($_POST['password']));
    $name = $con->real_escape_string($_POST['name']);
    $role = $con->real_escape_string($_POST['role']);
    $query = "INSERT INTO admins (name,username,password,role) VALUES ('$name','$username','$password','$role')";
    $result = $con->query($query);
    if ($result == true)
    {
        header("Location:login.php");
        die();
    }
    else
    {
        $errorMsg = "You are not Registred..Please Try again";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Multi user role based application login in php mysqli</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <div class="card text-center" style="padding:20px;">
            <h3>Multi user role based application login in php mysqli</h3>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">      
                    <?php if (isset($errorMsg))
                    { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php echo $errorMsg; ?>
                        </div>
<?php } ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                        </div>
                        <div class="form-group">  
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Username" required="">
                        </div>
                        <div class="form-group">  
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                        </div>
                        <div class="form-group">  
                            <label for="role">Role:</label>
                            <select class="form-control" name="role" required="">
                                <option value="">Select Role</option>
                                <option value="super_admin">Super admin</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <p>Already have account ?<a href="login.php"> Login</a></p>
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <table border="1">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>username</td>
                <td>pass</td>
                <td>role</td>
                <td>created</td>
            </tr>
            <tr>
                <td>1</td>
                <td>hope</td>
                <td>hope-nv</td> 
                <td>123</td> 
                <td>super_admin</td> 
                <td>23-Dec-2023</td>
            </tr>
            <tr>
                <td>2</td>
                <td>esp</td>
                <td>esp_nv</td> 
                <td>asd</td> 
                <td>admin</td> 
                <td>23-Dec-2023</td>
            </tr>
            <tr>
                <td>3</td>
                <td>iskra</td>
                <td>iskra.7</td> 
                <td>qwe</td> 
                <td>manager</td> 
                <td>23-Dec-2023</td>
            </tr>

        </table>
    </body>
</html>