
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Popovers · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/popovers/">

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
                                    <li><a href="popovers.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Popovers</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/popovers.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Popovers</h1>
                    </div>
                    <p class="bd-lead">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#example-enable-popovers-everywhere">Example: Enable popovers everywhere</a></li>
                            <li><a href="#example-using-the-container-option">Example: Using the <code>container</code> option</a></li>
                            <li><a href="#example">Example</a>
                                <ul>
                                    <li><a href="#four-directions">Four directions</a></li>
                                    <li><a href="#dismiss-on-next-click">Dismiss on next click</a></li>
                                    <li><a href="#disabled-elements">Disabled elements</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#options">Options</a>
                                        <ul>
                                            <li><a href="#using-function-with-popperconfig">Using function with <code>popperConfig</code></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#methods">Methods</a>
                                        <ul>
                                            <li><a href="#show">show</a></li>
                                            <li><a href="#hide">hide</a></li>
                                            <li><a href="#toggle">toggle</a></li>
                                            <li><a href="#dispose">dispose</a></li>
                                            <li><a href="#enable">enable</a></li>
                                            <li><a href="#disable">disable</a></li>
                                            <li><a href="#toggleenabled">toggleEnabled</a></li>
                                            <li><a href="#update">update</a></li>
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


                    <h2 id="overview">Overview</h2>
                    <p>Things to know when using the popover plugin:</p>
                    <ul>
                        <li>Popovers rely on the 3rd party library <a href="https://popper.js.org/">Popper</a> for positioning. You must include <a href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js">popper.min.js</a> before bootstrap.js or use <code>bootstrap.bundle.min.js</code> / <code>bootstrap.bundle.js</code> which contains Popper in order for popovers to work!</li>
                        <li>Popovers require the <a href="../components/tooltip.php">tooltip plugin</a> as a dependency.</li>
                        <li>Popovers are opt-in for performance reasons, so <strong>you must initialize them yourself</strong>.</li>
                        <li>Zero-length <code>title</code> and <code>content</code> values will never show a popover.</li>
                        <li>Specify <code>container: 'body'</code> to avoid rendering problems in more complex components (like our input groups, button groups, etc).</li>
                        <li>Triggering popovers on hidden elements will not work.</li>
                        <li>Popovers for <code>.disabled</code> or <code>disabled</code> elements must be triggered on a wrapper element.</li>
                        <li>When triggered from anchors that wrap across multiple lines, popovers will be centered between the anchors' overall width. Use <code>.text-nowrap</code> on your <code>&lt;a&gt;</code>s to avoid this behavior.</li>
                        <li>Popovers must be hidden before their corresponding elements have been removed from the DOM.</li>
                        <li>Popovers can be triggered thanks to an element inside a shadow DOM.</li>
                    </ul>
                    <div class="bd-callout bd-callout-info">
                        By default, this component uses the built-in content sanitizer, which strips out any HTML elements that are not explicitly allowed. See the <a href="../getting-started/javascript.php#sanitizer">sanitizer section in our JavaScript documentation</a> for more details.
                    </div>

                    <div class="bd-callout bd-callout-info">
                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                    </div>

                    <p>Keep reading to see how popovers work with some examples.</p>
                    <h2 id="example-enable-popovers-everywhere">Example: Enable popovers everywhere</h2>
                    <p>One way to initialize all popovers on a page would be to select them by their <code>data-bs-toggle</code> attribute:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popoverTriggerList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;[data-bs-toggle=&#34;popover&#34;]&#39;</span><span class="p">))</span>
<span class="kd">var</span> <span class="nx">popoverList</span> <span class="o">=</span> <span class="nx">popoverTriggerList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nx">popoverTriggerEl</span><span class="p">)</span>
<span class="p">})</span>
</code></pre></div><h2 id="example-using-the-container-option">Example: Using the <code>container</code> option</h2>
                    <p>When you have some styles on a parent element that interfere with a popover, you&rsquo;ll want to specify a custom <code>container</code> so that the popover&rsquo;s HTML appears within that element instead.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.example-popover&#39;</span><span class="p">),</span> <span class="p">{</span>
  <span class="nx">container</span><span class="o">:</span> <span class="s1">&#39;body&#39;</span>
