
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Input group · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/forms/input-group/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="true" aria-current="true">
                                Forms
                            </button>

                            <div class="collapse show" id="forms-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="form-control.php" class="d-inline-flex align-items-center rounded">Form control</a></li>
                                    <li><a href="select.php" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="checks-radios.php" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="range.php" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="input-group.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Input group</a></li>
                                    <li><a href="floating-labels.php" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="layout.php" class="d-inline-flex align-items-center rounded">Layout</a></li>
                                    <li><a href="validation.php" class="d-inline-flex align-items-center rounded">Validation</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/forms/input-group.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Input group</h1>
                    </div>
                    <p class="bd-lead">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#basic-example">Basic example</a></li>
                            <li><a href="#wrapping">Wrapping</a></li>
                            <li><a href="#sizing">Sizing</a></li>
                            <li><a href="#checkboxes-and-radios">Checkboxes and radios</a></li>
                            <li><a href="#multiple-inputs">Multiple inputs</a></li>
                            <li><a href="#multiple-addons">Multiple addons</a></li>
                            <li><a href="#button-addons">Button addons</a></li>
                            <li><a href="#buttons-with-dropdowns">Buttons with dropdowns</a></li>
                            <li><a href="#segmented-buttons">Segmented buttons</a></li>
                            <li><a href="#custom-forms">Custom forms</a>
                                <ul>
                                    <li><a href="#custom-select">Custom select</a></li>
                                    <li><a href="#custom-file-input">Custom file input</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="basic-example">Basic example</h2>
                    <p>Place one add-on or button on either side of an input. You may also place one on both sides of an input. Remember to place <code>&lt;label&gt;</code>s outside the input group.</p>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>

                        <label for="basic-url" class="form-label">Your vanity URL</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" placeholder="Server" aria-label="Server">
                        </div>

                        <div class="input-group">
                            <span class="input-group-text">With textarea</span>
                            <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;basic-addon1&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Username&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;basic-addon1&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;basic-addon2&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;basic-addon2&#34;</span><span class="p">&gt;</span>@example.com<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;basic-url&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Your vanity URL<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;basic-addon3&#34;</span><span class="p">&gt;</span>https://example.com/users/<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;basic-url&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;basic-addon3&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>$<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Amount (to the nearest dollar)&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>.00<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Username&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Server&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Server&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>With textarea<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">textarea</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;With textarea&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">textarea</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="wrapping">Wrapping</h2>
                    <p>Input groups wrap by default via <code>flex-wrap: wrap</code> in order to accommodate custom form field validation within an input group. You may disable this with <code>.flex-nowrap</code>.</p>
                    <div class="bd-example">
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group flex-nowrap&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;addon-wrapping&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Username&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;addon-wrapping&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sizing">Sizing</h2>
                    <p>Add the relative form sizing classes to the <code>.input-group</code> itself and contents within will automatically resize—no need for repeating the form control size classes on each element.</p>
                    <p><strong>Sizing on the individual input group elements isn&rsquo;t supported.</strong></p>
                    <div class="bd-example">
                        <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group input-group-lg">
                            <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group input-group-sm mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-sm&#34;</span><span class="p">&gt;</span>Small<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Sizing example input&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-sm&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-default&#34;</span><span class="p">&gt;</span>Default<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Sizing example input&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-default&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group input-group-lg&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-lg&#34;</span><span class="p">&gt;</span>Large<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Sizing example input&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroup-sizing-lg&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="checkboxes-and-radios">Checkboxes and radios</h2>
                    <p>Place any checkbox or radio option within an input group&rsquo;s addon instead of text. We recommend adding <code>.mt-0</code> to the <code>.form-check-input</code> when there&rsquo;s no visible text next to the input.</p>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with checkbox">
                        </div>

                        <div class="input-group">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input mt-0&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Checkbox for following text input&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with checkbox&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input mt-0&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Radio button for following text input&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with radio button&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="multiple-inputs">Multiple inputs</h2>
                    <p>While multiple <code>&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code>&lt;input&gt;</code>.</p>
                    <div class="bd-example">
                        <div class="input-group">
                            <span class="input-group-text">First and last name</span>
                            <input type="text" aria-label="First name" class="form-control">
                            <input type="text" aria-label="Last name" class="form-control">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>First and last name<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First name&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Last name&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="multiple-addons">Multiple addons</h2>
                    <p>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</p>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                            <span class="input-group-text">$</span>
                            <span class="input-group-text">0.00</span>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>$<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>0.00<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Dollar amount (with dot and two decimal places)&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Dollar amount (with dot and two decimal places)&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>$<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>0.00<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="button-addons">Button addons</h2>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Button</button>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Button</button>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;button-addon1&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Example text with button addon&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;button-addon1&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;button-addon2&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;button-addon2&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Example text with two button addons&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Recipient&#39;s username with two button addons&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="buttons-with-dropdowns">Buttons with dropdowns</h2>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <div class="input-group">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action before</a></li>
                                <li><a class="dropdown-item" href="#">Another action before</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>Dropdown<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with dropdown button&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with dropdown button&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>Dropdown<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu dropdown-menu-end&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>Dropdown<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action before<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action before<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with 2 dropdown buttons&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>Dropdown<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu dropdown-menu-end&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="segmented-buttons">Segmented buttons</h2>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <button type="button" class="btn btn-outline-secondary">Action</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                            <button type="button" class="btn btn-outline-secondary">Action</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Toggle Dropdown<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with segmented dropdown button&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Text input with segmented dropdown button&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary dropdown-toggle dropdown-toggle-split&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Toggle Dropdown<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu dropdown-menu-end&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-divider&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="custom-forms">Custom forms</h2>
                    <p>Input groups include support for custom selects and custom file inputs. Browser default versions of these are not supported.</p>
                    <h3 id="custom-select">Custom select</h3>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <select class="form-select" id="inputGroupSelect02">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                            <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputGroupSelect01&#34;</span><span class="p">&gt;</span>Options<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupSelect01&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupSelect02&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputGroupSelect02&#34;</span><span class="p">&gt;</span>Options<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupSelect03&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Example select with button addon&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupSelect04&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Example select with button addon&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="custom-file-input">Custom file input</h3>
                    <div class="bd-example">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupFile01">Upload</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>

                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon03">Button</button>
                            <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                        </div>

                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputGroupFile01&#34;</span><span class="p">&gt;</span>Upload<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFile01&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFile02&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputGroupFile02&#34;</span><span class="p">&gt;</span>Upload<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFileAddon03&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFile03&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroupFileAddon03&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Upload&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFile04&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroupFileAddon04&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Upload&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupFileAddon04&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$input-group-addon-padding-y</span><span class="o">:</span>           <span class="nv">$input-padding-y</span><span class="p">;</span>
<span class="nv">$input-group-addon-padding-x</span><span class="o">:</span>           <span class="nv">$input-padding-x</span><span class="p">;</span>
<span class="nv">$input-group-addon-font-weight</span><span class="o">:</span>         <span class="nv">$input-font-weight</span><span class="p">;</span>
<span class="nv">$input-group-addon-color</span><span class="o">:</span>               <span class="nv">$input-color</span><span class="p">;</span>
<span class="nv">$input-group-addon-bg</span><span class="o">:</span>                  <span class="nv">$gray-200</span><span class="p">;</span>
<span class="nv">$input-group-addon-border-color</span><span class="o">:</span>        <span class="nv">$input-border-color</span><span class="p">;</span>
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
