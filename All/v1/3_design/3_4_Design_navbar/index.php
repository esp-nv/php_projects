<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>
        <title>ver Navbar</title>
        <meta charset="utf-8">
        <meta name="viewport" 
              content="width=device-width,
              initial-scale=1.0">
        <link rel="stylesheet" href=
              "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <!-- comment <link rel="stylesheet" href="style.css">-->
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
            }
            nav {
                background-color: green;
                color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
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
           p:nth-child(even) {
                background-color: #c3e6cb;
            }
           .logo {
                font-size: 1.5rem;
            }
            ul {
                display: flex;
                list-style: none;
                padding: 0;
                margin: 0;
            }
            ul li {
                margin-right: 20px;
            }
            ul li a {
                color: white;
                text-decoration: none;
                transition: color 0.3s;
            }
            ul li a:hover {
                color: lightgreen;
            }
            .checkbtn {
                font-size: 30px;
                color: white;
                cursor: pointer;
                display: none;
            }
            #check {
                display: none;
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
            @media (max-width: 768px) {
                .checkbtn {
                    display: block;
                    order: 1;
                    margin-right: 20px;
                }

                ul {
                    position: fixed;
                    top: 80px;
                    right: -100%;
                    background-color: green;
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    transition: all 0.3s;
                }

                ul li {
                    margin: 20px 0;
                }

                ul li a {
                    font-size: 20px;
                }

                #check:checked ~ ul {
                    right: 0;
                }
            }
        </style>
    </head>

    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">navbars</label>
            <ul>
                <li><a class="active" href="#">HTML</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">ReactJS</a></li>
                <li><a href="#">NodeJS</a></li>
            </ul>
        </nav>
        <main class="body_sec">
            <section id="Content" class="newspaper">
                <h3>Content section navbar </h3>
                GeeksforGeeks<br>
                colorlib.com/wp/template/website-menu-19/<br>
                www.codingnepalweb.com/free-sidebar-menu-templates/
                <hr>
                <p><a href="v2.php">v 2</a> Create Responsive Sidebar Menu to Top Navbar in Bootstrap</p>
                <p><a href="v3.php">v 3</a> Responsive sidebar menu to top navbar in Bootstrap 5 - Left Sidebar Example - TypeScript</p>
                <p><a href="v4.php">v 4</a> Bootstrap Navbar </p>
                <p><a href="v5/index.php">v 5</a> bootstrap 4 - Website menu 09</p>
                <p><a href="v6/index.php">v 6</a> Bootstrap sticky navbar with db</p>
                <p><a href="v7.php">v 7</a> Dynamic PHP navigation list tutorial (example) - left + right sidebar</p> 
                <p> <a href="v8.php">v 8</a> Animated Bottom Navigation Bar - rarzli4ni versii</p> 
                <p><a href="v9.php">var9</a> Dynamic Navigation Menu in PHP - pages</p>
                <p><a href="v10.php">v 10</a> CodePen Home Sidebar Menu Hover Show/Hide CSS -- left sidenav + hide/show </P>
                <p> <a href="v11/index.php">v 11</a> Hoverable Sidebar Menu HTML CSS & JavaScript </p>
                <p><a href="v12.php">v 12</a> My app = left sidenav + hide/show </p> 
                <p><a href="v13.php">v 13</a> left sidenav </p>
                <p><a href="v14/index.php">v 14</a> bootstrap 4 - megamenu </p>
                <p><a href="v15/index.php">v 15</a> bootstrap CodePen Home Side Sliding Menu CSS </p>
                <p><a href="v16.php">v 16</a> CodePen - bootstrap 4 navbar</p>
                 <p><a href="v17.php">v 17</a> Bootstrap Navbar - Material Design &amp; Bootstrap 4</p> 
                 <p><a href="v18.php">v 18</a> Bootstrap Sidebar + Navbar</p> 
                 <p><a href="v19.php">v 19</a> Responsive Bootstrap Sidebar</p> 
                <p><a href="v20/index.php"> v20 </a>new 9 dot</p> 
                <p><a href="v21/index.php"> v21 </a>Menubar With Hover Effect - ByteWebster</p>
                <p><a href="v22/index.php"> v22 </a>Bottom Tab Bar Navigation </p>
                <p><a href="v23/index.php">v23</a> v23 horizontal</p>
                <p><a href="v24/index.php">v24</a> v24</p> 
                <p><a href="v25.php">v25</a> Vertical Menu</p> 
                <p><a href="v26/index.php">v26</a> menu</p> 
                <p><a href="#">#</a> </p>
            </section>
        </main>
        <!-- Footer Section -->
        <footer>Footer Section</footer>
    </body>

</html>