<span class="p">})</span>
</code></pre></div><h2 id="example">Example</h2>
                    <div class="bd-example">
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-lg btn-danger&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Popover title&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;And here&#39;s some amazing content. It&#39;s very engaging. Right?&#34;</span><span class="p">&gt;</span>Click to toggle popover<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="four-directions">Four directions</h3>
                    <p>Four options are available: top, right, bottom, and left aligned. Directions are mirrored when using Bootstrap in RTL.</p>
                    <div class="bd-example">
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Top popover">
                            Popover on top
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover">
                            Popover on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Bottom popover">
                            Popover on bottom
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Left popover">
                            Popover on left
                        </button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span> <span class="na">data-bs-container</span><span class="o">=</span><span class="s">&#34;body&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-placement</span><span class="o">=</span><span class="s">&#34;top&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;Top popover&#34;</span><span class="p">&gt;</span>
  Popover on top
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span> <span class="na">data-bs-container</span><span class="o">=</span><span class="s">&#34;body&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-placement</span><span class="o">=</span><span class="s">&#34;right&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;Right popover&#34;</span><span class="p">&gt;</span>
  Popover on right
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span> <span class="na">data-bs-container</span><span class="o">=</span><span class="s">&#34;body&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-placement</span><span class="o">=</span><span class="s">&#34;bottom&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;Bottom popover&#34;</span><span class="p">&gt;</span>
  Popover on bottom
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span> <span class="na">data-bs-container</span><span class="o">=</span><span class="s">&#34;body&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-placement</span><span class="o">=</span><span class="s">&#34;left&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;Left popover&#34;</span><span class="p">&gt;</span>
  Popover on left
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="dismiss-on-next-click">Dismiss on next click</h3>
                    <p>Use the <code>focus</code> trigger to dismiss popovers on the user&rsquo;s next click of a different element than the toggle element.</p>
                    <div class="bd-callout bd-callout-danger">
                        <h4 id="specific-markup-required-for-dismiss-on-next-click">Specific markup required for dismiss-on-next-click</h4>
                        <p>For proper cross-browser and cross-platform behavior, you must use the <code>&lt;a&gt;</code> tag, <em>not</em> the <code>&lt;button&gt;</code> tag, and you also must include a <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex"><code>tabindex</code></a> attribute.
                    </div>

                    <div class="bd-example">
                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-lg btn-danger&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-trigger</span><span class="o">=</span><span class="s">&#34;focus&#34;</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Dismissible popover&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;And here&#39;s some amazing content. It&#39;s very engaging. Right?&#34;</span><span class="p">&gt;</span>Dismissible popover<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span></code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.popover-dismiss&#39;</span><span class="p">),</span> <span class="p">{</span>
  <span class="nx">trigger</span><span class="o">:</span> <span class="s1">&#39;focus&#39;</span>
<span class="p">})</span>
</code></pre></div><h3 id="disabled-elements">Disabled elements</h3>
                    <p>Elements with the <code>disabled</code> attribute aren&rsquo;t interactive, meaning users cannot hover or click them to trigger a popover (or tooltip). As a workaround, you&rsquo;ll want to trigger the popover from a wrapper <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, ideally made keyboard-focusable using <code>tabindex=&quot;0&quot;</code>.</p>
                    <p>For disabled popover triggers, you may also prefer <code>data-bs-trigger=&quot;hover focus&quot;</code> so that the popover appears as immediate visual feedback to your users as they may not expect to <em>click</em> on a disabled element.</p>
                    <div class="bd-example">
                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                            <button class="btn btn-primary" type="button" disabled>Disabled button</button>
                        </span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-inline-block&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;popover&#34;</span> <span class="na">data-bs-trigger</span><span class="o">=</span><span class="s">&#34;hover focus&#34;</span> <span class="na">data-bs-content</span><span class="o">=</span><span class="s">&#34;Disabled popover&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>Disabled button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$popover-font-size</span><span class="o">:</span>                 <span class="nv">$font-size-sm</span><span class="p">;</span>
