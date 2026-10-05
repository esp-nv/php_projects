<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header class="header">
            <div class="nav-container">
                <span class="logo">NavBar</span>
                <nav class="nav">
                    <ul class="nav--ul__one">
                        <li class="nav-link"><a href="#">Home</a></li>
                        <li class="nav-link"><a href="#">Contact</a></li>
                        <li class="nav-link"><a href="#">About Us</a></li>
                    </ul>
                    <ul class="nav--ul__two">
                        <li class="nav-link"><a href="#">Login</a></li>
                        <li class="nav-link"><a href="#">Signup</a></li>
                    </ul>
                </nav>
                <span class="hamburger-menu  material-symbols-outlined">menu</span>
            </div>
        </header>
        <script>
            const hamburgerMenu = document.querySelector(".hamburger-menu");
            const nav = document.querySelector(".nav");

            hamburgerMenu.addEventListener("click", () => {
                nav.classList.toggle("active")
            });

        </script>
    </body>
</html>
