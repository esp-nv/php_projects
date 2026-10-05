
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Make any HTML element or Bootstrap component clickable by &ldquo;stretching&rdquo; a nested link via CSS.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Stretched link · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/helpers/stretched-link/">

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
                            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#helpers-collapse" aria-expanded="true" aria-current="true">
                                Helpers
                            </button>

                            <div class="collapse show" id="helpers-collapse">
                                <ul class="list-unstyled fw-normal pb-1 small">
                                    <li><a href="clearfix.php" class="d-inline-flex align-items-center rounded">Clearfix</a></li>
                                    <li><a href="colored-links.php" class="d-inline-flex align-items-center rounded">Colored links</a></li>
                                    <li><a href="ratio.php" class="d-inline-flex align-items-center rounded">Ratio</a></li>
                                    <li><a href="position.php" class="d-inline-flex align-items-center rounded">Position</a></li>
                                    <li><a href="visually-hidden.php" class="d-inline-flex align-items-center rounded">Visually hidden</a></li>
                                    <li><a href="stretched-link.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Stretched link</a></li>
                                    <li><a href="text-truncation.php" class="d-inline-flex align-items-center rounded">Text truncation</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/helpers/stretched-link.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Stretched link</h1>
                    </div>
                    <p class="bd-lead">Make any HTML element or Bootstrap component clickable by &ldquo;stretching&rdquo; a nested link via CSS.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>



                <div class="bd-content ps-lg-4">


                    <p>Add <code>.stretched-link</code> to a link to make its <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Containing_block">containing block</a> clickable via a <code>::after</code> pseudo element. In most cases, this means that an element with <code>position: relative;</code> that contains a link with the <code>.stretched-link</code> class is clickable. Please note given <a href="https://www.w3.org/TR/CSS21/visuren.html#propdef-position">how CSS <code>position</code> works</a>, <code>.stretched-link</code> cannot be mixed with most table elements.</p>
                    <p>Cards have <code>position: relative</code> by default in Bootstrap, so in this case you can safely add the <code>.stretched-link</code> class to a link in the card without any other HTML changes.</p>
                    <p>Multiple links and tap targets are not recommended with stretched links. However, some <code>position</code> and <code>z-index</code> styles can help should this be required.</p>
                    <div class="bd-example">
                        <div class="card" style="width: 18rem;">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Card image cap</title><rect width="100%" height="100%" fill="#868e96"/></svg>

                            <div class="card-body">
                                <h5 class="card-title">Card with stretched link</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 18rem;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-img-top&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-body&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-title&#34;</span><span class="p">&gt;</span>Card with stretched link<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-text&#34;</span><span class="p">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card&#39;s content.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary stretched-link&#34;</span><span class="p">&gt;</span>Go somewhere<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <p>Most custom components do not have <code>position: relative</code> by default, so we need to add the <code>.position-relative</code> here to prevent the link from stretching outside the parent element.</p>
                    <div class="bd-example">
                        <div class="d-flex position-relative">
                            <svg class="bd-placeholder-img flex-shrink-0 me-3" width="144" height="144" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Generic placeholder image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Generic placeholder image</title><rect width="100%" height="100%" fill="#868e96"/></svg>

                            <div>
                                <h5 class="mt-0">Custom component with stretched link</h5>
                                <p>This is some placeholder content for the custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                                <a href="#" class="stretched-link">Go somewhere</a>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;d-flex position-relative&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;flex-shrink-0 me-3&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mt-0&#34;</span><span class="p">&gt;</span>Custom component with stretched link<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>This is some placeholder content for the custom component. It is intended to mimic what some real-world content would look like, and we&#39;re using it here to give the component a bit of body and size.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;stretched-link&#34;</span><span class="p">&gt;</span>Go somewhere<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <div class="bd-example">
                        <div class="row g-0 bg-light position-relative">
                            <div class="col-md-6 mb-md-0 p-md-4">
                                <svg class="bd-placeholder-img w-100" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Generic placeholder image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Generic placeholder image</title><rect width="100%" height="100%" fill="#868e96"/></svg>

                            </div>
                            <div class="col-md-6 p-4 ps-md-0">
                                <h5 class="mt-0">Columns with stretched link</h5>
                                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                                <a href="#" class="stretched-link">Go somewhere</a>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-0 bg-light position-relative&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6 mb-md-0 p-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;w-100&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6 p-4 ps-md-0&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mt-0&#34;</span><span class="p">&gt;</span>Columns with stretched link<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we&#39;re using it here to give the component a bit of body and size.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;stretched-link&#34;</span><span class="p">&gt;</span>Go somewhere<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="identifying-the-containing-block">Identifying the containing block</h2>
                    <p>If the stretched link doesn&rsquo;t seem to work, the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Containing_block#Identifying_the_containing_block">containing block</a> will probably be the cause. The following CSS properties will make an element the containing block:</p>
                    <ul>
                        <li>A <code>position</code> value other than <code>static</code></li>
                        <li>A <code>transform</code> or <code>perspective</code> value other than <code>none</code></li>
                        <li>A <code>will-change</code> value of <code>transform</code> or <code>perspective</code></li>
                        <li>A <code>filter</code> value other than <code>none</code> or a <code>will-change</code> value of <code>filter</code> (only works on Firefox)</li>
                    </ul>
                    <div class="bd-example">
                        <div class="card" style="width: 18rem;">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Card image cap</title><rect width="100%" height="100%" fill="#868e96"/></svg>

                            <div class="card-body">
                                <h5 class="card-title">Card with stretched links</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text">
                                    <a href="#" class="stretched-link text-danger" style="position: relative;">Stretched link will not work here, because <code>position: relative</code> is added to the link</a>
                                </p>
                                <p class="card-text bg-light" style="transform: rotate(0);">
                                    This <a href="#" class="text-warning stretched-link">stretched link</a> will only be spread over the <code>p</code>-tag, because a transform is applied to it.
                                </p>
                            </div>
                        </div>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;width: 18rem;&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">img</span> <span class="na">src</span><span class="o">=</span><span class="s">&#34;...&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-img-top&#34;</span> <span class="na">alt</span><span class="o">=</span><span class="s">&#34;...&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-body&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">h5</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-title&#34;</span><span class="p">&gt;</span>Card with stretched links<span class="p">&lt;/</span><span class="nt">h5</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-text&#34;</span><span class="p">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card&#39;s content.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-text&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;stretched-link text-danger&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;position: relative;&#34;</span><span class="p">&gt;</span>Stretched link will not work here, because <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>position: relative<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span> is added to the link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;card-text bg-light&#34;</span> <span class="na">style</span><span class="o">=</span><span class="s">&#34;transform: rotate(0);&#34;</span><span class="p">&gt;</span>
      This <span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">&#34;#&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;text-warning stretched-link&#34;</span><span class="p">&gt;</span>stretched link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span> will only be spread over the <span class="p">&lt;</span><span class="nt">code</span><span class="p">&gt;</span>p<span class="p">&lt;/</span><span class="nt">code</span><span class="p">&gt;</span>-tag, because a transform is applied to it.
    <span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></code></pre></div>

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
