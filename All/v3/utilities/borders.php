
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Borders · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/utilities/borders/">

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
                                    <li><a href="borders.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Borders</a></li>
                                    <li><a href="colors.php" class="d-inline-flex align-items-center rounded">Colors</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/utilities/borders.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Borders</h1>
                    </div>
                    <p class="bd-lead">Use border utilities to quickly style the border and border-radius of an element. Great for images, buttons, or any other element.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#border">Border</a>
                                <ul>
                                    <li><a href="#additive">Additive</a></li>
                                    <li><a href="#subtractive">Subtractive</a></li>
                                </ul>
                            </li>
                            <li><a href="#border-color">Border color</a></li>
                            <li><a href="#border-width">Border-width</a></li>
                            <li><a href="#border-radius">Border-radius</a>
                                <ul>
                                    <li><a href="#sizes">Sizes</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#mixins">Mixins</a></li>
                                    <li><a href="#utilities-api">Utilities API</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="border">Border</h2>
                    <p>Use border utilities to add or remove an element&rsquo;s borders. Choose from all borders or one at a time.</p>
                    <h3 id="additive">Additive</h3>
                    <div class="bd-example bd-example-border-utils">
                        <span class="border"></span>
                        <span class="border-top"></span>
                        <span class="border-end"></span>
                        <span class="border-bottom"></span>
                        <span class="border-start"></span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-top&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-end&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-bottom&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-start&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="subtractive">Subtractive</h3>
                    <div class="bd-example bd-example-border-utils bd-example-border-utils-0">
                        <span class="border-0"></span>
                        <span class="border-top-0"></span>
                        <span class="border-end-0"></span>
                        <span class="border-bottom-0"></span>
                        <span class="border-start-0"></span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-top-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-end-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-bottom-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border-start-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="border-color">Border color</h2>
                    <p>Change the border color using utilities built on our theme colors.</p>
                    <div class="bd-example bd-example-border-utils">

                        <span class="border border-primary"></span>
                        <span class="border border-secondary"></span>
                        <span class="border border-success"></span>
                        <span class="border border-danger"></span>
                        <span class="border border-warning"></span>
                        <span class="border border-info"></span>
                        <span class="border border-light"></span>
                        <span class="border border-dark"></span>
                        <span class="border border-white"></span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-primary&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-secondary&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-success&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-danger&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-warning&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-info&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-light&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-dark&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-white&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="border-width">Border-width</h2>
                    <div class="bd-example bd-example-border-utils">
                        <span class="border border-1"></span>
                        <span class="border border-2"></span>
                        <span class="border border-3"></span>
                        <span class="border border-4"></span>
                        <span class="border border-5"></span>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-1&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-2&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-3&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-4&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;border border-5&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="border-radius">Border-radius</h2>
                    <p>Add classes to an element to easily round its corners.</p>
                    <div class="bd-example bd-example-rounded-utils">
                        <svg class="bd-placeholder-img rounded" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-top" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example top rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example top rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-end" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example right rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example right rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-bottom" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example bottom rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example bottom rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-start" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example left rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example left rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-circle" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Completely round image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Completely round image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-pill" width="150" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Rounded pill image: 150x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Rounded pill image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">150x75</text></svg>

                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-top&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-end&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-bottom&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-start&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-circle&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-pill&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="sizes">Sizes</h3>
                    <p>Use the scaling classes for larger or smaller rounded corners. Sizes range from <code>0</code> to <code>3</code>, and can be configured by modifying the utilities API.</p>
                    <div class="bd-example bd-example-rounded-utils">
                        <svg class="bd-placeholder-img rounded-0" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example non-rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example non-rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-1" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example small rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example small rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-2" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example default rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example default rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                        <svg class="bd-placeholder-img rounded-3" width="75" height="75" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Example large rounded image: 75x75" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Example large rounded image</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">75x75</text></svg>

                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-0&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-1&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-2&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;rounded-3&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$border-width</span><span class="o">:</span>                <span class="mi">1</span><span class="kt">px</span><span class="p">;</span>
