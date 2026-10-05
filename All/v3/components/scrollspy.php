
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Scrollspy · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/scrollspy/">

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
                                    <li><a href="scrollspy.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Scrollspy</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/scrollspy.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Scrollspy</h1>
                    </div>
                    <p class="bd-lead">Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#example-in-navbar">Example in navbar</a></li>
                            <li><a href="#example-with-nested-nav">Example with nested nav</a></li>
                            <li><a href="#example-with-list-group">Example with list-group</a></li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#via-data-attributes">Via data attributes</a></li>
                                    <li><a href="#via-javascript">Via JavaScript</a></li>
                                    <li><a href="#methods">Methods</a>
                                        <ul>
                                            <li><a href="#refresh">refresh</a></li>
                                            <li><a href="#dispose">dispose</a></li>
                                            <li><a href="#getinstance">getInstance</a></li>
                                            <li><a href="#getorcreateinstance">getOrCreateInstance</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#options">Options</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="how-it-works">How it works</h2>
                    <p>Scrollspy has a few requirements to function properly:</p>
                    <ul>
                        <li>It must be used on a Bootstrap <a href="../components/navs-tabs.php">nav component</a> or <a href="../components/list-group.php">list group</a>.</li>
                        <li>Scrollspy requires <code>position: relative;</code> on the element you&rsquo;re spying on, usually the <code>&lt;body&gt;</code>.</li>
                        <li>Anchors (<code>&lt;a&gt;</code>) are required and must point to an element with that <code>id</code>.</li>
                    </ul>
                    <p>When successfully implemented, your nav or list group will update accordingly, moving the <code>.active</code> class from one item to the next based on their associated targets.</p>
                    <div class="bd-callout bd-callout-info">
                        <h3 id="scrollable-containers-and-keyboard-access">Scrollable containers and keyboard access</h3>
                        <p>If you&rsquo;re making a scrollable container (other than the <code>&lt;body&gt;</code>), be sure to have a <code>height</code> set and <code>overflow-y: scroll;</code> applied to it—alongside a <code>tabindex=&quot;0&quot;</code> to ensure keyboard access.
                    </div>

                    <h2 id="example-in-navbar">Example in navbar</h2>
                    <p>Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.</p>
                    <div class="bd-example">
                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link" href="#scrollspyHeading1">First</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                            <h4 id="scrollspyHeading1">First heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading2">Second heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading3">Third heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading4">Fourth heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                            <h4 id="scrollspyHeading5">Fifth heading</h4>
                            <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">nav</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;navbar-example2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;navbar navbar-light bg-light px-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;navbar-brand&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Navbar<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav nav-pills&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#scrollspyHeading1&#34;</span><span class="p">&gt;</span>First<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-item&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#scrollspyHeading2&#34;</span><span class="p">&gt;</span>Second<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-item dropdown&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link dropdown-toggle&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>Dropdown<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#scrollspyHeading3&#34;</span><span class="p">&gt;</span>Third<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#scrollspyHeading4&#34;</span><span class="p">&gt;</span>Fourth<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#scrollspyHeading5&#34;</span><span class="p">&gt;</span>Fifth<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">data-bs-spy</span><span class="o">=</span><span class="s">&#34;scroll&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#navbar-example2&#34;</span> <span class="na">data-bs-offset</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;scrollspy-example&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;0&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;scrollspyHeading1&#34;</span><span class="p">&gt;</span>First heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;scrollspyHeading2&#34;</span><span class="p">&gt;</span>Second heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;scrollspyHeading3&#34;</span><span class="p">&gt;</span>Third heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;scrollspyHeading4&#34;</span><span class="p">&gt;</span>Fourth heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;scrollspyHeading5&#34;</span><span class="p">&gt;</span>Fifth heading<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="example-with-nested-nav">Example with nested nav</h2>
                    <p>Scrollspy also works with nested <code>.nav</code>s. If a nested <code>.nav</code> is <code>.active</code>, its parents will also be <code>.active</code>. Scroll the area next to the navbar and watch the active class change.</p>
                    <div class="bd-example">
                        <div class="row">
                            <div class="col-4">
                                <nav id="navbar-example3" class="navbar navbar-light bg-light flex-column align-items-stretch p-3">
                                    <a class="navbar-brand" href="#">Navbar</a>
                                    <nav class="nav nav-pills flex-column">
                                        <a class="nav-link" href="#item-1">Item 1</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-1-1">Item 1-1</a>
                                            <a class="nav-link ms-3 my-1" href="#item-1-2">Item 1-2</a>
                                        </nav>
                                        <a class="nav-link" href="#item-2">Item 2</a>
                                        <a class="nav-link" href="#item-3">Item 3</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link ms-3 my-1" href="#item-3-1">Item 3-1</a>
                                            <a class="nav-link ms-3 my-1" href="#item-3-2">Item 3-2</a>
                                        </nav>
                                    </nav>
                                </nav>
                            </div>
                            <div class="col-8">
                                <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example-2" tabindex="0">
                                    <h4 id="item-1">Item 1</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h5 id="item-1-1">Item 1-1</h5>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h5 id="item-1-2">Item 1-2</h5>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="item-2">Item 2</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="item-3">Item 3</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h5 id="item-3-1">Item 3-1</h5>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h5 id="item-3-2">Item 3-2</h5>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">nav</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;navbar-example3&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;navbar navbar-light bg-light flex-column align-items-stretch p-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;navbar-brand&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Navbar<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">nav</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav nav-pills flex-column&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-1&#34;</span><span class="p">&gt;</span>Item 1<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">nav</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav nav-pills flex-column&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link ms-3 my-1&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-1-1&#34;</span><span class="p">&gt;</span>Item 1-1<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link ms-3 my-1&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-1-2&#34;</span><span class="p">&gt;</span>Item 1-2<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-2&#34;</span><span class="p">&gt;</span>Item 2<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-3&#34;</span><span class="p">&gt;</span>Item 3<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">nav</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav nav-pills flex-column&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link ms-3 my-1&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-3-1&#34;</span><span class="p">&gt;</span>Item 3-1<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav-link ms-3 my-1&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#item-3-2&#34;</span><span class="p">&gt;</span>Item 3-2<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">nav</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">data-bs-spy</span><span class="o">=</span><span class="s">&#34;scroll&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#navbar-example3&#34;</span> <span class="na">data-bs-offset</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;0&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-1&#34;</span><span class="p">&gt;</span>Item 1<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-1-1&#34;</span><span class="p">&gt;</span>Item 1-1<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-1-2&#34;</span><span class="p">&gt;</span>Item 1-2<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-2&#34;</span><span class="p">&gt;</span>Item 2<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-3&#34;</span><span class="p">&gt;</span>Item 3<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-3-1&#34;</span><span class="p">&gt;</span>Item 3-1<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;item-3-2&#34;</span><span class="p">&gt;</span>Item 3-2<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="example-with-list-group">Example with list-group</h2>
                    <p>Scrollspy also works with <code>.list-group</code>s. Scroll the area next to the list group and watch the active class change.</p>
                    <div class="bd-example">
                        <div class="row">
                            <div class="col-4">
                                <div id="list-example" class="list-group">
                                    <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                                    <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                </div>
                            </div>
                            <div class="col-8">
                                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                                    <h4 id="list-item-1">Item 1</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="list-item-2">Item 2</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="list-item-3">Item 3</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                    <h4 id="list-item-4">Item 4</h4>
                                    <p>This is some placeholder content for the scrollspy page. Note that as you scroll down the page, the appropriate navigation link is highlighted. It's repeated throughout the component example. We keep adding some more example copy here to emphasize the scrolling and highlighting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;list-example&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-group-item list-group-item-action&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#list-item-1&#34;</span><span class="p">&gt;</span>Item 1<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-group-item list-group-item-action&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#list-item-2&#34;</span><span class="p">&gt;</span>Item 2<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-group-item list-group-item-action&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#list-item-3&#34;</span><span class="p">&gt;</span>Item 3<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;list-group-item list-group-item-action&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#list-item-4&#34;</span><span class="p">&gt;</span>Item 4<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">data-bs-spy</span><span class="o">=</span><span class="s">&#34;scroll&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#list-example&#34;</span> <span class="na">data-bs-offset</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;scrollspy-example&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;0&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;list-item-1&#34;</span><span class="p">&gt;</span>Item 1<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;list-item-2&#34;</span><span class="p">&gt;</span>Item 2<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;list-item-3&#34;</span><span class="p">&gt;</span>Item 3<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">h4</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;list-item-4&#34;</span><span class="p">&gt;</span>Item 4<span class="p">&lt;/</span><span class="nt">h4</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="usage">Usage</h2>
                    <h3 id="via-data-attributes">Via data attributes</h3>
                    <p>To easily add scrollspy behavior to your topbar navigation, add <code>data-bs-spy=&quot;scroll&quot;</code> to the element you want to spy on (most typically this would be the <code>&lt;body&gt;</code>). Then add the <code>data-bs-target</code> attribute with the ID or class of the parent element of any Bootstrap <code>.nav</code> component.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-css" data-lang="css"><span class="nt">body</span> <span class="p">{</span>
  <span class="k">position</span><span class="p">:</span> <span class="kc">relative</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">body</span> <span class="na">data-bs-spy</span><span class="o">=</span><span class="s">&#34;scroll&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#navbar-example&#34;</span><span class="p">&gt;</span>
  ...
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;navbar-example&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;nav nav-tabs&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;tablist&#34;</span><span class="p">&gt;</span>
      ...
    <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