<span class="nv">$popover-bg</span><span class="o">:</span>                        <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$popover-max-width</span><span class="o">:</span>                 <span class="mi">276</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$popover-border-width</span><span class="o">:</span>              <span class="nv">$border-width</span><span class="p">;</span>
<span class="nv">$popover-border-color</span><span class="o">:</span>              <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="mf">.2</span><span class="p">);</span>
<span class="nv">$popover-border-radius</span><span class="o">:</span>             <span class="nv">$border-radius-lg</span><span class="p">;</span>
<span class="nv">$popover-inner-border-radius</span><span class="o">:</span>       <span class="nf">subtract</span><span class="p">(</span><span class="nv">$popover-border-radius</span><span class="o">,</span> <span class="nv">$popover-border-width</span><span class="p">);</span>
<span class="nv">$popover-box-shadow</span><span class="o">:</span>                <span class="nv">$box-shadow</span><span class="p">;</span>

<span class="nv">$popover-header-bg</span><span class="o">:</span>                 <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$popover-bg</span><span class="o">,</span> <span class="mi">6</span><span class="kt">%</span><span class="p">);</span>
<span class="nv">$popover-header-color</span><span class="o">:</span>              <span class="nv">$headings-color</span><span class="p">;</span>
<span class="nv">$popover-header-padding-y</span><span class="o">:</span>          <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$popover-header-padding-x</span><span class="o">:</span>          <span class="nv">$spacer</span><span class="p">;</span>

<span class="nv">$popover-body-color</span><span class="o">:</span>                <span class="nv">$body-color</span><span class="p">;</span>
<span class="nv">$popover-body-padding-y</span><span class="o">:</span>            <span class="nv">$spacer</span><span class="p">;</span>
<span class="nv">$popover-body-padding-x</span><span class="o">:</span>            <span class="nv">$spacer</span><span class="p">;</span>

<span class="nv">$popover-arrow-width</span><span class="o">:</span>               <span class="mi">1</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$popover-arrow-height</span><span class="o">:</span>              <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$popover-arrow-color</span><span class="o">:</span>               <span class="nv">$popover-bg</span><span class="p">;</span>

<span class="nv">$popover-arrow-outer-color</span><span class="o">:</span>         <span class="nf">fade-in</span><span class="p">(</span><span class="nv">$popover-border-color</span><span class="o">,</span> <span class="mf">.05</span><span class="p">);</span>
</code></pre></div>
                    <h2 id="usage">Usage</h2>
                    <p>Enable popovers via JavaScript:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">exampleEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;example&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nx">exampleEl</span><span class="p">,</span> <span class="nx">options</span><span class="p">)</span>
