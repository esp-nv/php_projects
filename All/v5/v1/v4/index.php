<html>
    <head>
        <title>Copy/Upload file</title>
    </head>
    <body>
        <!-- comment PHP File ($_FILES,$HTTP_POST_FILES)
     $_FILES['var']['name'] Показва името на файла.
    $_FILES['var']['type'] показва типа на файла.
    $_FILES['var']['size'] показва размера на файла в байтове.
    $_FILES['var']['tmp_name'] показва tmp за качване.
    $_FILES['var']['error'] Показва подробности за грешката.  
        --> 
        Copy/Upload file
        <hr>
        <form action="PageFile.php" method="post" enctype="multipart/form-data" name="form1">
            <input type="file" name="fileUpload">
            <input type="submit" name="Submit" value="Submit">
        </form>
        <hr>
        <a href="../index.php">Back to home</a>
    </body>
</html>