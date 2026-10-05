
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Learn how and why we build nearly all our components responsively and with base and modifier classes.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Components · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/customize/components/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#customize-collapse" aria-expanded="true" aria-current="true">
                                Customize
                            </button>

                            <div class="collapse show" id="customize-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="overview.php" class="d-inline-flex align-items-center rounded">Overview</a></li>
                                    <li><a href="sass.php" class="d-inline-flex align-items-center rounded">Sass</a></li>
                                    <li><a href="options.php" class="d-inline-flex align-items-center rounded">Options</a></li>
                                    <li><a href="color.php" class="d-inline-flex align-items-center rounded">Color</a></li>
                                    <li><a href="components.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Components</a></li>
                                    <li><a href="css-variables.php" class="d-inline-flex align-items-center rounded">CSS variables</a></li>
                                    <li><a href="optimize.php" class="d-inline-flex align-items-center rounded">Optimize</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/customize/components.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Components</h1>
                    </div>
                    <p class="bd-lead">Learn how and why we build nearly all our components responsively and with base and modifier classes.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#base-classes">Base classes</a></li>
                            <li><a href="#modifiers">Modifiers</a></li>
                            <li><a href="#responsive">Responsive</a></li>
                            <li><a href="#creating-your-own">Creating your own</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="base-classes">Base classes</h2>
                    <p>Bootstrap&rsquo;s components are largely built with a base-modifier nomenclature. We group as many shared properties as possible into a base class, like <code>.btn</code>, and then group individual styles for each variant into modifier classes, like <code>.btn-primary</code> or <code>.btn-success</code>.</p>
                    <p>To build our modifier classes, we use Sass&rsquo;s <code>@each</code> loops to iterate over a Sass map. This is especially helpful for generating variants of a component by our <code>$theme-colors</code> and creating responsive variants for each breakpoint. As you customize these Sass maps and recompile, you&rsquo;ll automatically see your changes reflected in these loops.</p>
                    <p>Check out <a href="../customize/sass.php#maps-and-loops">our Sass maps and loops docs</a> for how to customize these loops and extend Bootstrap&rsquo;s base-modifier approach to your own code.</p>
                    <h2 id="modifiers">Modifiers</h2>
                    <p>Many of Bootstrap&rsquo;s components are built with a base-modifier class approach. This means the bulk of the styling is contained to a base class (e.g., <code>.btn</code>) while style variations are confined to modifier classes (e.g., <code>.btn-danger</code>). These modifier classes are built from the <code>$theme-colors</code> map to make customizing the number and name of our modifier classes.</p>
                    <p>Here are two examples of how we loop over the <code>$theme-colors</code> map to generate modifiers to the <code>.alert</code> and <code>.list-group</code> components.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Generate contextual modifier classes for colorizing the alert.
