
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Breakpoints are customizable widths that determine how your responsive layout behaves across device or viewport sizes in Bootstrap.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Breakpoints · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/layout/breakpoints/">
       
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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="true" aria-current="true">
                                Layout
                            </button>
                            <div class="collapse show" id="layout-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="breakpoints.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Breakpoints</a></li>
                                    <li><a href="containers.php" class="d-inline-flex align-items-center rounded">Containers</a></li>
                                    <li><a href="grid.php" class="d-inline-flex align-items-center rounded">Grid</a></li>
                                    <li><a href="columns.php" class="d-inline-flex align-items-center rounded">Columns</a></li>
                                    <li><a href="gutters.php" class="d-inline-flex align-items-center rounded">Gutters</a></li>
                                    <li><a href="utilities.php" class="d-inline-flex align-items-center rounded">Utilities</a></li>
                                    <li><a href="z-index.php" class="d-inline-flex align-items-center rounded">Z-index</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/layout/breakpoints.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Breakpoints</h1>
                    </div>
                    <p class="bd-lead">Breakpoints are customizable widths that determine how your responsive layout behaves across device or viewport sizes in Bootstrap.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#core-concepts">Core concepts</a></li>
                            <li><a href="#available-breakpoints">Available breakpoints</a></li>
                            <li><a href="#media-queries">Media queries</a>
                                <ul>
                                    <li><a href="#min-width">Min-width</a></li>
                                    <li><a href="#max-width">Max-width</a></li>
                                    <li><a href="#single-breakpoint">Single breakpoint</a></li>
                                    <li><a href="#between-breakpoints">Between breakpoints</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="core-concepts">Core concepts</h2>
                    <ul>
                        <li>
                            <p><strong>Breakpoints are the building blocks of responsive design.</strong> Use them to control when your layout can be adapted at a particular viewport or device size.</p>
                        </li>
                        <li>
                            <p><strong>Use media queries to architect your CSS by breakpoint.</strong> Media queries are a feature of CSS that allow you to conditionally apply styles based on a set of browser and operating system parameters. We most commonly use <code>min-width</code> in our media queries.</p>
                        </li>
                        <li>
                            <p><strong>Mobile first, responsive design is the goal.</strong> Bootstrap&rsquo;s CSS aims to apply the bare minimum of styles to make a layout work at the smallest breakpoint, and then layers on styles to adjust that design for larger devices. This optimizes your CSS, improves rendering time, and provides a great experience for your visitors.</p>
                        </li>
                    </ul>
                    <h2 id="available-breakpoints">Available breakpoints</h2>
                    <p>Bootstrap includes six default breakpoints, sometimes referred to as <em>grid tiers</em>, for building responsively. These breakpoints can be customized if you&rsquo;re using our source Sass files.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Breakpoint</th>
                                <th>Class infix</th>
                                <th>Dimensions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>X-Small</td>
                                <td><em>None</em></td>
                                <td>&lt;576px</td>
                            </tr>
                            <tr>
                                <td>Small</td>
                                <td><code>sm</code></td>
                                <td>&ge;576px</td>
                            </tr>
                            <tr>
                                <td>Medium</td>
                                <td><code>md</code></td>
                                <td>&ge;768px</td>
                            </tr>
                            <tr>
                                <td>Large</td>
                                <td><code>lg</code></td>
                                <td>&ge;992px</td>
                            </tr>
                            <tr>
                                <td>Extra large</td>
                                <td><code>xl</code></td>
                                <td>&ge;1200px</td>
                            </tr>
                            <tr>
                                <td>Extra extra large</td>
                                <td><code>xxl</code></td>
                                <td>&ge;1400px</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Each breakpoint was chosen to comfortably hold containers whose widths are multiples of 12. Breakpoints are also representative of a subset of common device sizes and viewport dimensions—they don&rsquo;t specifically target every use case or device. Instead, the ranges provide a strong and consistent foundation to build on for nearly any device.</p>
                    <p>These breakpoints are customizable via Sass—you&rsquo;ll find them in a Sass map in our <code>_variables.scss</code> stylesheet.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">576</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">992</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xl</span><span class="o">:</span> <span class="mi">1200</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xxl</span><span class="o">:</span> <span class="mi">1400</span><span class="kt">px</span>
