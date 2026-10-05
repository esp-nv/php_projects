
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Grid system · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/layout/grid/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#layout-collapse" aria-expanded="true" aria-current="true">
                                Layout
                            </button>

                            <div class="collapse show" id="layout-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="breakpoints.php" class="d-inline-flex align-items-center rounded">Breakpoints</a></li>
                                    <li><a href="containers.php" class="d-inline-flex align-items-center rounded">Containers</a></li>
                                    <li><a href="grid.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Grid</a></li>
                                    <li><a href="columns.php" class="d-inline-flex align-items-center rounded">Columns</a></li>
                                    <li><a href="gutters.php" class="d-inline-flex align-items-center rounded">Gutters</a></li>
                                    <li><a href="utilities.php" class="d-inline-flex align-items-center rounded">Utilities</a></li>
                                    <li><a href="z-index.php" class="d-inline-flex align-items-center rounded">Z-index</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/layout/grid.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Grid system</h1>
                    </div>
                    <p class="bd-lead">Use our powerful mobile-first flexbox grid to build layouts of all shapes and sizes thanks to a twelve column system, six default responsive tiers, Sass variables and mixins, and dozens of predefined classes.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#example">Example</a></li>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#grid-options">Grid options</a></li>
                            <li><a href="#auto-layout-columns">Auto-layout columns</a>
                                <ul>
                                    <li><a href="#equal-width">Equal-width</a></li>
                                    <li><a href="#setting-one-column-width">Setting one column width</a></li>
                                    <li><a href="#variable-width-content">Variable width content</a></li>
                                </ul>
                            </li>
                            <li><a href="#responsive-classes">Responsive classes</a>
                                <ul>
                                    <li><a href="#all-breakpoints">All breakpoints</a></li>
                                    <li><a href="#stacked-to-horizontal">Stacked to horizontal</a></li>
                                    <li><a href="#mix-and-match">Mix and match</a></li>
                                    <li><a href="#row-columns">Row columns</a></li>
                                </ul>
                            </li>
                            <li><a href="#nesting">Nesting</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#mixins">Mixins</a></li>
                                    <li><a href="#example-usage">Example usage</a></li>
                                </ul>
                            </li>
                            <li><a href="#customizing-the-grid">Customizing the grid</a>
                                <ul>
                                    <li><a href="#columns-and-gutters">Columns and gutters</a></li>
                                    <li><a href="#grid-tiers">Grid tiers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="example">Example</h2>
                    <p>Bootstrap&rsquo;s grid system uses a series of containers, rows, and columns to layout and align content. It&rsquo;s built with <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">flexbox</a> and is fully responsive. Below is an example and an in-depth explanation for how the grid system comes together.</p>
                    <div class="bd-callout bd-callout-info">
                        <strong>New to or unfamiliar with flexbox?</strong> <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background">Read this CSS Tricks flexbox guide</a> for background, terminology, guidelines, and code snippets.
                    </div>

                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    Column
                                </div>
                                <div class="col">
                                    Column
                                </div>
                                <div class="col">
                                    Column
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      Column
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      Column
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      Column
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>The above example creates three equal-width columns across all devices and viewports using our predefined grid classes. Those columns are centered in the page with the parent <code>.container</code>.</p>
                    <h2 id="how-it-works">How it works</h2>
                    <p>Breaking it down, here&rsquo;s how the grid system comes together:</p>
                    <ul>
                        <li>
                            <p><strong>Our grid supports <a href="breakpoints.php">six responsive breakpoints</a>.</strong>  Breakpoints are based on <code>min-width</code> media queries, meaning they affect that breakpoint and all those above it (e.g., <code>.col-sm-4</code> applies to <code>sm</code>, <code>md</code>, <code>lg</code>, <code>xl</code>, and <code>xxl</code>). This means you can control container and column sizing and behavior by each breakpoint.</p>
                        </li>
                        <li>
                            <p><strong>Containers center and horizontally pad your content.</strong> Use <code>.container</code> for a responsive pixel width, <code>.container-fluid</code> for <code>width: 100%</code> across all viewports and devices, or a responsive container (e.g., <code>.container-md</code>) for a combination of fluid and pixel widths.</p>
                        </li>
                        <li>
                            <p><strong>Rows are wrappers for columns.</strong> Each column has horizontal <code>padding</code> (called a gutter) for controlling the space between them. This <code>padding</code> is then counteracted on the rows with negative margins to ensure the content in your columns is visually aligned down the left side. Rows also support modifier classes to <a href="#row-columns">uniformly apply column sizing</a> and <a href="gutters.php">gutter classes</a> to change the spacing of your content.</p>
                        </li>
                        <li>
                            <p><strong>Columns are incredibly flexible.</strong> There are 12 template columns available per row, allowing you to create different combinations of elements that span any number of columns. Column classes indicate the number of template columns to span (e.g., <code>col-4</code> spans four). <code>width</code>s are set in percentages so you always have the same relative sizing.</p>
                        </li>
                        <li>
                            <p><strong>Gutters are also responsive and customizable.</strong> <a href="gutters.php">Gutter classes are available</a> across all breakpoints, with all the same sizes as our <a href="../utilities/spacing.php">margin and padding spacing</a>. Change horizontal gutters with <code>.gx-*</code> classes, vertical gutters with <code>.gy-*</code>, or all gutters with <code>.g-*</code> classes. <code>.g-0</code> is also available to remove gutters.</p>
                        </li>
                        <li>
                            <p><strong>Sass variables, maps, and mixins power the grid.</strong> If you don&rsquo;t want to use the predefined grid classes in Bootstrap, you can use our <a href="#sass">grid&rsquo;s source Sass</a> to create your own with more semantic markup. We also include some CSS custom properties to consume these Sass variables for even greater flexibility for you.</p>
                        </li>
                    </ul>
                    <p>Be aware of the limitations and <a href="https://github.com/philipwalton/flexbugs">bugs around flexbox</a>, like the <a href="https://github.com/philipwalton/flexbugs#flexbug-9">inability to use some HTML elements as flex containers</a>.</p>
                    <h2 id="grid-options">Grid options</h2>
                    <p>Bootstrap&rsquo;s grid system can adapt across all six default breakpoints, and any breakpoints you customize. The six default grid tiers are as follow:</p>
                    <ul>
                        <li>Extra small (xs)</li>
                        <li>Small (sm)</li>
                        <li>Medium (md)</li>
                        <li>Large (lg)</li>
                        <li>Extra large (xl)</li>
                        <li>Extra extra large (xxl)</li>
                    </ul>
                    <p>As noted above, each of these breakpoints have their own container, unique class prefix, and modifiers. Here&rsquo;s how the grid changes across these breakpoints:</p>
                    <table class="table mb-4">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">
                                    xs<br>
                                    <span class="fw-normal">&lt;576px</span>
                                </th>
                                <th scope="col">
                                    sm<br>
                                    <span class="fw-normal">&ge;576px</span>
                                </th>
                                <th scope="col">
                                    md<br>
                                    <span class="fw-normal">&ge;768px</span>
                                </th>
                                <th scope="col">
                                    lg<br>
                                    <span class="fw-normal">&ge;992px</span>
                                </th>
                                <th scope="col">
                                    xl<br>
                                    <span class="fw-normal">&ge;1200px</span>
                                </th>
                                <th scope="col">
                                    xxl<br>
                                    <span class="fw-normal">&ge;1400px</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">Container <code class="fw-normal">max-width</code></th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                                <td>960px</td>
                                <td>1140px</td>
                                <td>1320px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Class prefix</th>
                                <td><code>.col-</code></td>
                                <td><code>.col-sm-</code></td>
                                <td><code>.col-md-</code></td>
                                <td><code>.col-lg-</code></td>
                                <td><code>.col-xl-</code></td>
                                <td><code>.col-xxl-</code></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row"># of columns</th>
                                <td colspan="6">12</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Gutter width</th>
                                <td colspan="6">1.5rem (.75rem on left and right)</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Custom gutters</th>
                                <td colspan="6"><a href="gutters.php">Yes</a></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Nestable</th>
                                <td colspan="6"><a href="#nesting">Yes</a></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Column ordering</th>
                                <td colspan="6"><a href="columns.php#reordering">Yes</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <h2 id="auto-layout-columns">Auto-layout columns</h2>
                    <p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like <code>.col-sm-6</code>.</p>
                    <h3 id="equal-width">Equal-width</h3>
                    <p>For example, here are two grid layouts that apply to every device and viewport, from <code>xs</code> to <code>xxl</code>. Add any number of unit-less classes for each breakpoint you need and every column will be the same width.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    1 of 2
                                </div>
                                <div class="col">
                                    2 of 2
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col">
                                    2 of 3
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 2
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      2 of 2
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      2 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="setting-one-column-width">Setting one column width</h3>
                    <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins, or inline widths. Note that the other columns will resize no matter the width of the center column.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-6">
                                    2 of 3 (wider)
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-5">
                                    2 of 3 (wider)
                                </div>
                                <div class="col">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>
      2 of 3 (wider)
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-5&#34;</span><span class="p">&gt;</span>
      2 of 3 (wider)
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="variable-width-content">Variable width content</h3>
                    <p>Use <code>col-{breakpoint}-auto</code> classes to size columns based on the natural width of their content.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2">
                                    1 of 3
                                </div>
                                <div class="col-md-auto">
                                    Variable width content
                                </div>
                                <div class="col col-lg-2">
                                    3 of 3
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    1 of 3
                                </div>
                                <div class="col-md-auto">
                                    Variable width content
                                </div>
                                <div class="col col-lg-2">
                                    3 of 3
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row justify-content-md-center&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-auto&#34;</span><span class="p">&gt;</span>
      Variable width content
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>
      1 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-auto&#34;</span><span class="p">&gt;</span>
      Variable width content
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col col-lg-2&#34;</span><span class="p">&gt;</span>
      3 of 3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="responsive-classes">Responsive classes</h2>
                    <p>Bootstrap&rsquo;s grid includes six tiers of predefined classes for building complex responsive layouts. Customize the size of your columns on extra small, small, medium, large, or extra large devices however you see fit.</p>
                    <h3 id="all-breakpoints">All breakpoints</h3>
                    <p>For grids that are the same from the smallest of devices to the largest, use the <code>.col</code> and <code>.col-*</code> classes. Specify a numbered class when you need a particularly sized column; otherwise, feel free to stick to <code>.col</code>.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                                <div class="col">col</div>
                            </div>
                            <div class="row">
                                <div class="col-8">col-8</div>
                                <div class="col-4">col-4</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>col<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-8&#34;</span><span class="p">&gt;</span>col-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4&#34;</span><span class="p">&gt;</span>col-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="stacked-to-horizontal">Stacked to horizontal</h3>
                    <p>Using a single set of <code>.col-sm-*</code> classes, you can create a basic grid system that starts out stacked and becomes horizontal at the small breakpoint (<code>sm</code>).</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-8">col-sm-8</div>
                                <div class="col-sm-4">col-sm-4</div>
                            </div>
                            <div class="row">
                                <div class="col-sm">col-sm</div>
                                <div class="col-sm">col-sm</div>
                                <div class="col-sm">col-sm</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-8&#34;</span><span class="p">&gt;</span>col-sm-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-4&#34;</span><span class="p">&gt;</span>col-sm-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm&#34;</span><span class="p">&gt;</span>col-sm<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="mix-and-match">Mix and match</h3>
                    <p>Don&rsquo;t want your columns to simply stack in some grid tiers? Use a combination of different classes for each tier as needed. See the example below for a better idea of how it all works.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                            <div class="row">
                                <div class="col-md-8">.col-md-8</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                            </div>

                            <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                            <div class="row">
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                                <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                            </div>

                            <!-- Columns are always 50% wide, on mobile and desktop -->
                            <div class="row">
                                <div class="col-6">.col-6</div>
                                <div class="col-6">.col-6</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="c">&lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-8&#34;</span><span class="p">&gt;</span>.col-md-8<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="c">&lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6 col-md-4&#34;</span><span class="p">&gt;</span>.col-6 .col-md-4<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="c">&lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>.col-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>.col-6<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h3 id="row-columns">Row columns</h3>
                    <p>Use the responsive <code>.row-cols-*</code> classes to quickly set the number of columns that best render your content and layout. Whereas normal <code>.col-*</code> classes apply to the individual columns (e.g., <code>.col-md-4</code>), the row columns classes are set on the parent <code>.row</code> as a default for contained columns. With <code>.row-cols-auto</code> you can give the columns their natural width.</p>
                    <p>Use these row columns classes to quickly create basic grid layouts or to control your card layouts and override when needed at the column level.</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-2">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-2&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-3">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-auto">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-auto&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-4">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-4">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col-6">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-6&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-1 row-cols-sm-2 row-cols-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row row-cols-2 row-cols-lg-3">
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                                <div class="col-4 col-lg-2">Column</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row row-cols-2 row-cols-lg-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-lg-2&#34;</span><span class="p">&gt;</span>Column<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>You can also use the accompanying Sass mixin, <code>row-cols()</code>:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Three columns to start
</span><span class="c1"></span>  <span class="k">@include</span><span class="nd"> row-cols</span><span class="p">(</span><span class="mi">3</span><span class="p">);</span>

  <span class="c1">// Five columns from medium breakpoint up
