
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Use these shorthand utilities for quickly configuring the position of an element.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Position · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/utilities/position/">

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
                                    <li><a href="flex.php" class="d-inline-flex align-items-center rounded">Flex</a></li>
                                    <li><a href="float.php" class="d-inline-flex align-items-center rounded">Float</a></li>
                                    <li><a href="interactions.php" class="d-inline-flex align-items-center rounded">Interactions</a></li>
                                    <li><a href="overflow.php" class="d-inline-flex align-items-center rounded">Overflow</a></li>
                                    <li><a href="position.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Position</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/utilities/position.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Position</h1>
                    </div>
                    <p class="bd-lead">Use these shorthand utilities for quickly configuring the position of an element.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#position-values">Position values</a></li>
                            <li><a href="#arrange-elements">Arrange elements</a></li>
                            <li><a href="#center-elements">Center elements</a></li>
                            <li><a href="#examples">Examples</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#maps">Maps</a></li>
                                    <li><a href="#utilities-api">Utilities API</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <h2 id="position-values">Position values</h2>
                    <p>Quick positioning classes are available, though they are not responsive.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-static&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-fixed&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-sticky&#34;</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</code></pre></div><h2 id="arrange-elements">Arrange elements</h2>
                    <p>Arrange elements easily with the edge positioning utilities. The format is <code>{property}-{position}</code>.</p>
                    <p>Where <em>property</em> is one of:</p>
                    <ul>
                        <li><code>top</code> - for the vertical <code>top</code> position</li>
                        <li><code>start</code> - for the horizontal <code>left</code> position (in LTR)</li>
                        <li><code>bottom</code> - for the vertical <code>bottom</code> position</li>
                        <li><code>end</code> - for the horizontal <code>right</code> position (in LTR)</li>
                    </ul>
                    <p>Where <em>position</em> is one of:</p>
                    <ul>
                        <li><code>0</code> - for <code>0</code> edge position</li>
                        <li><code>50</code> - for <code>50%</code> edge position</li>
                        <li><code>100</code> - for <code>100%</code> edge position</li>
                    </ul>
                    <p>(You can add more position values by adding entries to the <code>$position-values</code> Sass map variable.)</p>
                    <div class="bd-example bd-example-position-utils">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0"></div>
                            <div class="position-absolute top-0 end-0"></div>
                            <div class="position-absolute top-50 start-50"></div>
                            <div class="position-absolute bottom-50 end-50"></div>
                            <div class="position-absolute bottom-0 start-0"></div>
                            <div class="position-absolute bottom-0 end-0"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 end-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-50&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-50 end-50&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-0 start-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-0 end-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="center-elements">Center elements</h2>
                    <p>In addition, you can also center the elements with the transform utility class <code>.translate-middle</code>.</p>
                    <p>This class applies the transformations <code>translateX(-50%)</code> and <code>translateY(-50%)</code> to the element which, in combination with the edge positioning utilities, allows you to absolute center an element.</p>
                    <div class="bd-example bd-example-position-utils">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0 translate-middle"></div>
                            <div class="position-absolute top-0 start-50 translate-middle"></div>
                            <div class="position-absolute top-0 start-100 translate-middle"></div>
                            <div class="position-absolute top-50 start-0 translate-middle"></div>
                            <div class="position-absolute top-50 start-50 translate-middle"></div>
                            <div class="position-absolute top-50 start-100 translate-middle"></div>
                            <div class="position-absolute top-100 start-0 translate-middle"></div>
                            <div class="position-absolute top-100 start-50 translate-middle"></div>
                            <div class="position-absolute top-100 start-100 translate-middle"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-0 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-50 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-100 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-0 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-50 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-100 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-100 start-0 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-100 start-50 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-100 start-100 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>By adding <code>.translate-middle-x</code> or <code>.translate-middle-y</code> classes, elements can be positioned only in horizontal or vertical direction.</p>
                    <div class="bd-example bd-example-position-utils">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-0"></div>
                            <div class="position-absolute top-0 start-50 translate-middle-x"></div>
                            <div class="position-absolute top-0 end-0"></div>
                            <div class="position-absolute top-50 start-0 translate-middle-y"></div>
                            <div class="position-absolute top-50 start-50 translate-middle"></div>
                            <div class="position-absolute top-50 end-0 translate-middle-y"></div>
                            <div class="position-absolute bottom-0 start-0"></div>
                            <div class="position-absolute bottom-0 start-50 translate-middle-x"></div>
                            <div class="position-absolute bottom-0 end-0"></div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-50 translate-middle-x&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 end-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-0 translate-middle-y&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 start-50 translate-middle&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-50 end-0 translate-middle-y&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-0 start-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-0 start-50 translate-middle-x&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute bottom-0 end-0&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="examples">Examples</h2>
                    <p>Here are some real life examples of these classes:</p>
                    <div class="bd-example bd-example-position-examples d-flex justify-content-around">
                        <button type="button" class="btn btn-primary position-relative">
                            Mails <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">+99 <span class="visually-hidden">unread messages</span></span>
                        </button>

                        <button type="button" class="btn btn-dark position-relative">
                            Marker <svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
                        </button>

                        <button type="button" class="btn btn-primary position-relative">
                            Alerts <span class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2"><span class="visually-hidden">unread messages</span></span>
                        </button>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary position-relative&#34;</span><span class="p">&gt;</span>
  Mails <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary&#34;</span><span class="p">&gt;</span>+99 <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>unread messages<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-dark position-relative&#34;</span><span class="p">&gt;</span>
  Marker <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">width</span><span class="o">=</span><span class="s">&#34;1em&#34;</span> <span class="na">height</span><span class="o">=</span><span class="s">&#34;1em&#34;</span> <span class="na">viewBox</span><span class="o">=</span><span class="s">&#34;0 0 16 16&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill&#34;</span> <span class="na">fill</span><span class="o">=</span><span class="s">&#34;#212529&#34;</span> <span class="na">xmlns</span><span class="o">=</span><span class="s">&#34;http://www.w3.org/2000/svg&#34;</span><span class="p">&gt;&lt;</span><span class="nt">path</span> <span class="na">d</span><span class="o">=</span><span class="s">&#34;M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z&#34;</span><span class="p">/&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>

