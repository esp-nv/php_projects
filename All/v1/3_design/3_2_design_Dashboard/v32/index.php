<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
        <title>Dashboard</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!----css3---->
        <link rel="stylesheet" href="css/style.css" />
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
              rel="stylesheet" />

        <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    </head>

    <body>
        <div class="grid-container">
            <div class="menu-icon">
                <i class="fas fa-bars header__menu"></i>
            </div>

            <header class="header">
                <div class="header__search">Search...</div>
                <div class="header__avatar">Your face</div>
            </header>

            <aside class="sidenav">
                <div class="sidenav__close-icon">
                    <i class="fas fa-times sidenav__brand-close"></i>
                </div>
                <ul class="sidenav__list">
                    <li class="sidenav__list-item">Item One</li>
                    <li class="sidenav__list-item">Item Two</li>
                    <li class="sidenav__list-item">Item Three</li>
                    <li class="sidenav__list-item">Item Four</li>
                    <li class="sidenav__list-item">Item Five</li>
                </ul>
            </aside>

            <main class="main">
                <div class="main-header">
                    <div class="main-header__heading">Hello User</div>
                    <div class="main-header__updates">Recent Items</div>
                </div>

                <div class="main-overview">
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                    <div class="overviewcard">
                        <div class="overviewcard__icon">Overview</div>
                        <div class="overviewcard__info">Card</div>
                    </div>
                </div>

                <div class="main-cards">
                    <div class="card">Card</div>
                    <div class="card">Card</div>
                    <div class="card">Card</div>
                </div>
            </main>

            <footer class="footer">
                <div class="footer__copyright">&copy; 2018 MTH</div>
                <div class="footer__signature">Made with love by pure genius</div>
            </footer>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <!--  JavaScript -->
        <script type="text/javascript">
            const menuIconEl = $('.menu-icon');
            const sidenavEl = $('.sidenav');
            const sidenavCloseEl = $('.sidenav__close-icon');

            // Add and remove provided class names
            function toggleClassName(el, className) {
                if (el.hasClass(className)) {
                    el.removeClass(className);
                } else {
                    el.addClass(className);
                }
            }

            // Open the side nav on click
            menuIconEl.on('click', function () {
                toggleClassName(sidenavEl, 'active');
            });

            // Close the side nav on click
            sidenavCloseEl.on('click', function () {
                toggleClassName(sidenavEl, 'active');
            });
        </script>
    </body>

</html>