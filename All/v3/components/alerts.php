
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Alerts · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/alerts/">

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
                                    <li><a href="alerts.php" class="d-inline-flex align-items-center rounded active"  aria-current="page">Alerts</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/alerts.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Alerts</h1>
                    </div>
                    <p class="bd-lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#examples">Examples</a>
                                <ul>
                                    <li><a href="#link-color">Link color</a></li>
                                    <li><a href="#additional-content">Additional content</a></li>
                                    <li><a href="#icons">Icons</a></li>
                                    <li><a href="#dismissing">Dismissing</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#variant-mixin">Variant mixin</a></li>
                                    <li><a href="#loop">Loop</a></li>
                                </ul>
                            </li>
                            <li><a href="#javascript-behavior">JavaScript behavior</a>
                                <ul>
                                    <li><a href="#triggers">Triggers</a></li>
                                    <li><a href="#methods">Methods</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="examples">Examples</h2>
                    <p>Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight <strong>required</strong> contextual classes (e.g., <code>.alert-success</code>). For inline dismissal, use the <a href="#dismissing">alerts JavaScript plugin</a>.</p>
                    <div class="bd-example">

                        <div class="alert alert-primary" role="alert">
                            A simple primary alert—check it out!
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert—check it out!
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert—check it out!
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert—check it out!
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert—check it out!
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert—check it out!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert—check it out!
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-primary&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple primary alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-secondary&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple secondary alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple success alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-danger&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple danger alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-warning&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple warning alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-info&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple info alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-light&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple light alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-dark&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple dark alert—check it out!
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-info">
                        <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                        <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.
                    </div>

                    <h3 id="link-color">Link color</h3>
                    <p>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.</p>
                    <div class="bd-example">

                        <div class="alert alert-primary" role="alert">
                            A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-success" role="alert">
                            A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-danger" role="alert">
                            A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-warning" role="alert">
                            A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-info" role="alert">
                            A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-light" role="alert">
                            A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                        <div class="alert alert-dark" role="alert">
                            A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-primary&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple primary alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-secondary&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple secondary alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple success alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-danger&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple danger alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-warning&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple warning alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-info&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple info alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-light&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple light alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-dark&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  A simple dark alert with <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-link&#34;</span><span class="p">&gt;</span>an example link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>. Give it a click if you like.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="additional-content">Additional content</h3>
                    <p>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</p>
                    <div class="bd-example">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert-heading&#34;</span><span class="p">&gt;</span>Well done!<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">hr</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-0&#34;</span><span class="p">&gt;</span>Whenever you need to, be sure to use margin utilities to keep things nice and tidy.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="icons">Icons</h3>
                    <p>Similarly, you can use <a href="../utilities/flex.php">flexbox utilities</a> and <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a> to create alerts with icons. Depending on your icons and content, you may want to add more utilities or custom styles.</p>
                    <div class="bd-example">
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div>
                                An example alert with an icon
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-primary d-flex align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">xmlns</span><span class="o">=</span><span class="s">&#34;http://www.w3.org/2000/svg&#34;</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">fill</span><span class="o">=</span><span class="s">&#34;currentColor&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bi bi-exclamation-triangle-fill flex-shrink-0 me-2&#34;</span> <span class="na">viewBox</span><span class="o">=</span><span class="s">&#34;0 0 16 16&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;img&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Warning:&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">path</span> <span class="na">d</span><span class="o">=</span><span class="s">&#34;M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z&#34;</span><span class="p">/&gt;</span>
  <span class="p">&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    An example alert with an icon
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Need more than one icon for your alerts? Consider using more Bootstrap Icons and making a local SVG sprite like so to easily reference the same icons repeatedly.</p>
                    <div class="bd-example">
                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </symbol>
                        </svg>

                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                            <div>
                                An example alert with an icon
                            </div>
                        </div>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                            <div>
                                An example success alert with an icon
                            </div>
                        </div>
                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                An example warning alert with an icon
                            </div>
                        </div>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                An example danger alert with an icon
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">svg</span> <span class="na">xmlns</span><span class="o">=</span><span class="s">&#34;http://www.w3.org/2000/svg&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;display: none;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">symbol</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;check-circle-fill&#34;</span> <span class="na">fill</span><span class="o">=</span><span class="s">&#34;currentColor&#34;</span> <span class="na">viewBox</span><span class="o">=</span><span class="s">&#34;0 0 16 16&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">path</span> <span class="na">d</span><span class="o">=</span><span class="s">&#34;M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z&#34;</span><span class="p">/&gt;</span>
  <span class="p">&lt;/</span><span class="nt">symbol</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">symbol</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;info-fill&#34;</span> <span class="na">fill</span><span class="o">=</span><span class="s">&#34;currentColor&#34;</span> <span class="na">viewBox</span><span class="o">=</span><span class="s">&#34;0 0 16 16&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">path</span> <span class="na">d</span><span class="o">=</span><span class="s">&#34;M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z&#34;</span><span class="p">/&gt;</span>
  <span class="p">&lt;/</span><span class="nt">symbol</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">symbol</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exclamation-triangle-fill&#34;</span> <span class="na">fill</span><span class="o">=</span><span class="s">&#34;currentColor&#34;</span> <span class="na">viewBox</span><span class="o">=</span><span class="s">&#34;0 0 16 16&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">path</span> <span class="na">d</span><span class="o">=</span><span class="s">&#34;M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z&#34;</span><span class="p">/&gt;</span>
  <span class="p">&lt;/</span><span class="nt">symbol</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-primary d-flex align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bi flex-shrink-0 me-2&#34;</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;img&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Info:&#34;</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">&#34;#info-fill&#34;</span><span class="p">/&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    An example alert with an icon
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-success d-flex align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bi flex-shrink-0 me-2&#34;</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;img&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Success:&#34;</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">&#34;#check-circle-fill&#34;</span><span class="p">/&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    An example success alert with an icon
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-warning d-flex align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bi flex-shrink-0 me-2&#34;</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;img&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Warning:&#34;</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">&#34;#exclamation-triangle-fill&#34;</span><span class="p">/&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    An example warning alert with an icon
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-danger d-flex align-items-center&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;bi flex-shrink-0 me-2&#34;</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;24&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;img&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Danger:&#34;</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">&#34;#exclamation-triangle-fill&#34;</span><span class="p">/&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    An example danger alert with an icon
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="dismissing">Dismissing</h3>
                    <p>Using the alert JavaScript plugin, it&rsquo;s possible to dismiss any alert inline. Here&rsquo;s how:</p>
                    <ul>
                        <li>Be sure you&rsquo;ve loaded the alert plugin, or the compiled Bootstrap JavaScript.</li>
                        <li>Add a <a href="../components/close-button.php">close button</a> and the <code>.alert-dismissible</code> class, which adds extra padding to the right of the alert and positions the close button.</li>
                        <li>On the close button, add the <code>data-bs-dismiss=&quot;alert&quot;</code> attribute, which triggers the JavaScript functionality. Be sure to use the <code>&lt;button&gt;</code> element with it for proper behavior across all devices.</li>
                        <li>To animate alerts when dismissing them, be sure to add the <code>.fade</code> and <code>.show</code> classes.</li>
                    </ul>
                    <p>You can see this in action with a live demo:</p>
                    <div class="bd-example">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;alert alert-warning alert-dismissible fade show&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;alert&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>Holy guacamole!<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;</span> You should check in on some of those fields below.
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-warning">
                        When an alert is dismissed, the element is completely removed from the page structure. If a keyboard user dismisses the alert using the close button, their focus will suddenly be lost and, depending on the browser, reset to the start of the page/document. For this reason, we recommend including additional JavaScript that listens for the <code>closed.bs.alert</code> event and programmatically sets <code>focus()</code> to the most appropriate location in the page. If you&rsquo;re planning to move focus to a non-interactive element that normally does not receive focus, make sure to add <code>tabindex=&quot;-1&quot;</code> to the element.
                    </div>

                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$alert-padding-y</span><span class="o">:</span>               <span class="nv">$spacer</span><span class="p">;</span>