</span><span class="c1"></span>  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">md</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> row-cols</span><span class="p">(</span><span class="mi">5</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div><h2 id="nesting">Nesting</h2>
                    <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.col-sm-*</code> columns within an existing <code>.col-sm-*</code> column. Nested rows should include a set of columns that add up to 12 or fewer (it is not required that you use all 12 available columns).</p>
                    <div class="bd-example bd-example-row">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    Level 1: .col-sm-3
                                </div>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-8 col-sm-6">
                                            Level 2: .col-8 .col-sm-6
                                        </div>
                                        <div class="col-4 col-sm-6">
                                            Level 2: .col-4 .col-sm-6
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-3&#34;</span><span class="p">&gt;</span>
      Level 1: .col-sm-3
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-sm-9&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row&#34;</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-8 col-sm-6&#34;</span><span class="p">&gt;</span>
          Level 2: .col-8 .col-sm-6
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
        <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-4 col-sm-6&#34;</span><span class="p">&gt;</span>
          Level 2: .col-4 .col-sm-6
        <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <p>When using Bootstrap&rsquo;s source Sass files, you have the option of using Sass variables and mixins to create custom, semantic, and responsive page layouts. Our predefined grid classes use these same variables and mixins to provide a whole suite of ready-to-use classes for fast responsive layouts.</p>
                    <h3 id="variables">Variables</h3>
                    <p>Variables and maps determine the number of columns, the gutter width, and the media query point at which to begin floating columns. We use these to generate the predefined grid classes documented above, as well as for the custom mixins listed below.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="o">:</span>      <span class="mi">12</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="o">:</span> <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span><span class="p">;</span>
