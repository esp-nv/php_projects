<?php
session_start();
if ($_SESSION['is_logged'] == true)
{
    echo 'forma za dobavqne na priqteli <a href=index.php>Spisak</a><br> <br>';
    if ($_POST)
    {
        $name = trim($_POST['name']);
        $email = trim($_POST['mail']);
        $phone = trim($_POST['phone']);
        if ((mb_strlen($name) > 2) && (mb_strlen($email) > 2))
        {
            echo 'ime=' . $name . '; ime_len=' . strlen($name) . '<br>';
            echo 'email=' . $email . '; email_len=' . strlen($email) . '<br>';
            $tmp = 'name:' . $name . ';email:' . $email . ';mobile:' . $phone . ';';
            file_put_contents('data.txt', $tmp."\n",FILE_APPEND);
        } else
        {
            echo 'wrong data<br><br>';
            echo 'ime=' . $name . '; ime_len=' . strlen($name) . '<br>';
            echo 'email=' . $email . '; email_len=' . strlen($email) . '<br>';
        }
    }
    ?>
    <br>
    <form method="POST" action="add.php">
        Name:<input type="text" name="name"/><br>
        Email:<input type="text" name="mail"/><br>
        Mobile:<input type="text" name="phone"/><br> 
        <input type="submit" value="Add"/><br>
    </form> 
    <?php
} else
{
    header('Location:index.php');
}
    