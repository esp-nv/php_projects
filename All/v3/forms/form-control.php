
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Give textual form controls like &lt;input&gt;s and &lt;textarea&gt;s an upgrade with custom styles, sizing, focus states, and more.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Form controls · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/forms/form-control/">

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
                                    <li><a href="form-control.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Form control</a></li>
                                    <li><a href="select.php" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="checks-radios.php" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="range.php" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="input-group.php" class="d-inline-flex align-items-center rounded">Input group</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/forms/form-control.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Form controls</h1>
                    </div>
                    <p class="bd-lead">Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#example">Example</a></li>
                            <li><a href="#sizing">Sizing</a></li>
                            <li><a href="#disabled">Disabled</a></li>
                            <li><a href="#readonly">Readonly</a></li>
                            <li><a href="#readonly-plain-text">Readonly plain text</a></li>
                            <li><a href="#file-input">File input</a></li>
                            <li><a href="#color">Color</a></li>
                            <li><a href="#datalists">Datalists</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="example">Example</h2>
                    <div class="bd-example">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleFormControlInput1&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Email address<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleFormControlInput1&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;name@example.com&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleFormControlTextarea1&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Example textarea<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">textarea</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleFormControlTextarea1&#34;</span> <span class="na">rows</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">textarea</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sizing">Sizing</h2>
                    <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                    <div class="bd-example">
                        <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                        <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-lg&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;.form-control-lg&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;.form-control-lg example&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Default input&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;default input example&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-sm&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;.form-control-sm&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;.form-control-sm example&#34;</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="disabled">Disabled</h2>
                    <p>Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance and remove pointer events.</p>
                    <div class="bd-example">
                        <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
                        <input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Disabled input&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Disabled input example&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Disabled readonly input&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Disabled input example&#34;</span> <span class="na">disabled</span> <span class="na">readonly</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="readonly">Readonly</h2>
                    <p>Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input&rsquo;s value.</p>
                    <div class="bd-example">
                        <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Readonly input here...&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;readonly input example&#34;</span> <span class="na">readonly</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="readonly-plain-text">Readonly plain text</h2>
                    <p>If you want to have <code>&lt;input readonly&gt;</code> elements in your form styled as plain text, use the <code>.form-control-plaintext</code> class to remove the default form field styling and preserve the correct margin and padding.</p>
                    <div class="bd-example">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html">  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3 row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;staticEmail&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">readonly</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control-plaintext&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;staticEmail&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;email@example.com&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3 row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <form class="row g-3">
                            <div class="col-auto">
                                <label for="staticEmail2" class="visually-hidden">Email</label>
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;staticEmail2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">readonly</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control-plaintext&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;staticEmail2&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;email@example.com&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword2&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Password&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary mb-3&#34;</span><span class="p">&gt;</span>Confirm identity<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="file-input">File input</h2>
                    <div class="bd-example">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                        <div class="mb-3">
                            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                            <input class="form-control" type="file" id="formFileDisabled" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Small file input example</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div>
                            <label for="formFileLg" class="form-label">Large file input example</label>
                            <input class="form-control form-control-lg" id="formFileLg" type="file">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formFile&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Default file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formFile&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formFileMultiple&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Multiple files input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formFileMultiple&#34;</span> <span class="na">multiple</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formFileDisabled&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Disabled file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formFileDisabled&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formFileSm&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Small file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-sm&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formFileSm&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formFileLg&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Large file input example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-lg&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formFileLg&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="color">Color</h2>
                    <div class="bd-example">
                        <label for="exampleColorInput" class="form-label">Color picker</label>
                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleColorInput&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Color picker<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;color&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-color&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleColorInput&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;#563d7c&#34;</span> <span class="na">title</span><span class="o">=</span><span class="s">&#34;Choose your color&#34;</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="datalists">Datalists</h2>
                    <p>Datalists allow you to create a group of <code>&lt;option&gt;</code>s that can be accessed (and autocompleted) from within an <code>&lt;input&gt;</code>. These are similar to <code>&lt;select&gt;</code> elements, but come with more menu styling limitations and differences. While most browsers and operating systems include some support for <code>&lt;datalist&gt;</code> elements, their styling is inconsistent at best.</p>
                    <p>Learn more about <a href="https://caniuse.com/datalist">support for datalist elements</a>.</p>
                    <div class="bd-example">
                        <label for="exampleDataList" class="form-label">Datalist example</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;exampleDataList&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Datalist example<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">list</span><span class="o">=</span><span class="s">&#34;datalistOptions&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;exampleDataList&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Type to search...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">datalist</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;datalistOptions&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;San Francisco&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;New York&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Seattle&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Los Angeles&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Chicago&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">datalist</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <p><code>$input-*</code> are shared across most of our form controls (and not buttons).</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$input-padding-y</span><span class="o">:</span>                       <span class="nv">$input-btn-padding-y</span><span class="p">;</span>
