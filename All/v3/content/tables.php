
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Tables · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/content/tables/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="true" aria-current="true">
                                Content
                            </button>

                            <div class="collapse show" id="content-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="reboot.php" class="d-inline-flex align-items-center rounded">Reboot</a></li>
                                    <li><a href="typography.php" class="d-inline-flex align-items-center rounded">Typography</a></li>
                                    <li><a href="images.php" class="d-inline-flex align-items-center rounded">Images</a></li>
                                    <li><a href="tables.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Tables</a></li>
                                    <li><a href="figures.php" class="d-inline-flex align-items-center rounded">Figures</a></li>
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
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false">
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/content/tables.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Tables</h1>
                    </div>
                    <p class="bd-lead">Documentation and examples for opt-in styling of tables (given their prevalent use in JavaScript plugins) with Bootstrap.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#variants">Variants</a></li>
                            <li><a href="#accented-tables">Accented tables</a>
                                <ul>
                                    <li><a href="#striped-rows">Striped rows</a></li>
                                    <li><a href="#hoverable-rows">Hoverable rows</a></li>
                                    <li><a href="#active-tables">Active tables</a></li>
                                </ul>
                            </li>
                            <li><a href="#how-do-the-variants-and-accented-tables-work">How do the variants and accented tables work?</a></li>
                            <li><a href="#table-borders">Table borders</a>
                                <ul>
                                    <li><a href="#bordered-tables">Bordered tables</a></li>
                                    <li><a href="#tables-without-borders">Tables without borders</a></li>
                                </ul>
                            </li>
                            <li><a href="#small-tables">Small tables</a></li>
                            <li><a href="#vertical-alignment">Vertical alignment</a></li>
                            <li><a href="#nesting">Nesting</a></li>
                            <li><a href="#how-nesting-works">How nesting works</a></li>
                            <li><a href="#anatomy">Anatomy</a>
                                <ul>
                                    <li><a href="#table-head">Table head</a></li>
                                    <li><a href="#table-foot">Table foot</a></li>
                                    <li><a href="#captions">Captions</a></li>
                                </ul>
                            </li>
                            <li><a href="#responsive-tables">Responsive tables</a>
                                <ul>
                                    <li><a href="#always-responsive">Always responsive</a></li>
                                    <li><a href="#breakpoint-specific">Breakpoint specific</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#loop">Loop</a></li>
                                    <li><a href="#customizing">Customizing</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="overview">Overview</h2>
                    <p>Due to the widespread use of <code>&lt;table&gt;</code> elements across third-party widgets like calendars and date pickers, Bootstrap&rsquo;s tables are <strong>opt-in</strong>. Add the base class <code>.table</code> to any <code>&lt;table&gt;</code>, then extend with our optional modifier classes or custom styles. All table styles are not inherited in Bootstrap, meaning any nested tables can be styled independent from the parent.</p>
                    <p>Using the most basic table markup, here&rsquo;s how <code>.table</code>-based tables look in Bootstrap.</p>
                    <div class="bd-example">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>#<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>First<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Last<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Handle<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Mark<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Otto<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@mdo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jacob<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Thornton<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@fat<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span> <span class="na">colspan</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Larry the Bird<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@twitter<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="variants">Variants</h2>
                    <p>Use contextual classes to color tables, table rows or individual cells.</p>
                    <div class="bd-example">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Class</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Default</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>

                                <tr class="table-primary">
                                    <th scope="row">Primary</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-secondary">
                                    <th scope="row">Secondary</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-success">
                                    <th scope="row">Success</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-danger">
                                    <th scope="row">Danger</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-warning">
                                    <th scope="row">Warning</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">Info</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-light">
                                    <th scope="row">Light</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr class="table-dark">
                                    <th scope="row">Dark</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="c">&lt;!-- On tables --&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>

<span class="c">&lt;!-- On rows --&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>