<span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary position-relative&#34;</span><span class="p">&gt;</span>
  Alerts <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2&#34;</span><span class="p">&gt;&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;visually-hidden&#34;</span><span class="p">&gt;</span>unread messages<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span></code></pre></div>
                    <p>You can use these classes with existing components to create new ones. Remember that you can extend its functionality by adding entries to the <code>$position-values</code> variable.</p>
                    <div class="bd-example bd-example-position-examples">
                        <div class="position-relative m-4">
                            <div class="progress" style="height: 1px;">
                                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>
                            <button type="button" class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">2</button>
                            <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem;">3</button>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-relative m-4&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;height: 1px;&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;progress-bar&#34;</span> <span class="na">role</span><span class="o">=</span><span class="s">&#34;progressbar&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 50%;&#34;</span> <span class="na">aria-valuenow</span><span class="o">=</span><span class="s">&#34;50&#34;</span> <span class="na">aria-valuemin</span><span class="o">=</span><span class="s">&#34;0&#34;</span> <span class="na">aria-valuemax</span><span class="o">=</span><span class="s">&#34;100&#34;</span><span class="p">&gt;&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 2rem; height:2rem;&#34;</span><span class="p">&gt;</span>1<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 2rem; height:2rem;&#34;</span><span class="p">&gt;</span>2<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;button&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 2rem; height:2rem;&#34;</span><span class="p">&gt;</span>3<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="maps">Maps</h3>
                    <p>Default position utility values are declared in a Sass map, then used to generate our utilities.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$position-values</span><span class="o">:</span> <span class="p">(</span>
  <span class="na">0</span><span class="o">:</span> <span class="mi">0</span><span class="o">,</span>
  <span class="na">50</span><span class="o">:</span> <span class="mi">50</span><span class="kt">%</span><span class="o">,</span>
  <span class="na">100</span><span class="o">:</span> <span class="mi">100</span><span class="kt">%</span>
<span class="p">);</span>
</code></pre></div>
                    <h3 id="utilities-api">Utilities API</h3>
                    <p>Position utilities are declared in our utilities API in <code>scss/_utilities.scss</code>. <a href="../utilities/api.php#using-the-api">Learn how to use the utilities API.</a></p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss">    <span class="s2">&#34;position&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">position</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="nt">static</span> <span class="nt">relative</span> <span class="nt">absolute</span> <span class="nt">fixed</span> <span class="nt">sticky</span>
    <span class="o">),</span>
    <span class="s2">&#34;top&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">top</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">position-values</span>
    <span class="o">),</span>
    <span class="s2">&#34;bottom&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">bottom</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">position-values</span>
    <span class="o">),</span>
    <span class="s2">&#34;start&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">left</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">start</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">position-values</span>
    <span class="o">),</span>
    <span class="s2">&#34;end&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">right</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">end</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="err">$</span><span class="nt">position-values</span>
    <span class="o">),</span>
    <span class="s2">&#34;translate-middle&#34;</span><span class="nd">:</span> <span class="o">(</span>
      <span class="nt">property</span><span class="nd">:</span> <span class="nt">transform</span><span class="o">,</span>
      <span class="nt">class</span><span class="nd">:</span> <span class="nt">translate-middle</span><span class="o">,</span>
      <span class="nt">values</span><span class="nd">:</span> <span class="o">(</span>
        <span class="nt">null</span><span class="nd">:</span> <span class="nt">translate</span><span class="o">(-</span><span class="nt">50</span><span class="err">%</span><span class="o">,</span> <span class="o">-</span><span class="nt">50</span><span class="err">%</span><span class="o">),</span>
        <span class="nt">x</span><span class="nd">:</span> <span class="nt">translateX</span><span class="o">(-</span><span class="nt">50</span><span class="err">%</span><span class="o">),</span>
        <span class="nt">y</span><span class="nd">:</span> <span class="nt">translateY</span><span class="o">(-</span><span class="nt">50</span><span class="err">%</span><span class="o">),</span>
      <span class="o">)</span>
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
