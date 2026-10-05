
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Typography · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/content/typography/">

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
                                    <li><a href="typography.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Typography</a></li>
                                    <li><a href="images.php" class="d-inline-flex align-items-center rounded">Images</a></li>
                                    <li><a href="tables.php" class="d-inline-flex align-items-center rounded">Tables</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/content/typography.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Typography</h1>
                    </div>
                    <p class="bd-lead">Documentation and examples for Bootstrap typography, including global settings, headings, body text, lists, and more.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#global-settings">Global settings</a></li>
                            <li><a href="#headings">Headings</a>
                                <ul>
                                    <li><a href="#customizing-headings">Customizing headings</a></li>
                                </ul>
                            </li>
                            <li><a href="#display-headings">Display headings</a></li>
                            <li><a href="#lead">Lead</a></li>
                            <li><a href="#inline-text-elements">Inline text elements</a></li>
                            <li><a href="#text-utilities">Text utilities</a></li>
                            <li><a href="#abbreviations">Abbreviations</a></li>
                            <li><a href="#blockquotes">Blockquotes</a>
                                <ul>
                                    <li><a href="#naming-a-source">Naming a source</a></li>
                                    <li><a href="#alignment">Alignment</a></li>
                                </ul>
                            </li>
                            <li><a href="#lists">Lists</a>
                                <ul>
                                    <li><a href="#unstyled">Unstyled</a></li>
                                    <li><a href="#inline">Inline</a></li>
                                    <li><a href="#description-list-alignment">Description list alignment</a></li>
                                </ul>
                            </li>
                            <li><a href="#responsive-font-sizes">Responsive font sizes</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#mixins">Mixins</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="global-settings">Global settings</h2>
                    <p>Bootstrap sets basic global display, typography, and link styles. When more control is needed, check out the <a href="../utilities/text.php">textual utility classes</a>.</p>
                    <ul>
                        <li>Use a <a href="../content/reboot.php#native-font-stack">native font stack</a> that selects the best <code>font-family</code> for each OS and device.</li>
                        <li>For a more inclusive and accessible type scale, we use the browser&rsquo;s default root <code>font-size</code> (typically 16px) so visitors can customize their browser defaults as needed.</li>
                        <li>Use the <code>$font-family-base</code>, <code>$font-size-base</code>, and <code>$line-height-base</code> attributes as our typographic base applied to the <code>&lt;body&gt;</code>.</li>
                        <li>Set the global link color via <code>$link-color</code>.</li>
                        <li>Use <code>$body-bg</code> to set a <code>background-color</code> on the <code>&lt;body&gt;</code> (<code>#fff</code> by default).</li>
                    </ul>
                    <p>These styles can be found within <code>_reboot.scss</code>, and the global variables are defined in <code>_variables.scss</code>. Make sure to set <code>$font-size-base</code> in <code>rem</code>.</p>
                    <h2 id="headings">Headings</h2>
                    <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <code>&lt;h1&gt;&lt;/h1&gt;</code>
                                </td>
                                <td><span class="h1">h1. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <code>&lt;h2&gt;&lt;/h2&gt;</code>
                                </td>
                                <td><span class="h2">h2. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <code>&lt;h3&gt;&lt;/h3&gt;</code>
                                </td>
                                <td><span class="h3">h3. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <code>&lt;h4&gt;&lt;/h4&gt;</code>
                                </td>
                                <td><span class="h4">h4. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <code>&lt;h5&gt;&lt;/h5&gt;</code>
                                </td>
                                <td><span class="h5">h5. Bootstrap heading</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <code>&lt;h6&gt;&lt;/h6&gt;</code>
                                </td>
                                <td><span class="h6">h6. Bootstrap heading</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span>h1. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h2</span><span class="p">&gt;</span>h2. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h2</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h3</span><span class="p">&gt;</span>h3. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h3</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h4</span><span class="p">&gt;</span>h4. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h5</span><span class="p">&gt;</span>h5. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h6</span><span class="p">&gt;</span>h6. Bootstrap heading<span class="p">&lt;/</span><span class="nt">h6</span><span class="p">&gt;</span>
</code></pre></div><p><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>
                    <div class="bd-example">
                        <p class="h1">h1. Bootstrap heading</p>
                        <p class="h2">h2. Bootstrap heading</p>
                        <p class="h3">h3. Bootstrap heading</p>
                        <p class="h4">h4. Bootstrap heading</p>
                        <p class="h5">h5. Bootstrap heading</p>
                        <p class="h6">h6. Bootstrap heading</p>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h1&#34;</span><span class="p">&gt;</span>h1. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h2&#34;</span><span class="p">&gt;</span>h2. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h3&#34;</span><span class="p">&gt;</span>h3. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h4&#34;</span><span class="p">&gt;</span>h4. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h5&#34;</span><span class="p">&gt;</span>h5. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;h6&#34;</span><span class="p">&gt;</span>h6. Bootstrap heading<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="customizing-headings">Customizing headings</h3>
                    <p>Use the included utility classes to recreate the small secondary heading text from Bootstrap 3.</p>
                    <div class="bd-example">
                        <h3>
                            Fancy display heading
                            <small class="text-muted">With faded secondary text</small>
                        </h3>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">h3</span><span class="p">&gt;</span>
  Fancy display heading
  <span class="p">&lt;</span><span class="nt">small</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-muted&#34;</span><span class="p">&gt;</span>With faded secondary text<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">h3</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="display-headings">Display headings</h2>
                    <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated heading style.</p>
                    <div class="bd-example">
                        <div class="display-1 pb-3 mb-3 border-bottom">Display 1</div>
                        <div class="display-2 pb-3 mb-3 border-bottom">Display 2</div>
                        <div class="display-3 pb-3 mb-3 border-bottom">Display 3</div>
                        <div class="display-4 pb-3 mb-3 border-bottom">Display 4</div>
                        <div class="display-5 pb-3 mb-3 border-bottom">Display 5</div>
                        <div class="display-6">Display 6</div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-1&#34;</span><span class="p">&gt;</span>Display 1<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-2&#34;</span><span class="p">&gt;</span>Display 2<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-3&#34;</span><span class="p">&gt;</span>Display 3<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-4&#34;</span><span class="p">&gt;</span>Display 4<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-5&#34;</span><span class="p">&gt;</span>Display 5<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">h1</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;display-6&#34;</span><span class="p">&gt;</span>Display 6<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
</code></pre></div><p>Display headings are configured via the <code>$display-font-sizes</code> Sass map and two variables, <code>$display-font-weight</code> and <code>$display-line-height</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$display-font-sizes</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">1</span><span class="o">:</span> <span class="mi">5</span><span class="kt">rem</span><span class="o">,</span>
  <span class="na">2</span><span class="o">:</span> <span class="mi">4</span><span class="mf">.5</span><span class="kt">rem</span><span class="o">,</span>
  <span class="na">3</span><span class="o">:</span> <span class="mi">4</span><span class="kt">rem</span><span class="o">,</span>
  <span class="na">4</span><span class="o">:</span> <span class="mi">3</span><span class="mf">.5</span><span class="kt">rem</span><span class="o">,</span>
  <span class="na">5</span><span class="o">:</span> <span class="mi">3</span><span class="kt">rem</span><span class="o">,</span>
  <span class="na">6</span><span class="o">:</span> <span class="mi">2</span><span class="mf">.5</span><span class="kt">rem</span>
<span class="p">);</span>

