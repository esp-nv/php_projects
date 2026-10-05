
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Use Bootstrap&rsquo;s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Buttons · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/buttons/">


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
                                    <li><a href="buttons.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Buttons</a></li>
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
                                    <li><a href="scrollspy.php" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/buttons.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Buttons</h1>
                    </div>
                    <p class="bd-lead">Use Bootstrap&rsquo;s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#examples">Examples</a></li>
                            <li><a href="#disable-text-wrapping">Disable text wrapping</a></li>
                            <li><a href="#button-tags">Button tags</a></li>
                            <li><a href="#outline-buttons">Outline buttons</a></li>
                            <li><a href="#sizes">Sizes</a></li>
                            <li><a href="#disabled-state">Disabled state</a></li>
                            <li><a href="#block-buttons">Block buttons</a></li>
                            <li><a href="#button-plugin">Button plugin</a>
                                <ul>
                                    <li><a href="#toggle-states">Toggle states</a></li>
                                    <li><a href="#methods">Methods</a></li>
                                </ul>
                            </li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#mixins">Mixins</a></li>
                                    <li><a href="#loops">Loops</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="examples">Examples</h2>
                    <p>Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
                    <div class="bd-example">

                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-light">Light</button>
                        <button type="button" class="btn btn-dark">Dark</button>

                        <button type="button" class="btn btn-link">Link</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Primary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span><span class="p">&gt;</span>Secondary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-success&#34;</span><span class="p">&gt;</span>Success<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-danger&#34;</span><span class="p">&gt;</span>Danger<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-warning&#34;</span><span class="p">&gt;</span>Warning<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-info&#34;</span><span class="p">&gt;</span>Info<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-light&#34;</span><span class="p">&gt;</span>Light<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-dark&#34;</span><span class="p">&gt;</span>Dark<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-link&#34;</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-info">
                        <h5 id="conveying-meaning-to-assistive-technologies">Conveying meaning to assistive technologies</h5>
                        <p>Using color to add meaning only provides a visual indication, which will not be conveyed to users of assistive technologies – such as screen readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), or is included through alternative means, such as additional text hidden with the <code>.visually-hidden</code> class.
                    </div>

                    <h2 id="disable-text-wrapping">Disable text wrapping</h2>
                    <p>If you don&rsquo;t want the button text to wrap, you can add the <code>.text-nowrap</code> class to the button. In Sass, you can set <code>$btn-white-space: nowrap</code> to disable text wrapping for each button.</p>
                    <h2 id="button-tags">Button tags</h2>
                    <p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
                    <p>When using button classes on <code>&lt;a&gt;</code> elements that are used to trigger in-page functionality (like collapsing content), rather than linking to new pages or sections within the current page, these links should be given a <code>role=&quot;button&quot;</code> to appropriately convey their purpose to assistive technologies such as screen readers.</p>
                    <div class="bd-example">
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                        <button class="btn btn-primary" type="submit">Button</button>
                        <input class="btn btn-primary" type="button" value="Input">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <input class="btn btn-primary" type="reset" value="Reset">
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Input&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Submit&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;reset&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Reset&#34;</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="outline-buttons">Outline buttons</h2>
                    <p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
                    <div class="bd-example">

                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-light">Light</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span><span class="p">&gt;</span>Primary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>Secondary<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-success&#34;</span><span class="p">&gt;</span>Success<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-danger&#34;</span><span class="p">&gt;</span>Danger<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-warning&#34;</span><span class="p">&gt;</span>Warning<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-info&#34;</span><span class="p">&gt;</span>Info<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-light&#34;</span><span class="p">&gt;</span>Light<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-dark&#34;</span><span class="p">&gt;</span>Dark<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-info">
                        Some of the button styles use a relatively light foreground color, and should only be used on a dark background in order to have sufficient contrast.
                    </div>

                    <h2 id="sizes">Sizes</h2>
                    <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                        <button type="button" class="btn btn-secondary btn-lg">Large button</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary btn-lg&#34;</span><span class="p">&gt;</span>Large button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary btn-lg&#34;</span><span class="p">&gt;</span>Large button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                        <button type="button" class="btn btn-secondary btn-sm">Small button</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary btn-sm&#34;</span><span class="p">&gt;</span>Small button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary btn-sm&#34;</span><span class="p">&gt;</span>Small button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="disabled-state">Disabled state</h2>
                    <p>Make buttons look inactive by adding the <code>disabled</code> boolean attribute to any <code>&lt;button&gt;</code> element. Disabled buttons have <code>pointer-events: none</code> applied to, preventing hover and active states from triggering.</p>
                    <div class="bd-example">
                        <button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
                        <button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-lg btn-primary&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>Primary button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary btn-lg&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <p>Disabled buttons using the <code>&lt;a&gt;</code> element behave a bit different:</p>
                    <ul>
                        <li><code>&lt;a&gt;</code>s don&rsquo;t support the <code>disabled</code> attribute, so you must add the <code>.disabled</code> class to make it visually appear disabled.</li>
                        <li>Some future-friendly styles are included to disable all <code>pointer-events</code> on anchor buttons.</li>
                        <li>Disabled buttons should include the <code>aria-disabled=&quot;true&quot;</code> attribute to indicate the state of the element to assistive technologies.</li>
                    </ul>
                    <div class="bd-example">
                        <a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>
                        <a href="#" class="btn btn-secondary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Link</a>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary btn-lg disabled&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;-1&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-disabled</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>Primary link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary btn-lg disabled&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;-1&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-disabled</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-warning">
                        <h5 id="link-functionality-caveat">Link functionality caveat</h5>
                        <p>The <code>.disabled</code> class uses <code>pointer-events: none</code> to try to disable the link functionality of <code>&lt;a&gt;</code>s, but that CSS property is not yet standardized. In addition, even in browsers that do support <code>pointer-events: none</code>, keyboard navigation remains unaffected, meaning that sighted keyboard users and users of assistive technologies will still be able to activate these links. So to be safe, in addition to <code>aria-disabled=&quot;true&quot;</code>, also include a <code>tabindex=&quot;-1&quot;</code> attribute on these links to prevent them from receiving keyboard focus, and use custom JavaScript to disable their functionality altogether.
                    </div>

                    <h2 id="block-buttons">Block buttons</h2>
                    <p>Create responsive stacks of full-width, &ldquo;block buttons&rdquo; like those in Bootstrap 4 with a mix of our display and gap utilities. By using utilities instead of button specific classes, we have much greater control over spacing, alignment, and responsive behaviors.</p>
                    <div class="bd-example">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-grid gap-2&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Here we create a responsive variation, starting with vertically stacked buttons until the <code>md</code> breakpoint, where <code>.d-md-block</code> replaces the <code>.d-grid</code> class, thus nullifying the <code>gap-2</code> utility. Resize your browser to see them change.</p>
                    <div class="bd-example">
                        <div class="d-grid gap-2 d-md-block">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-grid gap-2 d-md-block&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>You can adjust the width of your block buttons with grid column width classes. For example, for a half-width &ldquo;block button&rdquo;, use <code>.col-6</code>. Center it horizontally with <code>.mx-auto</code>, too.</p>
                    <div class="bd-example">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-grid gap-2 col-6 mx-auto&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Additional utilities can be used to adjust the alignment of buttons when horizontal. Here we&rsquo;ve taken our previous responsive example and added some flex utilities and a margin utility on the button to right align the buttons when they&rsquo;re no longer stacked.</p>
                    <div class="bd-example">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button">Button</button>
                            <button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-grid gap-2 d-md-flex justify-content-md-end&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary me-md-2&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="button-plugin">Button plugin</h2>
                    <p>The button plugin allows you to create simple on/off toggle buttons.</p>
                    <div class="bd-callout bd-callout-info">
                        Visually, these toggle buttons are identical to the <a href="../forms/checks-radios.php#checkbox-toggle-buttons">checkbox toggle buttons</a>. However, they are conveyed differently by assistive technologies: the checkbox toggles will be announced by screen readers as &ldquo;checked&rdquo;/&ldquo;not checked&rdquo; (since, despite their appearance, they are fundamentally still checkboxes), whereas these toggle buttons will be announced as &ldquo;button&rdquo;/&ldquo;button pressed&rdquo;. The choice between these two approaches will depend on the type of toggle you are creating, and whether or not the toggle will make sense to users when announced as a checkbox or as an actual button.
                    </div>

                    <h3 id="toggle-states">Toggle states</h3>
                    <p>Add <code>data-bs-toggle=&quot;button&quot;</code> to toggle a button&rsquo;s <code>active</code> state. If you&rsquo;re pre-toggling a button, you must manually add the <code>.active</code> class <strong>and</strong> <code>aria-pressed=&quot;true&quot;</code> to ensure that it is conveyed appropriately to assistive technologies.</p>
                    <div class="bd-example">
                        <button type="button" class="btn btn-primary" data-bs-toggle="button" autocomplete="off">Toggle button</button>
                        <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Active toggle button</button>
                        <button type="button" class="btn btn-primary" disabled data-bs-toggle="button" autocomplete="off">Disabled toggle button</button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>Toggle button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary active&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span> <span class="na">aria-pressed</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>Active toggle button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">disabled</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>Disabled toggle button<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
                        <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
                        <a href="#" class="btn btn-primary disabled" tabindex="-1" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Toggle link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary active&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-pressed</span><span class="o">=</span><span class="s">&#34;true&#34;</span><span class="p">&gt;</span>Active toggle link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary disabled&#34;</span> <span class="na">tabindex</span><span class="o">=</span><span class="s">&#34;-1&#34;</span> <span class="na">aria-disabled</span><span class="o">=</span><span class="s">&#34;true&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;button&#34;</span><span class="p">&gt;</span>Disabled toggle link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="methods">Methods</h3>
                    <p>You can create a button instance with the button constructor, for example:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">button</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myButton&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">bsButton</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Button</span><span class="p">(</span><span class="nx">button</span><span class="p">)</span>
