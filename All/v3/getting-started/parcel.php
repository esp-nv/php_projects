
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Learn how to include Bootstrap in your project using Parcel.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Parcel · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/getting-started/parcel/">



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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true" aria-current="true">
                                Getting started
                            </button>

                            <div class="collapse show" id="getting-started-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="../index.php" class="d-inline-flex align-items-center rounded">Introduction</a></li>
                                    <li><a href="../getting-started/contents.php" class="d-inline-flex align-items-center rounded">Contents</a></li>
                                    <li><a href="../getting-started/browsers-devices.php" class="d-inline-flex align-items-center rounded">Browsers &amp; devices</a></li>
                                    <li><a href="../getting-started/javascript.php" class="d-inline-flex align-items-center rounded">JavaScript</a></li>
                                    <li><a href="../getting-started/build-tools.php" class="d-inline-flex align-items-center rounded">Build tools</a></li>
                                    <li><a href="../getting-started/webpack.php" class="d-inline-flex align-items-center rounded">Webpack</a></li>
                                    <li><a href="../getting-started/parcel.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Parcel</a></li>
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
                                    <li><a href="/docs/5.0/customize/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/customize/sass/" class="d-inline-flex align-items-center rounded">Sass</a></li>
                                    <li><a href="/docs/5.0/customize/options/" class="d-inline-flex align-items-center rounded">Options</a></li>
                                    <li><a href="/docs/5.0/customize/color/" class="d-inline-flex align-items-center rounded">Color</a></li>
                                    <li><a href="/docs/5.0/customize/components/" class="d-inline-flex align-items-center rounded">Components</a></li>
                                    <li><a href="/docs/5.0/customize/css-variables/" class="d-inline-flex align-items-center rounded">CSS variables</a></li>
                                    <li><a href="/docs/5.0/customize/optimize/" class="d-inline-flex align-items-center rounded">Optimize</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="false">
                                Layout
                            </button>

                            <div class="collapse" id="layout-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/layout/breakpoints/" class="d-inline-flex align-items-center rounded">Breakpoints</a></li>
                                    <li><a href="/docs/5.0/layout/containers/" class="d-inline-flex align-items-center rounded">Containers</a></li>
                                    <li><a href="/docs/5.0/layout/grid/" class="d-inline-flex align-items-center rounded">Grid</a></li>
                                    <li><a href="/docs/5.0/layout/columns/" class="d-inline-flex align-items-center rounded">Columns</a></li>
                                    <li><a href="/docs/5.0/layout/gutters/" class="d-inline-flex align-items-center rounded">Gutters</a></li>
                                    <li><a href="/docs/5.0/layout/utilities/" class="d-inline-flex align-items-center rounded">Utilities</a></li>
                                    <li><a href="/docs/5.0/layout/z-index/" class="d-inline-flex align-items-center rounded">Z-index</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#content-collapse" aria-expanded="false">
                                Content
                            </button>

                            <div class="collapse" id="content-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/content/reboot/" class="d-inline-flex align-items-center rounded">Reboot</a></li>
                                    <li><a href="/docs/5.0/content/typography/" class="d-inline-flex align-items-center rounded">Typography</a></li>
                                    <li><a href="/docs/5.0/content/images/" class="d-inline-flex align-items-center rounded">Images</a></li>
                                    <li><a href="/docs/5.0/content/tables/" class="d-inline-flex align-items-center rounded">Tables</a></li>
                                    <li><a href="/docs/5.0/content/figures/" class="d-inline-flex align-items-center rounded">Figures</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#forms-collapse" aria-expanded="false">
                                Forms
                            </button>

                            <div class="collapse" id="forms-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/forms/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/forms/form-control/" class="d-inline-flex align-items-center rounded">Form control</a></li>
                                    <li><a href="/docs/5.0/forms/select/" class="d-inline-flex align-items-center rounded">Select</a></li>
                                    <li><a href="/docs/5.0/forms/checks-radios/" class="d-inline-flex align-items-center rounded">Checks &amp; radios</a></li>
                                    <li><a href="/docs/5.0/forms/range/" class="d-inline-flex align-items-center rounded">Range</a></li>
                                    <li><a href="/docs/5.0/forms/input-group/" class="d-inline-flex align-items-center rounded">Input group</a></li>
                                    <li><a href="/docs/5.0/forms/floating-labels/" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="/docs/5.0/forms/layout/" class="d-inline-flex align-items-center rounded">Layout</a></li>
                                    <li><a href="/docs/5.0/forms/validation/" class="d-inline-flex align-items-center rounded">Validation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#components-collapse" aria-expanded="false">
                                Components
                            </button>

                            <div class="collapse" id="components-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/components/accordion/" class="d-inline-flex align-items-center rounded">Accordion</a></li>
                                    <li><a href="/docs/5.0/components/alerts/" class="d-inline-flex align-items-center rounded">Alerts</a></li>
                                    <li><a href="/docs/5.0/components/badge/" class="d-inline-flex align-items-center rounded">Badge</a></li>
                                    <li><a href="/docs/5.0/components/breadcrumb/" class="d-inline-flex align-items-center rounded">Breadcrumb</a></li>
                                    <li><a href="/docs/5.0/components/buttons/" class="d-inline-flex align-items-center rounded">Buttons</a></li>
                                    <li><a href="/docs/5.0/components/button-group/" class="d-inline-flex align-items-center rounded">Button group</a></li>
                                    <li><a href="/docs/5.0/components/card/" class="d-inline-flex align-items-center rounded">Card</a></li>
                                    <li><a href="/docs/5.0/components/carousel/" class="d-inline-flex align-items-center rounded">Carousel</a></li>
                                    <li><a href="/docs/5.0/components/close-button/" class="d-inline-flex align-items-center rounded">Close button</a></li>
                                    <li><a href="/docs/5.0/components/collapse/" class="d-inline-flex align-items-center rounded">Collapse</a></li>
                                    <li><a href="/docs/5.0/components/dropdowns/" class="d-inline-flex align-items-center rounded">Dropdowns</a></li>
                                    <li><a href="/docs/5.0/components/list-group/" class="d-inline-flex align-items-center rounded">List group</a></li>
                                    <li><a href="/docs/5.0/components/modal/" class="d-inline-flex align-items-center rounded">Modal</a></li>
                                    <li><a href="/docs/5.0/components/navs-tabs/" class="d-inline-flex align-items-center rounded">Navs &amp; tabs</a></li>
                                    <li><a href="/docs/5.0/components/navbar/" class="d-inline-flex align-items-center rounded">Navbar</a></li>
                                    <li><a href="/docs/5.0/components/offcanvas/" class="d-inline-flex align-items-center rounded">Offcanvas</a></li>
                                    <li><a href="/docs/5.0/components/pagination/" class="d-inline-flex align-items-center rounded">Pagination</a></li>
                                    <li><a href="/docs/5.0/components/popovers/" class="d-inline-flex align-items-center rounded">Popovers</a></li>
                                    <li><a href="/docs/5.0/components/progress/" class="d-inline-flex align-items-center rounded">Progress</a></li>
                                    <li><a href="/docs/5.0/components/scrollspy/" class="d-inline-flex align-items-center rounded">Scrollspy</a></li>
                                    <li><a href="/docs/5.0/components/spinners/" class="d-inline-flex align-items-center rounded">Spinners</a></li>
                                    <li><a href="/docs/5.0/components/toasts/" class="d-inline-flex align-items-center rounded">Toasts</a></li>
                                    <li><a href="/docs/5.0/components/tooltips/" class="d-inline-flex align-items-center rounded">Tooltips</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="false">
                                Helpers
                            </button>

                            <div class="collapse" id="helpers-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/helpers/clearfix/" class="d-inline-flex align-items-center rounded">Clearfix</a></li>
                                    <li><a href="/docs/5.0/helpers/colored-links/" class="d-inline-flex align-items-center rounded">Colored links</a></li>
                                    <li><a href="/docs/5.0/helpers/ratio/" class="d-inline-flex align-items-center rounded">Ratio</a></li>
                                    <li><a href="/docs/5.0/helpers/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="/docs/5.0/helpers/visually-hidden/" class="d-inline-flex align-items-center rounded">Visually hidden</a></li>
                                    <li><a href="/docs/5.0/helpers/stretched-link/" class="d-inline-flex align-items-center rounded">Stretched link</a></li>
                                    <li><a href="/docs/5.0/helpers/text-truncation/" class="d-inline-flex align-items-center rounded">Text truncation</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#utilities-collapse" aria-expanded="false">
                                Utilities
                            </button>

                            <div class="collapse" id="utilities-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/utilities/api/" class="d-inline-flex align-items-center rounded">API</a></li>
                                    <li><a href="/docs/5.0/utilities/background/" class="d-inline-flex align-items-center rounded">Background</a></li>
                                    <li><a href="/docs/5.0/utilities/borders/" class="d-inline-flex align-items-center rounded">Borders</a></li>
                                    <li><a href="/docs/5.0/utilities/colors/" class="d-inline-flex align-items-center rounded">Colors</a></li>
                                    <li><a href="/docs/5.0/utilities/display/" class="d-inline-flex align-items-center rounded">Display</a></li>
                                    <li><a href="/docs/5.0/utilities/flex/" class="d-inline-flex align-items-center rounded">Flex</a></li>
                                    <li><a href="/docs/5.0/utilities/float/" class="d-inline-flex align-items-center rounded">Float</a></li>
                                    <li><a href="/docs/5.0/utilities/interactions/" class="d-inline-flex align-items-center rounded">Interactions</a></li>
                                    <li><a href="/docs/5.0/utilities/overflow/" class="d-inline-flex align-items-center rounded">Overflow</a></li>
                                    <li><a href="/docs/5.0/utilities/position/" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="/docs/5.0/utilities/shadows/" class="d-inline-flex align-items-center rounded">Shadows</a></li>
                                    <li><a href="/docs/5.0/utilities/sizing/" class="d-inline-flex align-items-center rounded">Sizing</a></li>
                                    <li><a href="/docs/5.0/utilities/spacing/" class="d-inline-flex align-items-center rounded">Spacing</a></li>
                                    <li><a href="/docs/5.0/utilities/text/" class="d-inline-flex align-items-center rounded">Text</a></li>
                                    <li><a href="/docs/5.0/utilities/vertical-align/" class="d-inline-flex align-items-center rounded">Vertical align</a></li>
                                    <li><a href="/docs/5.0/utilities/visibility/" class="d-inline-flex align-items-center rounded">Visibility</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#extend-collapse" aria-expanded="false">
                                Extend
                            </button>

                            <div class="collapse" id="extend-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/extend/approach/" class="d-inline-flex align-items-center rounded">Approach</a></li>
                                    <li><a href="/docs/5.0/extend/icons/" class="d-inline-flex align-items-center rounded">Icons</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn d-inline-flex align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#about-collapse" aria-expanded="false">
                                About
                            </button>

                            <div class="collapse" id="about-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="/docs/5.0/about/overview/" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="/docs/5.0/about/team/" class="d-inline-flex align-items-center rounded">Team</a></li>
                                    <li><a href="/docs/5.0/about/brand/" class="d-inline-flex align-items-center rounded">Brand</a></li>
                                    <li><a href="/docs/5.0/about/license/" class="d-inline-flex align-items-center rounded">License</a></li>
                                    <li><a href="/docs/5.0/about/translations/" class="d-inline-flex align-items-center rounded">Translations</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="my-3 mx-4 border-top"></li>
                        <li>
                            <a href="/docs/5.0/migration/" class="d-inline-flex align-items-center rounded">
                                Migration
                            </a>
                        </li>
                    </ul>
                </nav>

            </aside>

            <main class="bd-main order-1">
                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#install-parcel">Install Parcel</a></li>
                            <li><a href="#install-bootstrap">Install Bootstrap</a></li>
                            <li><a href="#importing-javascript">Importing JavaScript</a></li>
                            <li><a href="#importing-css">Importing CSS</a></li>
                            <li><a href="#build-app">Build app</a>
                                <ul>
                                    <li><a href="#edit-packagejson">Edit <code>package.json</code></a></li>
                                    <li><a href="#run-dev-script">Run dev script</a></li>
                                    <li><a href="#build-app-files">Build app files</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="install-parcel">Install Parcel</h2>
                    <p>Install <a href="https://en.parceljs.org/getting_started.html">Parcel Bundler</a>.</p>
                    <h2 id="install-bootstrap">Install Bootstrap</h2>
                    <p><a href="/docs/5.0/getting-started/download/#npm">Install bootstrap</a> as a Node.js module using npm.</p>
                    <p>Bootstrap depends on <a href="https://popper.js.org/">Popper</a>, which is specified in the <code>peerDependencies</code> property. This means that you will have to make sure to add both of them to your <code>package.json</code> using <code>npm install @popperjs/core</code>.</p>
                    <p>When all will be completed, your project will be structured like this:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-text" data-lang="text">project-name/
