
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Forms · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/forms/overview/">

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
                                    <li><a href="overview.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Overview</a></li>
                                    <li><a href="form-control.php" class="d-inline-flex align-items-center rounded">Form control</a></li>
                                    <li><a href="select.php" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="checks-radios.php" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="range.php" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="input-group.php" class="d-inline-flex align-items-center rounded">Input group</a></li>
                                    <li><a href="floating-labels..php" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="layout..php" class="d-inline-flex align-items-center rounded">Layout</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/forms/overview.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Forms</h1>
                    </div>
                    <p class="bd-lead">Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#overview">Overview</a></li>
                            <li><a href="#form-text">Form text</a></li>
                            <li><a href="#disabled-forms">Disabled forms</a></li>
                            <li><a href="#accessibility">Accessibility</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">

                    <div class="row g-3">

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="form-control.php">
                                <strong class="d-block h5 mb-0">Form control</strong>
                                <span class="text-secondary">Style textual inputs and textareas with support for multiple states.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="select.php">
                                <strong class="d-block h5 mb-0">Select</strong>
                                <span class="text-secondary">Improve browser default select elements with a custom initial appearance.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="checks-radios.php">
                                <strong class="d-block h5 mb-0">Checks &amp; radios</strong>
                                <span class="text-secondary">Use our custom radio buttons and checkboxes in forms for selecting input options.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="range.php">
                                <strong class="d-block h5 mb-0">Range</strong>
                                <span class="text-secondary">Replace browser default range inputs with our custom version.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="input-group.php">
                                <strong class="d-block h5 mb-0">Input group</strong>
                                <span class="text-secondary">Attach labels and buttons to your inputs for increased semantic value.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="floating-labels.php">
                                <strong class="d-block h5 mb-0">Floating labels</strong>
                                <span class="text-secondary">Create beautifully simple form labels that float over your input fields.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="layout.php">
                                <strong class="d-block h5 mb-0">Layout</strong>
                                <span class="text-secondary">Create inline, horizontal, or complex grid-based layouts with your forms.</span>
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a class="d-block text-decoration-none" href="validation.php">
                                <strong class="d-block h5 mb-0">Validation</strong>
                                <span class="text-secondary">Validate your forms with custom or native validation behaviors and styles.</span>
                            </a>
                        </div>

                    </div>


                    <h2 id="overview">Overview</h2>
                    <p>Bootstrap&rsquo;s form controls expand on <a href="../content/reboot.php#forms">our Rebooted form styles</a> with classes. Use these classes to opt into their customized displays for a more consistent rendering across browsers and devices.</p>
                    <p>Be sure to use an appropriate <code>type</code> attribute on all inputs (e.g., <code>email</code> for email address or <code>number</code> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.</p>
                    <p>Here&rsquo;s a quick example to demonstrate Bootstrap&rsquo;s form styles. Keep reading for documentation on required classes, form layout, and more.</p>
                    <div class="bd-example">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleInputEmail1&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Email address<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleInputEmail1&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;emailHelp&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;emailHelp&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-text&#34;</span><span class="p">&gt;</span>We&#39;ll never share your email with anyone else.<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleInputPassword1&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleInputPassword1&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3 form-check&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleCheck1&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleCheck1&#34;</span><span class="p">&gt;</span>Check me out<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="form-text">Form text</h2>
                    <p>Block-level or inline-level form text can be created using <code>.form-text</code>.</p>
                    <div class="bd-callout bd-callout-warning">
                        <h5 id="associating-form-text-with-form-controls">Associating form text with form controls</h5>
                        <p>Form text should be explicitly associated with the form control it relates to using the <code>aria-describedby</code> attribute. This will ensure that assistive technologies—such as screen readers—will announce this form text when the user focuses or enters the control.
                    </div>

                    <p>Form text below inputs can be styled with <code>.form-text</code>. If a block-level element will be used, a top margin is added for easy spacing from the inputs above.</p>
                    <div class="bd-example">
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword5&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword5&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;passwordHelpBlock&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;passwordHelpBlock&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-text&#34;</span><span class="p">&gt;</span>
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Inline text can use any typical inline HTML element (be it a <code>&lt;span&gt;</code>, <code>&lt;small&gt;</code>, or something else) with nothing more than the <code>.form-text</code> class.</p>
                    <div class="bd-example">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                            <div class="col-auto">
                                <span id="passwordHelpInline" class="form-text">
                                    Must be 8-20 characters long.
                                </span>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3 align-items-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword6&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword6&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;passwordHelpInline&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">span</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;passwordHelpInline&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-text&#34;</span><span class="p">&gt;</span>
      Must be 8-20 characters long.
    <span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="disabled-forms">Disabled forms</h2>
                    <p>Add the <code>disabled</code> boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;disabledInput&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Disabled input here...&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>
</code></pre></div><p>Add the <code>disabled</code> attribute to a <code>&lt;fieldset&gt;</code> to disable all the controls within. Browsers treat all native form controls (<code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;button&gt;</code> elements) inside a <code>&lt;fieldset disabled&gt;</code> as disabled, preventing both keyboard and mouse interactions on them.</p>
                    <p>However, if your form also includes custom button-like elements such as <code>&lt;a class=&quot;btn btn-*&quot;&gt;...&lt;/a&gt;</code>, these will only be given a style of <code>pointer-events: none</code>, meaning they are still focusable and operable using the keyboard. In this case, you must manually modify these controls by adding <code>tabindex=&quot;-1&quot;</code> to prevent them from receiving focus and <code>aria-disabled=&quot;disabled&quot;</code> to signal their state to assistive technologies.</p>
                    <div class="bd-example">
                        <form>
                            <fieldset disabled>
                                <legend>Disabled fieldset example</legend>
                                <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label">Disabled input</label>
                                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                    <label for="disabledSelect" class="form-label">Disabled select menu</label>
                                    <select id="disabledSelect" class="form-select">
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                                        <label class="form-check-label" for="disabledFieldsetCheck">
                                            Can't check this
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </fieldset>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">fieldset</span> <span class="na">disabled</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">legend</span><span class="p">&gt;</span>Disabled fieldset example<span class="p">&lt;/</span><span class="nt">legend</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;disabledTextInput&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Disabled input<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;disabledTextInput&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Disabled input&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;disabledSelect&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Disabled select menu<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">select</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;disabledSelect&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>Disabled select<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;disabledFieldsetCheck&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;disabledFieldsetCheck&#34;</span><span class="p">&gt;</span>
          Can&#39;t check this
        <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">fieldset</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="accessibility">Accessibility</h2>
                    <p>Ensure that all form controls have an appropriate accessible name so that their purpose can be conveyed to users of assistive technologies. The simplest way to achieve this is to use a <code>&lt;label&gt;</code> element, or—in the case of buttons—to include sufficiently descriptive text as part of the <code>&lt;button&gt;...&lt;/button&gt;</code> content.</p>
                    <p>For situations where it&rsquo;s not possible to include a visible <code>&lt;label&gt;</code> or appropriate text content, there are alternative ways of still providing an accessible name, such as:</p>
                    <ul>
                        <li><code>&lt;label&gt;</code> elements hidden using the <code>.visually-hidden</code> class</li>
                        <li>Pointing to an existing element that can act as a label using <code>aria-labelledby</code></li>
                        <li>Providing a <code>title</code> attribute</li>
                        <li>Explicitly setting the accessible name on an element using <code>aria-label</code></li>
                    </ul>
                    <p>If none of these are present, assistive technologies may resort to using the <code>placeholder</code> attribute as a fallback for the accessible name on <code>&lt;input&gt;</code> and <code>&lt;textarea&gt;</code> elements. The examples in this section provide a few suggested, case-specific approaches.</p>
                    <p>While using visually hidden content (<code>.visually-hidden</code>, <code>aria-label</code>, and even <code>placeholder</code> content, which disappears once a form field has content) will benefit assistive technology users, a lack of visible label text may still be problematic for certain users. Some form of visible label is generally the best approach, both for accessibility and usability.</p>
                    <h2 id="sass">Sass</h2>
                    <p>Many form variables are set at a general level to be re-used and extended by individual form components. You&rsquo;ll see these most often as <code>$btn-input-*</code> and <code>$input-*</code> variables.</p>
                    <h3 id="variables">Variables</h3>
                    <p><code>$btn-input-*</code> variables are shared global variables between our <a href="../components/buttons.php">buttons</a> and our form components. You&rsquo;ll find these frequently reassigned as values to other component-specific variables.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$input-btn-padding-y</span><span class="o">:</span>         <span class="mf">.375</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-padding-x</span><span class="o">:</span>         <span class="mf">.75</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-font-family</span><span class="o">:</span>       <span class="n">null</span><span class="p">;</span>
<span class="nv">$input-btn-font-size</span><span class="o">:</span>         <span class="nv">$font-size-base</span><span class="p">;</span>
<span class="nv">$input-btn-line-height</span><span class="o">:</span>       <span class="nv">$line-height-base</span><span class="p">;</span>

<span class="nv">$input-btn-focus-width</span><span class="o">:</span>         <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-focus-color-opacity</span><span class="o">:</span> <span class="mf">.25</span><span class="p">;</span>
<span class="nv">$input-btn-focus-color</span><span class="o">:</span>         <span class="nf">rgba</span><span class="p">(</span><span class="nv">$component-active-bg</span><span class="o">,</span> <span class="nv">$input-btn-focus-color-opacity</span><span class="p">);</span>
<span class="nv">$input-btn-focus-blur</span><span class="o">:</span>          <span class="mi">0</span><span class="p">;</span>
<span class="nv">$input-btn-focus-box-shadow</span><span class="o">:</span>    <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$input-btn-focus-blur</span> <span class="nv">$input-btn-focus-width</span> <span class="nv">$input-btn-focus-color</span><span class="p">;</span>

<span class="nv">$input-btn-padding-y-sm</span><span class="o">:</span>      <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-padding-x-sm</span><span class="o">:</span>      <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-font-size-sm</span><span class="o">:</span>      <span class="nv">$font-size-sm</span><span class="p">;</span>

<span class="nv">$input-btn-padding-y-lg</span><span class="o">:</span>      <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-padding-x-lg</span><span class="o">:</span>      <span class="mi">1</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$input-btn-font-size-lg</span><span class="o">:</span>      <span class="nv">$font-size-lg</span><span class="p">;</span>

<span class="nv">$input-btn-border-width</span><span class="o">:</span>      <span class="nv">$border-width</span><span class="p">;</span>
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
