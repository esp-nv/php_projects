<!DOCTYPE html>
<html>
    <head>
        <title>Page Layout</title>
                <style>
            
            .head1 {
                font-size: 40px;
                color: #009900;
                font-weight: bold;
            }
            .head2 {
                font-size: 17px;
                margin-left: 10px;
                margin-bottom: 15px;
            }
            body {
                margin: 0 auto;
                background-position: center;
                background-size: contain;
            }
            .menu {
                position: sticky;
                top: 0;
                background-color: #009900;
                padding: 10px 0px 10px 0px;
                color: white;
                margin: 0 auto;
                overflow: hidden;
            }
            .menu a {
                float: left;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 20px;
            }
            .menu-log {
                right: auto;
                float: right;
            }
            footer {
                width: 100%;
                bottom: 0px;
                background-color: #000;
                color: #fff;
                position: absolute;
                padding-top: 20px;
                padding-bottom: 50px;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
            }
            .body_sec {
                margin-left: 20px;
                padding: 10px;
            }
            .newspaper {
                column-count: 2;
                column-gap: 40px;
                column-rule-style: solid;
            }
        </style>
    </head>
    <body>
        <!-- Header Section -->
        <header>
            <div class="head1">
                Page Layout
            </div>
            <div class="head2">
                GeeksforGeeks A computer science portal for geeks
            </div>
        </header>
        <!-- Menu Navigation Bar -->
        <nav class="menu">
            <a href="index.php">HOME</a>
            <a href="#">var1</a>
            <a href="#">var2</a>

            <div class="menu-log">
                <a href="#login">LOGIN</a>
            </div>
        </nav>
        <!-- Body section -->
        <main class="body_sec">
            <section id="Content" class="newspaper">
                <h3>Content section</h3>
                <p><a href="v1.php">v 1</a> layout header,menu,content,footer- sa6tata stranica </p> 
                <p><a href="v2.php">v 2</a> Responsive Tiles Layout - header, main, section, footer</p>  
                <p><a href="v3.php">v 3</a> layout header,menu,content, left ads,footer </p> 
                <p><a href="v4.php">v 4</a> Scroll down to see the sticky effect menu /header,menu,content.</p> 
                <p><a href="v5.php">v 5</a> layout header,menu top,Article heading,Subsection,Another subsection,footer </p> 
                <p><a href="v6.php">v 6</a> layout header,nav left,content,ads right,footer kato class </p>
                <p><a href="v7.php">v 7</a> Html Layout based on CSS float property - header,nav left,article,footer</p>
                <p> <a href="v8.php">v 8</a> Layout structure of HTML header,section/nav left,article/,footer</p>
                <p><a href="v9.php">v 9</a> Layout  header,nav left,article,footer</p> 
                <p><a href="v10.php">v 10</a> Website Layout without responsive </p>
                <p><a href="v11.php">v 11</a> layout </p>
                <p><a href="v12/index.php">v 12</a> Scroll down and scroll indicator to see the sticky effect menu /header,menu,content. </p> 
                <p> <a href="v13/index.php">v 13</a> za dashboard -- CSS Property Grid Responsive CSS Design</p> 

            </section>
        </main>

        <!-- Footer Section -->
        <footer>Footer Section</footer>
    </body>

</html>
