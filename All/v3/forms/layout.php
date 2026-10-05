
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Give your forms some structure—from inline to horizontal to custom grid implementations—with our form layout options.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Layout · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/forms/layout/">

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
                                    <li><a href="input-group.php" class="d-inline-flex align-items-center rounded">Input group</a></li>
                                    <li><a href="floating-labels.php" class="d-inline-flex align-items-center rounded">Floating labels</a></li>
                                    <li><a href="layout.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Layout</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/forms/layout.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Layout</h1>
                    </div>
                    <p class="bd-lead">Give your forms some structure—from inline to horizontal to custom grid implementations—with our form layout options.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#forms">Forms</a></li>
                            <li><a href="#utilities">Utilities</a></li>
                            <li><a href="#form-grid">Form grid</a></li>
                            <li><a href="#gutters">Gutters</a></li>
                            <li><a href="#horizontal-form">Horizontal form</a>
                                <ul>
                                    <li><a href="#horizontal-form-label-sizing">Horizontal form label sizing</a></li>
                                </ul>
                            </li>
                            <li><a href="#column-sizing">Column sizing</a></li>
                            <li><a href="#auto-sizing">Auto-sizing</a></li>
                            <li><a href="#inline-forms">Inline forms</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="forms">Forms</h2>
                    <p>Every group of form fields should reside in a <code>&lt;form&gt;</code> element. Bootstrap provides no default styling for the <code>&lt;form&gt;</code> element, but there are some powerful browser features that are provided by default.</p>
                    <ul>
                        <li>New to browser forms? Consider reviewing <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form">the MDN form docs</a> for an overview and complete list of available attributes.</li>
                        <li><code>&lt;button&gt;</code>s within a <code>&lt;form&gt;</code> default to <code>type=&quot;submit&quot;</code>, so strive to be specific and always include a <code>type</code>.</li>
                        <li>You can disable every form element within a form with the <code>disabled</code> attribute on the <code>&lt;form&gt;</code>.</li>
                    </ul>
                    <p>Since Bootstrap applies <code>display: block</code> and <code>width: 100%</code> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</p>
                    <h2 id="utilities">Utilities</h2>
                    <p><a href="../utilities/spacing.php">Margin utilities</a> are the easiest way to add some structure to forms. They provide basic grouping of labels, controls, optional form text, and form validation messaging. We recommend sticking to <code>margin-bottom</code> utilities, and using a single direction throughout the form for consistency.</p>
                    <p>Feel free to build your forms however you like, with <code>&lt;fieldset&gt;</code>s, <code>&lt;div&gt;</code>s, or nearly any other element.</p>
                    <div class="bd-example">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Example label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Another label</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formGroupExampleInput&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Example label<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formGroupExampleInput&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Example input placeholder&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;formGroupExampleInput2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Another label<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;formGroupExampleInput2&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Another input placeholder&#34;</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="form-grid">Form grid</h2>
                    <p>More complex forms can be built using our grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options. <strong>Requires the <code>$enable-grid-classes</code> Sass variable to be enabled</strong> (on by default).</p>
                    <div class="bd-example">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;First name&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First name&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Last name&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Last name&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="gutters">Gutters</h2>
                    <p>By adding <a href="../layout/gutters.php">gutter modifier classes</a>, you can have control over the gutter width in as well the inline as block direction. <strong>Also requires the <code>$enable-grid-classes</code> Sass variable to be enabled</strong> (on by default).</p>
                    <div class="bd-example">
                        <div class="row g-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;First name&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First name&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Last name&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Last name&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>More complex layouts can also be created with the grid system.</p>
                    <div class="bd-example">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputEmail4&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputEmail4&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword4&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword4&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputAddress&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Address<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputAddress&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;1234 Main St&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputAddress2&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Address 2<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputAddress2&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Apartment, studio, or floor&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputCity&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>City<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputCity&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputState&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>State<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputState&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-2&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputZip&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Zip<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputZip&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;gridCheck&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;gridCheck&#34;</span><span class="p">&gt;</span>
        Check me out
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Sign in<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="horizontal-form">Horizontal form</h2>
                    <p>Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code>&lt;label&gt;</code>s as well so they&rsquo;re vertically centered with their associated form controls.</p>
                    <p>At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we&rsquo;ve removed the <code>padding-top</code> on our stacked radio inputs label to better align the text baseline.</p>
                    <div class="bd-example">
                        <form>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            First radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                        <label class="form-check-label" for="gridRadios2">
                                            Second radio
                                        </label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                        <label class="form-check-label" for="gridRadios3">
                                            Third disabled radio
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Example checkbox
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputEmail3&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputEmail3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inputPassword3&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label&#34;</span><span class="p">&gt;</span>Password<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;password&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputPassword3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">fieldset</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">legend</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-form-label col-sm-2 pt-0&#34;</span><span class="p">&gt;</span>Radios<span class="p">&lt;/</span><span class="nt">legend</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;gridRadios&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;gridRadios1&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;option1&#34;</span> <span class="na">checked</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;gridRadios1&#34;</span><span class="p">&gt;</span>
          First radio
        <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;gridRadios&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;gridRadios2&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;option2&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;gridRadios2&#34;</span><span class="p">&gt;</span>
          Second radio
        <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check disabled&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;gridRadios&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;gridRadios3&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;option3&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;gridRadios3&#34;</span><span class="p">&gt;</span>
          Third disabled radio
        <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">fieldset</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10 offset-sm-2&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;gridCheck1&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;gridCheck1&#34;</span><span class="p">&gt;</span>
          Example checkbox
        <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Sign in<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="horizontal-form-label-sizing">Horizontal form label sizing</h3>
                    <p>Be sure to use <code>.col-form-label-sm</code> or <code>.col-form-label-lg</code> to your <code>&lt;label&gt;</code>s or <code>&lt;legend&gt;</code>s to correctly follow the size of <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                    <div class="bd-example">
                        <div class="row mb-3">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
                            </div>
                        </div>
                        <div class="row">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-lg" id="colFormLabelLg" placeholder="col-form-label-lg">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;colFormLabelSm&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label col-form-label-sm&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-sm&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;colFormLabelSm&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;col-form-label-sm&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row mb-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;colFormLabel&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;colFormLabel&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;col-form-label&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;colFormLabelLg&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-2 col-form-label col-form-label-lg&#34;</span><span class="p">&gt;</span>Email<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-10&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;email&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control form-control-lg&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;colFormLabelLg&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;col-form-label-lg&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="column-sizing">Column sizing</h2>
                    <p>As shown in the previous examples, our grid system allows you to place any number of <code>.col</code>s within a <code>.row</code>. They&rsquo;ll split the available width equally between them. You may also pick a subset of your columns to take up more or less space, while the remaining <code>.col</code>s equally split the rest, with specific column classes like <code>.col-sm-7</code>.</p>
                    <div class="bd-example">
                        <div class="row g-3">
                            <div class="col-sm-7">
                                <input type="text" class="form-control" placeholder="City" aria-label="City">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" placeholder="State" aria-label="State">
                            </div>
                            <div class="col-sm">
                                <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-7&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;City&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;City&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;State&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;State&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Zip&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Zip&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="auto-sizing">Auto-sizing</h2>
                    <p>The example below uses a flexbox utility to vertically center the contents and changes <code>.col</code> to <code>.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.</p>
                    <div class="bd-example">
                        <form class="row gy-2 gx-3 align-items-center">
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingInput">Name</label>
                                <input type="text" class="form-control" id="autoSizingInput" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingInputGroup">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                    <label class="form-check-label" for="autoSizingCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row gy-2 gx-3 align-items-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;autoSizingInput&#34;</span><span class="p">&gt;</span>Name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;autoSizingInput&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Jane Doe&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;autoSizingInputGroup&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;autoSizingInputGroup&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;autoSizingSelect&#34;</span><span class="p">&gt;</span>Preference<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;autoSizingSelect&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;autoSizingCheck&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;autoSizingCheck&#34;</span><span class="p">&gt;</span>
        Remember me
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <p>You can then remix that once again with size-specific column classes.</p>
                    <div class="bd-example">
                        <form class="row gx-3 gy-2 align-items-center">
                            <div class="col-sm-3">
                                <label class="visually-hidden" for="specificSizeInputName">Name</label>
                                <input type="text" class="form-control" id="specificSizeInputName" placeholder="Jane Doe">
                            </div>
                            <div class="col-sm-3">
                                <label class="visually-hidden" for="specificSizeInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label class="visually-hidden" for="specificSizeSelect">Preference</label>
                                <select class="form-select" id="specificSizeSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                    <label class="form-check-label" for="autoSizingCheck2">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row gx-3 gy-2 align-items-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;specificSizeInputName&#34;</span><span class="p">&gt;</span>Name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;specificSizeInputName&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Jane Doe&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;specificSizeInputGroupUsername&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;specificSizeInputGroupUsername&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;specificSizeSelect&#34;</span><span class="p">&gt;</span>Preference<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;specificSizeSelect&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;autoSizingCheck2&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;autoSizingCheck2&#34;</span><span class="p">&gt;</span>
        Remember me
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="inline-forms">Inline forms</h2>
                    <p>Use the <code>.row-cols-*</code> classes to create responsive horizontal layouts. By adding <a href="../layout/gutters.php">gutter modifier classes</a>, we&rsquo;ll have gutters in horizontal and vertical directions. On narrow mobile viewports, the <code>.col-12</code> helps stack the form controls and more. The <code>.align-items-center</code> aligns the form elements to the middle, making the <code>.form-checkbox</code> align properly.</p>
                    <div class="bd-example">
                        <form class="row row-cols-lg-auto g-3 align-items-center">
                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-text">@</div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select" id="inlineFormSelectPref">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                    <label class="form-check-label" for="inlineFormCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-lg-auto g-3 align-items-center&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inlineFormInputGroupUsername&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inlineFormInputGroupUsername&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Username&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inlineFormSelectPref&#34;</span><span class="p">&gt;</span>Preference<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inlineFormSelectPref&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inlineFormCheck&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;inlineFormCheck&#34;</span><span class="p">&gt;</span>
        Remember me
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Submit<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>

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
