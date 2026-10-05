
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Display property · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/utilities/display/">

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
                                    <li><a href="colors.php" class="d-inline-flex align-items-center rounded">Colors</a></li>
                                    <li><a href="display.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Display</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/utilities/display.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Display property</h1>
                    </div>
                    <p class="bd-lead">Quickly and responsively toggle the display value of components and more with our display utilities. Includes support for some of the more common values, as well as some extras for controlling display when printing.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#notation">Notation</a></li>
                            <li><a href="#examples">Examples</a></li>
                            <li><a href="#hiding-elements">Hiding elements</a></li>
                            <li><a href="#display-in-print">Display in print</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#utilities-api">Utilities API</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="how-it-works">How it works</h2>
                    <p>Change the value of the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code>display</code> property</a> with our responsive display utility classes. We purposely support only a subset of all possible values for <code>display</code>. Classes can be combined for various effects as you need.</p>
                    <h2 id="notation">Notation</h2>
                    <p>Display utility classes that apply to all <a href="../layout/breakpoints.php">breakpoints</a>, from <code>xs</code> to <code>xxl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code>min-width: 0;</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
                    <p>As such, the classes are named using the format:</p>
                    <ul>
                        <li><code>.d-{value}</code> for <code>xs</code></li>
                        <li><code>.d-{breakpoint}-{value}</code> for <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>.</li>
                    </ul>
                    <p>Where <em>value</em> is one of:</p>
                    <ul>
                        <li><code>none</code></li>
                        <li><code>inline</code></li>
                        <li><code>inline-block</code></li>
                        <li><code>block</code></li>
                        <li><code>grid</code></li>
                        <li><code>table</code></li>
                        <li><code>table-cell</code></li>
                        <li><code>table-row</code></li>
                        <li><code>flex</code></li>
                        <li><code>inline-flex</code></li>
                    </ul>
                    <p>The display values can be altered by changing the <code>$displays</code> variable and recompiling the SCSS.</p>
                    <p>The media queries affect screen widths with the given breakpoint <em>or larger</em>. For example, <code>.d-lg-none</code> sets <code>display: none;</code> on <code>lg</code>, <code>xl</code>, and <code>xxl</code> screens.</p>
                    <h2 id="examples">Examples</h2>
                    <div class="bd-example">
                        <div class="d-inline p-2 bg-primary text-white">d-inline</div>
                        <div class="d-inline p-2 bg-dark text-white">d-inline</div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-inline p-2 bg-primary text-white&#34;</span><span class="p">&gt;</span>d-inline<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-inline p-2 bg-dark text-white&#34;</span><span class="p">&gt;</span>d-inline<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <span class="d-block p-2 bg-primary text-white">d-block</span>
                        <span class="d-block p-2 bg-dark text-white">d-block</span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block p-2 bg-primary text-white&#34;</span><span class="p">&gt;</span>d-block<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-block p-2 bg-dark text-white&#34;</span><span class="p">&gt;</span>d-block<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="hiding-elements">Hiding elements</h2>
                    <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide elements responsively for each screen size.</p>
                    <p>To hide elements simply use the <code>.d-none</code> class or one of the <code>.d-{sm,md,lg,xl,xxl}-none</code> classes for any responsive screen variation.</p>
                    <p>To show an element only on a given interval of screen sizes you can combine one <code>.d-*-none</code> class with a <code>.d-*-*</code> class, for example <code>.d-none .d-md-block .d-xl-none .d-xxl-none</code> will hide the element for all screen sizes except on medium and large devices.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Screen size</th>
                                <th>Class</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hidden on all</td>
                                <td><code>.d-none</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on xs</td>
                                <td><code>.d-none .d-sm-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on sm</td>
                                <td><code>.d-sm-none .d-md-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on md</td>
                                <td><code>.d-md-none .d-lg-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on lg</td>
                                <td><code>.d-lg-none .d-xl-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on xl</td>
                                <td><code>.d-xl-none .d-xxl-block</code></td>
                            </tr>
                            <tr>
                                <td>Hidden only on xxl</td>
                                <td><code>.d-xxl-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible on all</td>
                                <td><code>.d-block</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on xs</td>
                                <td><code>.d-block .d-sm-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on sm</td>
                                <td><code>.d-none .d-sm-block .d-md-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on md</td>
                                <td><code>.d-none .d-md-block .d-lg-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on lg</td>
                                <td><code>.d-none .d-lg-block .d-xl-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on xl</td>
                                <td><code>.d-none .d-xl-block .d-xxl-none</code></td>
                            </tr>
                            <tr>
                                <td>Visible only on xxl</td>
                                <td><code>.d-none .d-xxl-block</code></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="bd-example">
                        <div class="d-lg-none">hide on lg and wider screens</div>
                        <div class="d-none d-lg-block">hide on screens smaller than lg</div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-lg-none&#34;</span><span class="p">&gt;</span>hide on lg and wider screens<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-none d-lg-block&#34;</span><span class="p">&gt;</span>hide on screens smaller than lg<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="display-in-print">Display in print</h2>
                    <p>Change the <code>display</code> value of elements when printing with our print display utility classes. Includes support for the same <code>display</code> values as our responsive <code>.d-*</code> utilities.</p>
                    <ul>
                        <li><code>.d-print-none</code></li>
                        <li><code>.d-print-inline</code></li>
                        <li><code>.d-print-inline-block</code></li>
                        <li><code>.d-print-block</code></li>
                        <li><code>.d-print-grid</code></li>
                        <li><code>.d-print-table</code></li>
                        <li><code>.d-print-table-row</code></li>
                        <li><code>.d-print-table-cell</code></li>
                        <li><code>.d-print-flex</code></li>
                        <li><code>.d-print-inline-flex</code></li>
                    </ul>
                    <p>The print and display classes can be combined.</p>
                    <div class="bd-example">
                        <div class="d-print-none">Screen Only (Hide on print only)</div>
                        <div class="d-none d-print-block">Print Only (Hide on screen only)</div>
                        <div class="d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-print-none&#34;</span><span class="p">&gt;</span>Screen Only (Hide on print only)<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-none d-print-block&#34;</span><span class="p">&gt;</span>Print Only (Hide on screen only)<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-none d-lg-block d-print-block&#34;</span><span class="p">&gt;</span>Hide up to large on screen, but always show on print<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="utilities-api">Utilities API</h3>
                    <p>Display utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="../utilities/api.php#using-the-api">Learn how to use the utilities API.</a></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;display&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">print</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">display</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">d</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">inline</span> <span class="nt">inline-block</span> <span class="nt">block</span> <span class="nt">grid</span> <span class="nt">table</span> <span class="nt">table-row</span> <span class="nt">table-cell</span> <span class="nt">flex</span> <span class="nt">inline-flex</span> <span class="nt">none</span>
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
