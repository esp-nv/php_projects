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
                codepen.io/<br>
                GeeksforGeeks<br>
                colorlib.com/wp/template/website-menu-19/<br>
                www.codingnepalweb.com/free-sidebar-menu-templates/
                <hr>
                <p><a href="v_1/index.php">v_1</a> ver1</p>
                <p><a href="v_2/index.php">v_2</a> different-navbar-styles</p>
                <p><a href="v_3/index.php">v_3</a> multiple nav html css only</p>
                <p><a href="v_4/index.php">v_4</a> Responsive Nav</p>
                <p><a href="v_5/index.php">v_5</a> sidebar</p>
                <p><a href="v_6/index.php">v_6</a> ver 6 </p>
                <p><a href="#">#</a> </p>
                <p><a href="#">#</a> </p>
                <p><a href="#">#</a> </p>
                <p><a href="#">#</a> </p>
                <p><a href="#">#</a> </p>
                <p><a href="#">#</a> </p>
            </section>
        </main>
        <!-- Footer Section -->
        <footer>Footer Section</footer>
    </body>

</html>