<span class="nv">$input-padding-x</span><span class="o">:</span>                       <span class="nv">$input-btn-padding-x</span><span class="p">;</span>
<span class="nv">$input-font-family</span><span class="o">:</span>                     <span class="nv">$input-btn-font-family</span><span class="p">;</span>
<span class="nv">$input-font-size</span><span class="o">:</span>                       <span class="nv">$input-btn-font-size</span><span class="p">;</span>
<span class="nv">$input-font-weight</span><span class="o">:</span>                     <span class="nv">$font-weight-base</span><span class="p">;</span>
<span class="nv">$input-line-height</span><span class="o">:</span>                     <span class="nv">$input-btn-line-height</span><span class="p">;</span>

<span class="nv">$input-padding-y-sm</span><span class="o">:</span>                    <span class="nv">$input-btn-padding-y-sm</span><span class="p">;</span>
<span class="nv">$input-padding-x-sm</span><span class="o">:</span>                    <span class="nv">$input-btn-padding-x-sm</span><span class="p">;</span>
<span class="nv">$input-font-size-sm</span><span class="o">:</span>                    <span class="nv">$input-btn-font-size-sm</span><span class="p">;</span>

<span class="nv">$input-padding-y-lg</span><span class="o">:</span>                    <span class="nv">$input-btn-padding-y-lg</span><span class="p">;</span>
<span class="nv">$input-padding-x-lg</span><span class="o">:</span>                    <span class="nv">$input-btn-padding-x-lg</span><span class="p">;</span>
<span class="nv">$input-font-size-lg</span><span class="o">:</span>                    <span class="nv">$input-btn-font-size-lg</span><span class="p">;</span>

<span class="nv">$input-bg</span><span class="o">:</span>                              <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$input-disabled-bg</span><span class="o">:</span>                     <span class="nv">$gray-200</span><span class="p">;</span>
<span class="nv">$input-disabled-border-color</span><span class="o">:</span>           <span class="n">null</span><span class="p">;</span>

<span class="nv">$input-color</span><span class="o">:</span>                           <span class="nv">$body-color</span><span class="p">;</span>
<span class="nv">$input-border-color</span><span class="o">:</span>                    <span class="nv">$gray-400</span><span class="p">;</span>
<span class="nv">$input-border-width</span><span class="o">:</span>                    <span class="nv">$input-btn-border-width</span><span class="p">;</span>
<span class="nv">$input-box-shadow</span><span class="o">:</span>                      <span class="nv">$box-shadow-inset</span><span class="p">;</span>

<span class="nv">$input-border-radius</span><span class="o">:</span>                   <span class="nv">$border-radius</span><span class="p">;</span>
<span class="nv">$input-border-radius-sm</span><span class="o">:</span>                <span class="nv">$border-radius-sm</span><span class="p">;</span>
<span class="nv">$input-border-radius-lg</span><span class="o">:</span>                <span class="nv">$border-radius-lg</span><span class="p">;</span>

<span class="nv">$input-focus-bg</span><span class="o">:</span>                        <span class="nv">$input-bg</span><span class="p">;</span>
<span class="nv">$input-focus-border-color</span><span class="o">:</span>              <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$component-active-bg</span><span class="o">,</span> <span class="mi">50</span><span class="kt">%</span><span class="p">);</span>
<span class="nv">$input-focus-color</span><span class="o">:</span>                     <span class="nv">$input-color</span><span class="p">;</span>
<span class="nv">$input-focus-width</span><span class="o">:</span>                     <span class="nv">$input-btn-focus-width</span><span class="p">;</span>
<span class="nv">$input-focus-box-shadow</span><span class="o">:</span>                <span class="nv">$input-btn-focus-box-shadow</span><span class="p">;</span>

<span class="nv">$input-placeholder-color</span><span class="o">:</span>               <span class="nv">$gray-600</span><span class="p">;</span>
<span class="nv">$input-plaintext-color</span><span class="o">:</span>                 <span class="nv">$body-color</span><span class="p">;</span>

