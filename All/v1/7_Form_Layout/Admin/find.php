<?php
require('db.php');
include("auth.php");
if (isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `new_record` WHERE `name` LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    $query = "SELECT * FROM `new_record`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query) {
    $connect = mysqli_connect("localhost", "root", "", "reg");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Data find</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <ul>
            <?php include("menu.php"); ?>
        </ul>
        <div class="form">
            <h1>Find/filter Record</h1>
            <form action="find.php" method="post">
                <input type="text" name="valueToSearch" placeholder="Value To Search name"><br><br>
                <input type="submit" name="search" value="Filter"><br><br>

                <table>
                    <tr>
                        <th>S.N.</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>

                    <!-- populate table from mysql database -->
                    <?php
                    $count = 1;
                    while ($row = mysqli_fetch_array($search_result)):
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                        </tr>
                        <?php $count++;
                    endwhile; ?>
                </table>
            </form>
            <!-- <?php echo "<h3> Broi zapisi: " . $count - 1 . "</h3>"; ?> --> 
        </div> 
    </body>
</html>