</span><span class="c1"></span>
<span class="k">@each</span> <span class="nv">$state</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nv">$alert-background</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-bg-scale</span><span class="p">);</span>
  <span class="nv">$alert-border</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-border-scale</span><span class="p">);</span>
  <span class="nv">$alert-color</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$alert-color-scale</span><span class="p">);</span>
  <span class="k">@if</span> <span class="p">(</span><span class="nf">contrast-ratio</span><span class="p">(</span><span class="nv">$alert-background</span><span class="o">,</span> <span class="nv">$alert-color</span><span class="p">)</span> <span class="o">&lt;</span> <span class="nv">$min-contrast-ratio</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$alert-color</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$alert-background</span><span class="p">)</span><span class="o">,</span> <span class="nf">abs</span><span class="p">(</span><span class="nv">$alert-color-scale</span><span class="p">));</span>
  <span class="p">}</span>
  <span class="nc">.alert-</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> alert-variant</span><span class="p">(</span><span class="nv">$alert-background</span><span class="o">,</span> <span class="nv">$alert-border</span><span class="o">,</span> <span class="nv">$alert-color</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// List group contextual variants
</span><span class="c1">//
</span><span class="c1">// Add modifier classes to change text and background color on individual items.
</span><span class="c1">// Organizationally, this must come after the `:hover` states.
</span><span class="c1"></span>
<span class="k">@each</span> <span class="nv">$state</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nv">$list-group-variant-bg</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$list-group-item-bg-scale</span><span class="p">);</span>
  <span class="nv">$list-group-variant-color</span><span class="o">:</span> <span class="nf">shift-color</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nv">$list-group-item-color-scale</span><span class="p">);</span>
  <span class="k">@if</span> <span class="p">(</span><span class="nf">contrast-ratio</span><span class="p">(</span><span class="nv">$list-group-variant-bg</span><span class="o">,</span> <span class="nv">$list-group-variant-color</span><span class="p">)</span> <span class="o">&lt;</span> <span class="nv">$min-contrast-ratio</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$list-group-variant-color</span><span class="o">:</span> <span class="nf">mix</span><span class="p">(</span><span class="nv">$value</span><span class="o">,</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$list-group-variant-bg</span><span class="p">)</span><span class="o">,</span> <span class="nf">abs</span><span class="p">(</span><span class="nv">$list-group-item-color-scale</span><span class="p">));</span>
  <span class="p">}</span>

  <span class="k">@include</span><span class="nd"> list-group-item-variant</span><span class="p">(</span><span class="nv">$state</span><span class="o">,</span> <span class="nv">$list-group-variant-bg</span><span class="o">,</span> <span class="nv">$list-group-variant-color</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
                    <h2 id="responsive">Responsive</h2>
                    <p>These Sass loops aren&rsquo;t limited to color maps, either. You can also generate responsive variations of your components. Take for example our responsive alignment of the dropdowns where we mix an <code>@each</code> loop for the <code>$grid-breakpoints</code> Sass map with a media query include.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// We deliberately hardcode the `bs-` prefix because we check
</span><span class="c1">// this custom property in JS to determine Popper&#39;s positioning
</span><span class="c1"></span>
<span class="k">@each</span> <span class="nv">$breakpoint</span> <span class="ow">in</span> <span class="nf">map-keys</span><span class="p">(</span><span class="nv">$grid-breakpoints</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="nv">$breakpoint</span><span class="p">)</span> <span class="p">{</span>
    <span class="nv">$infix</span><span class="o">:</span> <span class="nf">breakpoint-infix</span><span class="p">(</span><span class="nv">$breakpoint</span><span class="o">,</span> <span class="nv">$grid-breakpoints</span><span class="p">);</span>

    <span class="nc">.dropdown-menu</span><span class="si">#{</span><span class="nv">$infix</span><span class="si">}</span><span class="nc">-start</span> <span class="p">{</span>
      <span class="na">--bs-position</span><span class="o">:</span> <span class="ni">start</span><span class="p">;</span>

      <span class="k">&amp;</span><span class="o">[</span><span class="nt">data-bs-popper</span><span class="o">]</span> <span class="p">{</span>
        <span class="na">right</span><span class="o">:</span> <span class="ni">auto</span><span class="p">;</span>
        <span class="na">left</span><span class="o">:</span> <span class="mi">0</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>

    <span class="nc">.dropdown-menu</span><span class="si">#{</span><span class="nv">$infix</span><span class="si">}</span><span class="nc">-end</span> <span class="p">{</span>
      <span class="na">--bs-position</span><span class="o">:</span> <span class="ni">end</span><span class="p">;</span>

      <span class="k">&amp;</span><span class="o">[</span><span class="nt">data-bs-popper</span><span class="o">]</span> <span class="p">{</span>
        <span class="na">right</span><span class="o">:</span> <span class="mi">0</span><span class="p">;</span>
        <span class="na">left</span><span class="o">:</span> <span class="ni">auto</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <p>Should you modify your <code>$grid-breakpoints</code>, your changes will apply to all the loops iterating over that map.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">576</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">992</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xl</span><span class="o">:</span> <span class="mi">1200</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xxl</span><span class="o">:</span> <span class="mi">1400</span><span class="kt">px</span>
<span class="p">);</span>
</code></pre></div>
                    <p>For more information and examples on how to modify our Sass maps and variables, please refer to <a href="../layout/grid.php#sass">the Sass section of the Grid documentation</a>.</p>
                    <h2 id="creating-your-own">Creating your own</h2>
                    <p>We encourage you to adopt these guidelines when building with Bootstrap to create your own components. We&rsquo;ve extended this approach ourselves to the custom components in our documentation and examples. Components like our callouts are built just like our provided components with base and modifier classes.</p>
                    <div class="bd-example">
                        <div class="bd-callout my-0">
                            <strong>This is a callout.</strong> We built it custom for our docs so our messages to you stand out. It has three variants via modifier classes.
                        </div>
                    </div>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;callout&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><p>In your CSS, you&rsquo;d have something like the following where the bulk of the styling is done via <code>.callout</code>. Then, the unique styles between each variant is controlled via modifier class.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Base class
</span><span class="c1"></span><span class="nc">.callout</span> <span class="p">{}</span>

<span class="c1">// Modifier classes
</span><span class="c1"></span><span class="nc">.callout-info</span> <span class="p">{}</span>
<span class="nc">.callout-warning</span> <span class="p">{}</span>
<span class="nc">.callout-danger</span> <span class="p">{}</span>
</code></pre></div><p>For the callouts, that unique styling is just a <code>border-left-color</code>. When you combine that base class with one of those modifier classes, you get your complete component family:</p>
                    <div class="bd-callout bd-callout-info">
                        <strong>This is an info callout.</strong> Example text to show it in action.
                    </div>

                    <div class="bd-callout bd-callout-warning">
                        <strong>This is a warning callout.</strong> Example text to show it in action.
                    </div>

                    <div class="bd-callout bd-callout-danger">
                        <strong>This is a danger callout.</strong> Example text to show it in action.
                    </div>


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
