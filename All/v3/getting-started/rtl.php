
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Learn how to enable support for right-to-left text in Bootstrap across our layout, components, and utilities.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>RTL · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/getting-started/rtl/">

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
                                    <li><a href="../getting-started/parcel.php" class="d-inline-flex align-items-center rounded">Parcel</a></li>
                                    <li><a href="../getting-started/rfs.php" class="d-inline-flex align-items-center rounded">RFS</a></li>
                                    <li><a href="../getting-started/rtl.php" class="d-inline-flex align-items-center rounded active" aria-current="page">RTL</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/getting-started/rtl.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">RTL</h1>
                    </div>
                    <p class="bd-lead">Learn how to enable support for right-to-left text in Bootstrap across our layout, components, and utilities.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#get-familiar">Get familiar</a></li>
                            <li><a href="#required-html">Required HTML</a>
                                <ul>
                                    <li><a href="#starter-template">Starter template</a></li>
                                    <li><a href="#rtl-examples">RTL examples</a></li>
                                </ul>
                            </li>
                            <li><a href="#approach">Approach</a></li>
                            <li><a href="#customize-from-source">Customize from source</a>
                                <ul>
                                    <li><a href="#custom-rtl-values">Custom RTL values</a></li>
                                    <li><a href="#alternative-font-stack">Alternative font stack</a></li>
                                    <li><a href="#ltr-and-rtl-at-the-same-time">LTR and RTL at the same time</a></li>
                                </ul>
                            </li>
                            <li><a href="#the-breadcrumb-case">The breadcrumb case</a></li>
                            <li><a href="#additional-resources">Additional resources</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="get-familiar">Get familiar</h2>
                    <p>We recommend getting familiar with Bootstrap first by reading through our <a href="/docs/5.0/getting-started/introduction/">Getting Started Introduction page</a>. Once you&rsquo;ve run through it, continue reading here for how to enable RTL.</p>
                    <p>You may also want to read up on <a href="https://rtlcss.com/">the RTLCSS project</a>, as it powers our approach to RTL.</p>
                    <div class="bd-callout bd-callout-warning">
                        <h3 id="experimental-feature">Experimental feature</h3>
                        <p>The RTL feature is still <strong>experimental</strong> and will probably evolve according to user feedback. Spotted something or have an improvement to suggest? <a href="https://github.com/twbs/bootstrap/issues/new">Open an issue</a>, we&rsquo;d love to get your insights.
                    </div>

                    <h2 id="required-html">Required HTML</h2>
                    <p>There are two strict requirements for enabling RTL in Bootstrap-powered pages.</p>
                    <ol>
                        <li>Set <code>dir=&quot;rtl&quot;</code> on the <code>&lt;html&gt;</code> element.</li>
                        <li>Add an appropriate <code>lang</code> attribute, like <code>lang=&quot;ar&quot;</code>, on the <code>&lt;html&gt;</code> element.</li>
                    </ol>
                    <p>From there, you&rsquo;ll need to include an RTL version of our CSS. For example, here&rsquo;s the stylesheet for our compiled and minified CSS with RTL enabled:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">link</span> <span class="na">rel</span><span class="o">=</span><span class="s">&#34;stylesheet&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css&#34;</span> <span class="na">integrity</span><span class="o">=</span><span class="s">&#34;sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N&#34;</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">&#34;anonymous&#34;</span><span class="p">&gt;</span>
</code></pre></div><h3 id="starter-template">Starter template</h3>
                    <p>You can see the above requirements reflected in this modified RTL starter template.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="cp">&lt;!doctype html&gt;</span>
