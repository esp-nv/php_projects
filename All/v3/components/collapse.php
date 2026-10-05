
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Toggle the visibility of content across your project with a few classes and our JavaScript plugins.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Collapse · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/collapse/">


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
                                    <li><a href="collapse.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Collapse</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/collapse.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Collapse</h1>
                    </div>
                    <p class="bd-lead">Toggle the visibility of content across your project with a few classes and our JavaScript plugins.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#example">Example</a></li>
                            <li><a href="#multiple-targets">Multiple targets</a></li>
                            <li><a href="#accessibility">Accessibility</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#classes">Classes</a></li>
                                </ul>
                            </li>
                            <li><a href="#usage">Usage</a>
                                <ul>
                                    <li><a href="#via-data-attributes">Via data attributes</a></li>
                                    <li><a href="#via-javascript">Via JavaScript</a></li>
                                    <li><a href="#options">Options</a></li>
                                    <li><a href="#methods">Methods</a></li>
                                    <li><a href="#events">Events</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="how-it-works">How it works</h2>
                    <p>The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the <code>height</code> from its current value to <code>0</code>. Given how CSS handles animations, you cannot use <code>padding</code> on a <code>.collapse</code> element. Instead, use the class as an independent wrapping element.</p>
                    <div class="bd-callout bd-callout-info">
                        The animation effect of this component is dependent on the <code>prefers-reduced-motion</code> media query. See the <a href="https://getbootstrap.com/docs/5.0/getting-started/accessibility/#reduced-motion">reduced motion section of our accessibility documentation</a>.
                    </div>

                    <h2 id="example">Example</h2>
                    <p>Click the buttons below to show and hide another element via class changes:</p>
                    <ul>
                        <li><code>.collapse</code> hides content</li>
                        <li><code>.collapsing</code> is applied during transitions</li>
                        <li><code>.collapse.show</code> shows content</li>
                    </ul>
                    <p>Generally, we recommend using a button with the <code>data-bs-target</code> attribute. While not recommended from a semantic point of view, you can also use a link with the <code>href</code> attribute (and a <code>role=&quot;button&quot;</code>). In both cases, the <code>data-bs-toggle=&quot;collapse&quot;</code> is required.</p>
                    <div class="bd-example">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Link with href
                            </a>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Button with data-bs-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#collapseExample&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;collapseExample&#34;</span><span class="p">&gt;</span>
    Link with href
  <span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#collapseExample&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;collapseExample&#34;</span><span class="p">&gt;</span>
    Button with data-bs-target
  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;collapseExample&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card card-body&#34;</span><span class="p">&gt;</span>
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="multiple-targets">Multiple targets</h2>
                    <p>A <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide multiple elements by referencing them with a selector in its <code>href</code> or <code>data-bs-target</code> attribute.
                        Multiple <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> can show and hide an element if they each reference it with their <code>href</code> or <code>data-bs-target</code> attribute</p>
                    <div class="bd-example">
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body">
                                        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#multiCollapseExample1&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;multiCollapseExample1&#34;</span><span class="p">&gt;</span>Toggle first element<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;#multiCollapseExample2&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;multiCollapseExample2&#34;</span><span class="p">&gt;</span>Toggle second element<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;collapse&#34;</span> <span class="na">data-bs-target</span><span class="o">=</span><span class="s">&#34;.multi-collapse&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span> <span class="na">aria-controls</span><span class="o">=</span><span class="s">&#34;multiCollapseExample1 multiCollapseExample2&#34;</span><span class="p">&gt;</span>Toggle both elements<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;collapse multi-collapse&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;multiCollapseExample1&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card card-body&#34;</span><span class="p">&gt;</span>
        Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;collapse multi-collapse&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;multiCollapseExample2&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card card-body&#34;</span><span class="p">&gt;</span>
        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="accessibility">Accessibility</h2>
                    <p>Be sure to add <code>aria-expanded</code> to the control element. This attribute explicitly conveys the current state of the collapsible element tied to the control to screen readers and similar assistive technologies. If the collapsible element is closed by default, the attribute on the control element should have a value of <code>aria-expanded=&quot;false&quot;</code>. If you&rsquo;ve set the collapsible element to be open by default using the <code>show</code> class, set <code>aria-expanded=&quot;true&quot;</code> on the control instead. The plugin will automatically toggle this attribute on the control based on whether or not the collapsible element has been opened or closed (via JavaScript, or because the user triggered another control element also tied to the same collapsible element). If the control element&rsquo;s HTML element is not a button (e.g., an <code>&lt;a&gt;</code> or <code>&lt;div&gt;</code>), the attribute <code>role=&quot;button&quot;</code> should be added to the element.</p>
                    <p>If your control element is targeting a single collapsible element – i.e. the <code>data-bs-target</code> attribute is pointing to an <code>id</code> selector – you should add the <code>aria-controls</code> attribute to the control element, containing the <code>id</code> of the collapsible element. Modern screen readers and similar assistive technologies make use of this attribute to provide users with additional shortcuts to navigate directly to the collapsible element itself.</p>
                    <p>Note that Bootstrap&rsquo;s current implementation does not cover the various <em>optional</em> keyboard interactions described in the <a href="https://www.w3.org/TR/wai-aria-practices-1.1/#accordion">WAI-ARIA Authoring Practices 1.1 accordion pattern</a> - you will need to include these yourself with custom JavaScript.</p>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$transition-collapse</span><span class="o">:</span>         <span class="n">height</span> <span class="mf">.35</span><span class="kt">s</span> <span class="ni">ease</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="classes">Classes</h3>
                    <p>Collapse transition classes can be found in <code>scss/_transitions.scss</code> as these are shared across multiple components (collapse and accordion).</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.collapse</span> <span class="p">{</span>
  <span class="k">&amp;</span><span class="nd">:not</span><span class="o">(</span><span class="nc">.show</span><span class="o">)</span> <span class="p">{</span>
    <span class="na">display</span><span class="o">:</span> <span class="ni">none</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nc">.collapsing</span> <span class="p">{</span>
  <span class="na">height</span><span class="o">:</span> <span class="mi">0</span><span class="p">;</span>
  <span class="na">overflow</span><span class="o">:</span> <span class="ni">hidden</span><span class="p">;</span>
  <span class="k">@include</span><span class="nd"> transition</span><span class="p">(</span><span class="nv">$transition-collapse</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
                    <h2 id="usage">Usage</h2>
                    <p>The collapse plugin utilizes a few classes to handle the heavy lifting:</p>
                    <ul>
                        <li><code>.collapse</code> hides the content</li>
                        <li><code>.collapse.show</code> shows the content</li>
                        <li><code>.collapsing</code> is added when the transition starts, and removed when it finishes</li>
                    </ul>
                    <p>These classes can be found in <code>_transitions.scss</code>.</p>
                    <h3 id="via-data-attributes">Via data attributes</h3>
                    <p>Just add <code>data-bs-toggle=&quot;collapse&quot;</code> and a <code>data-bs-target</code> to the element to automatically assign control of one or more collapsible elements. The <code>data-bs-target</code> attribute accepts a CSS selector to apply the collapse to. Be sure to add the class <code>collapse</code> to the collapsible element. If you&rsquo;d like it to default open, add the additional class <code>show</code>.</p>
                    <p>To add accordion-like group management to a collapsible area, add the data attribute <code>data-bs-parent=&quot;#selector&quot;</code>. Refer to the demo to see this in action.</p>
                    <h3 id="via-javascript">Via JavaScript</h3>
                    <p>Enable manually with:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">collapseElementList</span> <span class="o">=</span> <span class="p">[].</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;.collapse&#39;</span><span class="p">))</span>
<span class="kd">var</span> <span class="nx">collapseList</span> <span class="o">=</span> <span class="nx">collapseElementList</span><span class="p">.</span><span class="nx">map</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">return</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">collapseEl</span><span class="p">)</span>
<span class="p">})</span>
</code></pre></div><h3 id="options">Options</h3>
                    <p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-bs-</code>, as in <code>data-bs-parent=&quot;&quot;</code>.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 100px;">Name</th>
                                <th style="width: 50px;">Type</th>
                                <th style="width: 50px;">Default</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>parent</code></td>
                                <td>selector | jQuery object | DOM element </td>
                                <td><code>false</code></td>
                                <td>If parent is provided, then all collapsible elements under the specified parent will be closed when this collapsible item is shown. (similar to traditional accordion behavior - this is dependent on the <code>card</code> class). The attribute has to be set on the target collapsible area.</td>
                            </tr>
                            <tr>
                                <td><code>toggle</code></td>
                                <td>boolean</td>
                                <td><code>true</code></td>
                                <td>Toggles the collapsible element on invocation</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="methods">Methods</h3>
                    <div class="bd-callout bd-callout-danger">
                        <h4 id="asynchronous-methods-and-transitions">Asynchronous methods and transitions</h4>
                        <p>All API methods are <strong>asynchronous</strong> and start a <strong>transition</strong>. They return to the caller as soon as the transition is started but <strong>before it ends</strong>. In addition, a method call on a <strong>transitioning component will be ignored</strong>.</p>
                        <p><a href="../getting-started/javascript.php#asynchronous-functions-and-transitions">See our JavaScript documentation for more information</a>.</p>

                    </div>

                    <p>Activates your content as a collapsible element. Accepts an optional options <code>object</code>.</p>
                    <p>You can create a collapse instance with the constructor, for example:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapse</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myCollapse&#39;</span><span class="p">)</span>