<span class="c">&lt;!-- On cells (`td` or `th`) --&gt;</span>
<span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-primary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-secondary&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-success&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-danger&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-warning&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-info&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-info">
                        <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                        <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.
                    </div>

                    <h2 id="accented-tables">Accented tables</h2>
                    <h3 id="striped-rows">Striped rows</h3>
                    <p>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code>.</p>
                    <div class="bd-example">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <p>These classes can also be added to table variants:</p>
                    <div class="bd-example">
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-striped&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-success table-striped&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="hoverable-rows">Hoverable rows</h3>
                    <p>Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
                    <div class="bd-example">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-hover&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-hover&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <p>These hoverable rows can also be combined with the striped variant:</p>
                    <div class="bd-example">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped table-hover&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="active-tables">Active tables</h3>
                    <p>Highlight a table row or cell by adding a <code>.table-active</code> class.</p>
                    <div class="bd-example">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2" class="table-active">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-active&#34;</span><span class="p">&gt;</span>
      ...
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      ...
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span> <span class="na">colspan</span><span class="o">=</span><span class="s">&#34;2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-active&#34;</span><span class="p">&gt;</span>Larry the Bird<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@twitter<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-active">
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2" class="table-active">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-active&#34;</span><span class="p">&gt;</span>
      ...
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      ...
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span> <span class="na">colspan</span><span class="o">=</span><span class="s">&#34;2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-active&#34;</span><span class="p">&gt;</span>Larry the Bird<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@twitter<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><h2 id="how-do-the-variants-and-accented-tables-work">How do the variants and accented tables work?</h2>
                    <p>For the accented tables (<a href="#striped-rows">striped rows</a>, <a href="#hoverable-rows">hoverable rows</a>, and <a href="#active-tables">active tables</a>), we used some techniques to make these effects work for all our <a href="#variants">table variants</a>:</p>
                    <ul>
                        <li>We start by setting the background of a table cell with the <code>--bs-table-bg</code> custom property. All table variants then set that custom property to colorize the table cells. This way, we don&rsquo;t get into trouble if semi-transparent colors are used as table backgrounds.</li>
                        <li>Then we add an inset box shadow on the table cells with <code>box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);</code> to layer on top of any specified <code>background-color</code>. Because we use a huge spread and no blur, the color will be monotone. Since <code>--bs-table-accent-bg</code> is unset by default, we don&rsquo;t have a default box shadow.</li>
                        <li>When either <code>.table-striped</code>, <code>.table-hover</code> or <code>.table-active</code> classes are added, the <code>--bs-table-accent-bg</code> is set to a semitransparent color to colorize the background.</li>
                        <li>For each table variant, we generate a <code>--bs-table-accent-bg</code> color with the highest contrast depending on that color. For example, the accent color for <code>.table-primary</code> is darker while <code>.table-dark</code> has a lighter accent color.</li>
                        <li>Text and border colors are generated the same way, and their colors are inherited by default.</li>
                    </ul>
                    <p>Behind the scenes it looks like this:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> table-variant</span><span class="p">(</span><span class="nv">$state</span><span class="o">,</span> <span class="nv">$background</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.table-</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span> <span class="p">{</span>
    <span class="nv">$color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nf">opaque</span><span class="p">(</span><span class="nv">$body-bg</span><span class="o">,</span> <span class="nv">$background</span><span class="p">));</span>
    <span class="nv">$hover-bg</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$background</span><span class="o">,</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$table-hover-bg-factor</span><span class="p">));</span>
    <span class="nv">$striped-bg</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$background</span><span class="o">,</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$table-striped-bg-factor</span><span class="p">));</span>
    <span class="nv">$active-bg</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$background</span><span class="o">,</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$table-active-bg-factor</span><span class="p">));</span>

    <span class="na">--#{$variable-prefix}table-bg</span><span class="o">:</span> <span class="si">#{</span><span class="nv">$background</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-striped-bg</span><span class="o">:</span> <span class="si">#{</span><span class="nv">$striped-bg</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-striped-color</span><span class="o">:</span> <span class="si">#{</span><span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$striped-bg</span><span class="p">)</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-active-bg</span><span class="o">:</span> <span class="si">#{</span><span class="nv">$active-bg</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-active-color</span><span class="o">:</span> <span class="si">#{</span><span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$active-bg</span><span class="p">)</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-hover-bg</span><span class="o">:</span> <span class="si">#{</span><span class="nv">$hover-bg</span><span class="si">}</span><span class="p">;</span>
    <span class="na">--#{$variable-prefix}table-hover-color</span><span class="o">:</span> <span class="si">#{</span><span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$hover-bg</span><span class="p">)</span><span class="si">}</span><span class="p">;</span>

    <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$background</span><span class="o">,</span> <span class="nf">percentage</span><span class="p">(</span><span class="nv">$table-border-factor</span><span class="p">));</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <h2 id="table-borders">Table borders</h2>
                    <h3 id="bordered-tables">Bordered tables</h3>
                    <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p>
                    <div class="bd-example">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-bordered&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <p><a href="../utilities/borders.php#border-color">Border color utilities</a> can be added to change colors:</p>
                    <div class="bd-example">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-bordered border-primary&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="tables-without-borders">Tables without borders</h3>
                    <p>Add <code>.table-borderless</code> for a table without borders.</p>
                    <div class="bd-example">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-borderless&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <table class="table table-dark table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-borderless&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="small-tables">Small tables</h2>
                    <p>Add <code>.table-sm</code> to make any <code>.table</code> more compact by cutting all cell <code>padding</code> in half.</p>
                    <div class="bd-example">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-sm&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <table class="table table-dark table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>

                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-dark table-sm&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="vertical-alignment">Vertical alignment</h2>
                    <p>Table cells of <code>&lt;thead&gt;</code> are always vertical aligned to the bottom. Table cells in <code>&lt;tbody&gt;</code> inherit their alignment from <code>&lt;table&gt;</code> and are aligned to the the top by default. Use the <a href="../utilities/vertical-align.php">vertical align</a> classes to re-align where needed.</p>
                    <div class="bd-example">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col" class="w-25">Heading 1</th>
                                        <th scope="col" class="w-25">Heading 2</th>
                                        <th scope="col" class="w-25">Heading 3</th>
                                        <th scope="col" class="w-25">Heading 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                    </tr>
                                    <tr class="align-bottom">
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                    </tr>
                                    <tr>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                        <td class="align-top">This cell is aligned to the top.</td>
                                        <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table align-middle&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
        ...
      <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
        ...
      <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">tr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-bottom&#34;</span><span class="p">&gt;</span>
        ...
      <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">td</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-top&#34;</span><span class="p">&gt;</span>This cell is aligned to the top.<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="nesting">Nesting</h2>
                    <p>Border styles, active styles, and table variants are not inherited by nested tables.</p>
                    <div class="bd-example">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Header</th>
                                                    <th scope="col">Header</th>
                                                    <th scope="col">Header</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">A</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">B</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">C</th>
                                                    <td>First</td>
                                                    <td>Last</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-striped&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    ...
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span> <span class="na">colspan</span><span class="o">=</span><span class="s">&#34;4&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table mb-0&#34;</span><span class="p">&gt;</span>
          ...
        <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><h2 id="how-nesting-works">How nesting works</h2>
                    <p>To prevent <em>any</em> styles from leaking to nested tables, we use the child combinator (<code>&gt;</code>) selector in our CSS. Since we need to target all the <code>td</code>s and <code>th</code>s in the <code>thead</code>, <code>tbody</code>, and <code>tfoot</code>, our selector would look pretty long without it. As such, we use the rather odd looking <code>.table &gt; :not(caption) &gt; * &gt; *</code> selector to target all <code>td</code>s and <code>th</code>s of the <code>.table</code>, but none of any potential nested tables.</p>
                    <p>Note that if you add <code>&lt;tr&gt;</code>s as direct children of a table, those <code>&lt;tr&gt;</code> will be wrapped in a <code>&lt;tbody&gt;</code> by default, thus making our selectors work as intended.</p>
                    <h2 id="anatomy">Anatomy</h2>
                    <h3 id="table-head">Table head</h3>
                    <p>Similar to tables and dark tables, use the modifier classes <code>.table-light</code> or <code>.table-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.</p>
                    <div class="bd-example">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-light&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-dark&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><h3 id="table-foot">Table foot</h3>
                    <div class="bd-example">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                    <td>Footer</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tfoot</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tfoot</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><h3 id="captions">Captions</h3>
                    <p>A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it&rsquo;s about and decide if they want to read it.</p>
                    <div class="bd-example">
                        <table class="table">
                            <caption>List of users</caption>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table table-sm&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">caption</span><span class="p">&gt;</span>List of users<span class="p">&lt;/</span><span class="nt">caption</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
