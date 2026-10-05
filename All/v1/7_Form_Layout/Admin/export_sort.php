<?php
/*
  Author: Javed Ur Rehman
  Website: https://www.allphptricks.com/
 */

require('db.php');
include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>export sort</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    </head>
    <body>
        <p>Welcome to <?php echo $_SESSION['username']; ?>!</p> 
                <ul><?php
           include("menu.php"); ?>
        </ul>
        <p>Column Sorting using PHP and MySQL - ItSolutionStuff.com <a href="exportExcel.php">ExportExcel</a></p>
        <p> <a href="exportPDF.php">Export PDF</a></p>
        <a href="exportToPdf.php">export to Record</a>
        <div class="container">

            <?php
            $orderBy = !empty($_GET["orderby"]) ? $_GET["orderby"] : "name";
            $order = !empty($_GET["order"]) ? $_GET["order"] : "asc";

            // $sql = "SELECT * FROM new_record ORDER BY " . $orderBy . " " . $order;

            $result = mysqli_query($con, "select * from new_record order by " . $orderBy . " " . $order)or die(mysqli_error($con));

            $nameOrder = "asc";
            $ageOrder = "asc";

            if ($orderBy == "name" && $order == "asc") {
                $nameOrder = "desc";
            }
            if ($orderBy == "age" && $order == "asc") {
                $ageOrder = "desc";
            }
            ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><a href="?orderby=name&order=<?php echo $nameOrder; ?>">Name</a></th>
                        <th><a href="?orderby=age&order=<?php echo $ageOrder; ?>">age</a></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>

    </body>
</html>