<span class="nv">$display-font-weight</span><span class="o">:</span> <span class="mi">300</span><span class="p">;</span>
<span class="nv">$display-line-height</span><span class="o">:</span> <span class="nv">$headings-line-height</span><span class="p">;</span>
</code></pre></div>
                    <h2 id="lead">Lead</h2>
                    <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
                    <div class="bd-example">
                        <p class="lead">
                            This is a lead paragraph. It stands out from regular paragraphs.
                        </p>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;lead&#34;</span><span class="p">&gt;</span>
  This is a lead paragraph. It stands out from regular paragraphs.
<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="inline-text-elements">Inline text elements</h2>
                    <p>Styling for common inline HTML5 elements.</p>
                    <div class="bd-example">
                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                        <p><u>This line of text will render as underlined.</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>You can use the mark tag to <span class="p">&lt;</span><span class="nt">mark</span><span class="p">&gt;</span>highlight<span class="p">&lt;/</span><span class="nt">mark</span><span class="p">&gt;</span> text.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">del</span><span class="p">&gt;</span>This line of text is meant to be treated as deleted text.<span class="p">&lt;/</span><span class="nt">del</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">s</span><span class="p">&gt;</span>This line of text is meant to be treated as no longer accurate.<span class="p">&lt;/</span><span class="nt">s</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">ins</span><span class="p">&gt;</span>This line of text is meant to be treated as an addition to the document.<span class="p">&lt;/</span><span class="nt">ins</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">u</span><span class="p">&gt;</span>This line of text will render as underlined.<span class="p">&lt;/</span><span class="nt">u</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">small</span><span class="p">&gt;</span>This line of text is meant to be treated as fine print.<span class="p">&lt;/</span><span class="nt">small</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">strong</span><span class="p">&gt;</span>This line rendered as bold text.<span class="p">&lt;/</span><span class="nt">strong</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">em</span><span class="p">&gt;</span>This line rendered as italicized text.<span class="p">&lt;/</span><span class="nt">em</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span></code></pre></div>
                    <p>Beware that those tags should be used for semantic purpose:</p>
                    <ul>
                        <li><code>&lt;mark&gt;</code> represents text which is marked or highlighted for reference or notation purposes.</li>
                        <li><code>&lt;small&gt;</code> represents side-comments and small print, like copyright and legal text.</li>
                        <li><code>&lt;s&gt;</code> represents element that are no longer relevant or no longer accurate.</li>
                        <li><code>&lt;u&gt;</code> represents a span of inline text which should be rendered in a way that indicates that it has a non-textual annotation.</li>
                    </ul>
                    <p>If you want to style your text, you should use the following classes instead:</p>
                    <ul>
                        <li><code>.mark</code> will apply the same styles as <code>&lt;mark&gt;</code>.</li>
                        <li><code>.small</code> will apply the same styles as <code>&lt;small&gt;</code>.</li>
                        <li><code>.text-decoration-underline</code> will apply the same styles as <code>&lt;u&gt;</code>.</li>
                        <li><code>.text-decoration-line-through</code> will apply the same styles as <code>&lt;s&gt;</code>.</li>
                    </ul>
                    <p>While not shown above, feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance, while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>
                    <h2 id="text-utilities">Text utilities</h2>
                    <p>Change text alignment, transform, style, weight, line-height, decoration and color with our <a href="../utilities/text.php">text utilities</a> and <a href="../utilities/colors.php">color utilities</a>.</p>
                    <h2 id="abbreviations">Abbreviations</h2>
                    <p>Stylized implementation of HTML&rsquo;s <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations have a default underline and gain a help cursor to provide additional context on hover and to users of assistive technologies.</p>
                    <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
                    <div class="bd-example">
                        <p><abbr title="attribute">attr</abbr></p>
                        <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">abbr</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;attribute&#34;</span><span class="p">&gt;</span>attr<span class="p">&lt;/</span><span class="nt">abbr</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">abbr</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;HyperText Markup Language&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;initialism&#34;</span><span class="p">&gt;</span>HTML<span class="p">&lt;/</span><span class="nt">abbr</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="blockquotes">Blockquotes</h2>
                    <p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class=&quot;blockquote&quot;&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
                    <div class="bd-example">
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">blockquote</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>A well-known quote, contained in a blockquote element.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">blockquote</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="naming-a-source">Naming a source</h3>
                    <p>The HTML spec requires that blockquote attribution be placed outside the <code>&lt;blockquote&gt;</code>. When providing attribution, wrap your <code>&lt;blockquote&gt;</code> in a <code>&lt;figure&gt;</code> and use a <code>&lt;figcaption&gt;</code> or a block level element (e.g., <code>&lt;p&gt;</code>) with the <code>.blockquote-footer</code> class. Be sure to wrap the name of the source work in <code>&lt;cite&gt;</code> as well.</p>
                    <div class="bd-example">
                        <figure>
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">figure</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">blockquote</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>A well-known quote, contained in a blockquote element.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">blockquote</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">figcaption</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote-footer&#34;</span><span class="p">&gt;</span>
    Someone famous in <span class="p">&lt;</span><span class="nt">cite</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Source Title&#34;</span><span class="p">&gt;</span>Source Title<span class="p">&lt;/</span><span class="nt">cite</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">figcaption</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">figure</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="alignment">Alignment</h3>
                    <p>Use text utilities as needed to change the alignment of your blockquote.</p>
                    <div class="bd-example">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">figure</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">blockquote</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>A well-known quote, contained in a blockquote element.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">blockquote</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">figcaption</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote-footer&#34;</span><span class="p">&gt;</span>
    Someone famous in <span class="p">&lt;</span><span class="nt">cite</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Source Title&#34;</span><span class="p">&gt;</span>Source Title<span class="p">&lt;/</span><span class="nt">cite</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">figcaption</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">figure</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <figure class="text-end">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">figure</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-end&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">blockquote</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>A well-known quote, contained in a blockquote element.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">blockquote</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">figcaption</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;blockquote-footer&#34;</span><span class="p">&gt;</span>
    Someone famous in <span class="p">&lt;</span><span class="nt">cite</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Source Title&#34;</span><span class="p">&gt;</span>Source Title<span class="p">&lt;/</span><span class="nt">cite</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">figcaption</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">figure</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="lists">Lists</h2>
                    <h3 id="unstyled">Unstyled</h3>
                    <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                    <div class="bd-example">
                        <ul class="list-unstyled">
                            <li>This is a list.</li>
                            <li>It appears completely unstyled.</li>
                            <li>Structurally, it's still a list.</li>
                            <li>However, this style only applies to immediate child elements.</li>
                            <li>Nested lists:
                                <ul>
                                    <li>are unaffected by this style</li>
                                    <li>will still show a bullet</li>
                                    <li>and have appropriate left margin</li>
                                </ul>
                            </li>
                            <li>This may still come in handy in some situations.</li>
                        </ul>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-unstyled&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>This is a list.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>It appears completely unstyled.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>Structurally, it&#39;s still a list.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>However, this style only applies to immediate child elements.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>Nested lists:
    <span class="p">&lt;</span><span class="nt">ul</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>are unaffected by this style<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>will still show a bullet<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>and have appropriate left margin<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;</span>This may still come in handy in some situations.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="inline">Inline</h3>
                    <p>Remove a list&rsquo;s bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
                    <div class="bd-example">
                        <ul class="list-inline">
                            <li class="list-inline-item">This is a list item.</li>
                            <li class="list-inline-item">And another one.</li>
                            <li class="list-inline-item">But they're displayed inline.</li>
                        </ul>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-inline&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-inline-item&#34;</span><span class="p">&gt;</span>This is a list item.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-inline-item&#34;</span><span class="p">&gt;</span>And another one.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-inline-item&#34;</span><span class="p">&gt;</span>But they&#39;re displayed inline.<span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="description-list-alignment">Description list alignment</h3>
                    <p>Align terms and descriptions horizontally by using our grid system&rsquo;s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis.</p>
                    <div class="bd-example">
                        <dl class="row">
                            <dt class="col-sm-3">Description lists</dt>
                            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                            <dt class="col-sm-3">Term</dt>
                            <dd class="col-sm-9">
                                <p>Definition for the term.</p>
                                <p>And some more placeholder definition text.</p>
                            </dd>

                            <dt class="col-sm-3">Another term</dt>
                            <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

                            <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                            <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

                            <dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
                                </dl>
                            </dd>
                        </dl>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">dl</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>Description lists<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>A description list is perfect for defining terms.<span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>Term<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Definition for the term.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>And some more placeholder definition text.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>Another term<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>This definition is short, so no extra paragraphs or anything.<span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3 text-truncate&#34;</span><span class="p">&gt;</span>Truncated term is truncated<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>This can be useful when space is tight. Adds an ellipsis at the end.<span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>Nesting<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">dl</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">dt</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-4&#34;</span><span class="p">&gt;</span>Nested definition list<span class="p">&lt;/</span><span class="nt">dt</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">dd</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-8&#34;</span><span class="p">&gt;</span>I heard you like definition lists. Let me put a definition list inside your definition list.<span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">dl</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">dd</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">dl</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="responsive-font-sizes">Responsive font sizes</h2>
                    <p>In Bootstrap 5, we&rsquo;ve enabled responsive font sizes by default, allowing text to scale more naturally across device and viewport sizes. Have a look at the <a href="../getting-started/rfs.php">RFS page</a> to find out how this works.</p>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <p>Headings have some dedicated variables for sizing and spacing.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$headings-margin-bottom</span><span class="o">:</span>      <span class="nv">$spacer</span> <span class="o">*</span> <span class="mf">.5</span><span class="p">;</span>
