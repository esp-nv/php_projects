
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Convey meaning through color with a handful of color utility classes. Includes support for styling links with hover states, too.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Colors · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/utilities/colors/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false">
                                Components
                            </button>

                            <div class="collapse" id="components-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../components/accordion.php" class="d-inline-flex align-items-center rounded">Accordion</a></li>
                                    <li><a href="../components/alerts.php" class="d-inline-flex align-items-center rounded">Alerts</a></li>
                                    <li><a href="../components/badge.php" class="d-inline-flex align-items-center rounded">Badge</a></li>
                                    <li><a href="../components/breadcrumb.php" class="d-inline-flex align-items-center rounded">Breadcrumb</a></li>
                                    <li><a href="../components/buttons.php" class="d-inline-flex align-items-center rounded">Buttons</a></li>
                                    <li><a href="../components/button-group.php" class="d-inline-flex align-items-center rounded">Button group</a></li>
                                    <li><a href="../components/card.php" class="d-inline-flex align-items-center rounded">Card</a></li>
                                    <li><a href="../components/carousel.php" class="d-inline-flex align-items-center rounded">Carousel</a></li>
                                    <li><a href="../components/close-button.php" class="d-inline-flex align-items-center rounded">Close button</a></li>
                                    <li><a href="../components/collapse.php" class="d-inline-flex align-items-center rounded">Collapse</a></li>
                                    <li><a href="../components/dropdowns.php" class="d-inline-flex align-items-center rounded">Dropdowns</a></li>
                                    <li><a href="../components/list-group.php" class="d-inline-flex align-items-center rounded">List group</a></li>
                                    <li><a href="../components/modal.php" class="d-inline-flex align-items-center rounded">Modal</a></li>
                                    <li><a href="../components/navs-tabs.php" class="d-inline-flex align-items-center rounded">Navs &amp; tabs</a></li>
                                    <li><a href="../components/navbar.php" class="d-inline-flex align-items-center rounded">Navbar</a></li>
                                    <li><a href="../components/offcanvas.php" class="d-inline-flex align-items-center rounded">Offcanvas</a></li>
                                    <li><a href="../components/pagination.php" class="d-inline-flex align-items-center rounded">Pagination</a></li>
                                    <li><a href="../components/popovers.php" class="d-inline-flex align-items-center rounded">Popovers</a></li>
                                    <li><a href="../components/progress.php" class="d-inline-flex align-items-center rounded">Progress</a></li>
                                    <li><a href="../components/scrollspy.php" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
                                    <li><a href="../components/spinners.php" class="d-inline-flex align-items-center rounded">Spinners</a></li>
                                    <li><a href="../components/toast.php" class="d-inline-flex align-items-center rounded">Toasts</a></li>
                                    <li><a href="../components/tooltip.php" class="d-inline-flex align-items-center rounded">Tooltips</a></li>
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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="true" aria-current="true">
                                Utilities
                            </button>

                            <div class="collapse show" id="utilities-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="api.php" class="d-inline-flex align-items-center rounded">API</a></li>
                                    <li><a href="background.php" class="d-inline-flex align-items-center rounded">Background</a></li>
                                    <li><a href="borders.php" class="d-inline-flex align-items-center rounded">Borders</a></li>
                                    <li><a href="colors.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Colors</a></li>
                                    <li><a href="display.php" class="d-inline-flex align-items-center rounded">Display</a></li>
                                    <li><a href="flex.php" class="d-inline-flex align-items-center rounded">Flex</a></li>
                                    <li><a href="float.php" class="d-inline-flex align-items-center rounded">Float</a></li>
                                    <li><a href="interactions.php" class="d-inline-flex align-items-center rounded">Interactions</a></li>
                                    <li><a href="overflow.php" class="d-inline-flex align-items-center rounded">Overflow</a></li>
                                    <li><a href="position.php" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="shadows.php" class="d-inline-flex align-items-center rounded">Shadows</a></li>
                                    <li><a href="sizing.php" class="d-inline-flex align-items-center rounded">Sizing</a></li>
                                    <li><a href="spacing.php" class="d-inline-flex align-items-center rounded">Spacing</a></li>
                                    <li><a href="text.php" class="d-inline-flex align-items-center rounded">Text</a></li>
                                    <li><a href="vertical-align.php" class="d-inline-flex align-items-center rounded">Vertical align</a></li>
                                    <li><a href="visibility.php" class="d-inline-flex align-items-center rounded">Visibility</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/utilities/colors.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Colors</h1>
                    </div>
                    <p class="bd-lead">Convey meaning through <code>color</code> with a handful of color utility classes. Includes support for styling links with hover states, too.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#colors">Colors</a></li>
                            <li><a href="#specificity">Specificity</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#map">Map</a></li>
                                    <li><a href="#utilities-api">Utilities API</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="colors">Colors</h2>
                    <p>Colorize text with color utilities. If you want to colorize links, you can use the <a href="../helpers/colored-links.php"><code>.link-*</code> helper classes</a> which have <code>:hover</code> and <code>:focus</code> states.</p>
                    <div class="bd-example">

                        <p class="text-primary">.text-primary</p>
                        <p class="text-secondary">.text-secondary</p>
                        <p class="text-success">.text-success</p>
                        <p class="text-danger">.text-danger</p>
                        <p class="text-warning bg-dark">.text-warning</p>
                        <p class="text-info bg-dark">.text-info</p>
                        <p class="text-light bg-dark">.text-light</p>
                        <p class="text-dark">.text-dark</p>
                        <p class="text-body">.text-body</p>
                        <p class="text-muted">.text-muted</p>
                        <p class="text-white bg-dark">.text-white</p>
                        <p class="text-black-50">.text-black-50</p>
                        <p class="text-white-50 bg-dark">.text-white-50</p>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-primary&#34;</span><span class="p">&gt;</span>.text-primary<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-secondary&#34;</span><span class="p">&gt;</span>.text-secondary<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-success&#34;</span><span class="p">&gt;</span>.text-success<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-danger&#34;</span><span class="p">&gt;</span>.text-danger<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-warning bg-dark&#34;</span><span class="p">&gt;</span>.text-warning<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-info bg-dark&#34;</span><span class="p">&gt;</span>.text-info<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-light bg-dark&#34;</span><span class="p">&gt;</span>.text-light<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-dark&#34;</span><span class="p">&gt;</span>.text-dark<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-body&#34;</span><span class="p">&gt;</span>.text-body<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>.text-muted<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-white bg-dark&#34;</span><span class="p">&gt;</span>.text-white<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-black-50&#34;</span><span class="p">&gt;</span>.text-black-50<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-white-50 bg-dark&#34;</span><span class="p">&gt;</span>.text-white-50<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-info">
                        <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                        <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.
                    </div>

                    <h2 id="specificity">Specificity</h2>
                    <p>Sometimes contextual classes cannot be applied due to the specificity of another selector. In some cases, a sufficient workaround is to wrap your element&rsquo;s content in a <code>&lt;div&gt;</code> or more semantic element with the desired class.</p>
                    <h2 id="sass">Sass</h2>
                    <p>In addition to the following Sass functionality, consider reading about our included <a href="../customize/css-variables.php">CSS custom properties</a> (aka CSS variables) for colors and more.</p>
                    <h3 id="variables">Variables</h3>
                    <p>Most <code>color</code> utilities are generated by our theme colors, reassigned from our generic color palette variables.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$blue</span><span class="o">:</span>    <span class="mh">#0d6efd</span><span class="p">;</span>
