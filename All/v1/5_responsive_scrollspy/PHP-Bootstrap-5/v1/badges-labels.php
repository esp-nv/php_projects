

<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2JGVD8M9K"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-S2JGVD8M9K');
        </script>


        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="index, follow">
        <!-- Bootstrap CSS -->

        <link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="style/css/font.awesome.css">
        <link rel="stylesheet" type="text/css" href="style/css/back-to-top.css">
        <link rel="stylesheet" type="text/css" href="style/js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="style/css/custom.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        <!--USE FOR VARIOUS ITEMS / REQUIRED TOP OF PAGE-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16" />

        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=675c37d83e41a900135ff1e5&product=inline-share-buttons&source=platform" async="async"></script>


        <style type="text/css">
            a {text-decoration:none;}
        </style>

    </head>
    <body>


        <!-- Header -->




        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

        <!-- Main Content -->
        <div class="container">

                      
            <center><center><font size="5">Your "Source Code" Resource for PHP and Bootstrap Development</font></center>

                <p class="h6" align="center">
                    Start Here <i class="bi-arrow-right-short"></i>
                    
                    <a href="nav-bars.php">Navigation Bars</a> ||
                    <a href="columns.php">Column Grids</a> ||
                    <a href="buttons.php">Buttons</a> ||
                    <a href="modal-generator.php">Modal Generators</a> ||
                    <a href="bootstrap-icons.php">Bootstrap Icons</a> ||
                    <a href="badges-labels.php">Badges & Labels</a> ||
                    <a href="progress-bars.php">Progress Bars</a> ||
                    <a href="themes.php">Themes</a> ||
                    <a href="plugins.php">Plugins</a>
                </p>
                <hr></center>

            <title>Badges & Labels - PHP Bootstrap 5 - A toolbox for creating mobile friendly websites!</title>
            <meta name="description" content="Learn how to use Bootstrap badges and labels in our comprehensive PHP Bootstrap tutorial. Discover best practices and examples to enhance your user interface.">

            <button type="button" class="btn btn-dark position-relative"> <h2>Badges & Labels</h2>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> Section 7 </span>
            </button>
            <p>Using these badges and labels are great for indicating important information on your website. Badges are used to add small numerical values or labels to count items, indicate statuses, or highlight key information. They can be attached to links, buttons, or other components to provide context.</p>

            <hr>
            <button type="button" class="btn btn-secondary btn-sm">
                Badge 
            </button>
            <pre><xmp>
<button type="button" class="btn btn-secondary btn-sm"> Badge </button>
</xmp></pre>
            <h3>Use badges to inform events</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <br /><br />
                        <button type="button" class="btn btn-primary position-relative">
                            Visitors
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                25
                            </span>
                        </button>
                        <br /><br />
                        <button type="button" class="btn btn-warning position-relative">
                            Page Views
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                112
                            </span>
                        </button>
                        <br /><br />
                        <button type="button" class="btn btn-danger position-relative">
                            Orders To Date
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">
                                4
                            </span>
                        </button>

                    </div>
                    <div class="col-lg-9">

                        <pre><xmp>
<button type="button" class="btn btn-primary position-relative"> Visitors
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"> 25 </span>
</button>

<button type="button" class="btn btn-warning position-relative"> Page Views
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"> 112 </span>
</button>

<button type="button" class="btn btn-danger position-relative"> Orders To Date
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary"> 4 </span>
</button>
</xmp></pre>

                    </div>
                </div>
            </div>
            <h3>Information Labels</h3>
            <button type="button" class="btn btn-primary btn-sm"> Primary </button>
            <button type="button" class="btn btn-secondary btn-sm"> Secondary </button>
            <button type="button" class="btn btn-success btn-sm"> Success </button>
            <button type="button" class="btn btn-danger btn-sm"> Danger </button>
            <button type="button" class="btn btn-warning btn-sm"> Warning </button>
            <button type="button" class="btn btn-info btn-sm"> Info </button>
            <button type="button" class="btn btn-light btn-sm"> Light </button>
            <button type="button" class="btn btn-dark btn-sm">Dark </button>

            <pre><xmp>
<button type="button" class="btn btn-primary btn-sm"> Primary </button>
<button type="button" class="btn btn-secondary btn-sm"> Secondary </button>
<button type="button" class="btn btn-success btn-sm"> Success </button>
<button type="button" class="btn btn-danger btn-sm"> Danger </button>
<button type="button" class="btn btn-warning btn-sm"> Warning </button>
<button type="button" class="btn btn-info btn-sm"> Info </button>
<button type="button" class="btn btn-light btn-sm"> Light </button>
<button type="button" class="btn btn-dark btn-sm">Dark </button>
</xmp></pre>
            <h3>Various Sizes</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <button type="button" class="btn btn-primary btn-sm"><h1> Primary </h1></button>
                        <button type="button" class="btn btn-secondary btn-sm"><h2> Secondary </h2></button>
                        <button type="button" class="btn btn-success btn-sm"><h3> Success </h3></button>
                        <button type="button" class="btn btn-danger btn-sm"><h4> Danger </h4></button>
                        <button type="button" class="btn btn-warning btn-sm"><h5> Warning </h5></button>
                        <button type="button" class="btn btn-info btn-sm"><h6> Info </h6></button>



                        <pre><xmp>
