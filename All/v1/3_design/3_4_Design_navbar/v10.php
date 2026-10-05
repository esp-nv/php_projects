
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
       <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300" rel="stylesheet" /> 
        
        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
        <meta name="apple-mobile-web-app-title" content="CodePen">
        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
        <title>CodePen - Sidebar Menu Hover Show/Hide CSS</title>
        <link rel="canonical" href="https://codepen.io/JFarrow/pen/nJgRga">
        <style>

            .fa-2x {
                font-size: 2em;
            }
            .fa {
                position: relative;
                display: table-cell;
                width: 60px;
                height: 36px;
                text-align: center;
                vertical-align: middle;
                font-size:20px;
            }


            .main-menu:hover,nav.main-menu.expanded {
                width:250px;
                overflow:visible;
            }

            .main-menu {
                background:#212121;
                border-right:1px solid #e5e5e5;
                position:absolute;
                top:0;
                bottom:0;
                height:100%;
                left:0;
                width:60px;
                overflow:hidden;
                -webkit-transition:width .05s linear;
                transition:width .05s linear;
                -webkit-transform:translateZ(0) scale(1,1);
                z-index:1000;
            }

            .main-menu>ul {
                margin:7px 0;
            }

            .main-menu li {
                position:relative;
                display:block;
                width:250px;
            }

            .main-menu li>a {
                position:relative;
                display:table;
                border-collapse:collapse;
                border-spacing:0;
                color:#999;
                font-family: arial;
                font-size: 14px;
                text-decoration:none;
                -webkit-transform:translateZ(0) scale(1,1);
                -webkit-transition:all .1s linear;
                transition:all .1s linear;

            }

            .main-menu .nav-icon {
                position:relative;
                display:table-cell;
                width:60px;
                height:36px;
                text-align:center;
                vertical-align:middle;
                font-size:18px;
            }

            .main-menu .nav-text {
                position:relative;
                display:table-cell;
                vertical-align:middle;
                width:190px;
                font-family: 'Titillium Web', sans-serif;
            }

            .main-menu>ul.logout {
                position:absolute;
                left:0;
                bottom:0;
            }

            .no-touch .scrollable.hover {
                overflow-y:hidden;
            }

            .no-touch .scrollable.hover:hover {
                overflow-y:auto;
                overflow:visible;
            }

            a:hover,a:focus {
                text-decoration:none;
            }

            nav {
                -webkit-user-select:none;
                -moz-user-select:none;
                -ms-user-select:none;
                -o-user-select:none;
                user-select:none;
            }

            nav ul,nav li {
                outline:0;
                margin:0;
                padding:0;
            }
            .main-menu li:hover>a,nav.main-menu li.active>a,.dropdown-menu>li>a:hover,.dropdown-menu>li>a:focus,.dropdown-menu>.active>a,.dropdown-menu>.active>a:hover,.dropdown-menu>.active>a:focus,.no-touch .dashboard-page nav.dashboard-menu ul li:hover a,.dashboard-page nav.dashboard-menu ul li.active a {
                color:#fff;
                background-color:#000000;
            }
            .area {
                float: left;
                background: #e2e2e2;
                width: 100%;
                height: 100%;
            }
            @font-face {
                font-family: 'Titillium Web';
                font-style: normal;
                font-weight: 300;
                src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
    <html>
        <head>

        </head>
        <body><div class="area"></div><nav class="main-menu">
                <ul>
                    <li>
                        <a href="https://jbfarrow.com">
                            <i class="fa fa-home fa-2x"></i>
                            <span class="nav-text">
                                Community Dashboard
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa-globe fa-2x"></i>
                            <span class="nav-text">
                                Global Surveyors
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa-comments fa-2x"></i>
                            <span class="nav-text">
                                Group Hub Forums
                            </span>
                        </a>

                    </li>
                    <li class="has-subnav">
                        <a href="#">
                            <i class="fa fa-camera-retro fa-2x"></i>
                            <span class="nav-text">
                                Survey Photos
                            </span>
                        </a>

                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-film fa-2x"></i>
                            <span class="nav-text">
                                Surveying Tutorials
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book fa-2x"></i>
                            <span class="nav-text">
                                Surveying Jobs
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cogs fa-2x"></i>
                            <span class="nav-text">
                                Tools & Resources
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker fa-2x"></i>
                            <span class="nav-text">
                                Member Map
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info fa-2x"></i>
                            <span class="nav-text">
                                Documentation
                            </span>
                        </a>
                    </li>
                </ul>

                <ul class="logout">
                    <li>
                        <a href="#">
                            <i class="fa fa-power-off fa-2x"></i>
                            <span class="nav-text">
                                Logout
                            </span>
                        </a>
                    </li>  
                </ul>
            </nav>
        </body>
    </html>



</body>

</html>