<span class="nv">$indigo</span><span class="o">:</span>  <span class="mh">#6610f2</span><span class="p">;</span>
<span class="nv">$purple</span><span class="o">:</span>  <span class="mh">#6f42c1</span><span class="p">;</span>
<span class="nv">$pink</span><span class="o">:</span>    <span class="mh">#d63384</span><span class="p">;</span>
<span class="nv">$red</span><span class="o">:</span>     <span class="mh">#dc3545</span><span class="p">;</span>
<span class="nv">$orange</span><span class="o">:</span>  <span class="mh">#fd7e14</span><span class="p">;</span>
<span class="nv">$yellow</span><span class="o">:</span>  <span class="mh">#ffc107</span><span class="p">;</span>
<span class="nv">$green</span><span class="o">:</span>   <span class="mh">#198754</span><span class="p">;</span>
<span class="nv">$teal</span><span class="o">:</span>    <span class="mh">#20c997</span><span class="p">;</span>
<span class="nv">$cyan</span><span class="o">:</span>    <span class="mh">#0dcaf0</span><span class="p">;</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$primary</span><span class="o">:</span>       <span class="nv">$blue</span><span class="p">;</span>
<span class="nv">$secondary</span><span class="o">:</span>     <span class="nv">$gray-600</span><span class="p">;</span>
<span class="nv">$success</span><span class="o">:</span>       <span class="nv">$green</span><span class="p">;</span>
<span class="nv">$info</span><span class="o">:</span>          <span class="nv">$cyan</span><span class="p">;</span>
<span class="nv">$warning</span><span class="o">:</span>       <span class="nv">$yellow</span><span class="p">;</span>
<span class="nv">$danger</span><span class="o">:</span>        <span class="nv">$red</span><span class="p">;</span>
<span class="nv">$light</span><span class="o">:</span>         <span class="nv">$gray-100</span><span class="p">;</span>
<span class="nv">$dark</span><span class="o">:</span>          <span class="nv">$gray-900</span><span class="p">;</span>
</code></pre></div>
                    <p>Grayscale colors are also available, but only a subset are used to generate any utilities.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$white</span><span class="o">:</span>    <span class="mh">#fff</span><span class="p">;</span>
