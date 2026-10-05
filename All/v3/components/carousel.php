
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A slideshow component for cycling through elements—images or slides of text—like a carousel.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Carousel · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/carousel/">

        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" >

        <link href="../assets/css/docs.css" rel="stylesheet">
        <!-- Favicons -->
        <link rel="apple-touch-icon" href="../assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="../assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="../assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="../assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="../assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="../assets/img/favicons/favicon.ico">
        <meta name="theme-color" content="#7952b3">

        <script defer src="https://cdn.usefathom.com/script.js" data-site="ITUSEYJG"></script>
        <script>
            window.ga = window.ga || function () {
                (ga.q = ga.q || []).push(arguments)
            };
            ga.l = +new Date;
            ga('create', 'UA-146052-10', 'getbootstrap.com');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');
        </script>
        <script async src="https://www.google-analytics.com/analytics.js"></script>


    </head>
    <body>
        <div class="skippy visually-hidden-focusable overflow-hidden">
            <div class="container-xl">
                <a class="d-inline-flex p-2 m-1" href="#content">Skip to main content</a>
                <a class="d-none d-md-inline-flex p-2 m-1" href="#bd-docs-nav">Skip to docs navigation</a>
            </div>
        </div>

        <div class="d-block px-3 py-2 text-center text-bold skippy">
            <a href="https://getbootstrap.com/" class="text-white text-decoration-none">There's a newer version of Bootstrap!</a>
        </div>

        <header class="navbar navbar-expand-md navbar-dark bd-navbar">
            <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
                <div class="collapse navbar-collapse" id="bdNavbar">
                    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                        <li class="nav-item col-6 col-md-auto">
                            <a class="nav-link p-2" href="/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Bootstrap');">Home</a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a class="nav-link p-2 active" aria-current="true" href="../index.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Docs');">Docs</a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a class="nav-link p-2" href="../examples/index.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Examples');">Examples</a>
                        </li>
                        <li class="nav-item col-6 col-md-auto">
                            <a class="nav-link p-2" href="https://icons.getbootstrap.com/" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Icons');" target="_blank" rel="noopener">Icons</a>
                        </li>
                    </ul>

                    <hr class="d-md-none text-white-50">
                </div>
            </nav>
        </header>
        <nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
            <div class="container-xxl d-flex align-items-md-center">
                <form class="bd-search position-relative me-auto">
                    <input type="search" class="form-control" id="search-input" placeholder="Search docs..." aria-label="Search docs for..." autocomplete="off" data-bd-docs-version="5.0">
                </form>
                <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false" aria-label="Toggle docs navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor" viewBox="0 0 16 16">
                    <title>Expand</title>
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor" viewBox="0 0 16 16">
                    <title>Collapse</title>
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/>
                    </svg>

                </button>
            </div>
        </nav>


        <div class="container-xxl my-md-4 bd-layout">
            <aside class="bd-sidebar">
                <nav class="collapse bd-links" id="bd-docs-nav" aria-label="Docs navigation"><ul class="list-unstyled mb-0 py-3 pt-md-1">
                       <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="false">
                                Getting started
                            </button>
                            <div class="collapse" id="getting-started-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../index.php" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                                    <li><a href="../getting-started/contents.php" class="d-inline-flex align-items-center rounded">Contents</a></li>
                                    <li><a href="../getting-started/browsers-devices.php"" class="d-inline-flex align-items-center rounded">Browsers &amp; devices</a></li>
                                    <li><a href="../getting-started/javascript.php" class="d-inline-flex align-items-center rounded">JavaScript</a></li>
                                    <li><a href="../getting-started/build-tools.php" class="d-inline-flex align-items-center rounded">Build tools</a></li>
                                    <li><a href="../getting-started/webpack.php" class="d-inline-flex align-items-center rounded">Webpack</a></li>
                                    <li><a href="../getting-started/parcel.php" class="d-inline-flex align-items-center rounded">Parcel</a></li>
                                    <li><a href="../getting-started/rfs.php" class="d-inline-flex align-items-center rounded">RFS</a></li>
                                    <li><a href="../getting-started/rtl.php" class="d-inline-flex align-items-center rounded">RTL</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="false">
                                Customize
                            </button>
                            <div class="collapse" id="customize-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../customize/overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="../customize/sass.php" class="d-inline-flex align-items-center rounded">Sass</a></li>
                                    <li><a href="../customize/options.php" class="d-inline-flex align-items-center rounded">Options</a></li>
                                    <li><a href="../customize/color.php" class="d-inline-flex align-items-center rounded">Color</a></li>
                                    <li><a href="../customize/components.php" class="d-inline-flex align-items-center rounded">Components</a></li>
                                    <li><a href="../customize/css-variables.php" class="d-inline-flex align-items-center rounded">CSS variables</a></li>
                                    <li><a href="../customize/optimize.php" class="d-inline-flex align-items-center rounded">Optimize</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
                                Layout
                            </button>
                            <div class="collapse" id="layout-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../layout/breakpoints.php" class="d-inline-flex align-items-center rounded">Breakpoints</a></li>
                                    <li><a href="../layout/containers.php" class="d-inline-flex align-items-center rounded">Containers</a></li>
                                    <li><a href="../layout/grid.php" class="d-inline-flex align-items-center rounded">Grid</a></li>
                                    <li><a href="../layout/columns.php" class="d-inline-flex align-items-center rounded">Columns</a></li>
                                    <li><a href="../layout/gutters.php" class="d-inline-flex align-items-center rounded">Gutters</a></li>
                                    <li><a href="../layout/utilities.php" class="d-inline-flex align-items-center rounded">Utilities</a></li>
                                    <li><a href="../layout/z-index.php" class="d-inline-flex align-items-center rounded">Z-index</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
                                Content
                            </button>

                            <div class="collapse" id="content-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../content/reboot.php" class="d-inline-flex align-items-center rounded">Reboot</a></li>
                                    <li><a href="../content/typography.php" class="d-inline-flex align-items-center rounded">Typography</a></li>
                                    <li><a href="../content/images.php" class="d-inline-flex align-items-center rounded">Images</a></li>
                                    <li><a href="../content/tables.php" class="d-inline-flex align-items-center rounded">Tables</a></li>
                                    <li><a href="../content/figures.php" class="d-inline-flex align-items-center rounded">Figures</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
                                Forms
                            </button>

                            <div class="collapse" id="forms-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../forms/overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="../forms/form-control.php" class="d-inline-flex align-items-center rounded">Form control</a></li>
                                    <li><a href="../forms/select.php" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="../forms/checks-radios.php" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="../forms/range.php" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="../forms/input-group.php" class="d-inline-flex align-items-center rounded">Input group</a></li>
                                    <li><a href="../forms/floating-labels.php" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="../forms/layout.php" class="d-inline-flex align-items-center rounded">Layout</a></li>
                                    <li><a href="../forms/validation.php" class="d-inline-flex align-items-center rounded">Validation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="true" aria-current="true">
                                Components
                            </button>

                            <div class="collapse show" id="components-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="accordion.php" class="d-inline-flex align-items-center rounded">Accordion</a></li>
                                    <li><a href="alerts.php" class="d-inline-flex align-items-center rounded">Alerts</a></li>
                                    <li><a href="badge.php" class="d-inline-flex align-items-center rounded">Badge</a></li>
                                    <li><a href="breadcrumb.php" class="d-inline-flex align-items-center rounded">Breadcrumb</a></li>
                                    <li><a href="buttons.php" class="d-inline-flex align-items-center rounded">Buttons</a></li>
                                    <li><a href="button-group.php" class="d-inline-flex align-items-center rounded">Button group</a></li>
                                    <li><a href="card.php" class="d-inline-flex align-items-center rounded">Card</a></li>
                                    <li><a href="carousel.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Carousel</a></li>
                                    <li><a href="close-button.php" class="d-inline-flex align-items-center rounded">Close button</a></li>
                                    <li><a href="collapse.php" class="d-inline-flex align-items-center rounded">Collapse</a></li>
                                    <li><a href="dropdowns.php" class="d-inline-flex align-items-center rounded">Dropdowns</a></li>
                                    <li><a href="list-group.php" class="d-inline-flex align-items-center rounded">List group</a></li>
                                    <li><a href="modal.php" class="d-inline-flex align-items-center rounded">Modal</a></li>
                                    <li><a href="navs-tabs.php" class="d-inline-flex align-items-center rounded">Navs &amp; tabs</a></li>
                                    <li><a href="navbar.php" class="d-inline-flex align-items-center rounded">Navbar</a></li>
                                    <li><a href="offcanvas.php" class="d-inline-flex align-items-center rounded">Offcanvas</a></li>
                                    <li><a href="pagination.php" class="d-inline-flex align-items-center rounded">Pagination</a></li>
                                    <li><a href="popovers.php" class="d-inline-flex align-items-center rounded">Popovers</a></li>
                                    <li><a href="progress.php" class="d-inline-flex align-items-center rounded">Progress</a></li>
                                    <li><a href="scrollspy.php" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
                                    <li><a href="spinners.php" class="d-inline-flex align-items-center rounded">Spinners</a></li>
                                    <li><a href="toast.php" class="d-inline-flex align-items-center rounded">Toasts</a></li>
                                    <li><a href="tooltip.php" class="d-inline-flex align-items-center rounded">Tooltips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
                                Helpers
                            </button>

                            <div class="collapse" id="helpers-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../helpers/clearfix.php" class="d-inline-flex align-items-center rounded">Clearfix</a></li>
                                    <li><a href="../helpers/colored-links.php" class="d-inline-flex align-items-center rounded">Colored links</a></li>
                                    <li><a href="../helpers/ratio.php" class="d-inline-flex align-items-center rounded">Ratio</a></li>
                                    <li><a href="../helpers/position.php" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="../helpers/visually-hidden.php" class="d-inline-flex align-items-center rounded">Visually hidden</a></li>
                                    <li><a href="../helpers/stretched-link.php" class="d-inline-flex align-items-center rounded">Stretched link</a></li>
                                    <li><a href="../helpers/text-truncation.php" class="d-inline-flex align-items-center rounded">Text truncation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
                                Utilities
                            </button>

                            <div class="collapse" id="utilities-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../utilities/api.php" class="d-inline-flex align-items-center rounded">API</a></li>
                                    <li><a href="../utilities/background.php" class="d-inline-flex align-items-center rounded">Background</a></li>
                                    <li><a href="../utilities/borders.php" class="d-inline-flex align-items-center rounded">Borders</a></li>
                                    <li><a href="../utilities/colors.php" class="d-inline-flex align-items-center rounded">Colors</a></li>
                                    <li><a href="../utilities/display.php" class="d-inline-flex align-items-center rounded">Display</a></li>
                                    <li><a href="../utilities/flex.php" class="d-inline-flex align-items-center rounded">Flex</a></li>
                                    <li><a href="../utilities/float.php" class="d-inline-flex align-items-center rounded">Float</a></li>
                                    <li><a href="../utilities/interactions.php" class="d-inline-flex align-items-center rounded">Interactions</a></li>
                                    <li><a href="../utilities/overflow.php" class="d-inline-flex align-items-center rounded">Overflow</a></li>
                                    <li><a href="../utilities/position.php" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="../utilities/shadows.php" class="d-inline-flex align-items-center rounded">Shadows</a></li>
                                    <li><a href="../utilities/sizing.php" class="d-inline-flex align-items-center rounded">Sizing</a></li>
                                    <li><a href="../utilities/spacing.php" class="d-inline-flex align-items-center rounded">Spacing</a></li>
                                    <li><a href="../utilities/text.php" class="d-inline-flex align-items-center rounded">Text</a></li>
                                    <li><a href="../utilities/vertical-align.php" class="d-inline-flex align-items-center rounded">Vertical align</a></li>
                                    <li><a href="../utilities/visibility.php" class="d-inline-flex align-items-center rounded">Visibility</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false" >
                                Extend
                            </button>

                            <div class="collapse" id="extend-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../extend/approach.php" class="d-inline-flex align-items-center rounded" >Approach</a></li>
                                    <li><a href="../extend/icons.php" class="d-inline-flex align-items-center rounded">Icons</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="my-3 mx-4 border-top"></li>
                        <li>
                            <a href="../migration.php" class="d-inline-flex align-items-center rounded">
                                Migration
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>

            <main class="bd-main order-1">
                <div class="bd-intro ps-lg-4">
                    <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/carousel.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Carousel</h1>
                    </div>
                    <p class="bd-lead">A slideshow component for cycling through elements—images or slides of text—like a carousel.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#example">Example</a>
                                <ul>
                                    <li><a href="#slides-only">Slides only</a></li>
                                    <li><a href="#with-controls">With controls</a></li>
                                    <li><a href="#with-indicators">With indicators</a></li>
                                    <li><a href="#with-captions">With captions</a></li>
                                    <li><a href="#crossfade">Crossfade</a></li>
                                    <li><a href="#individual-carousel-item-interval">Individual <code>.carousel-item</code> interval</a></li>
                                    <li><a href="#disable-touch-swiping">Disable touch swiping</a></li>
                                </ul>
                            </li>
                            <li><a href="#dark-variant">Dark variant</a></li>
                            <li><a href="#custom-transition">Custom transition</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#via-data-attributes">Via data attributes</a></li>
                                    <li><a href="#via-javascript">Via JavaScript</a></li>
                                    <li><a href="#options">Options</a></li>
                                    <li><a href="#methods">Methods</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="how-it-works">How it works</h2>
                    <p>The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.</p>
                    <p>In browsers where the <a href="https://www.w3.org/TR/page-visibility/">Page Visibility API</a> is supported, the carousel will avoid sliding when the webpage is not visible to the user (such as when the browser tab is inactive, the browser window is minimized, etc.).</p>
                    <div class="bd-callout bd-callout-info">
                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                    </div>

                    <p>Please be aware that nested carousels are not supported, and carousels are generally not compliant with accessibility standards.</p>
                    <h2 id="example">Example</h2>
                    <p>Carousels don&rsquo;t automatically normalize slide dimensions. As such, you may need to use additional utilities or custom styles to appropriately size content. While carousels support previous/next controls and indicators, they&rsquo;re not explicitly required. Add and customize as you see fit.</p>
                    <p><strong>The <code>.active</code> class needs to be added to one of the slides</strong> otherwise the carousel will not be visible. Also be sure to set a unique <code>id</code> on the <code>.carousel</code> for optional controls, especially if you&rsquo;re using multiple carousels on a single page. Control and indicator elements must have a <code>data-bs-target</code> attribute (or <code>href</code> for links) that matches the <code>id</code> of the <code>.carousel</code> element.</p>
                    <h3 id="slides-only">Slides only</h3>
                    <p>Here&rsquo;s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.w-100</code> on carousel images to prevent browser default image alignment.</p>
                    <div class="bd-example">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleSlidesOnly&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="with-controls">With controls</h3>
                    <p>Adding in the previous and next controls. We recommend using <code>&lt;button&gt;</code> elements, but you can also use <code>&lt;a&gt;</code> elements with <code>role=&quot;button&quot;</code>.</p>
                    <div class="bd-example">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleControls&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleControls&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleControls&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="with-indicators">With indicators</h3>
                    <p>You can also add the indicators to the carousel, alongside the controls, too.</p>
                    <div class="bd-example">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleIndicators&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-indicators&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleIndicators&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;active&#34;</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 1&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleIndicators&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;1&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 2&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleIndicators&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;2&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 3&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleIndicators&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleIndicators&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="with-captions">With captions</h3>
                    <p>Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item</code>. They can be easily hidden on smaller viewports, as shown below, with optional <a href="../utilities/display.php">display utilities</a>. We hide them initially with <code>.d-none</code> and bring them back on medium-sized devices with <code>.d-md-block</code>.</p>
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleCaptions&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-indicators&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleCaptions&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;active&#34;</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 1&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleCaptions&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;1&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 2&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleCaptions&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;2&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 3&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>First slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the first slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>Second slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the second slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>Third slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the third slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleCaptions&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleCaptions&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="crossfade">Crossfade</h3>
                    <p>Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a slide.</p>
                    <div class="bd-example">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleFade&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide carousel-fade&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleFade&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleFade&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="individual-carousel-item-interval">Individual <code>.carousel-item</code> interval</h3>
                    <p>Add <code>data-bs-interval=&quot;&quot;</code> to a <code>.carousel-item</code> to change the amount of time to delay between automatically cycling to the next item.</p>
                    <div class="bd-example">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleInterval&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span> <span class="na">data-bs-interval</span><span class="o">=</span><span class="s">&#34;10000&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span> <span class="na">data-bs-interval</span><span class="o">=</span><span class="s">&#34;2000&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleInterval&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleInterval&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="disable-touch-swiping">Disable touch swiping</h3>
                    <p>Carousels support swiping left/right on touchscreen devices to move between slides. This can be disabled using the <code>data-bs-touch</code> attribute. The example below also does not include the <code>data-bs-ride</code> attribute and has <code>data-bs-interval=&quot;false&quot;</code> so it doesn&rsquo;t autoplay.</p>
                    <div class="bd-example">
                        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"/><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>

                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"/><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleControlsNoTouching&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel slide&#34;</span> <span class="na">data-bs-touch</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">data-bs-interval</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleControlsNoTouching&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleControlsNoTouching&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="dark-variant">Dark variant</h2>
                    <p>Add <code>.carousel-dark</code> to the <code>.carousel</code> for darker controls, indicators, and captions. Controls have been inverted from their default white fill with the <code>filter</code> CSS property. Captions and controls have additional Sass variables that customize the <code>color</code> and <code>background-color</code>.</p>
                    <div class="bd-example">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#f5f5f5"/><text x="50%" y="50%" fill="#aaa" dy=".3em">First slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#bbb" dy=".3em">Second slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e5e5e5"/><text x="50%" y="50%" fill="#999" dy=".3em">Third slide</text></svg>

                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;carouselExampleDark&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel carousel-dark slide&#34;</span> <span class="na">data-bs-ride</span><span class="o">=</span><span class="s">&#34;carousel&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-indicators&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleDark&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;active&#34;</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 1&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleDark&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;1&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 2&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleDark&#34;</span> <span class="na">data-bs-slide-to</span><span class="o">=</span><span class="s">&#34;2&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Slide 3&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-inner&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item active&#34;</span> <span class="na">data-bs-interval</span><span class="o">=</span><span class="s">&#34;10000&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>First slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the first slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span> <span class="na">data-bs-interval</span><span class="o">=</span><span class="s">&#34;2000&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>Second slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the second slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-caption d-none d-md-block&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>Third slide label<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Some representative placeholder content for the third slide.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleDark&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;prev&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-prev-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Previous<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#carouselExampleDark&#34;</span> <span class="na">data-bs-slide</span><span class="o">=</span><span class="s">&#34;next&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;carousel-control-next-icon&#34;</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Next<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="custom-transition">Custom transition</h2>
                    <p>The transition duration of <code>.carousel-item</code> can be changed with the <code>$carousel-transition-duration</code> Sass variable before compiling or custom styles if you&rsquo;re using the compiled CSS. If multiple transitions are applied, make sure the transform transition is defined first (eg. <code>transition: transform 2s ease, opacity .5s ease-out</code>).</p>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$carousel-control-color</span><span class="o">:</span>             <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$carousel-control-width</span><span class="o">:</span>             <span class="mi">15</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$carousel-control-opacity</span><span class="o">:</span>           <span class="mf">.5</span><span class="p">;</span>
