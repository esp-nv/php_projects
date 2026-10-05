<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Scrollspy with Bootstrap 5</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- comment <link rel="stylesheet" href="css/bootstrap.min.css">-->
        <style>
            body {
                position: relative;
            }
            section {
                height: 750px;
                padding: 50px;
            }
            .dot {
                height: 20px;
                width: 20px;
                margin: 5px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.3s ease;
                cursor: pointer;
            }
            .active {
                background-color: #0d6efd;
            }
            #scrollspy {
                position: fixed;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }
            .dot {
                display: block;
                width: 10px;
                height: 10px;
                margin: 20px 0;
                border-radius: 50%;
                background-color: #ddd;
                transition: background-color 0.2s ease-in-out;
            }
            .dot.active {
                background-color: #333;
            }

        </style>
    </head>
    <body data-spy="scroll" data-target="#scrollspy" data-offset="100">
        <header>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Section 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Section 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Section 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Section 4</a>                        
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5">Section 5</a>
                        </li>
                    </ul>
                </div>     
            </nav>

        </header>

        <main>
            <section id="section1" class="container-fluid bg-success" >
                <h1>Section 1</h1>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>

            <section id="section2" class="container-fluid bg-primary"  >
                <h1>Section 2</h1>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </section>

            <section id="section3" class="container-fluid bg-info" >
                <h1>Section 3</h1>
                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
            </section>

            <section id="section4" class="container-fluid bg-warning" >
                <h1>Section 4</h1>
                <div id="section41" class="container-fluid bg-danger" style="padding-top:70px;padding-bottom:70px">
                    <h1>Section 4 Submenu 1</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>
                <div id="section42" class="container-fluid bg-info" style="padding-top:70px;padding-bottom:70px">
                    <h1>Section 4 Submenu 2</h1>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                    <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                </div>
            </section>

            <section id="section5" class="container-fluid bg-danger" >
                <h1>Section 5</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
            </section>
        </main>

        <div id="scrollspy">
            <a href="#section1" class="dot" data-toggle="tooltip" data-placement="left" title="section 1"></a>
            <a href="#section2" class="dot" data-toggle="tooltip" data-placement="left" title="section 2"></a>
            <a href="#section3" class="dot" data-toggle="tooltip" data-placement="left" title="section 3"></a>
            <a href="#section4" class="dot" data-toggle="tooltip" data-placement="left" title="section 4"></a>
            <a href="#section5" class="dot" data-toggle="tooltip" data-placement="left" title="section 5"></a>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
        <script>
            // Add active class to the current dot when the corresponding section is in view
            window.addEventListener('scroll', function (event) {
                var sections = document.getElementsByTagName('section');
                for (var i = 0; i < sections.length; i++) {
                    var section = sections[i];
                    var dot = document.getElementsByClassName('dot')[i];
                    var position = section.getBoundingClientRect();
                    if (position.top <= 150 && position.bottom >= 150) {
                        dot.classList.add('active');
                    } else {
                        dot.classList.remove('active');
                    }
                }
            });

            // Smooth scroll to section when dot is clicked
            var dots = document.getElementsByClassName('dot');
            for (var i = 0; i < dots.length; i++) {
                dots[i].addEventListener('click', function (event) {
                    event.preventDefault();
                    var target
                    var target = this.getAttribute('href');
                    var section = document.querySelector(target);
                    section.scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
</html>
