<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toggle color palett</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/pallete-1.css" id="theme">

    <!-- Fontawesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="background-side">
    </div>
    <div class="container">
        <div class="header">
            <a href="#" class="logo">
                MI HOME SITE
            </a>
                <ul class="menu-nav">
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
        </div>
        <div class="blocks">
                <div class="block-intro">
                    <h5>Integer consequat hendrerit</h5>
                    <h1>
                        Lorem ipsum dolor sit amet, consectetur
                    </h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed hendrerit dolor non risus sollicitudin, ac laoreet enim placerat. 
                        Integer consequat hendrerit magna vel tempor. 
                        Nulla suscipit sapien nulla, nec tristique erat hendrerit vitae.</p>

                    <form class="block-form">
                        <div class="col-left">
                            <input type="text" class="form-control w-100" placeholder="Enter your ubication">
                        </div>
                        <div class="col-right">
                            <button class="btn btn-primary w-100">Search</button>
                    </div>
                        </form>
                </div>

                <div class="block-image">
                    <img src="images/house.jpg" alt="House text seo">
                </div>
        </div>
    </div>
    <ul class="pallete">
        <li>
            <a title="Change theme" href="#" class="color-pallete" data-themeId="1">
                <img src="images/p1.png" alt="color">
            </a>
        </li>
        <li>
            <a title="Change theme" href="#" class="color-pallete" data-themeId="2">
                <img src="images/p2.png" alt="color">
            </a>
        </li>
        <li>
            <a title="Change theme" href="#" class="color-pallete" data-themeId="3">
                <img src="images/p3.png" alt="color">
            </a>
        </li>
    </ul>
    <ul class="social">
        <li>
            <a href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
    <!--my script-->
    <script src="script.js"></script>
</body>
</html>