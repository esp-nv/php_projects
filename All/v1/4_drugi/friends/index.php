<?php
session_start(); //za da moje da prehvarlq potrebitelq mejdu razli4nite zaqvki i razli4nite stranici 
//i ne moje da bade po-naolu v koda i tazi sesiq da byde sledena ili 6te vaznikne greshka
//$_SESSION["is_logged"]=false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
        <title>Friends</title>
    </head>
    <body>
        <?php
        if ($_SESSION['is_logged'] == true)
        {
            echo 'logged <br>';
            echo '<a href=logout.php>Logout</a>  |  <a href=add.php>Add</a><br>';
            $friends = file('data.txt');
            echo '<table border="1">
            <tr>
                <td>Ime</td>
                <td>email</td>
                <td>phone</td>
            </tr>';
            foreach ($friends as $v) {
                //echo $v.'<br>';
                $tmp = explode(';', $v);
                foreach ($tmp as $vv) {
                    $tmp2 = explode(':', $vv);
                    echo '<pre>'. print_r($tmp2, true).'</pre>';
                    if ($tmp2[0] == 'name')
                    {
                        $name = $tmp2[1];
                    } elseif ($tmp2[0] == 'email')
                    {
                        $email = $tmp2[1];
                    } elseif ($tmp2[0] == 'mobile')
                    {
                        $phone = $tmp2[1];
                    }
                }
                echo '<tr><td>' . $name . '</td><td>' . $email . '</td><td>' . $phone . '</td></tr>';
            }
            echo '</table>';
        } else
        {
            if ($_GET['error'] = 1)
            {
                echo 'wrong login/password';
            }
            ?>

            <form method="POST" action="login.php">
                Ime:<input type="text" name="ime"/><br>
                pass:<input type="text" name="parola"/><br>  
                <input type="submit" value="LOGIN"/><br>
            </form>    
            <?php
        }
        ?>
    </body>
</html>