</code></pre></div><p>You can also put the <code>&lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>.</p>
                    <div class="bd-example">
                        <table class="table caption-top">
                            <caption>List of users</caption>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table caption-top&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">caption</span><span class="p">&gt;</span>List of users<span class="p">&lt;/</span><span class="nt">caption</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">thead</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>#<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>First<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Last<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Handle<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">thead</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">tbody</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Mark<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Otto<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@mdo<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Jacob<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Thornton<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@fat<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">tr</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">th</span> <span class="na">scope</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">th</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>Larry<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>the Bird<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">td</span><span class="p">&gt;</span>@twitter<span class="p">&lt;/</span><span class="nt">td</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">tr</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">tbody</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="responsive-tables">Responsive tables</h2>
                    <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code>.table</code> with <code>.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code>.table-responsive{-sm|-md|-lg|-xl|-xxl}</code>.</p>
                    <div class="bd-callout bd-callout-warning">
                        <h5 id="vertical-clippingtruncation">Vertical clipping/truncation</h5>
                        <p>Responsive tables make use of <code>overflow-y: hidden</code>, which clips off any content that goes beyond the bottom or top edges of the table. In particular, this can clip off dropdown menus and other third-party widgets.
                    </div>

                    <h3 id="always-responsive">Always responsive</h3>
                    <p>Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.</p>
                    <div class="bd-example">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h3 id="breakpoint-specific">Breakpoint specific</h3>
                    <p>Use <code>.table-responsive{-sm|-md|-lg|-xl|-xxl}</code> as needed to create responsive tables up to a particular breakpoint. From that breakpoint and up, the table will behave normally and not scroll horizontally.</p>
                    <p><strong>These tables may appear broken until their responsive styles apply at specific viewport widths.</strong></p>



                    <div class="bd-example">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example">
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example">
                        <div class="table-responsive-lg">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="bd-example">
                        <div class="table-responsive-xxl">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                        <th scope="col">Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                        <td>Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-sm&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-md&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-lg&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-xl&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table-responsive-xxl&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">table</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;table&#34;</span><span class="p">&gt;</span>
    ...
  <span class="p">&lt;/</span><span class="nt">table</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$table-cell-padding-y</span><span class="o">:</span>        <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$table-cell-padding-x</span><span class="o">:</span>        <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$table-cell-padding-y-sm</span><span class="o">:</span>     <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$table-cell-padding-x-sm</span><span class="o">:</span>     <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>