</code></pre></div><div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">576</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">992</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xl</span><span class="o">:</span> <span class="mi">1200</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xxl</span><span class="o">:</span> <span class="mi">1400</span><span class="kt">px</span>
<span class="p">);</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$container-max-widths</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">540</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">720</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">960</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xl</span><span class="o">:</span> <span class="mi">1140</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">xxl</span><span class="o">:</span> <span class="mi">1320</span><span class="kt">px</span>
<span class="p">);</span>
</code></pre></div>
                    <h3 id="mixins">Mixins</h3>
                    <p>Mixins are used in conjunction with the grid variables to generate semantic CSS for individual grid columns.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Creates a wrapper for a series of columns
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-row</span><span class="p">();</span>

<span class="c1">// Make the element grid-ready (applying everything but the width)
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>

<span class="c1">// Without optional size values, the mixin will create equal columns (similar to using .col)
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-col</span><span class="p">();</span>
<span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span>

<span class="c1">// Get fancy by offsetting, or changing the sort order
</span><span class="c1"></span><span class="k">@include</span><span class="nd"> make-col-offset</span><span class="p">(</span><span class="nv">$size</span><span class="o">,</span> <span class="nv">$columns</span><span class="o">:</span> <span class="nv">$grid-columns</span><span class="p">);</span>
</code></pre></div><h3 id="example-usage">Example usage</h3>
                    <p>You can modify the variables to your own custom values, or just use the mixins with their default values. Here&rsquo;s an example of using the default settings to create a two-column layout with a gap between.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.example-container</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-container</span><span class="p">();</span>
  <span class="c1">// Make sure to define this width after the mixin to override
