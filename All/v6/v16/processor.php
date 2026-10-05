<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Keith Wellman">
    <meta name="description" content="PHP Form Processor">
    <title>PHP Form Processor</title>
  </head>

<?php
  echo '<body bgcolor="'.$_POST["backgroundColor"].'">';
  $font = $_POST["font"];
  if ($font == "times") {
    $font = "Times New Roman";
  }
  else {
    $font = strtolower($font);
  }
  echo '<p style="color: '.$_POST["fontColor"].'; font-size: '.$_POST["fontSize"].'em;  font-family: '.$font.';">'.$_POST["textArea"].'</p>';
 ?>
</body>
</html>