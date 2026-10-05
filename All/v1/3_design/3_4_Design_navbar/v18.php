
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">


        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

        <meta name="apple-mobile-web-app-title" content="CodePen">

        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />




        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


        <title>CodePen - Bootstrap Sidebar + Navbar</title>

        <link rel="canonical" href="https://codepen.io/alexander-guthmann/pen/mddYdzw">


        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/slate/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>

        <style>
           
            #body-row {
                margin-left: 0;
                margin-right: 0;
            }

            #sidebar-container {
                min-height: 100vh;
                background-color: #333;
                padding: 0;
            }

            /* Sidebar sizes when expanded and expanded */
            .sidebar-expanded {
                width: 230px;
            }

            .sidebar-collapsed {
                width: 60px;
            }

            /* Menu item*/
            #sidebar-container .list-group a {
                height: 50px;
                color: white;
            }

            /* Submenu item*/
            #sidebar-container .list-group .sidebar-submenu a {
                height: 45px;
                padding-left: 30px;
            }

            .sidebar-submenu {
                font-size: 0.9rem;
            }

            /* Separators */
            .sidebar-separator-title {
                background-color: #333;
                height: 35px;
            }

            .sidebar-separator {
                background-color: #333;
                height: 25px;
            }

            .logo-separator {
                background-color: #333;
                height: 60px;
            }

            /* Symbol für geschlossenes Untermenü */
            #sidebar-container .list-group .list-group-item[aria-expanded=false] .submenu-icon::after {
                content: " ";
                font-family: FontAwesome;
                display: inline;
                text-align: right;
                padding-left: 10px;
            }

            /* Geöffnetes Untermenüsymbol */
            #sidebar-container .list-group .list-group-item[aria-expanded=true] .submenu-icon::after {
                content: " ";
                font-family: FontAwesome;
                display: inline;
                text-align: right;
                padding-left: 10px;
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <!-- Bootstrap NavBar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <span class="menu-collapsed">Intern</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#top"> Registrieren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#top"> Login</a>
                    </li>
                    <!-- Dieses Menü ist bei größeren Geräten mit d-sm-none ausgeblendet.
                          Die Seitenleiste ist nicht für kleinere Bildschirme geeignet, daher kann dieses Dropdown-Menü alle nützlichen Seitenleisten-Elemente ausschließlich für kleinere Bildschirme enthalten -->
                    <li class="nav-item dropdown d-sm-block d-md-none">
                        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Menu </a>
                        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                            <a class="dropdown-item" href="#top">Dashboard</a>
                            <a class="dropdown-item" href="#top">Profile</a>
                            <a class="dropdown-item" href="#top">Tasks</a>
                            <a class="dropdown-item" href="#top">Etc..</a>
                        </div>
                    </li><!-- Menü für kleinere Geräte END -->
                </ul>
            </div>
        </nav><!-- NavBar END -->
        <!-- Bootstrap row -->
        <div class="row" id="body-row">
            <!-- Seitenleiste -->
            <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
                <!-- d- * verbirgt die Sidebar in kleineren Geräten. Die Einträge können im Navbar-Menü gespeichert werden -->
                <!-- Bootstrap-Listengruppe -->
                <ul class="list-group">
                    <!-- Trennzeichen mit Titel -->
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>MAIN MENU</small>
                    </li>
                    <!-- / END Separator -->
                    <!-- Menü mit Untermenü -->
                    <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justyfy-content-start align-items-center">
                            <span class="fas fa-tachometer-alt fa-fw mr-3"></span>
                            <span class="menu-collapsed">Dashboard</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>
                    <!-- Inhalt des Untermenüs -->
                    <div id="submenu1" class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Charts</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Reports</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Tables</span>
                        </a>
                    </div>
                    <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-user fa-fw mr-3"></span>
                            <span class="menu-collapsed">Profile</span>
                            <span class="fas fa-angle-down ml-auto"></span>
                        </div>
                    </a>
                    <!-- Inhalt des Untermenüs -->
                    <div id='submenu2' class="collapse sidebar-submenu">
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Settings</span>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                            <span class="menu-collapsed">Password</span>
                        </a>
                    </div>
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-tasks fa-fw mr-3"></span>
                            <span class="menu-collapsed">Tasks</span>
                        </div>
                    </a>
                    <!-- Separator with title -->
                    <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                        <small>OPTIONS</small>
                    </li>
                    <!-- /END Separator -->
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fas fa-calendar fa-fw mr-3"></span>
                            <span class="menu-collapsed">Calendar</span>
                        </div>
                    </a>
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="far fa-envelope fa-fw mr-3"></span>
                            <span class="menu-collapsed">Messages <span class="badge badge-pill badge-primary ml-2">5</span></span>
                        </div>
                    </a>
                    <!-- Separator without title -->
                    <li class="list-group-item sidebar-separator menu-collapsed"></li>
                    <!-- /END Separator -->
                    <a href="#" class="bg-dark list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span class="fa fa-question fa-fw mr-3"></span>
                            <span class="menu-collapsed">Help</span>
                        </div>
                    </a>
                    <a href="#top" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                        <div class="d-flex w-100 justify-content-start align-items-center">
                            <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                            <span id="collapse-text" class="menu-collapsed">Collapse</span>
                        </div>
                    </a>
                </ul><!-- List Group END-->
            </div> <!-- Seitenleiste-container END -->
            <!-- MAIN -->
            <div class="col p-4">
                <h1 class="display-4">Collapsing Sidebar Menu</h1>
                <div class="card">
                    <h5 class="card-header font-weight-light">Requirements</h5>
                    <div class="card-body">
                        <ul>
                            <li>JQuery</li>
                            <li>Bootstrap 4.3</li>
                            <li>FontAwesome</li>
                        </ul>
                    </div>
                </div>
            </div><!-- Main Col END -->
        </div><!-- body-row END -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js'></script>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script id="rendered-js" >
// Hide submenus
      $('#body-row .collapse').collapse('hide');

// Collapse/Expand icon
      $('#collapse-icon').addClass('fa-angle-double-left');

// Collapse click
      $('[data-toggle=sidebar-colapse]').click(function () {
          SidebarCollapse();
      });

      function SidebarCollapse() {
          $('.menu-collapsed').toggleClass('d-none');
          $('.sidebar-submenu').toggleClass('d-none');
          $('.submenu-icon').toggleClass('d-none');
          $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

          // Treating d-flex/d-none on separators with title
          var SeparatorTitle = $('.sidebar-separator-title');
          if (SeparatorTitle.hasClass('d-flex')) {
              SeparatorTitle.removeClass('d-flex');
          } else {
              SeparatorTitle.addClass('d-flex');
          }

          // Collapse/Expand icon
          $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
//# sourceURL=pen.js
        </script>


    </body>

</html>
