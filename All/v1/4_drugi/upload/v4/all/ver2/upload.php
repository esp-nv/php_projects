<?php

if (isset($_POST['submit']))
{
    $file = $_FILES['file'];
   // $path = pathinfo($file);
 //   $dirpath = realpath(dirname($file));
    $Name = $_FILES['file']['name'];
    $TempName = $_FILES['file']['tmp_name'];
    $Size = $_FILES['file']['size'];
    $Error = $_FILES['file']['error'];
    $type = $_FILES['file']['type'];
    $ext = explode('.', $Name);
    $actualext = strtolower(end($ext));
    $allowed = array ('jpg', 'jpeg', 'png', 'pdf', 'doc', 'xls', 'mp4', 'mp3', 'ppt', 'rar', 'sql', 'zip');
    if (in_array($actualext, $allowed))
    {
        if ($Error === 0)
        {
            if ($Size < 1000000)
            {
                $newname = uniqid('', true) . "." . $actualext;
                $fileDestination = 'uploads/' . $newname;
                move_uploaded_file($TempName, $fileDestination);
               // echo ("<SCRIPT LANGUAGE='JavaScript'> 
              //      window.alert('File Uploaded Successfully Successfully')
             //       window.location.href='index.php?AddedSuccessfully';
             //       </SCRIPT>");
             //   echo "file: " . gettype($file) . " ; == " . $file . "<br>";
                echo "Name: " . gettype($Name) . " ; == " . $Name . "<br>";
                echo "TempName: " . gettype($TempName) . " ; == " . $TempName . "<br>";
             //   echo "size: " . gettype($size) . " ; == " . $size . "<br>";
                echo "error: " . gettype($Error) . " ; == " . $Error . "<br>";
                echo "type: " . gettype($type) . " ; == " . $type . "<br><br>";
             //    echo "ext: " . gettype($ext) . " ; == " . $ext . "<br>";
                echo "error: " . gettype($actualext) . " ; == " . $actualext . "<br>";
            //    echo "path: " . gettype($path) . " ; == " . $path . "<br><br>";
             //   echo "dirpath: " . gettype($dirpath) . " ; == " . $dirpath . "<br><br>";
                
                
            }
            else
            {
                echo "Your File size is too big!";
            }
        }
        else
        {
            echo "Error in uploading the file";
        }
    }
    else
    {
        echo "Please Check The file type";
    }
}