<span class="nv">$carousel-control-hover-opacity</span><span class="o">:</span>     <span class="mf">.9</span><span class="p">;</span>
<span class="nv">$carousel-control-transition</span><span class="o">:</span>        <span class="ni">opacity</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease</span><span class="p">;</span>

<span class="nv">$carousel-indicator-width</span><span class="o">:</span>           <span class="mi">30</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$carousel-indicator-height</span><span class="o">:</span>          <span class="mi">3</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$carousel-indicator-hit-area-height</span><span class="o">:</span> <span class="mi">10</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$carousel-indicator-spacer</span><span class="o">:</span>          <span class="mi">3</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$carousel-indicator-opacity</span><span class="o">:</span>         <span class="mf">.5</span><span class="p">;</span>
<span class="nv">$carousel-indicator-active-bg</span><span class="o">:</span>       <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$carousel-indicator-active-opacity</span><span class="o">:</span>  <span class="mi">1</span><span class="p">;</span>
<span class="nv">$carousel-indicator-transition</span><span class="o">:</span>      <span class="ni">opacity</span> <span class="mf">.6</span><span class="kt">s</span> <span class="ni">ease</span><span class="p">;</span>

<span class="nv">$carousel-caption-width</span><span class="o">:</span>             <span class="mi">70</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$carousel-caption-color</span><span class="o">:</span>             <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$carousel-caption-padding-y</span><span class="o">:</span>         <span class="mi">1</span><span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$carousel-caption-spacer</span><span class="o">:</span>            <span class="mi">1</span><span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>