</code></pre></div><h3 id="via-javascript">Via JavaScript</h3>
                    <p>After adding <code>position: relative;</code> in your CSS, call the scrollspy via JavaScript:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">scrollSpy</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">ScrollSpy</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">body</span><span class="p">,</span> <span class="p">{</span>
  <span class="nx">target</span><span class="o">:</span> <span class="s1">&#39;#navbar-example&#39;</span>
<span class="p">})</span>
</code></pre></div><div class="bd-callout bd-callout-danger">
                        <h4 id="resolvable-id-targets-required">Resolvable ID targets required</h4>
                        <p>Navbar links must have resolvable id targets. For example, a <code>&lt;a href=&quot;#home&quot;&gt;home&lt;/a&gt;</code> must correspond to something in the DOM like <code>&lt;div id=&quot;home&quot;&gt;&lt;/div&gt;</code>.
                    </div>

                    <div class="bd-callout bd-callout-info">
                        <h4 id="non-visible-target-elements-ignored">Non-visible target elements ignored</h4>
                        <p>Target elements that are not visible will be ignored and their corresponding nav items will never be highlighted.
                    </div>

                    <h3 id="methods">Methods</h3>
                    <h4 id="refresh">refresh</h4>
                    <p>When using scrollspy in conjunction with adding or removing of elements from the DOM, you&rsquo;ll need to call the refresh method like so:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">dataSpyList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;[data-bs-spy=&#34;scroll&#34;]&#39;</span><span class="p">))</span>
