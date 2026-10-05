
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Group a series of buttons together on a single line or stack them in a vertical column.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Button group · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/components/button-group/">


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
                                    <li><a href="button-group.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Button group</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/components/button-group.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Button group</h1>
                    </div>
                    <p class="bd-lead">Group a series of buttons together on a single line or stack them in a vertical column.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#basic-example">Basic example</a></li>
                            <li><a href="#mixed-styles">Mixed styles</a></li>
                            <li><a href="#outlined-styles">Outlined styles</a></li>
                            <li><a href="#checkbox-and-radio-button-groups">Checkbox and radio button groups</a></li>
                            <li><a href="#button-toolbar">Button toolbar</a></li>
                            <li><a href="#sizing">Sizing</a></li>
                            <li><a href="#nesting">Nesting</a></li>
                            <li><a href="#vertical-variation">Vertical variation</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="basic-example">Basic example</h2>
                    <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Basic example&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Left<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Middle<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Right<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-callout bd-callout-warning">
                        <h5 id="ensure-correct-role-and-provide-a-label">Ensure correct <code>role</code> and provide a label</h5>
                        <p>In order for assistive technologies (such as screen readers) to convey that a series of buttons is grouped, an appropriate <code>role</code> attribute needs to be provided. For button groups, this would be <code>role=&quot;group&quot;</code>, while toolbars should have a <code>role=&quot;toolbar&quot;</code>.</p>
                        <p>In addition, groups and toolbars should be given an explicit label, as most assistive technologies will otherwise not announce them, despite the presence of the correct role attribute. In the examples provided here, we use <code>aria-label</code>, but alternatives such as <code>aria-labelledby</code> can also be used.</p>

                    </div>

                    <p>These classes can also be added to groups of links, as an alternative to the <a href="../components/navs-tabs.php"><code>.nav</code> navigation components</a>.</p>
                    <div class="bd-example">
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary active" aria-current="page">Active link</a>
                            <a href="#" class="btn btn-primary">Link</a>
                            <a href="#" class="btn btn-primary">Link</a>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary active&#34;</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">&#34;page&#34;</span><span class="p">&gt;</span>Active link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="mixed-styles">Mixed styles</h2>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-danger">Left</button>
                            <button type="button" class="btn btn-warning">Middle</button>
                            <button type="button" class="btn btn-success">Right</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Basic mixed styles example&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-danger&#34;</span><span class="p">&gt;</span>Left<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-warning&#34;</span><span class="p">&gt;</span>Middle<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-success&#34;</span><span class="p">&gt;</span>Right<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="outlined-styles">Outlined styles</h2>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-primary">Left</button>
                            <button type="button" class="btn btn-outline-primary">Middle</button>
                            <button type="button" class="btn btn-outline-primary">Right</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Basic outlined example&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span><span class="p">&gt;</span>Left<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span><span class="p">&gt;</span>Middle<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span><span class="p">&gt;</span>Right<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="checkbox-and-radio-button-groups">Checkbox and radio button groups</h2>
                    <p>Combine button-like checkbox and radio <a href="../forms/checks-radios.php">toggle buttons</a> into a seamless looking button group.</p>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck1">Checkbox 1</label>

                            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck2">Checkbox 2</label>

                            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btncheck3">Checkbox 3</label>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Basic checkbox toggle button group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btncheck1&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btncheck1&#34;</span><span class="p">&gt;</span>Checkbox 1<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btncheck2&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btncheck2&#34;</span><span class="p">&gt;</span>Checkbox 2<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btncheck3&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btncheck3&#34;</span><span class="p">&gt;</span>Checkbox 3<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Basic radio toggle button group&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;btnradio&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnradio1&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span> <span class="na">checked</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btnradio1&#34;</span><span class="p">&gt;</span>Radio 1<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;btnradio&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnradio2&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btnradio2&#34;</span><span class="p">&gt;</span>Radio 2<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-check&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;btnradio&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnradio3&#34;</span> <span class="na">autocomplete</span><span class="o">=</span><span class="s">&#34;off&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-primary&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;btnradio3&#34;</span><span class="p">&gt;</span>Radio 3<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="button-toolbar">Button toolbar</h2>
                    <p>Combine sets of button groups into button toolbars for more complex components. Use utility classes as needed to space out groups, buttons, and more.</p>
                    <div class="bd-example">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-primary">1</button>
                                <button type="button" class="btn btn-primary">2</button>
                                <button type="button" class="btn btn-primary">3</button>
                                <button type="button" class="btn btn-primary">4</button>
                            </div>
                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary">5</button>
                                <button type="button" class="btn btn-secondary">6</button>
                                <button type="button" class="btn btn-secondary">7</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-info">8</button>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-toolbar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;toolbar&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Toolbar with button groups&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group me-2&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>4<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group me-2&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Second group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span><span class="p">&gt;</span>5<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span><span class="p">&gt;</span>6<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-secondary&#34;</span><span class="p">&gt;</span>7<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Third group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-info&#34;</span><span class="p">&gt;</span>8<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Feel free to mix input groups with button groups in your toolbars. Similar to the example above, you&rsquo;ll likely need some utilities though to space things properly.</p>
                    <div class="bd-example">
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group me-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-outline-secondary">1</button>
                                <button type="button" class="btn btn-outline-secondary">2</button>
                                <button type="button" class="btn btn-outline-secondary">3</button>
                                <button type="button" class="btn btn-outline-secondary">4</button>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text" id="btnGroupAddon">@</div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
                            </div>
                        </div>

                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button type="button" class="btn btn-outline-secondary">1</button>
                                <button type="button" class="btn btn-outline-secondary">2</button>
                                <button type="button" class="btn btn-outline-secondary">3</button>
                                <button type="button" class="btn btn-outline-secondary">4</button>
                            </div>
                            <div class="input-group">
                                <div class="input-group-text" id="btnGroupAddon2">@</div>
                                <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-toolbar mb-3&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;toolbar&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Toolbar with button groups&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group me-2&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>4<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnGroupAddon&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Input group example&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Input group example&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;btnGroupAddon&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-toolbar justify-content-between&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;toolbar&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Toolbar with button groups&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;First group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-outline-secondary&#34;</span><span class="p">&gt;</span>4<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnGroupAddon2&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Input group example&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Input group example&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;btnGroupAddon2&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sizing">Sizing</h2>
                    <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to each <code>.btn-group</code>, including each one when nesting multiple groups.</p>
                    <div class="bd-example">
                        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                            <button type="button" class="btn btn-outline-dark">Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark">Right</button>
                        </div>
                        <br>
                        <div class="btn-group" role="group" aria-label="Default button group">
                            <button type="button" class="btn btn-outline-dark">Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark">Right</button>
                        </div>
                        <br>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <button type="button" class="btn btn-outline-dark">Left</button>
                            <button type="button" class="btn btn-outline-dark">Middle</button>
                            <button type="button" class="btn btn-outline-dark">Right</button>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group btn-group-lg&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group btn-group-sm&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="nesting">Nesting</h2>
                    <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
                    <div class="bd-example">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button type="button" class="btn btn-primary">1</button>
                            <button type="button" class="btn btn-primary">2</button>

                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;Button group with nested dropdown&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;group&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;btnGroupDrop1&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary dropdown-toggle&#34;</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">&#34;dropdown&#34;</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">&#34;false&#34;</span><span class="p">&gt;</span>
      Dropdown
    <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-menu&#34;</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">&#34;btnGroupDrop1&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Dropdown link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;dropdown-item&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span><span class="p">&gt;</span>Dropdown link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="vertical-variation">Vertical variation</h2>
                    <p>Make a set of buttons appear vertically stacked rather than horizontally. <strong>Split button dropdowns are not supported here.</strong></p>
                    <div class="bd-example">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-dark">Button</button>
                            <button type="button" class="btn btn-dark">Button</button>
                            <button type="button" class="btn btn-dark">Button</button>
                            <button type="button" class="btn btn-dark">Button</button>
                            <button type="button" class="btn btn-dark">Button</button>
                            <button type="button" class="btn btn-dark">Button</button>
                        </div>
                    </div>
                    <div class="bd-example">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary">Button</button>
                            <button type="button" class="btn btn-primary">Button</button>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop2" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop3" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button id="btnGroupVerticalDrop4" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="bd-example">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical radio toggle button group">
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio1" autocomplete="off" checked>
                            <label class="btn btn-outline-danger" for="vbtn-radio1">Radio 1</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio2" autocomplete="off">
                            <label class="btn btn-outline-danger" for="vbtn-radio2">Radio 2</label>
                            <input type="radio" class="btn-check" name="vbtn-radio" id="vbtn-radio3" autocomplete="off">
                            <label class="btn btn-outline-danger" for="vbtn-radio3">Radio 3</label>
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn-group-vertical&#34;</span><span class="p">&gt;</span>
  ...
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
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