</code></pre></div><table class="table">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <code>toggle</code>
                                </td>
                                <td>
                                    Toggles push state. Gives the button the appearance that it has been activated.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>dispose</code>
                                </td>
                                <td>
                                    Destroys an element's button. (Removes stored data on the DOM element)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getInstance</code>
                                </td>
                                <td>
                                    Static method which allows you to get the button instance associated to a DOM element, you can use it like this: <code>bootstrap.Button.getInstance(element)</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getOrCreateInstance</code>
                                </td>
                                <td>
                                    Static method which returns a button instance associated to a DOM element or create a new one in case it wasn't initialised.
                                    You can use it like this: <code>bootstrap.Button.getOrCreateInstance(element)</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>For example, to toggle all buttons</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">buttons</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;.btn&#39;</span><span class="p">)</span>
<span class="nx">buttons</span><span class="p">.</span><span class="nx">forEach</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">button</span><span class="p">)</span> <span class="p">{</span>
  <span class="kd">var</span> <span class="nx">button</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Button</span><span class="p">(</span><span class="nx">button</span><span class="p">)</span>
  <span class="nx">button</span><span class="p">.</span><span class="nx">toggle</span><span class="p">()</span>
<span class="p">})</span>
</code></pre></div><h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$btn-padding-y</span><span class="o">:</span>               <span class="nv">$input-btn-padding-y</span><span class="p">;</span>
<span class="nv">$btn-padding-x</span><span class="o">:</span>               <span class="nv">$input-btn-padding-x</span><span class="p">;</span>
<span class="nv">$btn-font-family</span><span class="o">:</span>             <span class="nv">$input-btn-font-family</span><span class="p">;</span>
<span class="nv">$btn-font-size</span><span class="o">:</span>               <span class="nv">$input-btn-font-size</span><span class="p">;</span>
<span class="nv">$btn-line-height</span><span class="o">:</span>             <span class="nv">$input-btn-line-height</span><span class="p">;</span>
<span class="nv">$btn-white-space</span><span class="o">:</span>             <span class="n">null</span><span class="p">;</span> <span class="c1">// Set to `nowrap` to prevent text wrapping
</span><span class="c1"></span>
<span class="nv">$btn-padding-y-sm</span><span class="o">:</span>            <span class="nv">$input-btn-padding-y-sm</span><span class="p">;</span>
<span class="nv">$btn-padding-x-sm</span><span class="o">:</span>            <span class="nv">$input-btn-padding-x-sm</span><span class="p">;</span>
<span class="nv">$btn-font-size-sm</span><span class="o">:</span>            <span class="nv">$input-btn-font-size-sm</span><span class="p">;</span>

