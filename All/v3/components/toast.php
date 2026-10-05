
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Toasts · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/toasts/">

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
                                    <li><a href="carousel.php" class="d-inline-flex align-items-center rounded">Carousel</a></li>
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
                                    <li><a href="toast.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Toasts</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/toasts.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Toasts</h1>
                    </div>
                    <p class="bd-lead">Push notifications to your visitors with a toast, a lightweight and easily customizable alert message.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#examples">Examples</a>
                                <ul>
                                    <li><a href="#basic">Basic</a></li>
                                    <li><a href="#live">Live</a></li>
                                    <li><a href="#translucent">Translucent</a></li>
                                    <li><a href="#stacking">Stacking</a></li>
                                    <li><a href="#custom-content">Custom content</a></li>
                                    <li><a href="#color-schemes">Color schemes</a></li>
                                </ul>
                            </li>
                            <li><a href="#placement">Placement</a></li>
                            <li><a href="#accessibility">Accessibility</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#options">Options</a></li>
                                    <li><a href="#methods">Methods</a>
                                        <ul>
                                            <li><a href="#show">show</a></li>
                                            <li><a href="#hide">hide</a></li>
                                            <li><a href="#dispose">dispose</a></li>
                                            <li><a href="#getinstance">getInstance</a></li>
                                            <li><a href="#getorcreateinstance">getOrCreateInstance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <p>Toasts are lightweight notifications designed to mimic the push notifications that have been popularized by mobile and desktop operating systems. They&rsquo;re built with flexbox, so they&rsquo;re easy to align and position.</p>
                    <h2 id="overview">Overview</h2>
                    <p>Things to know when using the toast plugin:</p>
                    <ul>
                        <li>Toasts are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.</li>
                        <li>Toasts will automatically hide if you do not specify <code>autohide: false</code>.</li>
                    </ul>
                    <div class="bd-callout bd-callout-info">
                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                    </div>

                    <h2 id="examples">Examples</h2>
                    <h3 id="basic">Basic</h3>
                    <p>To encourage extensible and predictable toasts, we recommend a header and body. Toast headers use <code>display: flex</code>, allowing easy alignment of content thanks to our margin and flexbox utilities.</p>
                    <p>Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single element to contain your &ldquo;toasted&rdquo; content and strongly encourage a dismiss button.</p>
                    <div class="bd-example bg-light">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">small</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
    Hello, world! This is a toast message.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="live">Live</h3>
                    <p>Click the button below to show a toast (positioned with our utilities in the lower right corner) that has been hidden by default with <code>.hide</code>.</p>
                    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
                        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;liveToastBtn&#34;</span><span class="p">&gt;</span>Show live toast<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-fixed bottom-0 end-0 p-3&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;z-index: 11&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;liveToast&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast hide&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">small</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
      Hello, world! This is a toast message.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h3 id="translucent">Translucent</h3>
                    <p>Toasts are slightly translucent to blend in with what&rsquo;s below them.</p>
                    <div class="bd-example bg-dark">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                <strong class="me-auto">Bootstrap</strong>
                                <small class="text-muted">11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
    Hello, world! This is a toast message.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="stacking">Stacking</h3>
                    <p>You can stack toasts by wrapping them in a toast container, which will vertically add some spacing.</p>
                    <div class="bd-example bg-light">
                        <div class="toast-container">
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    See? Just like this.
                                </div>
                            </div>

                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                    <strong class="me-auto">Bootstrap</strong>
                                    <small class="text-muted">2 seconds ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Heads up, toasts will stack automatically
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>just now<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
      See? Just like this.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>2 seconds ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
      Heads up, toasts will stack automatically
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="custom-content">Custom content</h3>
                    <p>Customize your toasts by removing sub-components, tweaking them with <a href="../utilities/api.php">utilities</a>, or by adding your own markup. Here we&rsquo;ve created a simpler toast by removing the default <code>.toast-header</code>, adding a custom hide icon from <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a>, and using some <a href="../utilities/flex.php">flexbox utilities</a> to adjust the layout.</p>
                    <div class="bd-example bg-light">
                        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
    Hello, world! This is a toast message.
   <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close me-2 m-auto&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Alternatively, you can also add additional controls and components to toasts.</p>
                    <div class="bd-example bg-light">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                                <div class="mt-2 pt-2 border-top">
                                    <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
    Hello, world! This is a toast message.
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mt-2 pt-2 border-top&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary btn-sm&#34;</span><span class="p">&gt;</span>Take action<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary btn-sm&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span><span class="p">&gt;</span>Close<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="color-schemes">Color schemes</h3>
                    <p>Building on the above example, you can create different toast color schemes with our <a href="../utilities/colors.php">color</a> and <a href="../utilities/background.php">background</a> utilities. Here we&rsquo;ve added <code>.bg-primary</code> and <code>.text-white</code> to the <code>.toast</code>, and then added <code>.btn-close-white</code> to our close button. For a crisp edge, we remove the default border with <code>.border-0</code>.</p>
                    <div class="bd-example bg-light">
                        <div class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast align-items-center text-white bg-primary border-0&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
      Hello, world! This is a toast message.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close btn-close-white me-2 m-auto&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="placement">Placement</h2>
                    <p>Place toasts with custom CSS as you need them. The top right is often used for notifications, as is the top middle. If you&rsquo;re only ever going to show one toast at a time, put the positioning styles right on the <code>.toast</code>.</p>
                    <div class="bd-example">
                        <form>
                            <div class="mb-3">
                                <label for="selectToastPlacement">Toast placement</label>
                                <select class="form-select mt-2" id="selectToastPlacement">
                                    <option value="" selected>Select a position...</option>
                                    <option value="top-0 start-0">Top left</option>
                                    <option value="top-0 start-50 translate-middle-x">Top center</option>
                                    <option value="top-0 end-0">Top right</option>
                                    <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                    <option value="top-50 start-50 translate-middle">Middle center</option>
                                    <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                    <option value="bottom-0 start-0">Bottom left</option>
                                    <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                    <option value="bottom-0 end-0">Bottom right</option>
                                </select>
                            </div>
                        </form>
                        <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
                            <div class="toast-container position-absolute p-3" id="toastPlacement">
                                <div class="toast">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small>11 mins ago</small>
                                    </div>
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;selectToastPlacement&#34;</span><span class="p">&gt;</span>Toast placement<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select mt-2&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;selectToastPlacement&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">selected</span><span class="p">&gt;</span>Select a position...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-0 start-0&#34;</span><span class="p">&gt;</span>Top left<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-0 start-50 translate-middle-x&#34;</span><span class="p">&gt;</span>Top center<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-0 end-0&#34;</span><span class="p">&gt;</span>Top right<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-50 start-0 translate-middle-y&#34;</span><span class="p">&gt;</span>Middle left<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-50 start-50 translate-middle&#34;</span><span class="p">&gt;</span>Middle center<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;top-50 end-0 translate-middle-y&#34;</span><span class="p">&gt;</span>Middle right<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;bottom-0 start-0&#34;</span><span class="p">&gt;</span>Bottom left<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;bottom-0 start-50 translate-middle-x&#34;</span><span class="p">&gt;</span>Bottom center<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;bottom-0 end-0&#34;</span><span class="p">&gt;</span>Bottom right<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;polite&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bg-dark position-relative bd-example-toasts&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-container position-absolute p-3&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;toastPlacement&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">small</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
        Hello, world! This is a toast message.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>For systems that generate more notifications, consider using a wrapping element so they can easily stack.</p>
                    <div class="bd-example bg-dark bd-example-toasts p-0">
                        <div aria-live="polite" aria-atomic="true" class="position-relative">
                            <!-- Position it: -->
                            <!-- - `.toast-container` for spacing between toasts -->
                            <!-- - `.position-absolute`, `top-0` & `end-0` to position the toasts in the upper right corner -->
                            <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->
                            <div class="toast-container position-absolute top-0 end-0 p-3">

                                <!-- Then put toasts within -->
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">just now</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        See? Just like this.
                                    </div>
                                </div>

                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                        <strong class="me-auto">Bootstrap</strong>
                                        <small class="text-muted">2 seconds ago</small>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body">
                                        Heads up, toasts will stack automatically
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;polite&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative&#34;</span><span class="p">&gt;</span>
  <span class="c">&lt;!-- Position it: --&gt;</span>
  <span class="c">&lt;!-- - `.toast-container` for spacing between toasts --&gt;</span>
  <span class="c">&lt;!-- - `.position-absolute`, `top-0` &amp; `end-0` to position the toasts in the upper right corner --&gt;</span>
  <span class="c">&lt;!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-container position-absolute top-0 end-0 p-3&#34;</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Then put toasts within --&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>just now<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
        See? Just like this.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>2 seconds ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
        Heads up, toasts will stack automatically
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>You can also get fancy with flexbox utilities to align toasts horizontally and/or vertically.</p>
                    <div class="bd-example bg-dark bd-example-toasts d-flex">
                        <!-- Flexbox container for aligning the toasts -->
                        <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

                            <!-- Then put toasts within -->
                            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                    <strong class="me-auto">Bootstrap</strong>
                                    <small>11 mins ago</small>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Hello, world! This is a toast message.
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="c">&lt;!-- Flexbox container for aligning the toasts --&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;polite&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-center align-items-center w-100&#34;</span><span class="p">&gt;</span>

  <span class="c">&lt;!-- Then put toasts within --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">small</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
      Hello, world! This is a toast message.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="accessibility">Accessibility</h2>
                    <p>Toasts are intended to be small interruptions to your visitors or users, so to help those with screen readers and similar assistive technologies, you should wrap your toasts in an <a href="https://developer.mozilla.org/en-US/docs/Web/Accessibility/ARIA/ARIA_Live_Regions"><code>aria-live</code> region</a>. Changes to live regions (such as injecting/updating a toast component) are automatically announced by screen readers without needing to move the user&rsquo;s focus or otherwise interrupt the user. Additionally, include <code>aria-atomic=&quot;true&quot;</code> to ensure that the entire toast is always announced as a single (atomic) unit, rather than just announcing what was changed (which could lead to problems if you only update part of the toast&rsquo;s content, or if displaying the same toast content at a later point in time). If the information needed is important for the process, e.g. for a list of errors in a form, then use the <a href="../components/alerts.php">alert component</a> instead of toast.</p>
                    <p>Note that the live region needs to be present in the markup <em>before</em> the toast is generated or updated. If you dynamically generate both at the same time and inject them into the page, they will generally not be announced by assistive technologies.</p>
                    <p>You also need to adapt the <code>role</code> and <code>aria-live</code> level depending on the content. If it&rsquo;s an important message like an error, use <code>role=&quot;alert&quot; aria-live=&quot;assertive&quot;</code>, otherwise use <code>role=&quot;status&quot; aria-live=&quot;polite&quot;</code> attributes.</p>
                    <p>As the content you&rsquo;re displaying changes, be sure to update the <a href="#options"><code>delay</code> timeout</a> so that users have enough time to read the toast.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;polite&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">data-bs-delay</span><span class="o">=</span><span class="s">&#34;10000&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>When using <code>autohide: false</code>, you must add a close button to allow users to dismiss the toast.</p>
                    <div class="bd-example bg-light">
                        <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-bs-autohide="false">
                            <div class="toast-header">
                                <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

                                <strong class="me-auto">Bootstrap</strong>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-live</span><span class="o">=</span><span class="s">&#34;assertive&#34;</span> <span class="na">aria-atomic</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">data-bs-autohide</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-header&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded me-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">strong</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto&#34;</span><span class="p">&gt;</span>Bootstrap<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">small</span><span class="p">&gt;</span>11 mins ago<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;toast&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;toast-body&#34;</span><span class="p">&gt;</span>
    Hello, world! This is a toast message.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>While technically it&rsquo;s possible to add focusable/actionable controls (such as additional buttons or links) in your toast, you should avoid doing this for autohiding toasts. Even if you give the toast a long <a href="#options"><code>delay</code> timeout</a>, keyboard and assistive technology users may find it difficult to reach the toast in time to take action (since toasts don&rsquo;t receive focus when they are displayed). If you absolutely must have further controls, we recommend using a toast with <code>autohide: false</code>.</p>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$toast-max-width</span><span class="o">:</span>                   <span class="mi">350</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$toast-padding-x</span><span class="o">:</span>                   <span class="mf">.75</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$toast-padding-y</span><span class="o">:</span>                   <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$toast-font-size</span><span class="o">:</span>                   <span class="mf">.875</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$toast-color</span><span class="o">:</span>                       <span class="n">null</span><span class="p">;</span>