<span class="nv">$alert-padding-x</span><span class="o">:</span>               <span class="nv">$spacer</span><span class="p">;</span>
<span class="nv">$alert-margin-bottom</span><span class="o">:</span>           <span class="mi">1</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$alert-border-radius</span><span class="o">:</span>           <span class="nv">$border-radius</span><span class="p">;</span>
<span class="nv">$alert-link-font-weight</span><span class="o">:</span>        <span class="nv">$font-weight-bold</span><span class="p">;</span>
<span class="nv">$alert-border-width</span><span class="o">:</span>            <span class="nv">$border-width</span><span class="p">;</span>
<span class="nv">$alert-bg-scale</span><span class="o">:</span>                <span class="o">-</span><span class="mi">80</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$alert-border-scale</span><span class="o">:</span>            <span class="o">-</span><span class="mi">70</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$alert-color-scale</span><span class="o">:</span>             <span class="mi">40</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$alert-dismissible-padding-r</span><span class="o">:</span>   <span class="nv">$alert-padding-x</span> <span class="o">*</span> <span class="mi">3</span><span class="p">;</span> <span class="c1">// 3x covers width of x plus default padding on either side
</span></code></pre></div>
                    <h3 id="variant-mixin">Variant mixin</h3>
                    <p>Used in combination with <code>$theme-colors</code> to create contextual modifier classes for our alerts.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> alert-variant</span><span class="p">(</span><span class="nv">$background</span><span class="o">,</span> <span class="nv">$border</span><span class="o">,</span> <span class="nv">$color</span><span class="p">)</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
  <span class="k">@include</span><span class="nd"> gradient-bg</span><span class="p">(</span><span class="nv">$background</span><span class="p">);</span>
  <span class="na">border-color</span><span class="o">:</span> <span class="nv">$border</span><span class="p">;</span>

  <span class="nc">.alert-link</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="mi">20</span><span class="kt">%</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <h3 id="loop">Loop</h3>
                    <p>Loop that generates the modifier classes with the <code>alert-variant()</code> mixin.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Generate contextual modifier classes for colorizing the alert.