<span class="nv">$btn-padding-y-lg</span><span class="o">:</span>            <span class="nv">$input-btn-padding-y-lg</span><span class="p">;</span>
<span class="nv">$btn-padding-x-lg</span><span class="o">:</span>            <span class="nv">$input-btn-padding-x-lg</span><span class="p">;</span>
<span class="nv">$btn-font-size-lg</span><span class="o">:</span>            <span class="nv">$input-btn-font-size-lg</span><span class="p">;</span>

<span class="nv">$btn-border-width</span><span class="o">:</span>            <span class="nv">$input-btn-border-width</span><span class="p">;</span>

<span class="nv">$btn-font-weight</span><span class="o">:</span>             <span class="nv">$font-weight-normal</span><span class="p">;</span>
<span class="nv">$btn-box-shadow</span><span class="o">:</span>              <span class="ni">inset</span> <span class="mi">0</span> <span class="mi">1</span><span class="kt">px</span> <span class="mi">0</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$white</span><span class="o">,</span> <span class="mf">.15</span><span class="p">)</span><span class="o">,</span> <span class="mi">0</span> <span class="mi">1</span><span class="kt">px</span> <span class="mi">1</span><span class="kt">px</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="mf">.075</span><span class="p">);</span>
<span class="nv">$btn-focus-width</span><span class="o">:</span>             <span class="nv">$input-btn-focus-width</span><span class="p">;</span>
<span class="nv">$btn-focus-box-shadow</span><span class="o">:</span>        <span class="nv">$input-btn-focus-box-shadow</span><span class="p">;</span>
<span class="nv">$btn-disabled-opacity</span><span class="o">:</span>        <span class="mf">.65</span><span class="p">;</span>
<span class="nv">$btn-active-box-shadow</span><span class="o">:</span>       <span class="ni">inset</span> <span class="mi">0</span> <span class="mi">3</span><span class="kt">px</span> <span class="mi">5</span><span class="kt">px</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$black</span><span class="o">,</span> <span class="mf">.125</span><span class="p">);</span>