├── build/
├── node_modules/
│   └── bootstrap/
│   └── popper.js/
├── scss/
│   └── custom.scss
├── src/
│   └── index.html
│   └── index.js
└── package.json
</code></pre></div><h2 id="importing-javascript">Importing JavaScript</h2>
                    <p>Import <a href="/docs/5.0/getting-started/javascript/">Bootstrap&rsquo;s JavaScript</a> in your app&rsquo;s entry point (usually <code>src/index.js</code>). You can import all our plugins in one file or separately if you require only a subset of them.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="c1">// Import all plugins
</span><span class="c1"></span><span class="kr">import</span> <span class="o">*</span> <span class="nx">as</span> <span class="nx">bootstrap</span> <span class="nx">from</span> <span class="s1">&#39;bootstrap&#39;</span><span class="p">;</span>

<span class="c1">// Or import only needed plugins
</span><span class="c1"></span><span class="kr">import</span> <span class="p">{</span> <span class="nx">Tooltip</span> <span class="nx">as</span> <span class="nx">Tooltip</span><span class="p">,</span> <span class="nx">Toast</span> <span class="nx">as</span> <span class="nx">Toast</span><span class="p">,</span> <span class="nx">Popover</span> <span class="nx">as</span> <span class="nx">Popover</span> <span class="p">}</span> <span class="nx">from</span> <span class="s1">&#39;bootstrap&#39;</span><span class="p">;</span>