</span><span class="c1"></span>  <span class="c1">// `width: 100%` generated by `make-container()`
</span><span class="c1"></span>  <span class="na">width</span><span class="o">:</span> <span class="mi">800</span><span class="kt">px</span><span class="p">;</span>
<span class="p">}</span>

<span class="nc">.example-row</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-row</span><span class="p">();</span>
<span class="p">}</span>

<span class="nc">.example-content-main</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">8</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="nc">.example-content-secondary</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> make-col-ready</span><span class="p">();</span>

  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">sm</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">6</span><span class="p">);</span>
  <span class="p">}</span>
  <span class="k">@include</span><span class="nd"> media-breakpoint-up</span><span class="p">(</span><span class="n">lg</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> make-col</span><span class="p">(</span><span class="mi">4</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div><div class="bd-example">
                        <div class="example-container">
                            <div class="example-row">
                                <div class="example-content-main">Main content</div>
                                <div class="example-content-secondary">Secondary content</div>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-container&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-row&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-content-main&#34;</span><span class="p">&gt;</span>Main content<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;example-content-secondary&#34;</span><span class="p">&gt;</span>Secondary content<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="customizing-the-grid">Customizing the grid</h2>
                    <p>Using our built-in grid Sass variables and maps, it&rsquo;s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths—then recompile.</p>
                    <h3 id="columns-and-gutters">Columns and gutters</h3>
                    <p>The number of grid columns can be modified via Sass variables. <code>$grid-columns</code> is used to generate the widths (in percent) of each individual column while <code>$grid-gutter-width</code> sets the width for the column gutters.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-columns</span><span class="o">:</span> <span class="mi">12</span> <span class="k">!default</span><span class="p">;</span>
<span class="nv">$grid-gutter-width</span><span class="o">:</span> <span class="mi">1</span><span class="mf">.5</span><span class="kt">rem</span> <span class="k">!default</span><span class="p">;</span>
</code></pre></div><h3 id="grid-tiers">Grid tiers</h3>
                    <p>Moving beyond the columns themselves, you may also customize the number of grid tiers. If you wanted just four grid tiers, you&rsquo;d update the <code>$grid-breakpoints</code> and <code>$container-max-widths</code> to something like this:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$grid-breakpoints</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">xs</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">480</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">768</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">1024</span><span class="kt">px</span>
<span class="p">);</span>

<span class="nv">$container-max-widths</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">sm</span><span class="o">:</span> <span class="mi">420</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">md</span><span class="o">:</span> <span class="mi">720</span><span class="kt">px</span><span class="o">,</span>
  <span class="na">lg</span><span class="o">:</span> <span class="mi">960</span><span class="kt">px</span>
<span class="p">);</span>
</code></pre></div><p>When making any changes to the Sass variables or maps, you&rsquo;ll need to save your changes and recompile. Doing so will output a brand new set of predefined grid classes for column widths, offsets, and ordering. Responsive visibility utilities will also be updated to use the custom breakpoints. Make sure to set grid values in <code>px</code> (not <code>rem</code>, <code>em</code>, or <code>%</code>).</p>

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