<span class="nv">$btn-link-color</span><span class="o">:</span>              <span class="nv">$link-color</span><span class="p">;</span>
<span class="nv">$btn-link-hover-color</span><span class="o">:</span>        <span class="nv">$link-hover-color</span><span class="p">;</span>
<span class="nv">$btn-link-disabled-color</span><span class="o">:</span>     <span class="nv">$gray-600</span><span class="p">;</span>

<span class="c1">// Allows for customizing button radius independently from global border radius
</span><span class="c1"></span><span class="nv">$btn-border-radius</span><span class="o">:</span>           <span class="nv">$border-radius</span><span class="p">;</span>
<span class="nv">$btn-border-radius-sm</span><span class="o">:</span>        <span class="nv">$border-radius-sm</span><span class="p">;</span>
<span class="nv">$btn-border-radius-lg</span><span class="o">:</span>        <span class="nv">$border-radius-lg</span><span class="p">;</span>

<span class="nv">$btn-transition</span><span class="o">:</span>              <span class="ni">color</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="o">,</span> <span class="n">background-color</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="o">,</span> <span class="n">border-color</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="o">,</span> <span class="n">box-shadow</span> <span class="mf">.15</span><span class="kt">s</span> <span class="ni">ease-in-out</span><span class="p">;</span>