</code></pre></div><div class="bd-callout bd-callout-warning">
                        <h3 id="making-popovers-work-for-keyboard-and-assistive-technology-users">Making popovers work for keyboard and assistive technology users</h3>
                        <p>To allow keyboard users to activate your popovers, you should only add them to HTML elements that are traditionally keyboard-focusable and interactive (such as links or form controls). Although arbitrary HTML elements (such as <code>&lt;span&gt;</code>s) can be made focusable by adding the <code>tabindex=&quot;0&quot;</code> attribute, this will add potentially annoying and confusing tab stops on non-interactive elements for keyboard users, and most assistive technologies currently do not announce the popover&rsquo;s content in this situation. Additionally, do not rely solely on <code>hover</code> as the trigger for your popovers, as this will make them impossible to trigger for keyboard users.</p>
                        <p>While you can insert rich, structured HTML in popovers with the <code>html</code> option, we strongly recommend that you avoid adding an excessive amount of content. The way popovers currently work is that, once displayed, their content is tied to the trigger element with the <code>aria-describedby</code> attribute. As a result, the entirety of the popover&rsquo;s content will be announced to assistive technology users as one long, uninterrupted stream.</p>
                        <p>Additionally, while it is possible to also include interactive controls (such as form elements or links) in your popover (by adding these elements to the <code>allowList</code> of allowed attributes and tags), be aware that currently the popover does not manage keyboard focus order. When a keyboard user opens a popover, focus remains on the triggering element, and as the popover usually does not immediately follow the trigger in the document&rsquo;s structure, there is no guarantee that moving forward/pressing <kbd>TAB</kbd> will move a keyboard user into the popover itself. In short, simply adding interactive controls to a popover is likely to make these controls unreachable/unusable for keyboard users and users of assistive technologies, or at the very least make for an illogical overall focus order. In these cases, consider using a modal dialog instead.</p>

                    </div>

                    <h3 id="options">Options</h3>
                    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-bs-</code>, as in <code>data-bs-animation=&quot;&quot;</code>. Make sure to change the case type of the option name from camelCase to kebab-case when passing the options via data attributes. For example, instead of using <code>data-bs-customClass=&quot;beautifier&quot;</code>, use <code>data-bs-custom-class=&quot;beautifier&quot;</code>.</p>
                    <div class="bd-callout bd-callout-warning">
                        Note that for security reasons the <code>sanitize</code>, <code>sanitizeFn</code>, and <code>allowList</code> options cannot be supplied using data attributes.
                    </div>

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
                                <td>Apply a CSS fade transition to the popover</td>
                            </tr>
                            <tr>
                                <td><code>container</code></td>
                                <td>string | element | false</td>
                                <td><code>false</code></td>
                                <td>
                                    <p>Appends the popover to a specific element. Example: <code>container: 'body'</code>. This option is particularly useful in that it allows you to position the popover in the flow of the document near the triggering element - which will prevent the popover from floating away from the triggering element during a window resize.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>content</code></td>
                                <td>string | element | function</td>
                                <td><code>''</code></td>
                                <td>
                                    <p>Default content value if <code>data-bs-content</code> attribute isn't present.</p>
                                    <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>delay</code></td>
                                <td>number | object</td>
                                <td><code>0</code></td>
                                <td>
                                    <p>Delay showing and hiding the popover (ms) - does not apply to manual trigger type</p>
                                    <p>If a number is supplied, delay is applied to both hide/show</p>
                                    <p>Object structure is: <code>delay: { "show": 500, "hide": 100 }</code></p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>html</code></td>
                                <td>boolean</td>
                                <td><code>false</code></td>
                                <td>Insert HTML into the popover. If false, <code>innerText</code> property will be used to insert content into the DOM. Use text if you're worried about XSS attacks.</td>
                            </tr>
                            <tr>
                                <td><code>placement</code></td>
                                <td>string | function</td>
                                <td><code>'right'</code></td>
                                <td>
                                    <p>How to position the popover - auto | top | bottom | left | right.<br>When <code>auto</code> is specified, it will dynamically reorient the popover.</p>
                                    <p>When a function is used to determine the placement, it is called with the popover DOM node as its first argument and the triggering element DOM node as its second. The <code>this</code> context is set to the popover instance.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>selector</code></td>
                                <td>string | false</td>
                                <td><code>false</code></td>
                                <td>If a selector is provided, popover objects will be delegated to the specified targets. In practice, this is used to enable dynamic HTML content to have popovers added. See <a href="https://github.com/twbs/bootstrap/issues/4215">this</a> and <a href="https://codepen.io/team/bootstrap/pen/zYBXGwX?editors=1010">an informative example</a>.</td>
                            </tr>
                            <tr>
                                <td><code>template</code></td>
                                <td>string</td>
                                <td><code>'&lt;div class="popover" role="tooltip"&gt;&lt;div class="popover-arrow"&gt;&lt;/div&gt;&lt;h3 class="popover-header"&gt;&lt;/h3&gt;&lt;div class="popover-body"&gt;&lt;/div&gt;&lt;/div&gt;'</code></td>
                                <td>
                                    <p>Base HTML to use when creating the popover.</p>
                                    <p>The popover's <code>title</code> will be injected into the <code>.popover-header</code>.</p>
                                    <p>The popover's <code>content</code> will be injected into the <code>.popover-body</code>.</p>
                                    <p><code>.popover-arrow</code> will become the popover's arrow.</p>
                                    <p>The outermost wrapper element should have the <code>.popover</code> class.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>title</code></td>
                                <td>string | element | function</td>
                                <td><code>''</code></td>
                                <td>
                                    <p>Default title value if <code>title</code> attribute isn't present.</p>
                                    <p>If a function is given, it will be called with its <code>this</code> reference set to the element that the popover is attached to.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>trigger</code></td>
                                <td>string</td>
                                <td><code>'click'</code></td>
                                <td>How popover is triggered - click | hover | focus | manual. You may pass multiple triggers; separate them with a space. <code>manual</code> cannot be combined with any other trigger.</td>
                            </tr>
                            <tr>
                                <td><code>fallbackPlacements</code></td>
                                <td>array</td>
                                <td><code>['top', 'right', 'bottom', 'left']</code></td>
                                <td>Define fallback placements by providing a list of placements in array (in order of preference). For more information refer to
                                    Popper's <a href="https://popper.js.org/docs/v2/modifiers/flip/#fallbackplacements">behavior docs</a></td>
                            </tr>
                            <tr>
                                <td><code>boundary</code></td>
                                <td>string | element</td>
                                <td><code>'clippingParents'</code></td>
                                <td>Overflow constraint boundary of the popover (applies only to Popper's preventOverflow modifier). By default it's <code>'clippingParents'</code> and can accept an HTMLElement reference (via JavaScript only). For more information refer to Popper's <a href="https://popper.js.org/docs/v2/utils/detect-overflow/#boundary">detectOverflow docs</a>.</td>
                            </tr>
                            <tr>
                                <td><code>customClass</code></td>
                                <td>string | function</td>
                                <td><code>''</code></td>
                                <td>
                                    <p>Add classes to the popover when it is shown. Note that these classes will be added in addition to any classes specified in the template. To add multiple classes, separate them with spaces: <code>'class-1 class-2'</code>.</p>
                                    <p>You can also pass a function that should return a single string containing additional class names.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>sanitize</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Enable or disable the sanitization. If activated <code>'template'</code>, <code>'content'</code> and <code>'title'</code> options will be sanitized. See the <a href="../getting-started/javascript.php#sanitizer">sanitizer section in our JavaScript documentation</a>.</td>
                            </tr>
                            <tr>
                                <td><code>allowList</code></td>
                                <td>object</td>
                                <td><a href="../getting-started/javascript.php#sanitizer">Default value</a></td>
                                <td>Object which contains allowed attributes and tags</td>
                            </tr>
                            <tr>
                                <td><code>sanitizeFn</code></td>
                                <td>null | function</td>
                                <td><code>null</code></td>
                                <td>Here you can supply your own sanitize function. This can be useful if you prefer to use a dedicated library to perform sanitization.</td>
                            </tr>
                            <tr>
                                <td><code>offset</code></td>
                                <td>array | string | function</td>
                                <td><code>[0, 8]</code></td>
                                <td>
                                    <p>Offset of the popover relative to its target. You can pass a string in data attributes with comma separated values like: <code>data-bs-offset="10,20"</code></p>
                                    <p>When a function is used to determine the offset, it is called with an object containing the popper placement, the reference, and popper rects as its first argument. The triggering element DOM node is passed as the second argument. The function must return an array with two numbers: <code>[<a href="https://popper.js.org/docs/v2/modifiers/offset/#skidding-1">skidding</a>, <a href="https://popper.js.org/docs/v2/modifiers/offset/#distance-1">distance</a>]</code>.</p>
                                    <p>For more information refer to Popper's <a href="https://popper.js.org/docs/v2/modifiers/offset/#options">offset docs</a>.</p>
                                </td>
                            </tr>
                            <tr>
                                <td><code>popperConfig</code></td>
                                <td>null | object | function</td>
                                <td><code>null</code></td>
                                <td>
                                    <p>To change Bootstrap's default Popper config, see <a href="https://popper.js.org/docs/v2/constructors/#options">Popper's configuration</a>.</p>
                                    <p>When a function is used to create the Popper configuration, it's called with an object that contains the Bootstrap's default Popper configuration. It helps you use and merge the default with your own configuration. The function must return a configuration object for Popper.</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bd-callout bd-callout-info">
                        <h4 id="data-attributes-for-individual-popovers">Data attributes for individual popovers</h4>
                        <p>Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.
                    </div>

                    <h4 id="using-function-with-popperconfig">Using function with <code>popperConfig</code></h4>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">(</span><span class="nx">element</span><span class="p">,</span> <span class="p">{</span>
  <span class="nx">popperConfig</span><span class="o">:</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">defaultBsPopperConfig</span><span class="p">)</span> <span class="p">{</span>
    <span class="c1">// var newPopperConfig = {...}
</span><span class="c1"></span>    <span class="c1">// use defaultBsPopperConfig if needed...
</span><span class="c1"></span>    <span class="c1">// return newPopperConfig
</span><span class="c1"></span>  <span class="p">}</span>
<span class="p">})</span>
</code></pre></div><h3 id="methods">Methods</h3>
                    <div class="bd-callout bd-callout-danger">
                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                        <p><a href="../getting-started/javascript.php#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>

                    </div>

                    <h4 id="show">show</h4>
                    <p>Reveals an element&rsquo;s popover. <strong>Returns to the caller before the popover has actually been shown</strong> (i.e. before the <code>shown.bs.popover</code> event occurs). This is considered a &ldquo;manual&rdquo; triggering of the popover. Popovers whose title and content are both zero-length are never displayed.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">show</span><span class="p">()</span>
