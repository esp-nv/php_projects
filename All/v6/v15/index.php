<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo.png">
    <link rel="stylesheet" href="./fontawesome-pro-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Modal -->
    <div class="overlay"></div>
    <div class="modal position">
        <img src="images/Product-removebg-preview.png" class="logo">
        <div class="brand login-text">
            Sign in with your email or username<br><br>
            <strong>OR</strong><br><br> Use Facebook secure login for quick access to your account.
        </div>
        <button class="brand login flat-button facebook"><span>Continue with Facebook</span></button>
        <div class="form position">
            <a href="#"><button id="close-modal" class="close">x</button></a>
            <div class="form-inner">
                <!-- Tabs-->
                <div class="tabs">
                    <ul class="tabs">
                        <li class="current" data-tab="member">
                            <a href="#member" class="old-member">I am a member</a>
                        </li>
                        <li data-tab="new">
                            <a href="#new" class="new-member">I am new here</a>
                        </li>
                    </ul>
                    <!--Login Form -->
                    <div class="form-content current" id="member">
                        <form id="sign-in">
                            <input type="email" name="login-id" id="user" placeholder="USERNAME / EMAIL" class="field"
                                required>
                            <input type="password" name="usrpw" placeholder="PASSWORD" class="field" required>
                            <div class="clear"></div>
                            <input type="checkbox" name="rmbrme" id="custom-check" class="check"><label
                                for="custom-check" class="check-label secondary-text">Remember me</label><a
                                href=""><span class="forgot secondary-text">Forgot password?</span></a>
                            <button id="submit" name="sign-in-button" class="flat-button signin">Log In</button>
                        </form>
                    </div>
                    <!--Registration form-->
                    <div class="form-content" id="new">
                        <form id="reg">
                            <input type="text" name="login-id" id="user" placeholder="USERNAME" class="field" required>
                            <input type="email" name="email" id="usremail" placeholder="EMAIL ADDRESS" class="field"
                                required>
                            <input type="password" name="usrpw" placeholder="PASSWORD" class="field" required>
                            <button id="submit" name="register-button" class="flat-button signin">Sign Up</button>
                            <div class="clear"></div>
                            <input type="checkbox" name="promo" id="promo-check" class="check" checked><label
                                for="promo-check" class="check-label secondary-text promo">I'd like to receive special
                                offers and discount coupons. No spam!</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->


    <div class="container">
        <!-- navbar -->
        <ul class="social-icons">
            <li class="social-icon-item">
                <a href="#" class="social-icon-link"><i class="fab fa-facebook-square social-icon"></i></a>
            </li>
            <li class="social-icon-item">
                <a href="#" class="social-icon-link"><i class="fab fa-linkedin social-icon"></i></a>
            </li>
            <li class="social-icon-item">
                <a href="#" class="social-icon-link"><i class="fab fa-twitter-square social-icon"></i></a>
            </li>
            <li class="social-icon-item">
                <a href="#" class="social-icon-link"><i class="fab fa-instagram social-icon"></i></a>
            </li>
        </ul>

        <nav class="first-nav">
            <ul class="first-nav-list">
                <li class="first-nav-item">
                    <a href="#" id="signUp" class="first-nav-link"><label for="show-hide-forms"><i
                                class="fas fa-sign-in-alt"></i>Sign Up / Log In</label></a>
                </li>
                <li class="first-nav-item">
                    <a href="#" class="first-nav-link"><i class="fas fa-shopping-cart"></i>Cart(<span>2
                            Items</span>)</a>
                </li>
                <li class="first-nav-item">
                    <a href="#" class="first-nav-link"><i class="fas fa-truck"></i>Order Now</a>
                </li>
                <li class="first-nav-item">
                    <a href="#" class="first-nav-link"><i class="fas fa-heart"></i>Wish List</a>
                </li>
            </ul>
        </nav>

        <div class="search">
            <form class="search-form">
                <input type="text" class="search-input input-text style3" placeholder="Search">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </form>
        </div>

        <nav class="second-nav">
            <ul class="second-nav-list">
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Furniture</a>
                    <div class="dropdown">
                        <ul class="dropdown-first-list">
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Sofas</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Sectionals</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Daybeds & Chaises</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Consolas & Credenzas</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Chairs</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Benches & Ottomans</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Dressers & Chests</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Dining Tables</a>
                            </li>
                        </ul>
                        <ul class="dropdown-second-list">
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Lampert</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Baxter</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Channing</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Maxime</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Talitha</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Rider</a>
                            </li>
                            <li class="dropdown-list-item">
                                <a href="#" class="dropdown-list-link">Goldfinger</a>
                            </li>
                        </ul>
                        <img src="images/dropdown-image.jpg" class="dropdown-image">
                    </div>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Rooms</a>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Kitchen</a>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Outdoor</a>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Lighting</a>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Bed & Bath</a>
                </li>
                <li class="second-nav-item">
                    <a href="#" class="second-nav-link">Window</a>
                </li>
            </ul>
        </nav>
        <!-- end of navbar -->

        <!-- banner -->
        <section class="banner">
            <div class="banner-content">
                <h1 class="banner-heading">Great Sale</h1>
                <button class="banner-btn">
                    <span class="banner-btn-text-one">Shop Now</span>
                    <span class="banner-btn-text-two">It's Interesting</span>
                </button>
            </div>

            <div class="slideshow">
                <button class="slide-btn slide-btn-1"></button>
                <button class="slide-btn slide-btn-2"></button>
                <button class="slide-btn slide-btn-3"></button>
                <button class="slide-btn slide-btn-4"></button>
                <div class="slideshow-wrapper">
                    <div class="slide">
                        <img src="images/slide-img-1.jpg">
                    </div>
                    <div class="slide">
                        <img src="images/slide-img-2.jpg">
                    </div>
                    <div class="slide">
                        <img src="images/slide-img-3.jpg">
                    </div>
                    <div class="slide">
                        <img src="images/slide-img-4.jpg">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of banner -->

        <!-- Day Offer -->
        <section class="day-offer">
            <img src="images/day-offer-img-one.jpg" class="day-offer-img-one">
            <h1 class="day-offer-heading">Day Offer</h1>
            <p class="day-offer-paragraph">Feel better with new furniture</p>
            <button class="day-offer-btn">Shop Now</button>
            <img src="images/day-offer-img-two.jpg" class="day-offer-img-two">
        </section>
        <!-- End of Day Offer -->


        <!-- Bestselling Furniture -->
        <section class="bestselling-furniture">
            <h1 class="bestselling-furniture-header">Bestselling Furniture</h1>

            <div class="bestselling-furniture-cards">
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-kitchen.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Kitchen</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 15,000</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-wardrobe.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Wardrobe</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 10,000</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-sofa.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Sofa</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 1,500</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-table.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Table</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 3,500</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-bed.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Bed</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 1,500</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
                <div class="bestselling-furniture-card">
                    <img src="./images/bestsellig-furniture-chairs.jpg" class="bestselling-furniture-img">
                    <h2 class="bestselling-furniture-heading">Chairs</h2>
                    <p class="bestselling-furniture-paragraph">price: $ 1,000</p>
                    <button class="bestselling-furniture-btn">Buy Now</button>
                </div>
            </div>
        </section>
        <!-- End Bestselling Furniture -->

        <!-- gallery -->
        <section class="gallery">
            <img src="images/gallery-img-1.jpeg" class="gallery-img gallery-img-1">
            <img src="images/gallery-img-2.jpeg" class="gallery-img gallery-img-2">
            <img src="images/gallery-img-3.jpeg" class="gallery-img gallery-img-3">
            <img src="images/gallery-img-4.jpeg" class="gallery-img gallery-img-4">
            <img src="images/gallery-img-5.jpeg" class="gallery-img gallery-img-5">
            <img src="images/gallery-img-6.jpeg" class="gallery-img gallery-img-6">
            <img src="images/gallery-img-7.jpeg" class="gallery-img gallery-img-7">
            <img src="images/gallery-img-8.jpeg" class="gallery-img gallery-img-8">
            <img src="images/gallery-img-9.jpeg" class="gallery-img gallery-img-9">
            <img src="images/gallery-img-10.jpeg" class="gallery-img gallery-img-10">
            <img src="images/gallery-img-11.jpeg" class="gallery-img gallery-img-11">
            <img src="images/gallery-img-12.jpeg" class="gallery-img gallery-img-12">
        </section>
        <!-- end of gallery -->

        <!-- contact -->
        <section class="contact">
            <h1 class="contact-heading">Join us and be in the know</h1>
            <form class="contact-form">
                <input type="text" class="contact-input" placeholder="Enter email address">
                <input type="submit" class="contact-btn" value="Sign Up">
            </form>
        </section>
        <!-- end of contact -->

        <!-- footer -->
        <footer class="footer">
            <p>&copy; Olti Asllanaj. All rights reserved</p>
        </footer>
        <!-- end of footer -->

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js" async defer></script>

</body>
</html>