<span class="nv">$btn-hover-bg-shade-amount</span><span class="o">:</span>       <span class="mi">15</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-hover-bg-tint-amount</span><span class="o">:</span>        <span class="mi">15</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-hover-border-shade-amount</span><span class="o">:</span>   <span class="mi">20</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-hover-border-tint-amount</span><span class="o">:</span>    <span class="mi">10</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-active-bg-shade-amount</span><span class="o">:</span>      <span class="mi">20</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-active-bg-tint-amount</span><span class="o">:</span>       <span class="mi">20</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-active-border-shade-amount</span><span class="o">:</span>  <span class="mi">25</span><span class="kt">%</span><span class="p">;</span>
<span class="nv">$btn-active-border-tint-amount</span><span class="o">:</span>   <span class="mi">10</span><span class="kt">%</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="mixins">Mixins</h3>
                    <p>There are three mixins for buttons: button and button outline variant mixins (both based on <code>$theme-colors</code>), plus a button size mixin.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> button-variant</span><span class="p">(</span>
  <span class="nv">$background</span><span class="o">,</span>
  <span class="nv">$border</span><span class="o">,</span>
  <span class="nv">$color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$background</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$hover-background</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$color</span> <span class="o">==</span> <span class="nv">$color-contrast-light</span><span class="o">,</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$background</span><span class="o">,</span> <span class="nv">$btn-hover-bg-shade-amount</span><span class="p">)</span><span class="o">,</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$background</span><span class="o">,</span> <span class="nv">$btn-hover-bg-tint-amount</span><span class="p">))</span><span class="o">,</span>
  <span class="nv">$hover-border</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$color</span> <span class="o">==</span> <span class="nv">$color-contrast-light</span><span class="o">,</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$border</span><span class="o">,</span> <span class="nv">$btn-hover-border-shade-amount</span><span class="p">)</span><span class="o">,</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$border</span><span class="o">,</span> <span class="nv">$btn-hover-border-tint-amount</span><span class="p">))</span><span class="o">,</span>
  <span class="nv">$hover-color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$hover-background</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$active-background</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$color</span> <span class="o">==</span> <span class="nv">$color-contrast-light</span><span class="o">,</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$background</span><span class="o">,</span> <span class="nv">$btn-active-bg-shade-amount</span><span class="p">)</span><span class="o">,</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$background</span><span class="o">,</span> <span class="nv">$btn-active-bg-tint-amount</span><span class="p">))</span><span class="o">,</span>
  <span class="nv">$active-border</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$color</span> <span class="o">==</span> <span class="nv">$color-contrast-light</span><span class="o">,</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$border</span><span class="o">,</span> <span class="nv">$btn-active-border-shade-amount</span><span class="p">)</span><span class="o">,</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$border</span><span class="o">,</span> <span class="nv">$btn-active-border-tint-amount</span><span class="p">))</span><span class="o">,</span>
  <span class="nv">$active-color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$active-background</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$disabled-background</span><span class="o">:</span> <span class="nv">$background</span><span class="o">,</span>
  <span class="nv">$disabled-border</span><span class="o">:</span> <span class="nv">$border</span><span class="o">,</span>
  <span class="nv">$disabled-color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$disabled-background</span><span class="p">)</span>
<span class="p">)</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
  <span class="k">@include</span><span class="nd"> gradient-bg</span><span class="p">(</span><span class="nv">$background</span><span class="p">);</span>
  <span class="na">border-color</span><span class="o">:</span> <span class="nv">$border</span><span class="p">;</span>
  <span class="k">@include</span><span class="nd"> box-shadow</span><span class="p">(</span><span class="nv">$btn-box-shadow</span><span class="p">);</span>

  <span class="k">&amp;</span><span class="nd">:hover</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$hover-color</span><span class="p">;</span>
    <span class="k">@include</span><span class="nd"> gradient-bg</span><span class="p">(</span><span class="nv">$hover-background</span><span class="p">);</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$hover-border</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="nc">.btn-check</span><span class="nd">:focus</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$hover-color</span><span class="p">;</span>
    <span class="k">@include</span><span class="nd"> gradient-bg</span><span class="p">(</span><span class="nv">$hover-background</span><span class="p">);</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$hover-border</span><span class="p">;</span>
    <span class="k">@if</span> <span class="nv">$enable-shadows</span> <span class="p">{</span>
      <span class="k">@include</span><span class="nd"> box-shadow</span><span class="p">(</span><span class="nv">$btn-box-shadow</span><span class="o">,</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$border</span><span class="o">,</span> <span class="mi">15</span><span class="kt">%</span><span class="p">)</span><span class="o">,</span> <span class="mf">.5</span><span class="p">));</span>
    <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
      <span class="c1">// Avoid using mixin so we can pass custom focus shadow properly
</span><span class="c1"></span>      <span class="na">box-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$border</span><span class="o">,</span> <span class="mi">15</span><span class="kt">%</span><span class="p">)</span><span class="o">,</span> <span class="mf">.5</span><span class="p">);</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="nc">.btn-check</span><span class="nd">:checked</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="nc">.btn-check</span><span class="nd">:active</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:active</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nc">.active</span><span class="o">,</span>
  <span class="nc">.show</span> <span class="o">&gt;</span> <span class="k">&amp;</span><span class="nc">.dropdown-toggle</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$active-color</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="nv">$active-background</span><span class="p">;</span>
    <span class="c1">// Remove CSS gradients if they&#39;re enabled