</code></pre></div><h4 id="hide">hide</h4>
                    <p>Hides an element&rsquo;s popover. <strong>Returns to the caller before the popover has actually been hidden</strong> (i.e. before the <code>hidden.bs.popover</code> event occurs). This is considered a &ldquo;manual&rdquo; triggering of the popover.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">hide</span><span class="p">()</span>
</code></pre></div><h4 id="toggle">toggle</h4>
                    <p>Toggles an element&rsquo;s popover. <strong>Returns to the caller before the popover has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.popover</code> or <code>hidden.bs.popover</code> event occurs). This is considered a &ldquo;manual&rdquo; triggering of the popover.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">toggle</span><span class="p">()</span>
</code></pre></div><h4 id="dispose">dispose</h4>
                    <p>Hides and destroys an element&rsquo;s popover (Removes stored data on the DOM element). Popovers that use delegation (which are created using <a href="#options">the <code>selector</code> option</a>) cannot be individually destroyed on descendant trigger elements.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">dispose</span><span class="p">()</span>
</code></pre></div><h4 id="enable">enable</h4>
                    <p>Gives an element&rsquo;s popover the ability to be shown. <strong>Popovers are enabled by default.</strong></p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">enable</span><span class="p">()</span>
</code></pre></div><h4 id="disable">disable</h4>
                    <p>Removes the ability for an element&rsquo;s popover to be shown. The popover will only be able to be shown if it is re-enabled.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">disable</span><span class="p">()</span>