<span class="nv">$carousel-control-icon-width</span><span class="o">:</span>        <span class="mi">2</span><span class="kt">rem</span><span class="p">;</span>

<span class="nv">$carousel-control-prev-icon-bg</span><span class="o">:</span>      <span class="sx">url(&#34;data:image/svg+xml,&lt;svg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 16 16&#39; fill=&#39;</span><span class="si">#{</span><span class="nv">$carousel-control-color</span><span class="si">}</span><span class="sx">&#39;&gt;&lt;path d=&#39;M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z&#39;/&gt;&lt;/svg&gt;&#34;)</span><span class="p">;</span>
<span class="nv">$carousel-control-next-icon-bg</span><span class="o">:</span>      <span class="sx">url(&#34;data:image/svg+xml,&lt;svg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 16 16&#39; fill=&#39;</span><span class="si">#{</span><span class="nv">$carousel-control-color</span><span class="si">}</span><span class="sx">&#39;&gt;&lt;path d=&#39;M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z&#39;/&gt;&lt;/svg&gt;&#34;)</span><span class="p">;</span>

<span class="nv">$carousel-transition-duration</span><span class="o">:</span>       <span class="mf">.6</span><span class="kt">s</span><span class="p">;</span>
<span class="nv">$carousel-transition</span><span class="o">:</span>                <span class="ni">transform</span> <span class="nv">$carousel-transition-duration</span> <span class="ni">ease-in-out</span><span class="p">;</span> <span class="c1">// Define transform transition first if using multiple transitions (e.g., `transform 2s ease, opacity .5s ease-out`)
</span><span class="c1"></span>
<span class="nv">$carousel-dark-indicator-active-bg</span><span class="o">:</span>  <span class="nv">$black</span><span class="p">;</span>
<span class="nv">$carousel-dark-caption-color</span><span class="o">:</span>        <span class="nv">$black</span><span class="p">;</span>
<span class="nv">$carousel-dark-control-icon-filter</span><span class="o">:</span>  <span class="nf">invert</span><span class="p">(</span><span class="mi">1</span><span class="p">)</span> <span class="nf">grayscale</span><span class="p">(</span><span class="mi">100</span><span class="p">);</span>
</code></pre></div>
                    <h2 id="usage">Usage</h2>
                    <h3 id="via-data-attributes">Via data attributes</h3>
                    <p>Use data attributes to easily control the position of the carousel. <code>data-bs-slide</code> accepts the keywords <code>prev</code> or <code>next</code>, which alters the slide position relative to its current position. Alternatively, use <code>data-bs-slide-to</code> to pass a raw slide index to the carousel <code>data-bs-slide-to=&quot;2&quot;</code>, which shifts the slide position to a particular index beginning with <code>0</code>.</p>
                    <p>The <code>data-bs-ride=&quot;carousel&quot;</code> attribute is used to mark a carousel as animating starting at page load. If you don&rsquo;t use <code>data-bs-ride=&quot;carousel&quot;</code> to initialize your carousel, you have to initialize it yourself. <strong>It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.</strong></p>
                    <h3 id="via-javascript">Via JavaScript</h3>
                    <p>Call carousel manually with:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;#myCarousel&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">carousel</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Carousel</span><span class="p">(</span><span class="nx">myCarousel</span><span class="p">)</span>
</code></pre></div><h3 id="options">Options</h3>
                    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-bs-</code>, as in <code>data-bs-interval=&quot;&quot;</code>.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Name</th>
                                <th style="width: 50px;">Type</th>
                                <th style="width: 50px;">Default</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>interval</code></td>
                                <td>number</td>
                                <td><code>5000</code></td>
                                <td>The amount of time to delay between automatically cycling an item. If <code>false</code>, carousel will not automatically cycle.</td>
                            </tr>
                            <tr>
                                <td><code>keyboard</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Whether the carousel should react to keyboard events.</td>
                            </tr>
                            <tr>
                                <td><code>pause</code></td>
                                <td>string | boolean</td>
                                <td><code>'hover'</code></td>
                                <td><p>If set to <code>'hover'</code>, pauses the cycling of the carousel on <code>mouseenter</code> and resumes the cycling of the carousel on <code>mouseleave</code>. If set to <code>false</code>, hovering over the carousel won't pause it.</p>
                                    <p>On touch-enabled devices, when set to <code>'hover'</code>, cycling will pause on <code>touchend</code> (once the user finished interacting with the carousel) for two intervals, before automatically resuming. Note that this is in addition to the above mouse behavior.</p></td>
                            </tr>
                            <tr>
                                <td><code>ride</code></td>
                                <td>string | boolean</td>
                                <td><code>false</code></td>
                                <td>Autoplays the carousel after the user manually cycles the first item. If set to <code>'carousel'</code>, autoplays the carousel on load.</td>
                            </tr>
                            <tr>
                                <td><code>wrap</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Whether the carousel should cycle continuously or have hard stops.</td>
                            </tr>
                            <tr>
                                <td><code>touch</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Whether the carousel should support left/right swipe interactions on touchscreen devices.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="methods">Methods</h3>
                    <div class="bd-callout bd-callout-danger">
                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                        <p><a href="../getting-started/javascript.php#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>

                    </div>

                    <p>You can create a carousel instance with the carousel constructor, for example, to initialize with additional options and start cycling through items:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;#myCarousel&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">carousel</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Carousel</span><span class="p">(</span><span class="nx">myCarousel</span><span class="p">,</span> <span class="p">{</span>
  <span class="nx">interval</span><span class="o">:</span> <span class="mi">2000</span><span class="p">,</span>
  <span class="nx">wrap</span><span class="o">:</span> <span class="kc">false</span>
<span class="p">})</span>
</code></pre></div><table class="table">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>cycle</code></td>
                                <td>Cycles through the carousel items from left to right.</td>
                            </tr>
                            <tr>
                                <td><code>pause</code></td>
                                <td>Stops the carousel from cycling through items.</td>
                            </tr>
                            <tr>
                                <td><code>prev</code></td>
                                <td>Cycles to the previous item. <strong>Returns to the caller before the previous item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                            </tr>
                            <tr>
                                <td><code>next</code></td>
                                <td>Cycles to the next item. <strong>Returns to the caller before the next item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                            </tr>
                            <tr>
                                <td><code>nextWhenVisible</code></td>
                                <td>Don't cycle carousel to next when the page isn't visible or the carousel or its parent isn't visible. <strong>Returns to the caller before the target item has been shown</strong>
                            </tr>
                            <tr>
                                <td><code>to</code></td>
                                <td>Cycles the carousel to a particular frame (0 based, similar to an array). <strong>Returns to the caller before the target item has been shown</strong> (e.g., before the <code>slid.bs.carousel</code> event occurs).</td>
                            </tr>
                            <tr>
                                <td><code>dispose</code></td>
                                <td>Destroys an element's carousel. (Removes stored data on the DOM element)</td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getInstance</code>
                                </td>
                                <td>
                                    Static method which allows you to get the carousel instance associated to a DOM element, you can use it like this: <code>bootstrap.Carousel.getInstance(element)</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getOrCreateInstance</code>
                                </td>
                                <td>
                                    Static method which returns a carousel instance associated to a DOM element or create a new one in case it wasn't initialised.
                                    You can use it like this: <code>bootstrap.Carousel.getOrCreateInstance(element)</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="events">Events</h3>
                    <p>Bootstrap&rsquo;s carousel class exposes two events for hooking into carousel functionality. Both events have the following additional properties:</p>
                    <ul>
                        <li><code>direction</code>: The direction in which the carousel is sliding (either <code>&quot;left&quot;</code> or <code>&quot;right&quot;</code>).</li>
                        <li><code>relatedTarget</code>: The DOM element that is being slid into place as the active item.</li>
                        <li><code>from</code>: The index of the current item</li>
                        <li><code>to</code>: The index of the next item</li>
                    </ul>
                    <p>All carousel events are fired at the carousel itself (i.e. at the <code>&lt;div class=&quot;carousel&quot;&gt;</code>).</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Event type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>slide.bs.carousel</code></td>
                                <td>Fires immediately when the <code>slide</code> instance method is invoked.</td>
                            </tr>
                            <tr>
                                <td><code>slid.bs.carousel</code></td>
                                <td>Fired when the carousel has completed its slide transition.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCarousel</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myCarousel&#39;</span><span class="p">)</span>

<span class="nx">myCarousel</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;slide.bs.carousel&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do something...
</span><span class="c1"></span><span class="p">})</span>
</code></pre></div>
                </div>
            </main>
        </div>


        <footer class="bd-footer py-5 mt-5 bg-light">
            
        </footer>

        <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

        <script src="../assets/js/docs.min.js"></script>




    </body>
</html>