</span><span class="c1"></span>
<span class="k">@each</span> <span class="nv">$state</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nv">$alert-background</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-bg-scale</span><span class="p">);</span>
  <span class="nv">$alert-border</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-border-scale</span><span class="p">);</span>
  <span class="nv">$alert-color</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-color-scale</span><span class="p">);</span>
  <span class="k">@if</span> <span class="p">(</span><span class="nf">contrast-ratio</span><span class="p">(</span><span class="nv">$alert-background</span><span class="o">,</span> <span class="nv">$alert-color</span><span class="p">)</span> <span class="o">&lt;</span> <span class="nv">$min-contrast-ratio</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$alert-color</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$alert-background</span><span class="p">)</span><span class="o">,</span> <span class="nf">abs</span><span class="p">(</span><span class="nv">$alert-color-scale</span><span class="p">));</span>
  <span class="p">}</span>
  <span class="nc">.alert-</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> alert-variant</span><span class="p">(</span><span class="nv">$alert-background</span><span class="o">,</span> <span class="nv">$alert-border</span><span class="o">,</span> <span class="nv">$alert-color</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <h2 id="javascript-behavior">JavaScript behavior</h2>
                    <h3 id="triggers">Triggers</h3>
                    <p>Enable dismissal of an alert via JavaScript:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">alertList</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;.alert&#39;</span><span class="p">)</span>
<span class="nx">alertList</span><span class="p">.</span><span class="nx">forEach</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">alert</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">(</span><span class="nx">alert</span><span class="p">)</span>
<span class="p">})</span>
</code></pre></div><p>Or with <code>data</code> attributes on a button <strong>within the alert</strong>, as demonstrated above:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-close&#34;</span> <span class="na">data-bs-dismiss</span><span class="o">=</span><span class="s">&#34;alert&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Close&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
</code></pre></div><p>Note that closing an alert will remove it from the DOM.</p>
                    <h3 id="methods">Methods</h3>
                    <p>You can create an alert instance with the alert constructor, for example:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myAlert</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myAlert&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">bsAlert</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">(</span><span class="nx">myAlert</span><span class="p">)</span>
</code></pre></div><p>This makes an alert listen for click events on descendant elements which have the <code>data-bs-dismiss=&quot;alert&quot;</code> attribute. (Not necessary when using the data-api&rsquo;s auto-initialization.)</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <code>close</code>
                                </td>
                                <td>
                                    Closes an alert by removing it from the DOM. If the <code>.fade</code> and <code>.show</code> classes are present on the element, the alert will fade out before it is removed.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>dispose</code>
                                </td>
                                <td>
                                    Destroys an element's alert. (Removes stored data on the DOM element)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getInstance</code>
                                </td>
                                <td>
                                    Static method which allows you to get the alert instance associated to a DOM element, you can use it like this: <code>bootstrap.Alert.getInstance(alert)</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getOrCreateInstance</code>
                                </td>
                                <td>
                                    Static method which returns an alert instance associated to a DOM element or create a new one in case it wasn't initialised.
                                    You can use it like this: <code>bootstrap.Alert.getOrCreateInstance(element)</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">alertNode</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;.alert&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">alert</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Alert</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">alertNode</span><span class="p">)</span>
<span class="nx">alert</span><span class="p">.</span><span class="nx">close</span><span class="p">()</span>
</code></pre></div><h3 id="events">Events</h3>
                    <p>Bootstrap&rsquo;s alert plugin exposes a few events for hooking into alert functionality.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>close.bs.alert</code></td>
                                <td>
                                    Fires immediately when the <code>close</code> instance method is called.
                                </td>
                            </tr>
                            <tr>
                                <td><code>closed.bs.alert</code></td>
                                <td>
                                    Fired when the alert has been closed and CSS transitions have completed.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myAlert</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myAlert&#39;</span><span class="p">)</span>
<span class="nx">myAlert</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;closed.bs.alert&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="c1">// do something, for instance, explicitly move focus to the most appropriate element,
</span><span class="c1"></span>  <span class="c1">// so it doesn&#39;t get lost/reset to the start of the page
</span><span class="c1"></span>  <span class="c1">// document.getElementById(&#39;...&#39;).focus()
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