<span class="kd">var</span> <span class="nx">bsCollapse</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">bootstrap</span><span class="p">.</span><span class="nx">Collapse</span><span class="p">(</span><span class="nx">myCollapse</span><span class="p">,</span> <span class="p">{</span>
  <span class="nx">toggle</span><span class="o">:</span> <span class="kc">false</span>
<span class="p">})</span>
</code></pre></div><table class="table">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>toggle</code></td>
                                <td>Toggles a collapsible element to shown or hidden. <strong>Returns to the caller before the collapsible element has actually been shown or hidden</strong> (i.e. before the <code>shown.bs.collapse</code> or <code>hidden.bs.collapse</code> event occurs).</td>
                            </tr>
                            <tr>
                                <td><code>show</code></td>
                                <td>Shows a collapsible element. <strong>Returns to the caller before the collapsible element has actually been shown</strong> (e.g., before the <code>shown.bs.collapse</code> event occurs). </td>
                            </tr>
                            <tr>
                                <td><code>hide</code></td>
                                <td>Hides a collapsible element. <strong>Returns to the caller before the collapsible element has actually been hidden</strong> (e.g., before the <code>hidden.bs.collapse</code> event occurs).</td>
                            </tr>
                            <tr>
                                <td><code>dispose</code></td>
                                <td>Destroys an element's collapse. (Removes stored data on the DOM element)</td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getInstance</code>
                                </td>
                                <td>
                                    Static method which allows you to get the collapse instance associated to a DOM element, you can use it like this: <code>bootstrap.Collapse.getInstance(element)</code>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <code>getOrCreateInstance</code>
                                </td>
                                <td>
                                    Static method which returns a collapse instance associated to a DOM element or create a new one in case it wasn't initialised.
                                    You can use it like this: <code>bootstrap.Collapse.getOrCreateInstance(element)</code>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 id="events">Events</h3>
                    <p>Bootstrap&rsquo;s collapse class exposes a few events for hooking into collapse functionality.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 150px;">Event type</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>show.bs.collapse</code></td>
                                <td>This event fires immediately when the <code>show</code> instance method is called.</td>
                            </tr>
                            <tr>
                                <td><code>shown.bs.collapse</code></td>
                                <td>This event is fired when a collapse element has been made visible to the user (will wait for CSS transitions to complete).</td>
                            </tr>
                            <tr>
                                <td><code>hide.bs.collapse</code></td>
                                <td>This event is fired immediately when the <code>hide</code> method has been called.</td>
                            </tr>
                            <tr>
                                <td><code>hidden.bs.collapse</code></td>
                                <td>This event is fired when a collapse element has been hidden from the user (will wait for CSS transitions to complete).</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="kd">var</span> <span class="nx">myCollapsible</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">getElementById</span><span class="p">(</span><span class="s1">&#39;myCollapsible&#39;</span><span class="p">)</span>
<span class="nx">myCollapsible</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;hidden.bs.collapse&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
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