</span><span class="c1"></span>    <span class="na">background-image</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$enable-gradients</span><span class="o">,</span> <span class="ni">none</span><span class="o">,</span> <span class="n">null</span><span class="p">);</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$active-border</span><span class="p">;</span>

    <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
      <span class="k">@if</span> <span class="nv">$enable-shadows</span> <span class="p">{</span>
        <span class="k">@include</span><span class="nd"> box-shadow</span><span class="p">(</span><span class="nv">$btn-active-box-shadow</span><span class="o">,</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$border</span><span class="o">,</span> <span class="mi">15</span><span class="kt">%</span><span class="p">)</span><span class="o">,</span> <span class="mf">.5</span><span class="p">));</span>
      <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
        <span class="c1">// Avoid using mixin so we can pass custom focus shadow properly
</span><span class="c1"></span>        <span class="na">box-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nf">mix</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$border</span><span class="o">,</span> <span class="mi">15</span><span class="kt">%</span><span class="p">)</span><span class="o">,</span> <span class="mf">.5</span><span class="p">);</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="na">&amp;</span><span class="o">:</span><span class="n">disabled</span><span class="o">,</span>
  <span class="o">&amp;.</span><span class="n">disabled</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$disabled-color</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="nv">$disabled-background</span><span class="p">;</span>
    <span class="c1">// Remove CSS gradients if they&#39;re enabled
</span><span class="c1"></span>    <span class="na">background-image</span><span class="o">:</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$enable-gradients</span><span class="o">,</span> <span class="ni">none</span><span class="o">,</span> <span class="n">null</span><span class="p">);</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$disabled-border</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> button-outline-variant</span><span class="p">(</span>
  <span class="nv">$color</span><span class="o">,</span>
  <span class="nv">$color-hover</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$color</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$active-background</span><span class="o">:</span> <span class="nv">$color</span><span class="o">,</span>
  <span class="nv">$active-border</span><span class="o">:</span> <span class="nv">$color</span><span class="o">,</span>
  <span class="nv">$active-color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$active-background</span><span class="p">)</span>
<span class="p">)</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
  <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>

  <span class="k">&amp;</span><span class="nd">:hover</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$color-hover</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="nv">$active-background</span><span class="p">;</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$active-border</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="nc">.btn-check</span><span class="nd">:focus</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
    <span class="na">box-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="mf">.5</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="nc">.btn-check</span><span class="nd">:checked</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="nc">.btn-check</span><span class="nd">:active</span> <span class="o">+</span> <span class="k">&amp;</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nd">:active</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nc">.active</span><span class="o">,</span>
  <span class="k">&amp;</span><span class="nc">.dropdown-toggle.show</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$active-color</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="nv">$active-background</span><span class="p">;</span>
    <span class="na">border-color</span><span class="o">:</span> <span class="nv">$active-border</span><span class="p">;</span>

    <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
      <span class="k">@if</span> <span class="nv">$enable-shadows</span> <span class="p">{</span>
        <span class="k">@include</span><span class="nd"> box-shadow</span><span class="p">(</span><span class="nv">$btn-active-box-shadow</span><span class="o">,</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="mf">.5</span><span class="p">));</span>
      <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
        <span class="c1">// Avoid using mixin so we can pass custom focus shadow properly
</span><span class="c1"></span>        <span class="na">box-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$btn-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="mf">.5</span><span class="p">);</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="na">&amp;</span><span class="o">:</span><span class="n">disabled</span><span class="o">,</span>
  <span class="o">&amp;.</span><span class="n">disabled</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="ni">transparent</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> button-size</span><span class="p">(</span><span class="nv">$padding-y</span><span class="o">,</span> <span class="nv">$padding-x</span><span class="o">,</span> <span class="nv">$font-size</span><span class="o">,</span> <span class="nv">$border-radius</span><span class="p">)</span> <span class="p">{</span>
  <span class="na">padding</span><span class="o">:</span> <span class="nv">$padding-y</span> <span class="nv">$padding-x</span><span class="p">;</span>
  <span class="k">@include</span><span class="nd"> font-size</span><span class="p">(</span><span class="nv">$font-size</span><span class="p">);</span>
  <span class="c1">// Manually declare to provide an override to the browser default
</span><span class="c1"></span>  <span class="k">@include</span><span class="nd"> border-radius</span><span class="p">(</span><span class="nv">$border-radius</span><span class="o">,</span> <span class="mi">0</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
                    <h3 id="loops">Loops</h3>
                    <p>Button variants (for regular and outline buttons) use their respective mixins with our <code>$theme-colors</code> map to generate the modifier classes in <code>scss/_buttons.scss</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nc">.btn-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> button-variant</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$value</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nc">.btn-outline-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> button-outline-variant</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
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
