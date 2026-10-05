<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Keith Wellman">
    <meta name="description" content="PHP Form Processor">
    <title>PHP Form Processor</title>
  </head>
<body>
  <form action="processor.php" method="post">
    <p>
      <label for="font">Font</label>
      <select name="font">
        <option selected="times">Times New Roman</option>
        <option>Verdana</option>
        <option>Arial</option>
        <option>Tahoma</option>
        <option>Calibri</option>
      </select>
    </p>
    <p>
      <label for="fontSize">Font Size (em):</label>
      <input type="number" name="fontSize" value="11">
    </p>
    <p>
      <label for="fontColor">Font Color:</label>
      <select name="fontColor">
        <option selected="black">Black</option>
        <option>Blue</option>
        <option>Green</option>
        <option>Red</option>
        <option>White</option>
        <option>Orange</option>
        <option>Purple</option>
      </select>
    </p>
    <p>
      <label for="backgroundColor">Background Color</label>
      <select name="backgroundColor">
        <option selected="white">white</option>
        <option>Blue</option>
        <option>Black</option>
        <option>Green</option>
        <option>Red</option>
        <option>Orange</option>
        <option>Purple</option>
      </select>
    </p>
    <p>
      <label for="textArea">Paragraph:</label>
      <textarea name="textArea" rows="8" cols="40">Enter text here.</textarea>
    </p>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>