<span class="p">);</span>
</code></pre></div>
                    <p>For more information and examples on how to modify our Sass maps and variables, please refer to <a href="grid.php#sass">the Sass section of the Grid documentation</a>.</p>
                    <h2 id="media-queries">Media queries</h2>
                    <p>Since Bootstrap is developed to be mobile first, we use a handful of <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Media_Queries/Using_media_queries">media queries</a> to create sensible breakpoints for our layouts and interfaces. These breakpoints are mostly based on minimum viewport widths and allow us to scale up elements as the viewport changes.</p>
                    <h3 id="min-width">Min-width</h3>
                    <p>Bootstrap primarily uses the following media query ranges—or breakpoints—in our source Sass files for our layout, grid system, and components.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Source mixins
</span><span class="c1"></span>
<span class="c1">// No media query necessary for xs breakpoint as it&#39;s effectively `@media (min-width: 0) { ... }`
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">xxl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Usage
</span><span class="c1"></span>
<span class="c1">// Example: Hide starting at `min-width: 0`, and then show at the `sm` breakpoint
</span><span class="c1"></span><span class="nc">.custom-class</span> <span class="p">{</span>
  <span class="na">display</span><span class="o">:</span> <span class="ni">none</span><span class="p">;</span>
<span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.custom-class</span> <span class="p">{</span>
    <span class="na">display</span><span class="o">:</span> <span class="ni">block</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div><p>These Sass mixins translate in our compiled CSS using the values declared in our Sass variables. For example:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// X-Small devices (portrait phones, less than 576px)
</span><span class="c1">// No media query for `xs` since this is the default in Bootstrap
</span><span class="c1"></span>
<span class="c1">// Small devices (landscape phones, 576px and up)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">576</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, 768px and up)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, 992px and up)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">992</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// X-Large devices (large desktops, 1200px and up)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">1200</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// XX-Large devices (larger desktops, 1400px and up)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">1400</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
</code></pre></div><h3 id="max-width">Max-width</h3>
                    <p>We occasionally use media queries that go in the other direction (the given screen size <em>or smaller</em>):</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// No media query necessary for xs breakpoint as it&#39;s effectively `@media (max-width: 0) { ... }`
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">xxl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Example: Style from medium breakpoint and down
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> media-breakpoint-down</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
  <span class="nc">.custom-class</span> <span class="p">{</span>
    <span class="na">display</span><span class="o">:</span> <span class="ni">block</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div><p>These mixins take those declared breakpoints, subtract <code>.02px</code> from them, and use them as our <code>max-width</code> values. For example:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// X-Small devices (portrait phones, less than 576px)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">575</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Small devices (landscape phones, less than 768px)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">767</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Medium devices (tablets, less than 992px)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">991</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// Large devices (desktops, less than 1200px)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">1199</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// X-Large devices (large desktops, less than 1400px)
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">1399</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>

<span class="c1">// XX-Large devices (larger desktops)
</span><span class="c1">// No media query since the xxl breakpoint has no upper bound on its width
</span></code></pre></div><div class="bd-callout bd-callout-warning">
                        <strong>Why subtract .02px?</strong> Browsers don&rsquo;t currently support <a href="https://www.w3.org/TR/mediaqueries-4/#range-context">range context queries</a>, so we work around the limitations of <a href="https://www.w3.org/TR/mediaqueries-4/#mq-min-max"><code>min-</code> and <code>max-</code> prefixes</a> and viewports with fractional widths (which can occur under certain conditions on high-dpi devices, for instance) by using values with higher precision.
                    </div>

                    <h3 id="single-breakpoint">Single breakpoint</h3>
                    <p>There are also media queries and mixins for targeting a single segment of screen sizes using the minimum and maximum breakpoint widths.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">xs</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
<span class="k">@include</span><span class="nd"> media-breakpoint-only</span><span class="p">(</span><span class="n">xxl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
</code></pre></div><p>For example the <code>@include media-breakpoint-only(md) { ... }</code> will result in :</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="p">)</span> <span class="ow">and</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">991</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
</code></pre></div><h3 id="between-breakpoints">Between breakpoints</h3>
                    <p>Similarly, media queries may span multiple breakpoint widths:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@include</span><span class="nd"> media-breakpoint-between</span><span class="p">(</span><span class="n">md</span><span class="o">,</span> <span class="n">xl</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
</code></pre></div><p>Which results in:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Example
</span><span class="c1">// Apply styles starting from medium devices and up to extra large devices
</span><span class="c1"></span><span class="k">@media</span> <span class="p">(</span><span class="na">min-width</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="p">)</span> <span class="ow">and</span> <span class="p">(</span><span class="na">max-width</span><span class="o">:</span> <span class="mi">1199</span><span class="mf">.98</span><span class="kt">px</span><span class="p">)</span> <span class="p">{</span> <span class="nc">...</span> <span class="p">}</span>
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
