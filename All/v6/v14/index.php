<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grand Hotel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/crown.png">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
        rel="stylesheet">
    <!-- End Google Fonts -->

    <link rel="stylesheet" href="./fontawesome-pro-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="menu-icon">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
            </div>
            <ul class="social-icon-list">
                <li>
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#" class="social-link"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>

            <div class="year">
                <p>2020</p>
            </div>
        </div>
        <!-- End of Sidebar -->

        <!-- Navigation -->
        <nav class="navigation">
            <div class="navigation-header">
                <h1 class="navigation-heading">Grand Hotel</h1>
                <form class="navigation-search">
                    <input type="text" class="navigation-search-input style3" placeholder="Search...">
                    <button class="navigation-search-btn"><i class="far fa-search"></i></i></button>
                </form>
            </div>
            <ul class="navigation-list">
                <li class="navigation-item">
                    <a href="#" class="navigation-link">Home</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-link">About Us</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-link">Rooms</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-link">Events</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-link">Customers</a>
                </li>
                <li class="navigation-item">
                    <a href="#" class="navigation-link">Contact</a>
                </li>
            </ul>

            <div class="copyright">
                <p>&copy; 2020. Grand Hotel. All Rights Reserved</p>
            </div>
        </nav>
        <!-- End of Navigation-->
    </div>
    <!-- End of Navabar -->


    <!-- Header -->
    <header class="header">
        <div class="brand">
            <div>
                <img src="img/crown.png" width="80">
            </div>
            <h3 class="hotel-heading">Grand Hotel</h3>

        </div>
        <div class="banner">
            <h1 class="banner-heading">Welcome to Grand Hotel</h1>
            <p class="banner-paragraph">Make your life luxurious</p>
            <button class="banner-button">
                <span class="button-header">Check Out</span>
                <div class="button__horizontal"></div>
                <div class="button__vertical"></div>
            </button>
        </div>
    </header>
    <!-- End of Header -->



    <!-- About Us -->
    <section class="about-us">
        <div class="about-us-content">
            <h1 class="about-us-heading">About Us</h1>
            <div class="underline">
                <div class="small-underline"></div>
                <div class="big-underline"></div>
            </div>
            <h3 class="sub-heading">Grand Hotel</h3>
            <p class="about-us-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eaque minima
                quis commodi iusto a, enim odio quisquam expedita? Corrupti consequatur blanditiis distinctio eos
                eligendi quae quam illum. Incidunt, quidem.</p>
            <button class="about-us-btn">
                Read More
                <i class="fas fa-angle-double-right btn-arrow"></i>
            </button>
        </div>

        <div class="about-us-images">
            <img src="img/about-us-img-1.jpeg" class="image image-1">
            <img src="img/about-us-img-2.jpeg" class="image image-2">
            <img src="img/about-us-img-3.jpeg" class="image image-3">
            <img src="img/about-us-img-4.jpeg" class="image image-4">
        </div>
    </section>
    <!-- End About Us -->


    <!-- Room -->

    <section class="rooms">
        <div class="common-header">
            <h1 class="common-heading">Rooms In Grand Hotel</h1>
            <div class="underline">
                <div class="small-underline"></div>
                <div class="big-underline"></div>
            </div>
        </div>
        <div class="rooms-cards-wrapper">
            <div class="room-card">
                <img src="img/single-room.jpeg" class="room-img">
                <div class="room-card-content">
                    <h4 class="room-card-heading">Single Room</h4>
                    <p class="rrom-card-paragrapg">Lorem ipsum dolor sit amet.</p>
                    <p class="room-price">$99.00</p>
                    <button class="room-card-btn">
                        Book Now
                        <i class="fas fa-angle-double-right btn-arrow"></i>
                    </button>
                </div>
            </div>
            <div class="room-card">
                <img src="img/double-room.jpeg" class="room-img">
                <div class="room-card-content">
                    <h4 class="room-card-heading">Double Room</h4>
                    <p class="rrom-card-paragrapg">Lorem ipsum dolor sit amet.</p>
                    <p class="room-price">$199.00</p>
                    <button class="room-card-btn">
                        Book Now
                        <i class="fas fa-angle-double-right btn-arrow"></i>
                    </button>
                </div>
            </div>
            <div class="room-card">
                <img src="img/lux.jpeg" class="room-img">
                <div class="room-card-content">
                    <h4 class="room-card-heading">Lux</h4>
                    <p class="rrom-card-paragrapg">Lorem ipsum dolor sit amet.</p>
                    <p class="room-price">$299.00</p>
                    <button class="room-card-btn">
                        Book Now
                        <i class="fas fa-angle-double-right btn-arrow"></i>
                    </button>
                </div>
            </div>
            <div class="room-card">
                <img src="img/vip.jpeg" class="room-img">
                <div class="room-card-content">
                    <h4 class="room-card-heading">VIP</h4>
                    <p class="rrom-card-paragrapg">Lorem ipsum dolor sit amet.</p>
                    <p class="room-price">$399.00</p>
                    <button class="room-card-btn">
                        Book Now
                        <i class="fas fa-angle-double-right btn-arrow"></i>
                    </button>
                </div>
            </div>
        </div>

        <div class="rooms-btn-wrapper">
            <button class="button rooms-btn">
                Check All Rooms
            </button>
        </div>

    </section>
    <!-- End of Room -->


    <!-- Customers -->
    <section class="customers">
        <div class="common-header">
            <h1 class="common-heading">Our Customers</h1>
            <div class="underline">
                <div class="small-underline"></div>
                <div class="big-underline"></div>
            </div>
        </div>

        <p class="customers-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum qui architecto
            nemo modi delectus ut odio aliquid! Quisquam, cum explicabo.</p>

        <div class="customers-card-wrapper">
            <div class="customer-card">
                <div class="customer-image-wrapper">
                    <img src="img/customer-1.jpeg" class="customer-image">
                    <div class="customer-info">
                        <h3 class="customer-fullname">Helen Doe</h3>
                        <p class="customer-paragraph-1">Happy Customer</p>
                        <p class="customer-paragraph-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
                            saepe distinctio, vero magni totam enim at corporis consequuntur cum neque deserunt sequi
                            ipsam optio voluptatem necessitatibus dolorem maiores. Sed, vero?</p>
                    </div>
                </div>
            </div>
            <div class="customer-card">
                <div class="customer-image-wrapper">
                    <img src="img/customer-2.jpeg" class="customer-image">
                    <div class="customer-info">
                        <h3 class="customer-fullname">Monica Smith</h3>
                        <p class="customer-paragraph-1">Happy Customer</p>
                        <p class="customer-paragraph-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed
                            saepe distinctio, vero magni totam enim at corporis consequuntur cum neque deserunt sequi
                            ipsam optio voluptatem necessitatibus dolorem maiores. Sed, vero?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Customers -->


    <!-- footer -->
    <footer class="footer">
        <div class="main-part">
            <div class="footer-list-wrapper">
                <h3 class="footer-heading">Grand Hotel</h3>
                <ul class="footer-list">
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            support@grandhotel.com
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            New York, Main Street 123
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Tel: +123 456 789
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-list-wrapper">
                <h3 class="footer-heading">Explore</h3>
                <ul class="footer-list">
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Home
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            About Us
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Rooms
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Events
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Customers
                        </a>
                    </li>
                    <li class="footer-list-item">
                        <a href="#" class="footer-list-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="contact">
                <h3 class="footer-heading">Contact</h3>
                <p>Sign Up for News</p>
                <form class="footer-form">
                    <input type="text" class="footer-input" placeholder="Your email...">
                    <button class="footer-btn">Sign Up</button>
                </form>
            </div>

            <div class="gallery">
                <h3 class="footer-heading">Gallery</h3>
                <div class="gallery-images">
                    <div class="image-wrapper">
                        <img src="img/gallery-img-1.jpeg" class="footer-image">
                    </div>
                    <div class="image-wrapper">
                        <img src="img/gallery-img-2.jpeg" class="footer-image">
                    </div>
                    <div class="image-wrapper">
                        <img src="img/gallery-img-3.jpeg" class="footer-image">
                    </div>
                    <div class="image-wrapper">
                        <img src="img/gallery-img-4.jpeg" class="footer-image">
                    </div>
                    <div class="image-wrapper">
                        <img src="img/gallery-img-5.jpeg" class="footer-image">
                    </div>
                    <div class="image-wrapper">
                        <img src="img/gallery-img-6.jpeg" class="footer-image">
                    </div>
                </div>
            </div>
        </div>

        <div class="creator-part">
            <div class="copyright-text">
                <p>Copyright &copy; 2020. Grand Hotel. All Rights Reserved</p>
            </div>

            <div class="text-right">
                <p>Made by <span>Olti Asllanaj</span></p>
            </div>
        </div>
    </footer>
    <!-- end of footer -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js" async defer></script>

</body>

</html>