<span class="nv">$headings-font-family</span><span class="o">:</span>        <span class="n">null</span><span class="p">;</span>
<span class="nv">$headings-font-style</span><span class="o">:</span>         <span class="n">null</span><span class="p">;</span>
<span class="nv">$headings-font-weight</span><span class="o">:</span>        <span class="mi">500</span><span class="p">;</span>
<span class="nv">$headings-line-height</span><span class="o">:</span>        <span class="mi">1</span><span class="mf">.2</span><span class="p">;</span>
<span class="nv">$headings-color</span><span class="o">:</span>              <span class="n">null</span><span class="p">;</span>
</code></pre></div>
                    <p>Miscellaneous typography elements covered here and in <a href="../content/reboot.php">Reboot</a> also have dedicated variables.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$lead-font-size</span><span class="o">:</span>              <span class="nv">$font-size-base</span> <span class="o">*</span> <span class="mi">1</span><span class="mf">.25</span><span class="p">;</span>
<span class="nv">$lead-font-weight</span><span class="o">:</span>            <span class="mi">300</span><span class="p">;</span>

<span class="nv">$small-font-size</span><span class="o">:</span>             <span class="mf">.875</span><span class="kt">em</span><span class="p">;</span>

<span class="nv">$sub-sup-font-size</span><span class="o">:</span>           <span class="mf">.75</span><span class="kt">em</span><span class="p">;</span>