</code></pre></div><h4 id="toggleenabled">toggleEnabled</h4>
                    <p>Toggles the ability for an element&rsquo;s popover to be shown or hidden.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">toggleEnabled</span><span class="p">()</span>
</code></pre></div><h4 id="update">update</h4>
                    <p>Updates the position of an element&rsquo;s popover.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="nx">myPopover</span><span class="p">.</span><span class="nx">update</span><span class="p">()</span>
</code></pre></div><h4 id="getinstance">getInstance</h4>
                    <p><em>Static</em> method which allows you to get the popover instance associated with a DOM element</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">exampleTriggerEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;example&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">exampleTriggerEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap popover instance
</span></code></pre></div><h4 id="getorcreateinstance">getOrCreateInstance</h4>
                    <p><em>Static</em> method which allows you to get the popover instance associated with a DOM element, or create a new one in case it wasn&rsquo;t initialised</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">exampleTriggerEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;example&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">popover</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Popover</span><span class="p">.</span><span class="nx">getOrCreateInstance</span><span class="p">(</span><span class="nx">exampleTriggerEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap popover instance
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
                                <td>show.bs.popover</td>
                                <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                            </tr>
                            <tr>
                                <td>shown.bs.popover</td>
                                <td>This event is fired when the popover has been made visible to the user (will wait for CSS transitions to complete).</td>
                            </tr>
                            <tr>
                                <td>hide.bs.popover</td>
                                <td>This event is fired immediately when the <code>hide</code> instance method has been called.</td>
                            </tr>
                            <tr>
                                <td>hidden.bs.popover</td>
                                <td>This event is fired when the popover has finished being hidden from the user (will wait for CSS transitions to complete).</td>
                            </tr>
                            <tr>
                                <td>inserted.bs.popover</td>
                                <td>This event is fired after the <code>show.bs.popover</code> event when the popover template has been added to the DOM.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myPopoverTrigger</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myPopover&#39;</span><span class="p">)</span>
<span class="nx">myPopoverTrigger</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;hidden.bs.popover&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
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