<span class="nv">$gray-100</span><span class="o">:</span> <span class="mh">#f8f9fa</span><span class="p">;</span>
<span class="nv">$gray-200</span><span class="o">:</span> <span class="mh">#e9ecef</span><span class="p">;</span>
<span class="nv">$gray-300</span><span class="o">:</span> <span class="mh">#dee2e6</span><span class="p">;</span>
<span class="nv">$gray-400</span><span class="o">:</span> <span class="mh">#ced4da</span><span class="p">;</span>
<span class="nv">$gray-500</span><span class="o">:</span> <span class="mh">#adb5bd</span><span class="p">;</span>
<span class="nv">$gray-600</span><span class="o">:</span> <span class="mh">#6c757d</span><span class="p">;</span>
<span class="nv">$gray-700</span><span class="o">:</span> <span class="mh">#495057</span><span class="p">;</span>
<span class="nv">$gray-800</span><span class="o">:</span> <span class="mh">#343a40</span><span class="p">;</span>
<span class="nv">$gray-900</span><span class="o">:</span> <span class="mh">#212529</span><span class="p">;</span>
<span class="nv">$black</span><span class="o">:</span>    <span class="mh">#000</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="map">Map</h3>
                    <p>Theme colors are then put into a Sass map so we can loop over them to generate our utilities, component modifiers, and more.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$theme-colors</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;primary&#34;</span><span class="o">:</span>    <span class="nv">$primary</span><span class="o">,</span>
  <span class="s2">&#34;secondary&#34;</span><span class="o">:</span>  <span class="nv">$secondary</span><span class="o">,</span>
  <span class="s2">&#34;success&#34;</span><span class="o">:</span>    <span class="nv">$success</span><span class="o">,</span>
  <span class="s2">&#34;info&#34;</span><span class="o">:</span>       <span class="nv">$info</span><span class="o">,</span>
  <span class="s2">&#34;warning&#34;</span><span class="o">:</span>    <span class="nv">$warning</span><span class="o">,</span>
  <span class="s2">&#34;danger&#34;</span><span class="o">:</span>     <span class="nv">$danger</span><span class="o">,</span>
  <span class="s2">&#34;light&#34;</span><span class="o">:</span>      <span class="nv">$light</span><span class="o">,</span>
  <span class="s2">&#34;dark&#34;</span><span class="o">:</span>       <span class="nv">$dark</span>
<span class="p">);</span>
</code></pre></div>
                    <p>Grayscale colors are also available as a Sass map. <strong>This map is not used to generate any utilities.</strong></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grays</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;100&#34;</span><span class="o">:</span> <span class="nv">$gray-100</span><span class="o">,</span>
  <span class="s2">&#34;200&#34;</span><span class="o">:</span> <span class="nv">$gray-200</span><span class="o">,</span>
  <span class="s2">&#34;300&#34;</span><span class="o">:</span> <span class="nv">$gray-300</span><span class="o">,</span>
  <span class="s2">&#34;400&#34;</span><span class="o">:</span> <span class="nv">$gray-400</span><span class="o">,</span>
  <span class="s2">&#34;500&#34;</span><span class="o">:</span> <span class="nv">$gray-500</span><span class="o">,</span>
  <span class="s2">&#34;600&#34;</span><span class="o">:</span> <span class="nv">$gray-600</span><span class="o">,</span>
  <span class="s2">&#34;700&#34;</span><span class="o">:</span> <span class="nv">$gray-700</span><span class="o">,</span>
  <span class="s2">&#34;800&#34;</span><span class="o">:</span> <span class="nv">$gray-800</span><span class="o">,</span>
  <span class="s2">&#34;900&#34;</span><span class="o">:</span> <span class="nv">$gray-900</span>
<span class="p">);</span>
</code></pre></div>
                    <h3 id="utilities-api">Utilities API</h3>
                    <p>Color utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="../utilities/api.php#using-the-api">Learn how to use the utilities API.</a></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;color&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">color</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">text</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">map-merge</span><span class="o">(</span>
        <span class="err">$</span><span class="nt">theme-colors</span><span class="o">,</span>
        <span class="o">(</span>
          <span class="s2">&#34;white&#34;</span><span class="nd">:</span> <span class="err">$</span><span class="nt">white</span><span class="o">,</span>
          <span class="s2">&#34;body&#34;</span><span class="nd">:</span> <span class="err">$</span><span class="nt">body-color</span><span class="o">,</span>
          <span class="s2">&#34;muted&#34;</span><span class="nd">:</span> <span class="err">$</span><span class="nt">text-muted</span><span class="o">,</span>
          <span class="s2">&#34;black-50&#34;</span><span class="nd">:</span> <span class="nt">rgba</span><span class="o">(</span><span class="err">$</span><span class="nt">black</span><span class="o">,</span> <span class="nc">.5</span><span class="o">),</span>
          <span class="s2">&#34;white-50&#34;</span><span class="nd">:</span> <span class="nt">rgba</span><span class="o">(</span><span class="err">$</span><span class="nt">white</span><span class="o">,</span> <span class="nc">.5</span><span class="o">),</span>
          <span class="s2">&#34;reset&#34;</span><span class="nd">:</span> <span class="nt">inherit</span><span class="o">,</span>
        <span class="o">)</span>
      <span class="o">)</span>
    <span class="o">),</span>
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