<span class="nv">$text-muted</span><span class="o">:</span>                  <span class="nv">$gray-600</span><span class="p">;</span>

<span class="nv">$initialism-font-size</span><span class="o">:</span>        <span class="nv">$small-font-size</span><span class="p">;</span>

<span class="nv">$blockquote-margin-y</span><span class="o">:</span>         <span class="nv">$spacer</span><span class="p">;</span>
<span class="nv">$blockquote-font-size</span><span class="o">:</span>        <span class="nv">$font-size-base</span> <span class="o">*</span> <span class="mi">1</span><span class="mf">.25</span><span class="p">;</span>
<span class="nv">$blockquote-footer-color</span><span class="o">:</span>     <span class="nv">$gray-600</span><span class="p">;</span>
<span class="nv">$blockquote-footer-font-size</span><span class="o">:</span> <span class="nv">$small-font-size</span><span class="p">;</span>

<span class="nv">$hr-margin-y</span><span class="o">:</span>                 <span class="nv">$spacer</span><span class="p">;</span>
<span class="nv">$hr-color</span><span class="o">:</span>                    <span class="ni">inherit</span><span class="p">;</span>
<span class="nv">$hr-height</span><span class="o">:</span>                   <span class="nv">$border-width</span><span class="p">;</span>
<span class="nv">$hr-opacity</span><span class="o">:</span>                  <span class="mf">.25</span><span class="p">;</span>

<span class="nv">$legend-margin-bottom</span><span class="o">:</span>        <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$legend-font-size</span><span class="o">:</span>            <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$legend-font-weight</span><span class="o">:</span>          <span class="n">null</span><span class="p">;</span>

<span class="nv">$mark-padding</span><span class="o">:</span>                <span class="mf">.2</span><span class="kt">em</span><span class="p">;</span>

<span class="nv">$dt-font-weight</span><span class="o">:</span>              <span class="nv">$font-weight-bold</span><span class="p">;</span>

<span class="nv">$nested-kbd-font-weight</span><span class="o">:</span>      <span class="nv">$font-weight-bold</span><span class="p">;</span>

<span class="nv">$list-inline-padding</span><span class="o">:</span>         <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>

<span class="nv">$mark-bg</span><span class="o">:</span>                     <span class="mh">#fcf8e3</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="mixins">Mixins</h3>
                    <p>There are no dedicated mixins for typography, but Bootstrap does use <a href="../getting-started/rfs.php">Responsive Font Sizing (RFS)</a>.</p>

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