<span class="nv">$toast-background-color</span><span class="o">:</span>            <span class="nf">rgba</span><span class="p">(</span><span class="nv">$white</span><span class="o">,</span> <span class="mf">.85</span><span class="p">);</span>
<span class="nv">$toast-border-width</span><span class="o">:</span>                <span class="mi">1</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$toast-border-color</span><span class="o">:</span>                <span class="nf">rgba</span><span class="p">(</span><span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mf">.1</span><span class="p">);</span>
<span class="nv">$toast-border-radius</span><span class="o">:</span>               <span class="nv">$border-radius</span><span class="p">;</span>
<span class="nv">$toast-box-shadow</span><span class="o">:</span>                  <span class="nv">$box-shadow</span><span class="p">;</span>
<span class="nv">$toast-spacing</span><span class="o">:</span>                     <span class="nv">$container-padding-x</span><span class="p">;</span>

<span class="nv">$toast-header-color</span><span class="o">:</span>                <span class="nv">$gray-600</span><span class="p">;</span>
<span class="nv">$toast-header-background-color</span><span class="o">:</span>     <span class="nf">rgba</span><span class="p">(</span><span class="nv">$white</span><span class="o">,</span> <span class="mf">.85</span><span class="p">);</span>
<span class="nv">$toast-header-border-color</span><span class="o">:</span>         <span class="nf">rgba</span><span class="p">(</span><span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mi">0</span><span class="o">,</span> <span class="mf">.05</span><span class="p">);</span>
</code></pre></div>
                    <h2 id="usage">Usage</h2>
                    <p>Initialize toasts via JavaScript:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">toastElList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;.toast&#39;</span><span class="p">))</span>
<span class="kd">var</span> <span class="nx">toastList</span> <span class="o">=</span> <span class="nx">toastElList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">toastEl</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Toast</span><span class="p">(</span><span class="nx">toastEl</span><span class="p">,</span> <span class="nx">option</span><span class="p">)</span>
<span class="p">})</span>
</code></pre></div><h3 id="options">Options</h3>
                    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-bs-</code>, as in <code>data-bs-animation=&quot;&quot;</code>.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Name</th>
                                <th style="width: 100px;">Type</th>
                                <th style="width: 50px;">Default</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>animation</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Apply a CSS fade transition to the toast</td>
                            </tr>
                            <tr>
                                <td><code>autohide</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Auto hide the toast</td>
                            </tr>
                            <tr>
                                <td><code>delay</code></td>
                                <td>number</td>
                                <td>
                                    <code>5000</code>
                                </td>
                                <td>Delay hiding the toast (ms)</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="methods">Methods</h3>
                    <div class="bd-callout bd-callout-danger">
                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                        <p><a href="../getting-started/javascript.php#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>

                    </div>

                    <h4 id="show">show</h4>
                    <p>Reveals an element&rsquo;s toast. <strong>Returns to the caller before the toast has actually been shown</strong> (i.e. before the <code>shown.bs.toast</code> event occurs).
                        You have to manually call this method, instead your toast won&rsquo;t show.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">show</span><span class="p">()</span>
