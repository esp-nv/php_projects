<!DOCTYPE html>
<html>
    <head>
        <style>
            .mydivSecond{width: 300px; margin: 35px auto; border: 2px solid #ccc;
                         padding: 0 12px;}
            p.registerHead{font-size: 28px; font-weight: bold; text-align: center; 
                           border-bottom: 2px solid #ccc;}
            .myform input{padding: 2px 8px; margin: 8px 2px;}
            .myform input[type="submit"]{background-color: #008080; color: white; 
                                         padding: 8px; border: 0px; border-radius: 6px;}
            .myform input[type="submit"]:hover{cursor: pointer;}
        </style>
    </head>
    <body>
        <div class="mydivSecond">
            <p class="registerHead">Registration Form</p>
            <form class="myform" action="#" method="post">
                <b>First Name</b>: <input type="text" name="firstname"><br>
                <b>Last Name</b>: <input type="text" name="lastname"><br>
                <b>Date</b><input type="date" ><br>

                <b>Email</b>: <input type="email" name="email"><br>
                <b>Gender</b>: <input type="radio" name="gender" id="male"><label for="male">Male</label>
                <input type="radio" name="gender" id="female"><label for="female">Female</label><br>
                <b>City</b>: <input type="text" name="city" size="20" maxlength="40"><br>
                <b>Area Code</b>: <input type="text" name="acode" size="20" maxlength="20"><br>
                <b>Country</b>: <input type="text" name="country" size="20" maxlength="40"><br>
                <input type="submit" value="Register">
            </form>
        </div>
        <br>
     Tova e samo forma bez vrazka s db
    <footer>
        <a href="../../index.php">Home page - Admin forms</a>
    </footer>
    </body>
</html>