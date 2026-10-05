
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Megamenu</title>


        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="style.css">


    </head>

    <body>

        <nav class="megamenu">
            <ul class="megamenu-nav d-flex justify-content-center" role="menu">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-home"></i>
                        <span class="sr-only">Home</span>
                    </a>
                </li>
                <li class="nav-item is-parent">
                    <a class="nav-link" href="#" id="megamenu-dropdown-1" aria-haspopup="true" aria-expanded="false">
                        Link 1 <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="megamenu-content" aria-labelledby="megamenu-dropdown-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 pr-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="">Another title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="">Some title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex">
                                        <div class="align-self-center pr-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
                                        </div>
                                        <div class="align-self-center">
                                            <a href="#" class="btn btn-outline-primary">Click me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://source.unsplash.com/640x480/?bikini" class="img-fluid mb-3" alt="test image">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.
                                    </p>
                                    <a href="#">See more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item is-parent">
                    <a class="nav-link" href="#" id="megamenu-dropdown-2" aria-haspopup="true" aria-expanded="false">
                        Link 2 <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="megamenu-content" aria-labelledby="megamenu-dropdown-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 pr-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="">Some title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="">Another title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex">
                                        <div class="align-self-center pr-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
                                        </div>
                                        <div class="align-self-center">
                                            <a href="#" class="btn btn-outline-primary">Click me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://source.unsplash.com/640x480/?yoga" class="img-fluid mb-3" alt="test image">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item is-parent">
                    <a class="nav-link" href="#" id="megamenu-dropdown-3" aria-haspopup="true" aria-expanded="false">
                        Link 3 <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="megamenu-content" aria-labelledby="megamenu-dropdown-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 pr-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="">Another title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="">Some title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex">
                                        <div class="align-self-center pr-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
                                        </div>
                                        <div class="align-self-center">
                                            <a href="#" class="btn btn-outline-primary">Click me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://source.unsplash.com/640x480/?rose" class="img-fluid mb-3" alt="test image">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item is-parent">
                    <a class="nav-link" href="#" id="megamenu-dropdown-4" aria-haspopup="true" aria-expanded="false">
                        Link 4 <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="megamenu-content" aria-labelledby="megamenu-dropdown-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 pr-5">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="">Some title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 4</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-6">
                                            <h3 class="">Another title</h3>
                                            <hr>
                                            <ul class="subnav">
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 1</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Menuitem 3</a>
                                                </li>
                                                <li class="subnav-item">
                                                    <a href="#" class="subnav-link">Another menuitem 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex">
                                        <div class="align-self-center pr-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae corrupti reprehenderit provident ipsam quibusdam, iste ad amet exercitationem sunt. Impedit libero aperiam ratione reiciendis dolorem itaque aut quas eos labore.
                                        </div>
                                        <div class="align-self-center">
                                            <a href="#" class="btn btn-outline-primary">Click me</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <img src="https://source.unsplash.com/640x480/?bike" class="img-fluid mb-3" alt="test image">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, expedita sint quis rem amet, a nihil, non sunt ea quasi.</p>
                                    <a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Link without megamenu
                    </a>
                </li>
            </ul>
            <div class="megamenu-background" id="megamenu-background"></div>
        </nav>

        <div class="megamenu-dim" id="megamenu-dim"></div>
        <section class="bg-info">
          <div class="container">
                <h1 class="display-5">Megamenu</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt cumque hic ipsam et. Perferendis voluptatum incidunt maxime eos et officiis exercitationem! Expedita ipsa tenetur porro dolores possimus cum ab sapiente.</p>
            </div>
        </section>
        

        <section class="bg-success">
            <div class="container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt cumque hic ipsam et. Perferendis voluptatum incidunt maxime eos et officiis exercitationem! Expedita ipsa tenetur porro dolores possimus cum ab sapiente.</p>
            </div>
        </section>

        <section class="bg-primary">
            <div class="container">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt cumque hic ipsam et. Perferendis voluptatum incidunt maxime eos et officiis exercitationem! Expedita ipsa tenetur porro dolores possimus cum ab sapiente.</p>
            </div>
        </section>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>



        <script  src="script.js"></script>




        <!-- Ad Start --><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5013758817554802"
        crossorigin="anonymous"></script>
        <!-- Codehim responsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5013758817554802"
             data-ad-slot="5890659268"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <!-- Ad End --><!-- Analytics Start --><!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-80520768-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "UA-80520768-2");
        </script><!-- Analytics End --></body>

</html>
