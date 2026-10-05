<?php include('header.php'); 
include('dbcon.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="row-fluid">
            <div class="span12">
                <div class="container">
                    <br />
                    <br />
                    <div class="pull-right">
                        <label style="font-weight:bold; color:blue; font-family:cursive; font-size:18px;">Order by:</label>
                        <a class="btn" href="ascending.php">Ascending</a>
                        <a class="btn" href="decending.php">Descending</a>
                        <a class="btn btn-info" href="index.php">Default</a>
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">FirstName</th>
                                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">LastName</th>
                                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">MiddleName</th>
                                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Address</th>
                                <th style="text-align:center; font-family:cursive; font-size:18px; color:blue;">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($con, "select * from member")or die(mysqli_error($link));
                            while ($row = mysqli_fetch_array($query)) {
                                $id = $row['member_id'];
                                ?>
                                <tr>
                                    <td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['firstname'] ?></td>
                                    <td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['lastname'] ?></td>
                                    <td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['middlename'] ?></td>
                                    <td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['address'] ?></td>
                                    <td style="text-align:center; font-family:cursive; font-size:18px;"><?php echo $row['email'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
