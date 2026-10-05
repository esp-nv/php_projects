<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <nav class="menu-container">
            <!-- burger menu -->
            <input type="checkbox" aria-label="Toggle menu" />
            <span></span>
            <span></span>
            <span></span>

            <!-- logo 
            <a href="#" class="menu-logo">
                <img src="https://wweb.dev/resources/navigation-generator/logo-placeholder.png" alt="My Awesome Website"/>
            </a>-->

            <!-- menu items -->
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#blog">Blog</a></li>
                    
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Dropdown</a>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </li>
                </ul>
                <ul>
                    <li><a href="#signup">Sign-up</a><li>
                    <li><a href="#login">Login</a></li>
                </ul>
            </div>
        </nav>
    </body>
</html>