<span class="nv">$border-widths</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">1</span><span class="o">:</span> <span class="mi">1</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">2</span><span class="o">:</span> <span class="mi">2</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">3</span><span class="o">:</span> <span class="mi">3</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">4</span><span class="o">:</span> <span class="mi">4</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">5</span><span class="o">:</span> <span class="mi">5</span><span class="kt">px</span>
<span class="p">);</span>

<span class="nv">$border-color</span><span class="o">:</span>                <span class="nv">$gray-300</span><span class="p">;</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$border-radius</span><span class="o">:</span>               <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$border-radius-sm</span><span class="o">:</span>            <span class="mf">.2</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$border-radius-lg</span><span class="o">:</span>            <span class="mf">.3</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$border-radius-pill</span><span class="o">:</span>          <span class="mi">50</span><span class="kt">rem</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="mixins">Mixins</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> border-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="o">,</span> <span class="nv">$fallback-border-radius</span><span class="o">:</span> <span class="n">false</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@else if</span> <span class="nv">$fallback-border-radius</span> <span class="o">!=</span> <span class="n">false</span> <span class="p">{</span>
    <span class="na">border-radius</span><span class="o">:</span> <span class="nv">$fallback-border-radius</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-top-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-top-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
    <span class="na">border-top-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-end-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-top-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
    <span class="na">border-bottom-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-bottom-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-bottom-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
    <span class="na">border-bottom-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-start-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-top-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
    <span class="na">border-bottom-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-top-start-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-top-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-top-end-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-top-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-bottom-end-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-bottom-right-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> border-bottom-start-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="o">:</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="nv">$enable-rounded</span> <span class="p">{</span>
    <span class="na">border-bottom-left-radius</span><span class="o">:</span> <span class="nf">valid-radius</span><span class="p">(</span><span class="nv">$radius</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <h3 id="utilities-api">Utilities API</h3>
                    <p>Border utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="../utilities/api.php#using-the-api">Learn how to use the utilities API.</a></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;border&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-width</span> <span class="nt">solid</span> <span class="err">$</span><span class="nt">border-color</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-top&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-top</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-width</span> <span class="nt">solid</span> <span class="err">$</span><span class="nt">border-color</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-end&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-right</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">border-end</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-width</span> <span class="nt">solid</span> <span class="err">$</span><span class="nt">border-color</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-bottom&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-bottom</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-width</span> <span class="nt">solid</span> <span class="err">$</span><span class="nt">border-color</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-start&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-left</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">border-start</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-width</span> <span class="nt">solid</span> <span class="err">$</span><span class="nt">border-color</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-color&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-color</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">border</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">map-merge</span><span class="o">(</span><span class="err">$</span><span class="nt">theme-colors</span><span class="o">,</span> <span class="o">(</span><span class="s2">&#34;white&#34;</span><span class="nd">:</span> <span class="err">$</span><span class="nt">white</span><span class="o">))</span>
    <span class="o">),</span>
    <span class="s2">&#34;border-width&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-width</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">border</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-widths</span>
    <span class="o">),</span>
    </code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;rounded&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-radius</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">rounded</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
        <span class="nt">1</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius-sm</span><span class="o">,</span>
        <span class="nt">2</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">,</span>
        <span class="nt">3</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius-lg</span><span class="o">,</span>
        <span class="nt">circle</span><span class="nd">:</span> <span class="nt">50</span><span class="err">%</span><span class="o">,</span>
        <span class="nt">pill</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius-pill</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;rounded-top&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-top-left-radius</span> <span class="nt">border-top-right-radius</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">rounded-top</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span><span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;rounded-end&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-top-right-radius</span> <span class="nt">border-bottom-right-radius</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">rounded-end</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span><span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;rounded-bottom&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-bottom-right-radius</span> <span class="nt">border-bottom-left-radius</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">rounded-bottom</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span><span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;rounded-start&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">border-bottom-left-radius</span> <span class="nt">border-top-left-radius</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">rounded-start</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span><span class="nt">null</span><span class="nd">:</span> <span class="err">$</span><span class="nt">border-radius</span><span class="o">)</span>
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
