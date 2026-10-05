<?php
// Database Connection file
include('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>CodePen - Save HTML page to PDF document via Javascript</title>
        <link rel="stylesheet" href="pdf/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
            @media screen {
                p {color: blue;}
            }
            @media print {
                p {color: black;}
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <p>Welcome to <?php echo $_SESSION['username']; ?>!</p> 
                <ul><?php
           include("menu.php"); ?>
        </ul>
        <div id="content"> 
            <table>  
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
                        <?php
                        $count++;
                    }
                    ?>
                </tbody>
            </table>  
            <h1>Page Title</h1> 
            <p>Page contents as below</p> 
        </div><div id="page"></div> 
        <button id="submit">Export to  PDF</button>


        <script src='pdf/jquery.min.js'></script>
        <script src='pdf/jspdf.debug.js'></script>
        <script id="rendered-js" >
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function (element, renderer) {
                    return true;
                }};

            $('#submit').click(function () {
                doc.fromHTML($('#content').html(), 15, 15, {
                    'width': 200,
                    'elementHandlers': specialElementHandlers});

                doc.save('sample-page.pdf');
            });
//# sourceURL=pen.js
        </script>


    </body>

</html>