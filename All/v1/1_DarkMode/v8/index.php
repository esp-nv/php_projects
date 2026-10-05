<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dark mode theme Portfolio</title>
</head>
<body>
    <div class="header">
        <nav>
            <a href="#" class="logo"><img src="img/logo.png" id="logo"></a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Clients</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="toggle-btn" id="btn">
                <span id="btnText">Dark</span>
                <img src="img/moon.png" id="btnIcon">
            </div>
        </nav>
            <div class="content">
                <h1>Hello!</h1>
                <h1><span>I'm</span> Andrew doe</h1>
                <p>I'm  developer and designer with  passion for website design.
                    my best to provide the best experience.
                </p>
                <a href="#">Hire me</a>
            </div>

            <div class="image-box">
                <img src="img/user.png">
                <div class="pattern">
                    <img src="img/background.png">
                    <img src="img/background.png">

                </div>
            </div>
    </div>
</body>

    <script>

        let btn = document.getElementById("btn");
        let btnText = document.getElementById("btnText");
        let btnIcon = document.getElementById("btnIcon");
        let logo = document.getElementById("logo");



        btn.onclick = function(){
            document.body.classList.toggle("dark-theme");
        

        if (document.body.classList.contains("dark-theme")){
            btnIcon.src = "img/sun.png";
            btnText.innerHTML = "Light";
            logo.src = "img/logo-white.png";
        }
        else{
            btnIcon.src = "img/moon.png";
            btnText.innerHTML = "Dark";
            logo.src = "img/logo.png";
            }
        } 

    </script>
</html>