<span class="nv">$input-height-border</span><span class="o">:</span>                   <span class="nv">$input-border-width</span> <span class="o">*</span> <span class="mi">2</span><span class="p">;</span>

<span class="nv">$input-height-inner</span><span class="o">:</span>                    <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mi">1</span><span class="kt">em</span><span class="o">,</span> <span class="nv">$input-padding-y</span> <span class="o">*</span> <span class="mi">2</span><span class="p">);</span>
<span class="nv">$input-height-inner-half</span><span class="o">:</span>               <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mf">.5</span><span class="kt">em</span><span class="o">,</span> <span class="nv">$input-padding-y</span><span class="p">);</span>
<span class="nv">$input-height-inner-quarter</span><span class="o">:</span>            <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mf">.25</span><span class="kt">em</span><span class="o">,</span> <span class="nv">$input-padding-y</span> <span class="o">*</span> <span class="mf">.5</span><span class="p">);</span>

<span class="nv">$input-height</span><span class="o">:</span>                          <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mi">1</span><span class="kt">em</span><span class="o">,</span> <span class="nf">add</span><span class="p">(</span><span class="nv">$input-padding-y</span> <span class="o">*</span> <span class="mi">2</span><span class="o">,</span> <span class="nv">$input-height-border</span><span class="o">,</span> <span class="n">false</span><span class="p">));</span>
<span class="nv">$input-height-sm</span><span class="o">:</span>                       <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mi">1</span><span class="kt">em</span><span class="o">,</span> <span class="nf">add</span><span class="p">(</span><span class="nv">$input-padding-y-sm</span> <span class="o">*</span> <span class="mi">2</span><span class="o">,</span> <span class="nv">$input-height-border</span><span class="o">,</span> <span class="n">false</span><span class="p">));</span>
<span class="nv">$input-height-lg</span><span class="o">:</span>                       <span class="nf">add</span><span class="p">(</span><span class="nv">$input-line-height</span> <span class="o">*</span> <span class="mi">1</span><span class="kt">em</span><span class="o">,</span> <span class="nf">add</span><span class="p">(</span><span class="nv">$input-padding-y-lg</span> <span class="o">*</span> <span class="mi">2</span><span class="o">,</span> <span class="nv">$input-height-border</span><span class="o">,</span> <span class="n">false</span><span class="p">));</span>

<span class="nv">$input-transition</span><span class="o">:</span>                      <span class="n">border-color</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="o">,</span> <span class="n">box-shadow</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="p">;</span>
</code></pre></div>
                    <p><code>$form-label-*</code> and <code>$form-text-*</code> are for our <code>&lt;label&gt;</code>s and <code>.form-text</code> component.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$form-label-margin-bottom</span><span class="o">:</span>              <span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$form-label-font-size</span><span class="o">:</span>                  <span class="n">null</span><span class="p">;</span>
<span class="nv">$form-label-font-style</span><span class="o">:</span>                 <span class="n">null</span><span class="p">;</span>
<span class="nv">$form-label-font-weight</span><span class="o">:</span>                <span class="n">null</span><span class="p">;</span>
<span class="nv">$form-label-color</span><span class="o">:</span>                      <span class="n">null</span><span class="p">;</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$form-text-margin-top</span><span class="o">:</span>                  <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$form-text-font-size</span><span class="o">:</span>                   <span class="nv">$small-font-size</span><span class="p">;</span>
<span class="nv">$form-text-font-style</span><span class="o">:</span>                  <span class="n">null</span><span class="p">;</span>
<span class="nv">$form-text-font-weight</span><span class="o">:</span>                 <span class="n">null</span><span class="p">;</span>
<span class="nv">$form-text-color</span><span class="o">:</span>                       <span class="nv">$text-muted</span><span class="p">;</span>
</code></pre></div>
                    <p><code>$form-file-*</code> are for file input.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$form-file-button-color</span><span class="o">:</span>          <span class="nv">$input-color</span><span class="p">;</span>
<span class="nv">$form-file-button-bg</span><span class="o">:</span>             <span class="nv">$input-group-addon-bg</span><span class="p">;</span>
<span class="nv">$form-file-button-hover-bg</span><span class="o">:</span>       <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$form-file-button-bg</span><span class="o">,</span> <span class="mi">5</span><span class="kt">%</span><span class="p">);</span>
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
