<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bootstrap Simple Login Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
                font-size: 15px;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="login-form">
            <div class="card-header text-center bg-info text-dark">
                <h2 class="text-center ">Log in</h2> 
            </div>
            <form action="/examples/actions/confirmation.php" method="post">
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <div class="clearfix">
                    <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                    <a href="#" class="float-right">Forgot Password?</a>
                </div>        
            </form>
            <p class="text-center"><a href="#">Create an Account</a></p>
        </div>
        <br>
    <li> <a href="../index.php">Home LogReg_form_design</a> </li>
    <li> <a href="../../index.php">FormLayout</a> </li>
    <li><a href="login.php">login page</a></li>
    <br> Tova e samo forma bez vrazka s db
</body>
</html>

