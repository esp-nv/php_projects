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
            <label class="logo">Custom Tooltip</label>
            <ul>
                <li><a class="active" href="#">HTML</a></li>
                <li><a href="#">Javascript</a></li>
                <li><a href="#">ReactJS</a></li>
                <li><a href="#">NodeJS</a></li>
            </ul>
        </nav>
        <main class="body_sec">
            <section id="Content" class="newspaper">
                <h3>other -Tooltip,table </h3>
                <hr>
                <p><a href="v1/index.php">v1</a> Hover or tap the icons.</p>
                <p><a href="v2/index.php">v2</a> Tooltip appear</p> 
                <p><a href="v3/index.php">v3</a> Emerging Tooltip</p>
                <p><a href="v4/index.php">v4</a> Fancy & Animated Tooltip (CSS Only)</p> 
                <p><a href="v5/index.php">v5</a> ToolTip [Laser Line Effect]</p>
                <p><a href="v6/index.php">v6</a> Tooltip</p> 
                <p><a href="v7/index.php">v7</a> CSS ToolTip Smooth animation</p>
                <p><a href="v8/index.php">v8</a> pagination</p> 
                <hr>
                <p><a href="v9/index.php">v9</a> table</p>
                <p><a href="v10/index.php">v10</a> table</p>
                <p><a href="v11/index.php">v11</a> Sort Table Rows by Clicking on the Table Headers - Ascending and Descending (jQuery)</p>
                <p><a href="v12/index.php">v12</a> Responsive Table HTML and CSS Only</p>
                <p><a href="v13/index.php">v13</a> Sticky Table Headers</p>
            </section>
        </main>
        <!-- Footer Section -->
        <footer>Footer Section</footer>
    </body>

</html>
