<!DOCTYPE html>
<html>

<head>
    <title>
        Website Layout
    </title>
    <style>
   .container {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.middle {
  display: flex;
  gap: 10px
}

.content {
  flex-grow: 1;
}

div {
  border: thin solid black;
  padding: 10px;
}
    </style>
</head>

<body>
<div class="container">
  <div class="header">
    <p>Header</p>
  </div>
  
  <div class="middle">
    <div class="left-sidebar">
      <p>Left Sidebar</p>
      <ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>
      </ul>
    </div>

    <div class="content">
      <p>This is some content!</p>
      <p>This is some more content.</p>
    </div>

    <div class="right-sidebar">
      <p>Right Sidebar</p>
      <ul>
        <li>one</li>
        <li>two</li>
        <li>three</li>
      </ul>
    </div>
  </div>
  
  <div class="footer">
    <p>Footer</p>
  </div>
</div>
</div>
</body>

</html>
