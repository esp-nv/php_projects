

<?php
// Database Connection file
include('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Export pdf</title>
        <script src="pdf/jquery.min.js"></script>
        <script src="pdf/html2pdf.bundle.js"></script>
        <script src="pdf/html2pdf.bundle.min.js"></script>
        <link rel="stylesheet" href="pdf/bootstrap.min.css">
        

        <script src="pdf/bootstrap.min.js"></script>
        <style>  
            table {  
                font-family: arial, sans-serif;  
                border-collapse: collapse;  
                width: 100%;  
            }  

            td, th {  
                border: 1px solid #dddddd;  
                text-align: left;  
                padding: 8px;  
            }  

            tr:nth-child(even) {  
                background-color: #dddddd;  
            } 
            form > h2{
                color: #0094ff;
            } 
            form > p:first-child{
                font-size: large;
            }
            .createPDF{
                font-size: 14px;
            }
        </style>
        <script>
            function createPDF() {
                var element = document.getElementById('element-to-print');
                html2pdf(element, {
                    margin: 1,
                    padding: 0,
                    filename: 'new_record.pdf',
                    image: {type: 'jpeg', quality: 1},
                    html2canvas: {scale: 2, logging: true},
                    jsPDF: {unit: 'in', format: 'A2', orientation: 'P'},
                    class: createPDF
                });
            }
            ;
            // function exportHTML(){
            //     var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
            //             "xmlns:w='urn:schemas-microsoft-com:office:word' "+
            //             "xmlns='http://www.w3.org/TR/REC-html40'>"+
            //             "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
            //     var footer = "</body></html>";
            //     var sourceHTML = header+document.getElementById("element-to-print").innerHTML+footer;

            //     var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
            //     var fileDownload = document.createElement("a");
            //     document.body.appendChild(fileDownload);
            //     fileDownload.href = source;
            //     fileDownload.download = 'document.doc';
            //     fileDownload.click();
            //     document.body.removeChild(fileDownload);
            // }
            </script>

    </head>
    <body>
        
        
    <div class="container">
        <div id="element-to-print">
            <!-- Sample Table -->
            <form class="form">    
                <p>Welcome to <?php echo $_SESSION['username']; ?>!</p> 
                <ul><?php
           include("menu.php"); ?>
        </ul>
                <p> Export db --new_record </p>  
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

            </form> 
            <!-- Sample Progressbar -->

            <br><br>    
        </div>
        
        <button class="btn btn-primary" class="html2PdfConverter" onclick="createPDF()">html to PDF </button>
        <div class="container">
            <!-- <button class="btn btn-success" class="exportHTML" onclick="exportHTML()">html to WORD </button> -->
        </div>
        <!-- <div class="content-footer">
            <button id="btn-export" onclick="exportHTML();">Export to
                word doc</button>
        </div>
        <button onclick="Export2Doc('exportContent');">Export as .doc</button> -->
    </div>
    </body>
</html>