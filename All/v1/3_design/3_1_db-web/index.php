<?php
$pageTitle = 'Dizain';
$link='<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">';
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <?php// $link ?>
        <title><?php $pageTitle?></title>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
    <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  
}

#Home {background-color: #1e9cd0;}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Nav bar</button>
<button class="tablink" onclick="openPage('News', this, 'green')" >Column</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

<div id="Home" class="tabcontent">
  <h3>Nav bar</h3>
  <?php include './menu/nav_bar.php';?>
</div>

<div id="News" class="tabcontent">
  <h3>Column</h3>
  <?php include './menu/column.php';?>
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<!-- comment 
<div class="sidenav">
    <li><a href="index.php">Home</a> </li>
                <li><a href="menu/nav_bar.php">Nav bar</a> </li>
                <li><a href="menu/column.php">Column </a></li>
                <li><a href="view.php">View </a> </li>
                <li><a href="multiDel.php">MultiDel</a> </li>
                <li><a href="find.php">Find</a> </li>
                <li><a href="exportPDF.php">Export pdf</a></li>
                <li><a href="exportToPdf.php">Export to pdf 2</a></li>
                <li><a href="export_sort.php">Export/sort</a></li>
                <li><a href="pagination.php">Pagination</a> </li>
                <li><a href="page_limit.php">Page limit</a> </li>
                <li><a href="logout.php">Logout</a> </li>
</div>

<div class="main">-->
     
</body>
</html>   