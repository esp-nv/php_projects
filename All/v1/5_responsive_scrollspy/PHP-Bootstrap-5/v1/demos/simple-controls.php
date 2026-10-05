
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Demo: Simple Controls - Bootstrap Carousel</title>
        <meta name="description" content="Simple Controls - Bootstrap Carousel - Collection by sevenXdemo - More Information: www.sevenX.de/blog" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <style>
            body { padding-top: 10px; }

            .carousel-inner .carousel-item img {
                width: 100%;
                height: 100%;
            }
            .carousel-item .thumbnail {
                margin-bottom: 0;
            }
            .carousel-controls {
                position: absolute;
                bottom: 10px;
                right: 10px;
            }
            .carousel-controls button {
                background: #39b3d7;
                color: #fff;
                border: none;
                padding: 6px 12px;
                margin: 2px;
                border-radius: 4px;
                font-size: 14px;
                cursor: pointer;
            }
            .carousel-controls button:hover {
                background: #2a92b6;
            }
            pre code {
                color: #212529; /* Bootstrap's dark text color */
                font-family: "Courier New", Courier, monospace; /* Monospace font for code */
                white-space: pre-wrap; /* Ensures long lines wrap properly */
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Add it to your "includes" folder, then use the include function on any page of your website to display: <strong> <span id="countdown-1">4 second delay!</span> </strong></p> 
                        <pre><xml>< ?php include("includes/simple-controls.html"); ?></xml></pre> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Carousel -->
                    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://placehold.co/300x200?text=php-bootstrap.com" alt="Slide1">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://placehold.co/300x200?text=php-bootstrap.com" alt="Slide2">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://placehold.co/300x200?text=php-bootstrap.com" alt="Slide3">
                            </div>
                        </div>

                        <!-- Bottom Right Controls -->
                        <div class="carousel-controls">
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="fas fa-angle-left" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="fas fa-angle-right" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Optional JavaScript for customization
            const carousel = document.querySelector('#myCarousel');
            const carouselInstance = new bootstrap.Carousel(carousel, {
                interval: 4000
            });
        </script>

        <script type="text/javascript">
            // Initialize clock countdowns by using the total seconds in the elements tag
            secs = parseInt(document.getElementById('countdown-1').innerHTML, 10);
            setTimeout("countdown('countdown-1'," + secs + ")", 1000);


            /**
             * Countdown function
             * Clock count downs to 0:00 then hides the element holding the clock
             * @param id Element ID of clock placeholder
             * @param timer Total seconds to display clock
             */
            function countdown(id, timer) {
                timer--;
                minRemain = Math.floor(timer / 60);
                secsRemain = new String(timer - (minRemain * 60));
                // Pad the string with leading 0 if less than 2 chars long
                if (secsRemain.length < 2) {
                    secsRemain = '0' + secsRemain;
                }

                // String format the remaining time
                clock = minRemain + ":" + secsRemain;
                document.getElementById(id).innerHTML = clock;
                if (timer > 0) {
                    // Time still remains, call this function again in 1 sec
                    setTimeout("countdown('" + id + "'," + timer + ")", 1000);
                } else {
                    // Time is out! Hide the countdown
                    document.getElementById(id).style.display = 'none';
                }
            }
        </script>
        <!-- Default Statcounter code for PHP Bootstrap https://php-bootstrap.com/ -->
        <script type="text/javascript">
            var sc_project = 11872472;
            var sc_invisible = 1;
            var sc_security = "7f6660f5";
        </script>
        <script type="text/javascript"
                src="https://www.statcounter.com/counter/counter.js"
        async></script>
        <noscript><div class="statcounter"><a title="Web Analytics"
                                              href="https://statcounter.com/" target="_blank"><img
                    class="statcounter"
                    src="https://c.statcounter.com/11872472/0/7f6660f5/1/"
                    alt="Web Analytics"
                    referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
        <!-- End of Statcounter Code -->
    </body>
</html>