<button type="button" class="btn btn-primary btn-sm"><h1> Primary </h1></button>
<button type="button" class="btn btn-secondary btn-sm"><h2> Secondary </h2></button>
<button type="button" class="btn btn-success btn-sm"><h3> Success </h3></button>
<button type="button" class="btn btn-danger btn-sm"><h4> Danger </h4></button>
<button type="button" class="btn btn-warning btn-sm"><h5> Warning </h5></button>
<button type="button" class="btn btn-info btn-sm"><h6> Info </h6></button>
</xmp></pre>


                    </div>
                </div>
                <h3>Add A Indicator To A Button</h3>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2">
                            <br /><br />
                            <button type="button" class="btn btn-primary position-relative">   Profile
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-info border border-light rounded-circle">
                                </span>
                            </button>
                            <br /><br />
                            <button type="button" class="btn btn-secondary position-relative">   Information
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-warning border border-light rounded-circle">
                                </span>
                            </button>
                            <br /><br />
                            <button type="button" class="btn btn-success position-relative">   Account
                                <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                                </span>
                            </button>
                        </div>
                        <div class="col-lg-10">
                            <pre><xmp>
<button type="button" class="btn btn-primary position-relative">   Profile
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-info border border-light rounded-circle">
  </span>
</button>
<br /><br />
<button type="button" class="btn btn-secondary position-relative">   Information
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-warning border border-light rounded-circle">
  </span>
</button>
<br /><br />
<button type="button" class="btn btn-success position-relative">   Account
  <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
  </span>
</button>
</xmp></pre>
                            <div>
                            </div>
                        </div>


                        <h3>Outline Buttons</h3>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">

                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-light"><font color="#d3d3d3">Light</font></button>
                                    <button type="button" class="btn btn-outline-dark">Dark</button>


                                    <pre><xmp>
<button type="button" class="btn btn-outline-primary">Primary</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Danger</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button>
</xmp></pre>

                                </div>
                            </div>
                        </div>

                        <hr>

                        <!--CONTENT ENDS HERE-->

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<footer>

    <!--  Begin Footer -->


    <div class="container">



        <br />
        <p class="h6" align="center">
            <a href="page-setup.php">Basic Page Setup</a> ||
            <a href="nav-bars.php">Navigation Bars</a> ||
            <a href="columns.php">Column Grids</a> ||
            <a href="buttons.php">Buttons</a> ||
            <a href="modal-generator.php">Modal Generators</a> ||
            <a href="bootstrap-icons.php">Bootstrap Icons</a> ||
            <a href="badges-labels.php">Badges & Labels</a> ||
            <a href="progress-bars.php">Progress Bars</a> ||
            <a href="themes.php">Themes</a> ||
            <a href="plugins.php">Plugins</a> ||
            <a href="contact-us.php">Contact Us</a>
        </p>	

        <hr width="100%">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-black">

                <p class="h5">PHP Bootstrap | info@php-bootstrap.com | 2018-2025 <i class="fa fa-copyright"></i> All rights reserved. </p>
                <p>Today's date is: 01-14-2025</p>        

                <p class="h6" align="center"><a class="text-blue ml-2" href="https://php-bootstrap.com">PHP Bootstrap 5</a> - It's just a toolbox! <img src="https://php-bootstrap.com/favicons/favicon-32x32.png" alt="PHP Bootstrap"></p>		

                <br /><br />

            </div>
        </div>
    </div>

</footer>



<!--  End Footer -->


<!-- Window Open Script //-->
<script language="JavaScript">
// Function to open a popup window with specified URL, width, and height
    function popUp(URL, width, height) {
        var day = new Date();
        var id = day.getTime(); // Create a unique identifier for the window

        // Calculate position to center the popup on the screen
        var left = (window.innerWidth / 2) - (width / 2);
        var top = (window.innerHeight / 2) - (height / 2);

        // Open the new window with specified options
        var newWindow = window.open(URL, id, `toolbar=no,scrollbars=yes,location=no,status=no,menubar=no,resizable=yes,width=${width},height=${height},left=${left},top=${top}`);

        // Optional: Focus on the new window
        if (newWindow) {
            newWindow.focus();
        }
    }
</script>
<!-- Window Open End //-->

<!-- Page Up Script -->

<script>
// When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<!-- Bootstrap JS Files --> 
<script type="text/javascript" src="js/dismissal.js.js"></script>




<!-- Default Statcounter code for PHP Bootstrap
https://php-bootstrap.com/ -->
<script type="text/javascript">
    var sc_project = 11872472;
    var sc_invisible = 1;
    var sc_security = "7d08eec9";
</script>
<script type="text/javascript"
        src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
                                      Made Easy - Statcounter" href="https://statcounter.com/"
                                      target="_blank"><img class="statcounter"
                         src="https://c.statcounter.com/11872472/0/7d08eec9/1/"
                         alt="Web Analytics Made Easy - Statcounter"
                         referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->



</body>
</html>