</code></pre></div><h4 id="hide">hide</h4>
                    <p>Hides an element&rsquo;s toast. <strong>Returns to the caller before the toast has actually been hidden</strong> (i.e. before the <code>hidden.bs.toast</code> event occurs). You have to manually call this method if you made <code>autohide</code> to <code>false</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">hide</span><span class="p">()</span>
</code></pre></div><h4 id="dispose">dispose</h4>
                    <p>Hides an element&rsquo;s toast. Your toast will remain on the DOM but won&rsquo;t show anymore.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">toast</span><span class="p">.</span><span class="nx">dispose</span><span class="p">()</span>
</code></pre></div><h4 id="getinstance">getInstance</h4>
                    <p><em>Static</em> method which allows you to get the scrollspy instance associated with a DOM element</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myToastEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myToastEl&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">myToast</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Toast</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">myToastEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap toast instance
</span></code></pre></div><h4 id="getorcreateinstance">getOrCreateInstance</h4>
                    <p><em>Static</em> method which allows you to get the scrollspy instance associated with a DOM element, or create a new one in case it wasn&rsquo;t initialised</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myToastEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myToastEl&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">myToast</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Toast</span><span class="p">.</span><span class="nx">getOrCreateInstance</span><span class="p">(</span><span class="nx">myToastEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap toast instance
</span></code></pre></div><h3 id="events">Events</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Event type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>show.bs.toast</code></td>
                                <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                            </tr>
                            <tr>
                                <td><code>shown.bs.toast</code></td>
                                <td>This event is fired when the toast has been made visible to the user.</td>
                            </tr>
                            <tr>
                                <td><code>hide.bs.toast</code></td>
                                <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                            </tr>
                            <tr>
                                <td><code>hidden.bs.toast</code></td>
                                <td>This event is fired when the toast has finished being hidden from the user.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myToastEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myToast&#39;</span><span class="p">)</span>
<span class="nx">myToastEl</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;hidden.bs.toast&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
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