<span class="nx">dataSpyList</span><span class="p">.</span><span class="nx">forEach</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">dataSpyEl</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">ScrollSpy</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">dataSpyEl</span><span class="p">)</span>
    <span class="p">.</span><span class="nx">refresh</span><span class="p">()</span>
<span class="p">})</span>
</code></pre></div><h4 id="dispose">dispose</h4>
                    <p>Destroys an element&rsquo;s scrollspy. (Removes stored data on the DOM element)</p>
                    <h4 id="getinstance">getInstance</h4>
                    <p><em>Static</em> method which allows you to get the scrollspy instance associated with a DOM element</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">scrollSpyContentEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;content&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">scrollSpy</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">ScrollSpy</span><span class="p">.</span><span class="nx">getInstance</span><span class="p">(</span><span class="nx">scrollSpyContentEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap scrollspy instance
</span></code></pre></div><h4 id="getorcreateinstance">getOrCreateInstance</h4>
                    <p><em>Static</em> method which allows you to get the scrollspy instance associated with a DOM element, or create a new one in case it wasn&rsquo;t initialised</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">scrollSpyContentEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;content&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">scrollSpy</span> <span class="o">=</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">ScrollSpy</span><span class="p">.</span><span class="nx">getOrCreateInstance</span><span class="p">(</span><span class="nx">scrollSpyContentEl</span><span class="p">)</span> <span class="c1">// Returns a Bootstrap scrollspy instance
</span></code></pre></div><h3 id="options">Options</h3>
                    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-bs-</code>, as in <code>data-bs-offset=&quot;&quot;</code>.</p>
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
                                <td><code>offset</code></td>
                                <td>number</td>
                                <td><code>10</code></td>
                                <td>Pixels to offset from top when calculating position of scroll.</td>
                            </tr>
                            <tr>
                                <td><code>method</code></td>
                                <td>string</td>
                                <td><code>auto</code></td>
                                <td>Finds which section the spied element is in. <code>auto</code> will choose the best method to get scroll coordinates. <code>offset</code> will use the <a href="https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect"><code>Element.getBoundingClientRect()</code></a> method to get scroll coordinates. <code>position</code> will use the <a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetTop"><code>HTMLElement.offsetTop</code></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetLeft"><code>HTMLElement.offsetLeft</code></a> properties to get scroll coordinates.</td>
                            </tr>
                            <tr>
                                <td><code>target</code></td>
                                <td>string | jQuery object | DOM element</td>
                                <td></td>
                                <td>Specifies element to apply Scrollspy plugin.</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="events">Events</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Event type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>activate.bs.scrollspy</code></td>
                                <td>This event fires on the scroll element whenever a new item becomes activated by the scrollspy.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">firstScrollSpyEl</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelector</span><span class="p">(</span><span class="s1">&#39;[data-bs-spy=&#34;scroll&#34;]&#39;</span><span class="p">)</span>
<span class="nx">firstScrollSpyEl</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;activate.bs.scrollspy&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
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
