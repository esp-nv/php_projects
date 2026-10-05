<?php
/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */


include("connect.php");

$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
  //  $trn_date = date("Y-m-d H:i:s");
  //  $name = $_REQUEST['name'];
   // $age = $_REQUEST['age'];
   // $submittedby = $_SESSION["username"];
    //$ins_query = "insert into customer (`trn_date`,`name`,`age`,`submittedby`) values ('$trn_date','$name','$age','$submittedby')";
    $ins_query = "INSERT INTO customer (CustomerID, Name, Email, CountryCode, Budget, Used)
VALUES ('".$_POST["txtCustomerID"]."','".$_POST["txtName"]."','".$_POST["txtEmail"]."'
,'".$_POST["txtCountryCode"]."','".$_POST["txtBudget"]."','".$_POST["txtUsed"]."')";
  //  mysqli_query($conn, $ins_query) or die(mysql_error());
    $status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Insert New Record</title>

    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a> </li>
            <li><a href="list.php">List table</a></li>
            <li><a href="search.php">Search table</a></li>
            <li><a href="add.php">Add table</a></li>
        </ul>
        <div class="form">
            <h1>Insert New Record</h1>
            <form name="form" method="post" action=""> 
                <input type="hidden" name="new" value="1" />
                <table width="284" border="1">
                    <tr>
                        <th width="120">CustomerID</th>
                        <td width="238"><input type="text" name="txtCustomerID" size="5"></td>
                    </tr>
                    <tr>
                        <th width="120">Name</th>
                        <td><input type="text" name="txtName" size="20"></td>
                    </tr>
                    <tr>
                        <th width="120">Email</th>
                        <td><input type="text" name="txtEmail" size="20"></td>
                    </tr>
                    <tr>
                        <th width="120">CountryCode</th>
                        <td><input type="text" name="txtCountryCode" size="2"></td>
                    </tr>
                    <tr>
                        <th width="120">Budget</th>
                        <td><input type="text" name="txtBudget" size="5"></td>
                    </tr>
                    <tr>
                        <th width="120">Used</th>
                        <td><input type="text" name="txtUsed" size="5"></td>
                    </tr>
                </table>
                <input type="submit" name="submit" value="submit">
            </form>
            <p style="color:#FF0000;"><?php echo $status; ?></p>
        </div>
        
    </body>
</html>