<span class="nv">$table-cell-vertical-align</span><span class="o">:</span>   <span class="ni">top</span><span class="p">;</span>

<span class="nv">$table-color</span><span class="o">:</span>                 <span class="nv">$body-color</span><span class="p">;</span>
<span class="nv">$table-bg</span><span class="o">:</span>                    <span class="ni">transparent</span><span class="p">;</span>
<span class="nv">$table-accent-bg</span><span class="o">:</span>             <span class="ni">transparent</span><span class="p">;</span>

<span class="nv">$table-th-font-weight</span><span class="o">:</span>        <span class="n">null</span><span class="p">;</span>

<span class="nv">$table-striped-color</span><span class="o">:</span>         <span class="nv">$table-color</span><span class="p">;</span>
<span class="nv">$table-striped-bg-factor</span><span class="o">:</span>     <span class="mf">.05</span><span class="p">;</span>
<span class="nv">$table-striped-bg</span><span class="o">:</span>            <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="nv">$table-striped-bg-factor</span><span class="p">);</span>

<span class="nv">$table-active-color</span><span class="o">:</span>          <span class="nv">$table-color</span><span class="p">;</span>
<span class="nv">$table-active-bg-factor</span><span class="o">:</span>      <span class="mf">.1</span><span class="p">;</span>
<span class="nv">$table-active-bg</span><span class="o">:</span>             <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="nv">$table-active-bg-factor</span><span class="p">);</span>

<span class="nv">$table-hover-color</span><span class="o">:</span>           <span class="nv">$table-color</span><span class="p">;</span>
<span class="nv">$table-hover-bg-factor</span><span class="o">:</span>       <span class="mf">.075</span><span class="p">;</span>
<span class="nv">$table-hover-bg</span><span class="o">:</span>              <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="nv">$table-hover-bg-factor</span><span class="p">);</span>

<span class="nv">$table-border-factor</span><span class="o">:</span>         <span class="mf">.1</span><span class="p">;</span>
<span class="nv">$table-border-width</span><span class="o">:</span>          <span class="nv">$border-width</span><span class="p">;</span>
<span class="nv">$table-border-color</span><span class="o">:</span>          <span class="nv">$border-color</span><span class="p">;</span>

<span class="nv">$table-striped-order</span><span class="o">:</span>         <span class="n">odd</span><span class="p">;</span>

<span class="nv">$table-group-separator-color</span><span class="o">:</span> <span class="ni">currentColor</span><span class="p">;</span>

<span class="nv">$table-caption-color</span><span class="o">:</span>         <span class="nv">$text-muted</span><span class="p">;</span>

<span class="nv">$table-bg-scale</span><span class="o">:</span>              <span class="o">-</span><span class="mi">80</span><span class="kt">%</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="loop">Loop</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$table-variants</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;primary&#34;</span><span class="o">:</span>    <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$primary</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;secondary&#34;</span><span class="o">:</span>  <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$secondary</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;success&#34;</span><span class="o">:</span>    <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$success</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;info&#34;</span><span class="o">:</span>       <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$info</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;warning&#34;</span><span class="o">:</span>    <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$warning</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;danger&#34;</span><span class="o">:</span>     <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$danger</span><span class="o">,</span> <span class="nv">$table-bg-scale</span><span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;light&#34;</span><span class="o">:</span>      <span class="nv">$light</span><span class="o">,</span>
  <span class="s2">&#34;dark&#34;</span><span class="o">:</span>       <span class="nv">$dark</span><span class="o">,</span>
<span class="p">);</span>
</code></pre></div>
                    <h3 id="customizing">Customizing</h3>
                    <ul>
                        <li>The factor variables (<code>$table-striped-bg-factor</code>, <code>$table-active-bg-factor</code> &amp; <code>$table-hover-bg-factor</code>) are used to determine the contrast in table variants.</li>
                        <li>Apart from the light &amp; dark table variants, theme colors are lightened by the <code>$table-bg-level</code> variable.</li>
                    </ul>

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