<span class="c1">// Or import just one
</span><span class="c1"></span><span class="kr">import</span> <span class="nx">Alert</span> <span class="nx">as</span> <span class="nx">Alert</span> <span class="nx">from</span> <span class="s1">&#39;../node_modules/bootstrap/js/dist/alert&#39;</span><span class="p">;</span>
</code></pre></div><h2 id="importing-css">Importing CSS</h2>
                    <p>To utilize the full potential of Bootstrap and customize it to your needs, use the source files as a part of your project&rsquo;s bundling process.</p>
                    <p>Create your own <code>scss/custom.scss</code> to <a href="/docs/5.0/customize/sass/#importing">import Bootstrap&rsquo;s Sass files</a> and then override the <a href="/docs/5.0/customize/sass/#variable-defaults">built-in custom variables</a>.</p>
                    <h2 id="build-app">Build app</h2>
                    <p>Include <code>src/index.js</code> before the closing <code>&lt;/body&gt;</code> tag.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="p">&lt;</span><span class="nt">html</span> <span class="na">lang</span><span class="o">=</span><span class="s">&#34;en&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">charset</span><span class="o">=</span><span class="s">&#34;utf-8&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;viewport&#34;</span> <span class="na">content</span><span class="o">=</span><span class="s">&#34;width=device-width, initial-scale=1&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">body</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;./index.js&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</code></pre></div><h3 id="edit-packagejson">Edit <code>package.json</code></h3>
                    <p>Add <code>dev</code> and <code>build</code> scripts in your <code>package.json</code> file.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-json" data-lang="json"><span class="s2">&#34;scripts&#34;</span><span class="err">:</span> <span class="p">{</span>
  <span class="nt">&#34;dev&#34;</span><span class="p">:</span> <span class="s2">&#34;parcel ./src/index.html&#34;</span><span class="p">,</span>
  <span class="nt">&#34;prebuild&#34;</span><span class="p">:</span> <span class="s2">&#34;npx rimraf build&#34;</span><span class="p">,</span>
  <span class="nt">&#34;build&#34;</span><span class="p">:</span> <span class="s2">&#34;parcel build --public-url ./ ./src/index.html --experimental-scope-hoisting --out-dir build&#34;</span>
<span class="p">}</span>
</code></pre></div><h3 id="run-dev-script">Run dev script</h3>
                    <p>Your app will be accessible at <code>http://127.0.0.1:1234</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-sh" data-lang="sh">npm run dev
</code></pre></div><h3 id="build-app-files">Build app files</h3>
                    <p>Built files are in the <code>build/</code> folder.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-sh" data-lang="sh">npm run build
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
