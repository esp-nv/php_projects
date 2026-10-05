<?php
require('db.php');
include("auth.php");
error_reporting(0);
if (isset($_POST["submit"])) {
    if (count($_POST["ids"]) > 0) {
// Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql = mysqli_query($con, "DELETE FROM new_record WHERE id in ($all)");
        if ($sql) {
            $errmsg = "Data has been deleted successfully";
        } else {
            $errmsg = "Error while deleting. Please Try again.";
        }
    } else {
        $errmsg = "You need to select atleast one checkbox to delete!";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>How to delete Multiple Data in PHP</title>
        <style type="text/css">
            .custab{
                border: 1px solid #ccc;
                padding: 5px;
                margin: 5% 0;
                box-shadow: 3px 3px 2px #ccc;
                transition: 0.5s;
            }
            .custab:hover{
                box-shadow: 3px 3px 0px transparent;
                transition: 0.5s;
            }
            li {
                list-style-type: none;
            }
        </style>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <p>Welcome to <?php echo $_SESSION['username']; ?>! Dashboard</p> 
        <ul>
            <?php include("menu.php"); ?>

        </ul>
        <form name="multipledeletion" method="post">
            <div class="container">
                <div class="row col-md-6 col-md-offset-2 custyle">
                    <h2>How to delete Multiple Record in PHP</h2>
                    <!-- Message -->
                    <p style="color:red; font-size:16px;">
                        <?php
                        if ($errmsg) {
                            echo $errmsg;
                        }
                        ?> </p>
                    <table class="table table-striped custab">
                        <!-- Deletion Button -->
                        <tr>
                            <td colspan="4"> <input type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></td>
                        </tr>
                        <tr>
                            <th>
                                <!-- For Selecting All -->
                        <li><input type="checkbox" id="select_all" /> Select all</li></th>
                        <th>Name</th>
                        <th>Age </th>

                        </tr>
                        <?php
                        $query = mysqli_query($con, "select * from new_record");
                        $totalcnt = mysqli_num_rows($query);
                        if ($totalcnt > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo htmlentities($row['id']); ?>"/></td>
                                    <td><?php echo htmlentities($row['name']); ?></td>
                                    <td><?php echo htmlentities($row['age']); ?></td>

                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4"><a href="rollback.php"> Roll back all data</a></td>
                            </tr>
                            <tr>
                                <td colspan="4"> No Record Found</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#select_all').on('click', function () {
                    if (this.checked) {
                        $('.checkbox').each(function () {
                            this.checked = true;
                        });
                    } else {
                        $('.checkbox').each(function () {
                            this.checked = false;
                        });
                    }
                });
                $('.checkbox').on('click', function () {
                    if ($('.checkbox:checked').length == $('.checkbox').length) {
                        $('#select_all').prop('checked', true);
                    } else {
                        $('#select_all').prop('checked', false);
                    }
                });
            });
        </script>