<span class="p">&lt;</span><span class="nt">html</span> <span class="na">lang</span><span class="o">=</span><span class="s">&#34;ar&#34;</span> <span class="na">dir</span><span class="o">=</span><span class="s">&#34;rtl&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
    <span class="c">&lt;!-- Required meta tags --&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">charset</span><span class="o">=</span><span class="s">&#34;utf-8&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;viewport&#34;</span> <span class="na">content</span><span class="o">=</span><span class="s">&#34;width=device-width, initial-scale=1&#34;</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Bootstrap CSS --&gt;</span>
    <span class="p">&lt;</span><span class="nt">link</span> <span class="na">rel</span><span class="o">=</span><span class="s">&#34;stylesheet&#34;</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css&#34;</span> <span class="na">integrity</span><span class="o">=</span><span class="s">&#34;sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N&#34;</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">&#34;anonymous&#34;</span><span class="p">&gt;</span>

    <span class="p">&lt;</span><span class="nt">title</span><span class="p">&gt;</span>مرحبا بالعالم!<span class="p">&lt;/</span><span class="nt">title</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">body</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span>مرحبا بالعالم!<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Optional JavaScript; choose one of the two! --&gt;</span>

    <span class="c">&lt;!-- Option 1: Bootstrap Bundle with Popper --&gt;</span>
    <span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js&#34;</span> <span class="na">integrity</span><span class="o">=</span><span class="s">&#34;sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM&#34;</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">&#34;anonymous&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>

    <span class="c">&lt;!-- Option 2: Separate Popper and Bootstrap JS --&gt;</span>
    <span class="c">&lt;!--
</span><span class="c">    &lt;script src=&#34;https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js&#34; integrity=&#34;sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p&#34; crossorigin=&#34;anonymous&#34;&gt;&lt;/script&gt;
</span><span class="c">    &lt;script src=&#34;https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js&#34; integrity=&#34;sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF&#34; crossorigin=&#34;anonymous&#34;&gt;&lt;/script&gt;
</span><span class="c">    --&gt;</span>
  <span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</code></pre></div><h3 id="rtl-examples">RTL examples</h3>
                    <p>Get started with one of our several <a href="/docs/5.0/examples/#rtl">RTL examples</a>.</p>
                    <h2 id="approach">Approach</h2>
                    <p>Our approach to building RTL support into Bootstrap comes with two important decisions that impact how we write and use our CSS:</p>
                    <ol>
                        <li>
                            <p><strong>First, we decided to build it with the <a href="https://rtlcss.com/">RTLCSS</a> project.</strong> This gives us some powerful features for managing changes and overrides when moving from LTR to RTL. It also allows us to build two versions of Bootstrap from one codebase.</p>
                        </li>
                        <li>
                            <p><strong>Second, we&rsquo;ve renamed a handful of directional classes to adopt a logical properties approach.</strong> Most of you have already interacted with logical properties thanks to our flex utilities—they replace direction properties like <code>left</code> and <code>right</code> in favor <code>start</code> and <code>end</code>. That makes the class names and values appropriate for LTR and RTL without any overhead.</p>
                        </li>
                    </ol>
                    <p>For example, instead of <code>.ml-3</code> for <code>margin-left</code>, use <code>.ms-3</code>.</p>
                    <p>Working with RTL, through our source Sass or compiled CSS, shouldn&rsquo;t be much different from our default LTR though.</p>
                    <h2 id="customize-from-source">Customize from source</h2>
                    <p>When it comes to <a href="/docs/5.0/customize/sass/">customization</a>, the preferred way is to take advantage of variables, maps, and mixins. This approach works the same for RTL, even if it&rsquo;s post-processed from the compiled files, thanks to <a href="https://rtlcss.com/learn/getting-started/why-rtlcss/">how RTLCSS works</a>.</p>
                    <h3 id="custom-rtl-values">Custom RTL values</h3>
                    <p>Using <a href="https://rtlcss.com/learn/usage-guide/value-directives/">RTLCSS value directives</a>, you can make a variable output a different value for RTL. For example, to decrease the weight for <code>$font-weight-bold</code> throughout the codebase, you may use the <code>/*rtl: {value}*/</code> syntax:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$font-weight-bold</span><span class="o">:</span> <span class="mi">700</span> <span class="si">#{</span><span class="cm">/* rtl:600 </span><span class="c">*/</span><span class="si">}</span> <span class="k">!default</span><span class="p">;</span>
</code></pre></div><p>Which would output to the following for our default CSS and RTL CSS:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-css" data-lang="css"><span class="c">/* bootstrap.css */</span>
<span class="nt">dt</span> <span class="p">{</span>
  <span class="k">font-weight</span><span class="p">:</span> <span class="mi">700</span> <span class="c">/* rtl:600 */</span><span class="p">;</span>
<span class="p">}</span>

