
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Progress · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/progress/">


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
                                    <li><a href="progress.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Progress</a></li>
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
                </nav>

            </aside>

            <main class="bd-main order-1">
                <div class="bd-intro ps-lg-4">
                    <div class="d-md-flex flex-md-row-reverse align-items-center justify-content-between">
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/progress.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Progress</h1>
                    </div>
                    <p class="bd-lead">Documentation and examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#labels">Labels</a></li>
                            <li><a href="#height">Height</a></li>
                            <li><a href="#backgrounds">Backgrounds</a></li>
                            <li><a href="#multiple-bars">Multiple bars</a></li>
                            <li><a href="#striped">Striped</a></li>
                            <li><a href="#animated-stripes">Animated stripes</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#keyframes">Keyframes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="how-it-works">How it works</h2>
                    <p>Progress components are built with two HTML elements, some CSS to set the width, and a few attributes. We don&rsquo;t use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress">the HTML5 <code>&lt;progress&gt;</code> element</a>, ensuring you can stack progress bars, animate them, and place text labels over them.</p>
                    <ul>
                        <li>We use the <code>.progress</code> as a wrapper to indicate the max value of the progress bar.</li>
                        <li>We use the inner <code>.progress-bar</code> to indicate the progress so far.</li>
                        <li>The <code>.progress-bar</code> requires an inline style, utility class, or custom CSS to set their width.</li>
                        <li>The <code>.progress-bar</code> also requires some <code>role</code> and <code>aria</code> attributes to make it accessible.</li>
                    </ul>
                    <p>Put that all together, and you have the following examples.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 50%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;50&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 75%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;75&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 100%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;100&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
<p>Bootstrap provides a handful of <a href="../utilities/sizing.php">utilities for setting width</a>. Depending on your needs, these may help with quickly configuring progress.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar w-75&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;75&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="labels">Labels</h2>
                    <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%;&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;</span>25%<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="height">Height</h2>
                    <p>We only set a <code>height</code> value on the <code>.progress</code>, so if you change that value the inner <code>.progress-bar</code> will automatically resize accordingly.</p>
                    <div class="bd-example">
                        <div class="progress" style="height: 1px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress" style="height: 20px;">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;height: 1px;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%;&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;height: 20px;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%;&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="backgrounds">Backgrounds</h2>
                    <p>Use background utility classes to change the appearance of individual progress bars.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-info&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 50%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;50&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-warning&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 75%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;75&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-danger&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 100%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;100&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="multiple-bars">Multiple bars</h2>
                    <p>Include multiple progress bars in a progress component if you need.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 15%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;15&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 30%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;30&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar bg-info&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 20%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;20&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="striped">Striped</h2>
                    <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar&rsquo;s background color.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 10%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;10&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped bg-success&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 25%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;25&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped bg-info&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 50%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;50&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped bg-warning&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 75%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;75&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped bg-danger&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 100%&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;100&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="animated-stripes">Animated stripes</h2>
                    <p>The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
                    <div class="bd-example">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                        <button type="button" class="btn btn-secondary mt-3" data-bs-toggle="button" id="btnToggleAnimatedProgress" aria-pressed="false" autocomplete="off">
                            Toggle animation
                        </button>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar progress-bar-striped progress-bar-animated&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;75&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 75%&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$progress-height</span><span class="o">:</span>                   <span class="mi">1</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$progress-font-size</span><span class="o">:</span>                <span class="nv">$font-size-base</span> <span class="o">*</span> <span class="mf">.75</span><span class="p">;</span>
<span class="nv">$progress-bg</span><span class="o">:</span>                       <span class="nv">$gray-200</span><span class="p">;</span>
<span class="nv">$progress-border-radius</span><span class="o">:</span>            <span class="nv">$border-radius</span><span class="p">;</span>
<span class="nv">$progress-box-shadow</span><span class="o">:</span>               <span class="nv">$box-shadow-inset</span><span class="p">;</span>
<span class="nv">$progress-bar-color</span><span class="o">:</span>                <span class="nv">$white</span><span class="p">;</span>
<span class="nv">$progress-bar-bg</span><span class="o">:</span>                   <span class="nv">$primary</span><span class="p">;</span>
<span class="nv">$progress-bar-animation-timing</span><span class="o">:</span>     <span class="mi">1</span><span class="kt">s</span> <span class="ni">linear</span> <span class="ni">infinite</span><span class="p">;</span>
<span class="nv">$progress-bar-transition</span><span class="o">:</span>           <span class="ni">width</span> <span class="mf">.6</span><span class="kt">s</span> <span class="ni">ease</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="keyframes">Keyframes</h3>
                    <p>Used for creating the CSS animations for <code>.progress-bar-animated</code>. Included in <code>scss/_progress-bar.scss</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@if</span> <span class="nv">$enable-transitions</span> <span class="p">{</span>
  <span class="k">@keyframes</span> <span class="nt">progress-bar-stripes</span> <span class="p">{</span>
    <span class="nt">0</span><span class="err">%</span> <span class="p">{</span> <span class="na">background-position-x</span><span class="o">:</span> <span class="nv">$progress-height</span><span class="p">;</span> <span class="p">}</span>
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
