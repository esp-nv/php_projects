<?php
// Database
include('db.php');

// Set session
session_start();
if (isset($_POST['records-limit'])) {
    $_SESSION['records-limit'] = $_POST['records-limit'];
}

$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
$students = mysqli_query($con, "SELECT * FROM new_record LIMIT $paginationStart, $limit");

// Get total records
$sql = mysqli_query($con, "SELECT count(id) AS id FROM new_record");
$allRecrods = mysqli_fetch_array($sql);
$allRecrods = $allRecrods['id'];
// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;
$adjacents = "2";
?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/limit.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

        <title>PHP Pagination Example</title>
       
    </head>

    <body>
       <p>Welcome to <?php echo $_SESSION['username']; ?>!</p> 
                <ul><?php
           include("menu.php"); ?>
        </ul>
        
        <div class="container mt-5">
            <center>
            <h2 class="text-center mb-5">Simple PHP Pagination Demo</h2>
          <!-- Select dropdown -->
          <form action="page.php" method="post">
                <label for="records-limit">Records limit</label>
                <select name="records-limit" id="records-limit" class="custom-select">
                    <option disabled selected>Records Limit</option>
                    <?php foreach ([5, 7, 10, 12, 15, 20, 30] as $limit) : ?>
                        <option
                        <?php if (isset($_SESSION['records-limit']) && $_SESSION['records-limit'] == $limit) echo 'selected'; ?>
                            value="<?= $limit; ?>">
                                <?= $limit; ?>
                        </option>
                    <?php endforeach; ?>
                </select>                    
            </form>    
            <!-- Datatable -->
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">

                        <th style='width:15px;'><strong>id</strong></th>
                        <th style='width:150px;'><strong>Name</strong></th>
                        <th style='width:50px;'><strong>Age</strong></th>
                        <th style='width:15px;'><strong>Edit</strong></th>
                        <th style='width:15px;'><strong>Delete</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <th scope="row"><?php echo $student['id']; ?></th>
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['age']; ?></td>
                            <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
                            <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
<!-- Pagination -->
            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?php
                    if ($page <= 1) {
                        echo 'disabled';
                    }
                    ?>">
                        <a class="page-link"
                           href="<?php
                           if ($page <= 1) {
                               echo '#';
                           } else {
                               echo "?page=" . $prev;
                           }
                           ?>">Previous</a>
                    </li>

                    <?php
                    for (
                    $i = 1; $i <= $totoalPages; $i++):
                        ?>
                        <li class="page-item <?php
                        if ($page == $i) {
                            echo 'active';
                        }
                        ?>">
                            <a class="page-link" href="page.php?page=<?= $i; ?>"> <?= $i; ?> </a>
                        </li>
                        <?php
                    endfor;
                    ?>

                    <li class="page-item <?php
                    if ($page >= $totoalPages) {
                        echo 'disabled';
                    }
                    ?>">
                        <a class="page-link"
                           href="<?php
                           if ($page >= $totoalPages) {
                               echo '#';
                           } else {
                               echo "?page=" . $next;
                           }
                           ?>">Next</a>
                    </li>
                </ul>
                
            </nav> <br>
            <label for="page">Rows per page</label>  <input id="page" type="number" min="1" max="<?php echo $totoalPages ?>"   
                                                                placeholder="<?php echo $page . "/" . $totoalPages; ?>" required>   

                <strong>Total page <?php echo $page . " of " . $totoalPages; ?></strong>
                <button onClick="go2Page();">Go</button>
           </center>

            <!-- jQuery + Bootstrap JS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    $('#records-limit').change(function () {
                        $('form').submit();
                    })
                });

                function go2Page()
                {
                    var page = document.getElementById("page").value;
                    page = ((page ><?php echo $totoalPages; ?>) ?<?php echo $totoalPages; ?> : ((page < 1) ? 1 : page));
                    window.location.href = 'page.php?page=' + page;
                }
            </script>
    </body>

</html>
