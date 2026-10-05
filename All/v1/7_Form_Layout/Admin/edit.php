<?php
/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
$query = "SELECT * from new_record where id='" . $id . "'";
$result = mysqli_query($con, $query) or die(mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Record</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <ul>
            <?php include("menu.php"); ?>
        </ul>
        <div class="form">
            <h1>Update Record</h1>
            <?php
            $status = "";
            if (isset($_POST['new']) && $_POST['new'] == 1) {
                $id = $_REQUEST['id'];
                $trn_date = date("Y-m-d H:i:s");
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $submittedby = $_SESSION["username"];
                $update = "update new_record set trn_date='" . $trn_date . "', name='" . $name . "', age='" . $age . "', submittedby='" . $submittedby . "' where id='" . $id . "'";
                mysqli_query($con, $update) or die(mysqli_error());
                $status = "Record Updated Successfully. ";
                $status1 = "id=" . $id . " name=" . $name . ", age=" . $age;
                echo '<p style="color:#FF0000;">' . $status . '<hr>' . $status1 . '</p>';
            } else {
                ?>
                <div>
                    <form name="form" method="post" action=""> 
                        <div class="container" > 
                            <input type="hidden" name="new" value="1" />
                            <input name="id" type="hidden" value="<?php echo $row['id']; ?>" />
                            <input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name']; ?>" />
                            <input type="text" name="age" placeholder="Enter Age" required value="<?php echo $row['age']; ?>" />
                            <input name="submit" type="submit" value="Update" />
                        </div>
                    </form>
                <?php } ?>
                <hr>
                <h2>All records</h2>
                <table width="95%" border="1" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th><strong>S.No</strong></th>
                            <th><strong>Name</strong></th>
                            <th><strong>Age</strong></th>
                            <th><strong>Edit</strong></th>
                            <th><strong>Delete</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $sel_query = "Select * from new_record ORDER BY id asc;";
                        $result = mysqli_query($con, $sel_query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr><td align="center"><?php echo $count; ?></td>
                                <td align="center"><?php echo $row["name"]; ?></td>
                                <td align="center"><?php echo $row["age"]; ?></td>
                                <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                                <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                            </tr>
                            <?php $count++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