<span class="c">/* bootstrap.rtl.css */</span>
<span class="nt">dt</span> <span class="p">{</span>
  <span class="k">font-weight</span><span class="p">:</span> <span class="mi">600</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div><h3 id="alternative-font-stack">Alternative font stack</h3>
                    <p>In the case you&rsquo;re using a custom font, be aware that not all fonts support the non-Latin alphabet. To switch from Pan-European to Arabic family, you may need to use <code>/*rtl:insert: {value}*/</code> in your font stack to modify the names of font families.</p>
                    <p>For example, to switch from <code>Helvetica Neue Webfont</code> for LTR to <code>Helvetica Neue Arabic</code> for RTL, your Sass code look like this:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$font-family-sans-serif</span><span class="o">:</span>
  <span class="n">Helvetica</span> <span class="n">Neue</span> <span class="si">#{</span><span class="s2">&#34;/* rtl:insert:Arabic */&#34;</span><span class="si">}</span><span class="o">,</span>
  <span class="c1">// Cross-platform generic font family (default user interface font)</span>
  <span class="ni">system-ui</span><span class="o">,</span>
  <span class="c1">// Safari for macOS and iOS (San Francisco)</span>
  <span class="o">-</span><span class="n">apple-system</span><span class="o">,</span>
  <span class="c1">// Chrome &lt; 56 for macOS (San Francisco)</span>
  <span class="n">BlinkMacSystemFont</span><span class="o">,</span>
  <span class="c1">// Windows</span>
  <span class="s2">&#34;Segoe UI&#34;</span><span class="o">,</span>
  <span class="c1">// Android</span>
  <span class="n">Roboto</span><span class="o">,</span>
  <span class="c1">// Basic web fallback</span>
  <span class="n">Arial</span><span class="o">,</span>
  <span class="c1">// Linux</span>
  <span class="s2">&#34;Noto Sans&#34;</span><span class="o">,</span>
  <span class="c1">// Sans serif fallback</span>
  <span class="ni">sans-serif</span><span class="o">,</span>
  <span class="c1">// Emoji fonts</span>
  <span class="s2">&#34;Apple Color Emoji&#34;</span><span class="o">,</span> <span class="s2">&#34;Segoe UI Emoji&#34;</span><span class="o">,</span> <span class="s2">&#34;Segoe UI Symbol&#34;</span><span class="o">,</span> <span class="s2">&#34;Noto Color Emoji&#34;</span> <span class="k">!default</span><span class="p">;</span>
</code></pre></div><h3 id="ltr-and-rtl-at-the-same-time">LTR and RTL at the same time</h3>
                    <p>Need both LTR and RTL on the same page? Thanks to <a href="https://rtlcss.com/learn/usage-guide/string-map/">RTLCSS String Maps</a>, this is pretty straightforward. Wrap your <code>@import</code>s with a class, and set a custom rename rule for RTLCSS:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="cm">/* rtl:begin:options: {
</span><span class="cm">  &#34;autoRename&#34;: true,
</span><span class="cm">  &#34;stringMap&#34;:[ {
</span><span class="cm">    &#34;name&#34;: &#34;ltr-rtl&#34;,
</span><span class="cm">    &#34;priority&#34;: 100,
</span><span class="cm">    &#34;search&#34;: [&#34;ltr&#34;],
</span><span class="cm">    &#34;replace&#34;: [&#34;rtl&#34;],
</span><span class="cm">    &#34;options&#34;: {
</span><span class="cm">      &#34;scope&#34;: &#34;*&#34;,
</span><span class="cm">      &#34;ignoreCase&#34;: false
</span><span class="cm">    }
</span><span class="cm">  } ]
</span><span class="cm">} */</span>
<span class="nc">.ltr</span> <span class="p">{</span>
  <span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/bootstrap&#34;</span><span class="p">;</span>
<span class="p">}</span>
<span class="cm">/*rtl:end:options*/</span>
</code></pre></div><p>After running Sass then RTLCSS, each selector in your CSS files will be prepended by <code>.ltr</code>, and <code>.rtl</code> for RTL files. Now you&rsquo;re able to use both files on the same page, and simply use <code>.ltr</code> or <code>.rtl</code> on your components wrappers to use one or the other direction.</p>
                    <div class="bd-callout bd-callout-warning">
                        <h4 id="edge-cases-and-known-limitations">Edge cases and known limitations</h4>
                        <p>While this approach is understandable, please pay attention to the following:</p>
                        <ol>
                            <li>When switching <code>.ltr</code> and <code>.rtl</code>, make sure you add <code>dir</code> and <code>lang</code> attributes accordingly.</li>
                            <li>Loading both files can be a real performance bottleneck: consider some <a href="/docs/5.0/customize/optimize/">optimization</a>, and maybe try to <a href="https://www.filamentgroup.com/lab/load-css-simpler/">load one of those files asynchronously</a>.</li>
                            <li>Nesting styles this way will prevent our <code>form-validation-state()</code> mixin from working as intended, thus require you tweak it a bit by yourself. <a href="https://github.com/twbs/bootstrap/issues/31223">See #31223</a>.</li>
                        </ol>

                    </div>

                    <h2 id="the-breadcrumb-case">The breadcrumb case</h2>
                    <p>The <a href="/docs/5.0/components/breadcrumb//#changing-the-separator">breadcrumb separator</a> is the only case requiring its own brand new variable— namely <code>$breadcrumb-divider-flipped</code> —defaulting to <code>$breadcrumb-divider</code>.</p>
                    <h2 id="additional-resources">Additional resources</h2>
                    <ul>
                        <li><a href="https://rtlcss.com/">RTLCSS</a></li>
                        <li><a href="https://rtlstyling.com/posts/rtl-styling">RTL Styling 101</a></li>
                    </ul>

                </div>
            </main>
        </div>


        <footer class="bd-footer py-5 mt-5 bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"/></svg>
                            <span class="fs-5">Bootstrap</span>
                        </a>
                        <ul class="list-unstyled small text-muted">
                            <li class="mb-2">Designed and built with all the love in the world by the <a href="/docs/5.0/about/team/">Bootstrap team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</li>
                            <li class="mb-2">Code licensed <a href="https://github.com/twbs/bootstrap/blob/main/LICENSE" target="_blank" rel="license noopener">MIT</a>, docs <a href="https://creativecommons.org/licenses/by/3.0/" target="_blank" rel="license noopener">CC BY 3.0</a>.</li>
                            <li class="mb-2">Currently v5.0.2.</li>
                            <li class="mb-2">Analytics by <a href="https://usefathom.com/ref/ADZSBE" target="_blank" rel="noopener">Fathom</a>.</li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                        <h5>Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/">Home</a></li>
                            <li class="mb-2"><a href="/docs/5.0/">Docs</a></li>
                            <li class="mb-2"><a href="/docs/5.0/examples/">Examples</a></li>
                            <li class="mb-2"><a href="https://themes.getbootstrap.com/">Themes</a></li>
                            <li class="mb-2"><a href="https://blog.getbootstrap.com/">Blog</a></li>
                            <li class="mb-2"><a href="https://cottonbureau.com/people/bootstrap">Swag Store</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5>Guides</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="/docs/5.0/getting-started/">Getting started</a></li>
                            <li class="mb-2"><a href="/docs/5.0/examples/starter-template/">Starter template</a></li>
                            <li class="mb-2"><a href="/docs/5.0/getting-started/webpack/">Webpack</a></li>
                            <li class="mb-2"><a href="/docs/5.0/getting-started/parcel/">Parcel</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5>Projects</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap">Bootstrap 5</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/tree/v4-dev">Bootstrap 4</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/icons">Icons</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/rfs">RFS</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap-npm-starter">npm starter</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-lg-2 mb-3">
                        <h5>Community</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/issues">Issues</a></li>
                            <li class="mb-2"><a href="https://github.com/twbs/bootstrap/discussions">Discussions</a></li>
                            <li class="mb-2"><a href="https://github.com/sponsors/twbs">Corporate sponsors</a></li>
                            <li class="mb-2"><a href="https://opencollective.com/bootstrap">Open Collective</a></li>
                            <li class="mb-2"><a href="https://stackoverflow.com/questions/tagged/bootstrap-5">Stack Overflow</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

        <script src="../assets/js/docs.min.js"></script>




    </body>
</html>
