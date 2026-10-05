<?php
include 'search.php';
$conn = mysqli_connect("localhost", "root", "", "reg");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$showtables = mysqli_query($conn, "SHOW TABLES FROM test");

while ($table = mysqli_fetch_array($showtables))
{ // go through each row that was returned in $result
    echo($table[0] . "<br>");    // print the table that was returned on that row.
}

$table_name = "user";
/* $tables = mysqli_query($conn, "SHOW TABLES from test");
  while ($table = mysqli_fetch_object($tables))
  {
  $table_name = $table->{"test"};
  }

  // put this code inside above while loop */

// Create SQL query to get all rows (more on this later)
$sql = "SELECT * FROM " . $table_name . " WHERE ";

// An array to store all columns LIKE clause
$fields = array ();

// Query to get all columns from table
$columns = mysqli_query($conn, "SHOW COLUMNS FROM " . $table_name);
?>
<ul>
    <li><a href="table/DisplayDB.php">display db</a> </li>
    <li><a href="table/export.php">export table user excel</a> </li>
    <li><a href="table/signup.php">sign + error</a> </li>
    <li><a href="table/fopen.php">open db</a> </li>  
    <li><a href="crud/index.php">crud db image</a> </li> 
    <li><a href="CreateFolder/index.php">create folder</a> </li>
</ul>
<style type="text/css">
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table tr td,
    table tr th {
        border: 1px solid black;
        padding: 25px;
    }
</style>    
<table>

    <!-- Display table name as caption -->
    <caption>
        <?php echo $table_name; ?>
    </caption>

    <!-- Display all columns in table header -->
    <tr>

        <?php
        // Loop through all columns
        while ($col = mysqli_fetch_object($columns)):

            // Use LIKE clause to search input in each column
            array_push($fields, $col->Field); //. " LIKE '%" . $search . "%'");
            ?>

            <!-- Display column in TH tag -->
            <th><?php echo $col->Field; ?></th>

            <?php
        endwhile;

        // Move cursor of $columns to 0 so it can be used again
        mysqli_data_seek($columns, 0);
        ?>

    </tr>

    <?php
    // Combine $fields array by OR clause into one string
    $sql .= implode(" OR ", $fields);
    $result = mysqli_query($conn, $sql);

    // Loop through all rows returned from above query
    while ($row = mysqli_fetch_object($result)):
        ?>

        <tr>

            <?php
            // Loop through all columns of this table
            while ($col = mysqli_fetch_object($columns)):
                ?>

                <td>

                    <?php
                    // Display row value from column field
                    echo $row->{$col->Field};
                    ?>

                </td>

            <?php endwhile;
            mysqli_data_seek($columns, 0); /* end of column while loop */ ?>

        </tr>

    <?php endwhile; /* end of row while loop */ ?>

</table>

