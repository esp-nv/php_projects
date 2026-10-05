
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Flex · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/utilities/flex/">

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
                                    <li><a href="display.php" class="d-inline-flex align-items-center rounded">Display</a></li>
                                    <li><a href="flex.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Flex</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/utilities/flex.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Flex</h1>
                    </div>
                    <p class="bd-lead">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#enable-flex-behaviors">Enable flex behaviors</a></li>
                            <li><a href="#direction">Direction</a></li>
                            <li><a href="#justify-content">Justify content</a></li>
                            <li><a href="#align-items">Align items</a></li>
                            <li><a href="#align-self">Align self</a></li>
                            <li><a href="#fill">Fill</a></li>
                            <li><a href="#grow-and-shrink">Grow and shrink</a></li>
                            <li><a href="#auto-margins">Auto margins</a>
                                <ul>
                                    <li><a href="#with-align-items">With align-items</a></li>
                                </ul>
                            </li>
                            <li><a href="#wrap">Wrap</a></li>
                            <li><a href="#order">Order</a></li>
                            <li><a href="#align-content">Align content</a></li>
                            <li><a href="#media-object">Media object</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#utilities-api">Utilities API</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="enable-flex-behaviors">Enable flex behaviors</h2>
                    <p>Apply <code>display</code> utilities to create a flexbox container and transform <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified further with additional flex properties.</p>
                    <div class="bd-example">
                        <div class="d-flex p-2 bd-highlight">I'm a flexbox container!</div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex p-2 bd-highlight&#34;</span><span class="p">&gt;</span>I&#39;m a flexbox container!<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <div class="d-inline-flex p-2 bd-highlight">I'm an inline flexbox container!</div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-inline-flex p-2 bd-highlight&#34;</span><span class="p">&gt;</span>I&#39;m an inline flexbox container!<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Responsive variations also exist for <code>.d-flex</code> and <code>.d-inline-flex</code>.</p>
                    <ul>
                        <li><code>.d-flex</code></li>
                        <li><code>.d-inline-flex</code></li>
                        <li><code>.d-sm-flex</code></li>
                        <li><code>.d-sm-inline-flex</code></li>
                        <li><code>.d-md-flex</code></li>
                        <li><code>.d-md-inline-flex</code></li>
                        <li><code>.d-lg-flex</code></li>
                        <li><code>.d-lg-inline-flex</code></li>
                        <li><code>.d-xl-flex</code></li>
                        <li><code>.d-xl-inline-flex</code></li>
                        <li><code>.d-xxl-flex</code></li>
                        <li><code>.d-xxl-inline-flex</code></li>
                    </ul>

                    <h2 id="direction">Direction</h2>
                    <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the horizontal class here as the browser default is <code>row</code>. However, you may encounter situations where you needed to explicitly set this value (like responsive layouts).</p>
                    <p>Use <code>.flex-row</code> to set a horizontal direction (the browser default), or <code>.flex-row-reverse</code> to start the horizontal direction from the opposite side.</p>
                    <div class="bd-example">
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item 1</div>
                            <div class="p-2 bd-highlight">Flex item 2</div>
                            <div class="p-2 bd-highlight">Flex item 3</div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div class="p-2 bd-highlight">Flex item 1</div>
                            <div class="p-2 bd-highlight">Flex item 2</div>
                            <div class="p-2 bd-highlight">Flex item 3</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-row bd-highlight mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 1<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 2<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-row-reverse bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 1<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 2<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Use <code>.flex-column</code> to set a vertical direction, or <code>.flex-column-reverse</code>  to start the vertical direction from the opposite side.</p>
                    <div class="bd-example">
                        <div class="d-flex flex-column bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item 1</div>
                            <div class="p-2 bd-highlight">Flex item 2</div>
                            <div class="p-2 bd-highlight">Flex item 3</div>
                        </div>
                        <div class="d-flex flex-column-reverse bd-highlight">
                            <div class="p-2 bd-highlight">Flex item 1</div>
                            <div class="p-2 bd-highlight">Flex item 2</div>
                            <div class="p-2 bd-highlight">Flex item 3</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-column bd-highlight mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 1<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 2<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-column-reverse bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 1<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 2<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item 3<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Responsive variations also exist for <code>flex-direction</code>.</p>
                    <ul>
                        <li><code>.flex-row</code></li>
                        <li><code>.flex-row-reverse</code></li>
                        <li><code>.flex-column</code></li>
                        <li><code>.flex-column-reverse</code></li>
                        <li><code>.flex-sm-row</code></li>
                        <li><code>.flex-sm-row-reverse</code></li>
                        <li><code>.flex-sm-column</code></li>
                        <li><code>.flex-sm-column-reverse</code></li>
                        <li><code>.flex-md-row</code></li>
                        <li><code>.flex-md-row-reverse</code></li>
                        <li><code>.flex-md-column</code></li>
                        <li><code>.flex-md-column-reverse</code></li>
                        <li><code>.flex-lg-row</code></li>
                        <li><code>.flex-lg-row-reverse</code></li>
                        <li><code>.flex-lg-column</code></li>
                        <li><code>.flex-lg-column-reverse</code></li>
                        <li><code>.flex-xl-row</code></li>
                        <li><code>.flex-xl-row-reverse</code></li>
                        <li><code>.flex-xl-column</code></li>
                        <li><code>.flex-xl-column-reverse</code></li>
                        <li><code>.flex-xxl-row</code></li>
                        <li><code>.flex-xxl-row-reverse</code></li>
                        <li><code>.flex-xxl-column</code></li>
                        <li><code>.flex-xxl-column-reverse</code></li>
                    </ul>

                    <h2 id="justify-content">Justify content</h2>
                    <p>Use <code>justify-content</code> utilities on flexbox containers to change the alignment of flex items on the main axis (the x-axis to start, y-axis if <code>flex-direction: column</code>). Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>evenly</code>.</p>
                    <div class="bd-example">
                        <div class="d-flex justify-content-start bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex justify-content-end bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex justify-content-center bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex justify-content-between bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex justify-content-around bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex justify-content-evenly bd-highlight">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-start&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-end&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-center&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-between&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-around&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex justify-content-evenly&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>Responsive variations also exist for <code>justify-content</code>.</p>
                    <ul>
                        <li><code>.justify-content-start</code></li>
                        <li><code>.justify-content-end</code></li>
                        <li><code>.justify-content-center</code></li>
                        <li><code>.justify-content-between</code></li>
                        <li><code>.justify-content-around</code></li>
                        <li><code>.justify-content-evenly</code></li>
                        <li><code>.justify-content-sm-start</code></li>
                        <li><code>.justify-content-sm-end</code></li>
                        <li><code>.justify-content-sm-center</code></li>
                        <li><code>.justify-content-sm-between</code></li>
                        <li><code>.justify-content-sm-around</code></li>
                        <li><code>.justify-content-sm-evenly</code></li>
                        <li><code>.justify-content-md-start</code></li>
                        <li><code>.justify-content-md-end</code></li>
                        <li><code>.justify-content-md-center</code></li>
                        <li><code>.justify-content-md-between</code></li>
                        <li><code>.justify-content-md-around</code></li>
                        <li><code>.justify-content-md-evenly</code></li>
                        <li><code>.justify-content-lg-start</code></li>
                        <li><code>.justify-content-lg-end</code></li>
                        <li><code>.justify-content-lg-center</code></li>
                        <li><code>.justify-content-lg-between</code></li>
                        <li><code>.justify-content-lg-around</code></li>
                        <li><code>.justify-content-lg-evenly</code></li>
                        <li><code>.justify-content-xl-start</code></li>
                        <li><code>.justify-content-xl-end</code></li>
                        <li><code>.justify-content-xl-center</code></li>
                        <li><code>.justify-content-xl-between</code></li>
                        <li><code>.justify-content-xl-around</code></li>
                        <li><code>.justify-content-xl-evenly</code></li>
                        <li><code>.justify-content-xxl-start</code></li>
                        <li><code>.justify-content-xxl-end</code></li>
                        <li><code>.justify-content-xxl-center</code></li>
                        <li><code>.justify-content-xxl-between</code></li>
                        <li><code>.justify-content-xxl-around</code></li>
                        <li><code>.justify-content-xxl-evenly</code></li>
                    </ul>

                    <h2 id="align-items">Align items</h2>
                    <p>Use <code>align-items</code> utilities on flexbox containers to change the alignment of flex items on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</p>
                    <div class="bd-example">
                        <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-start&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-end&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-baseline&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-stretch&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>Responsive variations also exist for <code>align-items</code>.</p>
                    <ul>
                        <li><code>.align-items-start</code></li>
                        <li><code>.align-items-end</code></li>
                        <li><code>.align-items-center</code></li>
                        <li><code>.align-items-baseline</code></li>
                        <li><code>.align-items-stretch</code></li>
                        <li><code>.align-items-sm-start</code></li>
                        <li><code>.align-items-sm-end</code></li>
                        <li><code>.align-items-sm-center</code></li>
                        <li><code>.align-items-sm-baseline</code></li>
                        <li><code>.align-items-sm-stretch</code></li>
                        <li><code>.align-items-md-start</code></li>
                        <li><code>.align-items-md-end</code></li>
                        <li><code>.align-items-md-center</code></li>
                        <li><code>.align-items-md-baseline</code></li>
                        <li><code>.align-items-md-stretch</code></li>
                        <li><code>.align-items-lg-start</code></li>
                        <li><code>.align-items-lg-end</code></li>
                        <li><code>.align-items-lg-center</code></li>
                        <li><code>.align-items-lg-baseline</code></li>
                        <li><code>.align-items-lg-stretch</code></li>
                        <li><code>.align-items-xl-start</code></li>
                        <li><code>.align-items-xl-end</code></li>
                        <li><code>.align-items-xl-center</code></li>
                        <li><code>.align-items-xl-baseline</code></li>
                        <li><code>.align-items-xl-stretch</code></li>
                        <li><code>.align-items-xxl-start</code></li>
                        <li><code>.align-items-xxl-end</code></li>
                        <li><code>.align-items-xxl-center</code></li>
                        <li><code>.align-items-xxl-baseline</code></li>
                        <li><code>.align-items-xxl-stretch</code></li>
                    </ul>

                    <h2 id="align-self">Align self</h2>
                    <p>Use <code>align-self</code> utilities on flexbox items to individually change their alignment on the cross axis (the y-axis to start, x-axis if <code>flex-direction: column</code>). Choose from the same options as <code>align-items</code>: <code>start</code>, <code>end</code>, <code>center</code>, <code>baseline</code>, or <code>stretch</code> (browser default).</p>
                    <div class="bd-example">
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex bd-highlight mb-3" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                        <div class="d-flex bd-highlight" style="height: 100px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-self-start&#34;</span><span class="p">&gt;</span>Aligned flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-self-end&#34;</span><span class="p">&gt;</span>Aligned flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-self-center&#34;</span><span class="p">&gt;</span>Aligned flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-self-baseline&#34;</span><span class="p">&gt;</span>Aligned flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;align-self-stretch&#34;</span><span class="p">&gt;</span>Aligned flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>Responsive variations also exist for <code>align-self</code>.</p>
                    <ul>
                        <li><code>.align-self-start</code></li>
                        <li><code>.align-self-end</code></li>
                        <li><code>.align-self-center</code></li>
                        <li><code>.align-self-baseline</code></li>
                        <li><code>.align-self-stretch</code></li>
                        <li><code>.align-self-sm-start</code></li>
                        <li><code>.align-self-sm-end</code></li>
                        <li><code>.align-self-sm-center</code></li>
                        <li><code>.align-self-sm-baseline</code></li>
                        <li><code>.align-self-sm-stretch</code></li>
                        <li><code>.align-self-md-start</code></li>
                        <li><code>.align-self-md-end</code></li>
                        <li><code>.align-self-md-center</code></li>
                        <li><code>.align-self-md-baseline</code></li>
                        <li><code>.align-self-md-stretch</code></li>
                        <li><code>.align-self-lg-start</code></li>
                        <li><code>.align-self-lg-end</code></li>
                        <li><code>.align-self-lg-center</code></li>
                        <li><code>.align-self-lg-baseline</code></li>
                        <li><code>.align-self-lg-stretch</code></li>
                        <li><code>.align-self-xl-start</code></li>
                        <li><code>.align-self-xl-end</code></li>
                        <li><code>.align-self-xl-center</code></li>
                        <li><code>.align-self-xl-baseline</code></li>
                        <li><code>.align-self-xl-stretch</code></li>
                        <li><code>.align-self-xxl-start</code></li>
                        <li><code>.align-self-xxl-end</code></li>
                        <li><code>.align-self-xxl-center</code></li>
                        <li><code>.align-self-xxl-baseline</code></li>
                        <li><code>.align-self-xxl-stretch</code></li>
                    </ul>

                    <h2 id="fill">Fill</h2>
                    <p>Use the <code>.flex-fill</code> class on a series of sibling elements to force them into widths equal to their content (or equal widths if their content does not surpass their border-boxes) while taking up all available horizontal space.</p>
                    <div class="bd-example">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight">Flex item with a lot of content</div>
                            <div class="p-2 flex-fill bd-highlight">Flex item</div>
                            <div class="p-2 flex-fill bd-highlight">Flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 flex-fill bd-highlight&#34;</span><span class="p">&gt;</span>Flex item with a lot of content<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 flex-fill bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 flex-fill bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Responsive variations also exist for <code>flex-fill</code>.</p>
                    <ul>
                        <li><code>.flex-fill</code></li>
                        <li><code>.flex-sm-fill</code></li>
                        <li><code>.flex-md-fill</code></li>
                        <li><code>.flex-lg-fill</code></li>
                        <li><code>.flex-xl-fill</code></li>
                        <li><code>.flex-xxl-fill</code></li>
                    </ul>

                    <h2 id="grow-and-shrink">Grow and shrink</h2>
                    <p>Use <code>.flex-grow-*</code> utilities to toggle a flex item&rsquo;s ability to grow to fill available space. In the example below, the <code>.flex-grow-1</code> elements uses all available space it can, while allowing the remaining two flex items their necessary space.</p>
                    <div class="bd-example">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-grow-1 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Third flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 flex-grow-1 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Third flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Use <code>.flex-shrink-*</code> utilities to toggle a flex item&rsquo;s ability to shrink if necessary. In the example below, the second flex item with <code>.flex-shrink-1</code> is forced to wrap its contents to a new line, &ldquo;shrinking&rdquo; to allow more space for the previous flex item with <code>.w-100</code>.</p>
                    <div class="bd-example">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 w-100 bd-highlight">Flex item</div>
                            <div class="p-2 flex-shrink-1 bd-highlight">Flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 w-100 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 flex-shrink-1 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Responsive variations also exist for <code>flex-grow</code> and <code>flex-shrink</code>.</p>
                    <ul>
                        <li><code>.flex-{grow|shrink}-0</code></li>
                        <li><code>.flex-{grow|shrink}-1</code></li>
                        <li><code>.flex-sm-{grow|shrink}-0</code></li>
                        <li><code>.flex-sm-{grow|shrink}-1</code></li>
                        <li><code>.flex-md-{grow|shrink}-0</code></li>
                        <li><code>.flex-md-{grow|shrink}-1</code></li>
                        <li><code>.flex-lg-{grow|shrink}-0</code></li>
                        <li><code>.flex-lg-{grow|shrink}-1</code></li>
                        <li><code>.flex-xl-{grow|shrink}-0</code></li>
                        <li><code>.flex-xl-{grow|shrink}-1</code></li>
                        <li><code>.flex-xxl-{grow|shrink}-0</code></li>
                        <li><code>.flex-xxl-{grow|shrink}-1</code></li>
                    </ul>

                    <h2 id="auto-margins">Auto margins</h2>
                    <p>Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the right (<code>.me-auto</code>), and pushing two items to the left (<code>.ms-auto</code>).</p>
                    <div class="bd-example">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex bd-highlight mb-3">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="ms-auto p-2 bd-highlight">Flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;me-auto p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex bd-highlight mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;ms-auto p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="with-align-items">With align-items</h3>
                    <p>Vertically move one flex item to the top or bottom of a container by mixing <code>align-items</code>, <code>flex-direction: column</code>, and <code>margin-top: auto</code> or <code>margin-bottom: auto</code>.</p>
                    <div class="bd-example">
                        <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                            <div class="mb-auto p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>

                        <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="mt-auto p-2 bd-highlight">Flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-start flex-column bd-highlight mb-3&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;height: 200px;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-auto p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-end flex-column bd-highlight mb-3&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;height: 200px;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mt-auto p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="wrap">Wrap</h2>
                    <p>Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with <code>.flex-nowrap</code>, wrapping with <code>.flex-wrap</code>, or reverse wrapping with <code>.flex-wrap-reverse</code>.</p>
                    <div class="bd-example">
                        <div class="d-flex flex-nowrap bd-highlight" style="width: 8rem;">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-nowrap&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex flex-wrap bd-highlight">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-wrap&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex flex-wrap-reverse bd-highlight">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-wrap-reverse&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>Responsive variations also exist for <code>flex-wrap</code>.</p>
                    <ul>
                        <li><code>.flex-nowrap</code></li>
                        <li><code>.flex-wrap</code></li>
                        <li><code>.flex-wrap-reverse</code></li>
                        <li><code>.flex-sm-nowrap</code></li>
                        <li><code>.flex-sm-wrap</code></li>
                        <li><code>.flex-sm-wrap-reverse</code></li>
                        <li><code>.flex-md-nowrap</code></li>
                        <li><code>.flex-md-wrap</code></li>
                        <li><code>.flex-md-wrap-reverse</code></li>
                        <li><code>.flex-lg-nowrap</code></li>
                        <li><code>.flex-lg-wrap</code></li>
                        <li><code>.flex-lg-wrap-reverse</code></li>
                        <li><code>.flex-xl-nowrap</code></li>
                        <li><code>.flex-xl-wrap</code></li>
                        <li><code>.flex-xl-wrap-reverse</code></li>
                        <li><code>.flex-xxl-nowrap</code></li>
                        <li><code>.flex-xxl-wrap</code></li>
                        <li><code>.flex-xxl-wrap-reverse</code></li>
                    </ul>

                    <h2 id="order">Order</h2>
                    <p>Change the <em>visual</em> order of specific flex items with a handful of <code>order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code>order</code> takes any integer value from 0 to 5, add custom CSS for any additional values needed.</p>
                    <div class="bd-example">
                        <div class="d-flex flex-nowrap bd-highlight">
                            <div class="order-3 p-2 bd-highlight">First flex item</div>
                            <div class="order-2 p-2 bd-highlight">Second flex item</div>
                            <div class="order-1 p-2 bd-highlight">Third flex item</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex flex-nowrap bd-highlight&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;order-3 p-2 bd-highlight&#34;</span><span class="p">&gt;</span>First flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;order-2 p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Second flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;order-1 p-2 bd-highlight&#34;</span><span class="p">&gt;</span>Third flex item<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Responsive variations also exist for <code>order</code>.</p>
                    <ul>
                        <li><code>.order-0</code></li>
                        <li><code>.order-1</code></li>
                        <li><code>.order-2</code></li>
                        <li><code>.order-3</code></li>
                        <li><code>.order-4</code></li>
                        <li><code>.order-5</code></li>
                        <li><code>.order-sm-0</code></li>
                        <li><code>.order-sm-1</code></li>
                        <li><code>.order-sm-2</code></li>
                        <li><code>.order-sm-3</code></li>
                        <li><code>.order-sm-4</code></li>
                        <li><code>.order-sm-5</code></li>
                        <li><code>.order-md-0</code></li>
                        <li><code>.order-md-1</code></li>
                        <li><code>.order-md-2</code></li>
                        <li><code>.order-md-3</code></li>
                        <li><code>.order-md-4</code></li>
                        <li><code>.order-md-5</code></li>
                        <li><code>.order-lg-0</code></li>
                        <li><code>.order-lg-1</code></li>
                        <li><code>.order-lg-2</code></li>
                        <li><code>.order-lg-3</code></li>
                        <li><code>.order-lg-4</code></li>
                        <li><code>.order-lg-5</code></li>
                        <li><code>.order-xl-0</code></li>
                        <li><code>.order-xl-1</code></li>
                        <li><code>.order-xl-2</code></li>
                        <li><code>.order-xl-3</code></li>
                        <li><code>.order-xl-4</code></li>
                        <li><code>.order-xl-5</code></li>
                        <li><code>.order-xxl-0</code></li>
                        <li><code>.order-xxl-1</code></li>
                        <li><code>.order-xxl-2</code></li>
                        <li><code>.order-xxl-3</code></li>
                        <li><code>.order-xxl-4</code></li>
                        <li><code>.order-xxl-5</code></li>
                    </ul>

                    <p>Additionally there are also responsive <code>.order-first</code> and <code>.order-last</code> classes that change the <code>order</code> of an element by applying <code>order: -1</code> and <code>order: 6</code>, respectively.</p>
                    <ul>
                        <li><code>.order-first</code></li>
                        <li><code>.order-last</code></li>
                        <li><code>.order-sm-first</code></li>
                        <li><code>.order-sm-last</code></li>
                        <li><code>.order-md-first</code></li>
                        <li><code>.order-md-last</code></li>
                        <li><code>.order-lg-first</code></li>
                        <li><code>.order-lg-last</code></li>
                        <li><code>.order-xl-first</code></li>
                        <li><code>.order-xl-last</code></li>
                        <li><code>.order-xxl-first</code></li>
                        <li><code>.order-xxl-last</code></li>
                    </ul>

                    <h2 id="align-content">Align content</h2>
                    <p>Use <code>align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code>start</code> (browser default), <code>end</code>, <code>center</code>, <code>between</code>, <code>around</code>, or <code>stretch</code>. To demonstrate these utilities, we&rsquo;ve enforced <code>flex-wrap: wrap</code> and increased the number of flex items.</p>
                    <p><strong>Heads up!</strong> This property has no effect on single rows of flex items.</p>
                    <div class="bd-example">
                        <div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-start flex-wrap&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex align-content-end flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-end flex-wrap&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-center flex-wrap&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex align-content-between flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-between flex-wrap&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex align-content-around flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-around flex-wrap&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><div class="bd-example">
                        <div class="d-flex align-content-stretch flex-wrap bd-highlight mb-3" style="height: 200px">
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                            <div class="p-2 bd-highlight">Flex item</div>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-content-stretch flex-wrap&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>Responsive variations also exist for <code>align-content</code>.</p>
                    <ul>
                        <li><code>.align-content-start</code></li>
                        <li><code>.align-content-end</code></li>
                        <li><code>.align-content-center</code></li>
                        <li><code>.align-content-around</code></li>
                        <li><code>.align-content-stretch</code></li>
                        <li><code>.align-content-sm-start</code></li>
                        <li><code>.align-content-sm-end</code></li>
                        <li><code>.align-content-sm-center</code></li>
                        <li><code>.align-content-sm-around</code></li>
                        <li><code>.align-content-sm-stretch</code></li>
                        <li><code>.align-content-md-start</code></li>
                        <li><code>.align-content-md-end</code></li>
                        <li><code>.align-content-md-center</code></li>
                        <li><code>.align-content-md-around</code></li>
                        <li><code>.align-content-md-stretch</code></li>
                        <li><code>.align-content-lg-start</code></li>
                        <li><code>.align-content-lg-end</code></li>
                        <li><code>.align-content-lg-center</code></li>
                        <li><code>.align-content-lg-around</code></li>
                        <li><code>.align-content-lg-stretch</code></li>
                        <li><code>.align-content-xl-start</code></li>
                        <li><code>.align-content-xl-end</code></li>
                        <li><code>.align-content-xl-center</code></li>
                        <li><code>.align-content-xl-around</code></li>
                        <li><code>.align-content-xl-stretch</code></li>
                        <li><code>.align-content-xxl-start</code></li>
                        <li><code>.align-content-xxl-end</code></li>
                        <li><code>.align-content-xxl-center</code></li>
                        <li><code>.align-content-xxl-around</code></li>
                        <li><code>.align-content-xxl-stretch</code></li>
                    </ul>

                    <h2 id="media-object">Media object</h2>
                    <p>Looking to replicate the <a href="https://getbootstrap.com/docs/4.6/components/media-object/">media object component</a> from Bootstrap 4? Recreate it in no time with a few flex utilities that allow even more flexibility and customization than before.</p>
                    <div class="bd-example">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <svg class="bd-placeholder-img" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e5e5e5"/><text x="50%" y="50%" fill="#999" dy=".3em">Image</text></svg>

                            </div>
                            <div class="flex-grow-1 ms-3">
                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;flex-shrink-0&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;flex-grow-1 ms-3&#34;</span><span class="p">&gt;</span>
    This is some content from a media component. You can replace this with any content and adjust it as needed.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>And say you want to vertically center the content next to the image:</p>
                    <div class="bd-example">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <svg class="bd-placeholder-img" width="100" height="100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e5e5e5"/><text x="50%" y="50%" fill="#999" dy=".3em">Image</text></svg>

                            </div>
                            <div class="flex-grow-1 ms-3">
                                This is some content from a media component. You can replace this with any content and adjust it as needed.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex align-items-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;flex-shrink-0&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;flex-grow-1 ms-3&#34;</span><span class="p">&gt;</span>
    This is some content from a media component. You can replace this with any content and adjust it as needed.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="utilities-api">Utilities API</h3>
                    <p>Flexbox utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="../utilities/api.php#using-the-api">Learn how to use the utilities API.</a></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;flex&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">flex</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span><span class="nt">fill</span><span class="nd">:</span> <span class="nt">1</span> <span class="nt">1</span> <span class="nt">auto</span><span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;flex-direction&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">flex-direction</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">flex</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">row</span> <span class="nt">column</span> <span class="nt">row-reverse</span> <span class="nt">column-reverse</span>
    <span class="o">),</span>
    <span class="s2">&#34;flex-grow&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">flex-grow</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">flex</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">grow-0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
        <span class="nt">grow-1</span><span class="nd">:</span> <span class="nt">1</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;flex-shrink&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">flex-shrink</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">flex</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">shrink-0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
        <span class="nt">shrink-1</span><span class="nd">:</span> <span class="nt">1</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;flex-wrap&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">flex-wrap</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">flex</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">wrap</span> <span class="nt">nowrap</span> <span class="nt">wrap-reverse</span>
    <span class="o">),</span>
    <span class="s2">&#34;gap&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">gap</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">gap</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">spacers</span>
    <span class="o">),</span>
    <span class="s2">&#34;justify-content&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">justify-content</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">start</span><span class="nd">:</span> <span class="nt">flex-start</span><span class="o">,</span>
        <span class="nt">end</span><span class="nd">:</span> <span class="nt">flex-end</span><span class="o">,</span>
        <span class="nt">center</span><span class="nd">:</span> <span class="nt">center</span><span class="o">,</span>
        <span class="nt">between</span><span class="nd">:</span> <span class="nt">space-between</span><span class="o">,</span>
        <span class="nt">around</span><span class="nd">:</span> <span class="nt">space-around</span><span class="o">,</span>
        <span class="nt">evenly</span><span class="nd">:</span> <span class="nt">space-evenly</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;align-items&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">align-items</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">start</span><span class="nd">:</span> <span class="nt">flex-start</span><span class="o">,</span>
        <span class="nt">end</span><span class="nd">:</span> <span class="nt">flex-end</span><span class="o">,</span>
        <span class="nt">center</span><span class="nd">:</span> <span class="nt">center</span><span class="o">,</span>
        <span class="nt">baseline</span><span class="nd">:</span> <span class="nt">baseline</span><span class="o">,</span>
        <span class="nt">stretch</span><span class="nd">:</span> <span class="nt">stretch</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;align-content&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">align-content</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">start</span><span class="nd">:</span> <span class="nt">flex-start</span><span class="o">,</span>
        <span class="nt">end</span><span class="nd">:</span> <span class="nt">flex-end</span><span class="o">,</span>
        <span class="nt">center</span><span class="nd">:</span> <span class="nt">center</span><span class="o">,</span>
        <span class="nt">between</span><span class="nd">:</span> <span class="nt">space-between</span><span class="o">,</span>
        <span class="nt">around</span><span class="nd">:</span> <span class="nt">space-around</span><span class="o">,</span>
        <span class="nt">stretch</span><span class="nd">:</span> <span class="nt">stretch</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;align-self&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">align-self</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">auto</span><span class="nd">:</span> <span class="nt">auto</span><span class="o">,</span>
        <span class="nt">start</span><span class="nd">:</span> <span class="nt">flex-start</span><span class="o">,</span>
        <span class="nt">end</span><span class="nd">:</span> <span class="nt">flex-end</span><span class="o">,</span>
        <span class="nt">center</span><span class="nd">:</span> <span class="nt">center</span><span class="o">,</span>
        <span class="nt">baseline</span><span class="nd">:</span> <span class="nt">baseline</span><span class="o">,</span>
        <span class="nt">stretch</span><span class="nd">:</span> <span class="nt">stretch</span><span class="o">,</span>
      <span class="o">)</span>
    <span class="o">),</span>
    <span class="s2">&#34;order&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">responsive</span><span class="nd">:</span> <span class="nt">true</span><span class="o">,</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">order</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">first</span><span class="nd">:</span> <span class="o">-</span><span class="nt">1</span><span class="o">,</span>
        <span class="nt">0</span><span class="nd">:</span> <span class="nt">0</span><span class="o">,</span>
        <span class="nt">1</span><span class="nd">:</span> <span class="nt">1</span><span class="o">,</span>
        <span class="nt">2</span><span class="nd">:</span> <span class="nt">2</span><span class="o">,</span>
        <span class="nt">3</span><span class="nd">:</span> <span class="nt">3</span><span class="o">,</span>
        <span class="nt">4</span><span class="nd">:</span> <span class="nt">4</span><span class="o">,</span>
        <span class="nt">5</span><span class="nd">:</span> <span class="nt">5</span><span class="o">,</span>
        <span class="nt">last</span><span class="nd">:</span> <span class="nt">6</span><span class="o">,</span>
      <span class="o">),</span>
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
