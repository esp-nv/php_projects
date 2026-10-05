
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Utilize our source Sass files to take advantage of variables, maps, mixins, and functions to help you build faster and customize your project.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Sass · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/customize/sass/">

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
                                    <li><a href="../getting-started/browsers-devices.php" class="d-inline-flex align-items-center rounded">Browsers &amp; devices</a></li>
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
                                    <li><a href="sass.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Sass</a></li>
                                    <li><a href="options.php" class="d-inline-flex align-items-center rounded">Options</a></li>
                                    <li><a href="color.php" class="d-inline-flex align-items-center rounded">Color</a></li>
                                    <li><a href="components.php" class="d-inline-flex align-items-center rounded">Components</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/customize/sass.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Sass</h1>
                    </div>
                    <p class="bd-lead">Utilize our source Sass files to take advantage of variables, maps, mixins, and functions to help you build faster and customize your project.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#file-structure">File structure</a></li>
                            <li><a href="#importing">Importing</a></li>
                            <li><a href="#variable-defaults">Variable defaults</a></li>
                            <li><a href="#maps-and-loops">Maps and loops</a>
                                <ul>
                                    <li><a href="#modify-map">Modify map</a></li>
                                    <li><a href="#add-to-map">Add to map</a></li>
                                    <li><a href="#remove-from-map">Remove from map</a></li>
                                </ul>
                            </li>
                            <li><a href="#required-keys">Required keys</a></li>
                            <li><a href="#functions">Functions</a>
                                <ul>
                                    <li><a href="#colors">Colors</a></li>
                                    <li><a href="#color-contrast">Color contrast</a></li>
                                    <li><a href="#escape-svg">Escape SVG</a></li>
                                    <li><a href="#add-and-subtract-functions">Add and Subtract functions</a></li>
                                </ul>
                            </li>
                            <li><a href="#mixins">Mixins</a>
                                <ul>
                                    <li><a href="#color-schemes">Color schemes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <p>Utilize our source Sass files to take advantage of variables, maps, mixins, and more.</p>
                    <h2 id="file-structure">File structure</h2>
                    <p>Whenever possible, avoid modifying Bootstrap&rsquo;s core files. For Sass, that means creating your own stylesheet that imports Bootstrap so you can modify and extend it. Assuming you&rsquo;re using a package manager like npm, you&rsquo;ll have a file structure that looks like this:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-text" data-lang="text">your-project/
├── scss
│   └── custom.scss
└── node_modules/
    └── bootstrap
        ├── js
        └── scss
</code></pre></div><p>If you&rsquo;ve downloaded our source files and aren&rsquo;t using a package manager, you&rsquo;ll want to manually setup something similar to that structure, keeping Bootstrap&rsquo;s source files separate from your own.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-text" data-lang="text">your-project/
├── scss
│   └── custom.scss
└── bootstrap/
    ├── js
    └── scss
</code></pre></div><h2 id="importing">Importing</h2>
                    <p>In your <code>custom.scss</code>, you&rsquo;ll import Bootstrap&rsquo;s source Sass files. You have two options: include all of Bootstrap, or pick the parts you need. We encourage the latter, though be aware there are some requirements and dependencies across our components. You also will need to include some JavaScript for our plugins.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Custom.scss
</span><span class="c1">// Option A: Include all of Bootstrap
</span><span class="c1"></span>
<span class="c1">// Include any default variable overrides here (though functions won&#39;t be available)
</span><span class="c1"></span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/bootstrap&#34;</span><span class="p">;</span>

<span class="c1">// Then add additional custom code here
</span></code></pre></div><div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Custom.scss
</span><span class="c1">// Option B: Include parts of Bootstrap
</span><span class="c1"></span>
<span class="c1">// 1. Include functions first (so you can manipulate colors, SVGs, calc, etc)
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/functions&#34;</span><span class="p">;</span>

<span class="c1">// 2. Include any default variable overrides here
</span><span class="c1"></span>
<span class="c1">// 3. Include remainder of required Bootstrap stylesheets
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/variables&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/mixins&#34;</span><span class="p">;</span>

<span class="c1">// 4. Include any optional Bootstrap components as you like
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/root&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/reboot&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/type&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/images&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/containers&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/grid&#34;</span><span class="p">;</span>

<span class="c1">// 5. Add additional custom code here
</span></code></pre></div><p>With that setup in place, you can begin to modify any of the Sass variables and maps in your <code>custom.scss</code>. You can also start to add parts of Bootstrap under the <code>// Optional</code> section as needed. We suggest using the full import stack from our <code>bootstrap.scss</code> file as your starting point.</p>
                    <h2 id="variable-defaults">Variable defaults</h2>
                    <p>Every Sass variable in Bootstrap includes the <code>!default</code> flag allowing you to override the variable&rsquo;s default value in your own Sass without modifying Bootstrap&rsquo;s source code. Copy and paste variables as needed, modify their values, and remove the <code>!default</code> flag. If a variable has already been assigned, then it won&rsquo;t be re-assigned by the default values in Bootstrap.</p>
                    <p>You will find the complete list of Bootstrap&rsquo;s variables in <code>scss/_variables.scss</code>. Some variables are set to <code>null</code>, these variables don&rsquo;t output the property unless they are overridden in your configuration.</p>
                    <p>Variable overrides must come after our functions are imported, but before the rest of the imports.</p>
                    <p>Here&rsquo;s an example that changes the <code>background-color</code> and <code>color</code> for the <code>&lt;body&gt;</code> when importing and compiling Bootstrap via npm:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Required
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/functions&#34;</span><span class="p">;</span>

<span class="c1">// Default variable overrides
</span><span class="c1"></span><span class="nv">$body-bg</span><span class="o">:</span> <span class="mh">#000</span><span class="p">;</span>
<span class="nv">$body-color</span><span class="o">:</span> <span class="mh">#111</span><span class="p">;</span>

<span class="c1">// Required
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/variables&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/mixins&#34;</span><span class="p">;</span>

<span class="c1">// Optional Bootstrap components here
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/root&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/reboot&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/type&#34;</span><span class="p">;</span>
<span class="c1">// etc
</span></code></pre></div><p>Repeat as necessary for any variable in Bootstrap, including the global options below.</p>
                    <div class="bd-callout bd-callout-info">
                        <strong>Get started with Bootstrap via npm with our starter project!</strong> Head to the <a href="https://github.com/twbs/bootstrap-npm-starter">twbs/bootstrap-npm-starter</a> template repository to see how to build and customize Bootstrap in your own npm project. Includes Sass compiler, Autoprefixer, Stylelint, PurgeCSS, and Bootstrap Icons.
                    </div>

                    <h2 id="maps-and-loops">Maps and loops</h2>
                    <p>Bootstrap includes a handful of Sass maps, key value pairs that make it easier to generate families of related CSS. We use Sass maps for our colors, grid breakpoints, and more. Just like Sass variables, all Sass maps include the <code>!default</code> flag and can be overridden and extended.</p>
                    <p>Some of our Sass maps are merged into empty ones by default. This is done to allow easy expansion of a given Sass map, but comes at the cost of making <em>removing</em> items from a map slightly more difficult.</p>
                    <h3 id="modify-map">Modify map</h3>
                    <p>All variables in the <code>$theme-colors</code> map are defined as standalone variables. To modify an existing color in our <code>$theme-colors</code> map, add the following to your custom Sass file:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$primary</span><span class="o">:</span> <span class="mh">#0074d9</span><span class="p">;</span>
<span class="nv">$danger</span><span class="o">:</span> <span class="mh">#ff4136</span><span class="p">;</span>
</code></pre></div><p>Later on, these variables are set in Bootstrap&rsquo;s <code>$theme-colors</code> map:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$theme-colors</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;primary&#34;</span><span class="o">:</span> <span class="nv">$primary</span><span class="o">,</span>
  <span class="s2">&#34;danger&#34;</span><span class="o">:</span> <span class="nv">$danger</span>
<span class="p">);</span>
</code></pre></div><h3 id="add-to-map">Add to map</h3>
                    <p>Add new colors to <code>$theme-colors</code>, or any other map, by creating a new Sass map with your custom values and merging it with the original map. In this case, we&rsquo;ll create a new <code>$custom-colors</code> map and merge it with <code>$theme-colors</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Create your own map
</span><span class="c1"></span><span class="nv">$custom-colors</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;custom-color&#34;</span><span class="o">:</span> <span class="mh">#900</span>
<span class="p">);</span>

<span class="c1">// Merge the maps
</span><span class="c1"></span><span class="nv">$theme-colors</span><span class="o">:</span> <span class="nf">map-merge</span><span class="p">(</span><span class="nv">$theme-colors</span><span class="o">,</span> <span class="nv">$custom-colors</span><span class="p">);</span>
</code></pre></div><h3 id="remove-from-map">Remove from map</h3>
                    <p>To remove colors from <code>$theme-colors</code>, or any other map, use <code>map-remove</code>. Be aware you must insert it between our requirements and options:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Required
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/functions&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/variables&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/mixins&#34;</span><span class="p">;</span>

<span class="nv">$theme-colors</span><span class="o">:</span> <span class="nf">map-remove</span><span class="p">(</span><span class="nv">$theme-colors</span><span class="o">,</span> <span class="s2">&#34;info&#34;</span><span class="o">,</span> <span class="s2">&#34;light&#34;</span><span class="o">,</span> <span class="s2">&#34;dark&#34;</span><span class="p">);</span>

<span class="c1">// Optional
</span><span class="c1"></span><span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/root&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/reboot&#34;</span><span class="p">;</span>
<span class="k">@import</span> <span class="s2">&#34;../node_modules/bootstrap/scss/type&#34;</span><span class="p">;</span>
<span class="c1">// etc
</span></code></pre></div><h2 id="required-keys">Required keys</h2>
                    <p>Bootstrap assumes the presence of some specific keys within Sass maps as we used and extend these ourselves. As you customize the included maps, you may encounter errors where a specific Sass map&rsquo;s key is being used.</p>
                    <p>For example, we use the <code>primary</code>, <code>success</code>, and <code>danger</code> keys from <code>$theme-colors</code> for links, buttons, and form states. Replacing the values of these keys should present no issues, but removing them may cause Sass compilation issues. In these instances, you&rsquo;ll need to modify the Sass code that makes use of those values.</p>
                    <h2 id="functions">Functions</h2>
                    <h3 id="colors">Colors</h3>
                    <p>Next to the <a href="/docs/5.0/customize/color/#color-sass-maps">Sass maps</a> we have, theme colors can also be used as standalone variables, like <code>$primary</code>.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nv">$gray-100</span><span class="p">;</span>
  <span class="na">background-color</span><span class="o">:</span> <span class="nv">$dark</span><span class="p">;</span>
<span class="p">}</span>
</code></pre></div><p>You can lighten or darken colors with Bootstrap&rsquo;s <code>tint-color()</code> and <code>shade-color()</code> functions. These functions will mix colors with black or white, unlike Sass' native <code>lighten()</code> and <code>darken()</code> functions which will change the lightness by a fixed amount, which often doesn&rsquo;t lead to the desired effect.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="c1">// Tint a color: mix a color with white
</span><span class="c1"></span><span class="k">@function</span><span class="nf"> tint-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">mix</span><span class="p">(</span><span class="ni">white</span><span class="o">,</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">);</span>
<span class="p">}</span>

<span class="c1">// Shade a color: mix a color with black
</span><span class="c1"></span><span class="k">@function</span><span class="nf"> shade-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">mix</span><span class="p">(</span><span class="no">black</span><span class="o">,</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">);</span>
<span class="p">}</span>

<span class="c1">// Shade the color if the weight is positive, else tint it
</span><span class="c1"></span><span class="k">@function</span><span class="nf"> shift-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@return</span> <span class="nf">if</span><span class="p">(</span><span class="nv">$weight</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="o">,</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$weight</span><span class="p">)</span><span class="o">,</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="o">-</span><span class="nv">$weight</span><span class="p">));</span>
<span class="p">}</span>
</code></pre></div>
                    <p>In practice, you&rsquo;d call the function and pass in the color and weight parameters.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nf">tint-color</span><span class="p">(</span><span class="nv">$primary</span><span class="o">,</span> <span class="mi">10</span><span class="kt">%</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.custom-element-2</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nf">shade-color</span><span class="p">(</span><span class="nv">$danger</span><span class="o">,</span> <span class="mi">30</span><span class="kt">%</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div><h3 id="color-contrast">Color contrast</h3>
                    <p>In order to meet <a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html">WCAG 2.0 accessibility standards for color contrast</a>, authors <strong>must</strong> provide <a href="https://www.w3.org/WAI/WCAG20/quickref/20160105/Overview.php#visual-audio-contrast-contrast">a contrast ratio of at least 4.5:1</a>, with very few exceptions.</p>
                    <p>An additional function we include in Bootstrap is the color contrast function, <code>color-contrast</code>. It utilizes the <a href="https://www.w3.org/TR/WCAG20-TECHS/G17.html#G17-tests">WCAG 2.0 algorithm</a> for calculating contrast thresholds based on <a href="https://www.w3.org/WAI/GL/wiki/Relative_luminance">relative luminance</a> in a <code>sRGB</code> colorspace to automatically return a light (<code>#fff</code>), dark (<code>#212529</code>) or black (<code>#000</code>) contrast color based on the specified base color. This function is especially useful for mixins or loops where you&rsquo;re generating multiple classes.</p>
                    <p>For example, to generate color swatches from our <code>$theme-colors</code> map:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@each</span> <span class="nv">$color</span><span class="o">,</span> <span class="nv">$value</span> <span class="ow">in</span> <span class="nv">$theme-colors</span> <span class="p">{</span>
  <span class="nc">.swatch-</span><span class="si">#{</span><span class="nv">$color</span><span class="si">}</span> <span class="p">{</span>
    <span class="na">color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$value</span><span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div><p>It can also be used for one-off contrast needs:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="mh">#000</span><span class="p">);</span> <span class="c1">// returns `color: #fff`
</span><span class="c1"></span><span class="p">}</span>
</code></pre></div><p>You can also specify a base color with our color map functions:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="na">color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$dark</span><span class="p">);</span> <span class="c1">// returns `color: #fff`
</span><span class="c1"></span><span class="p">}</span>
</code></pre></div><h3 id="escape-svg">Escape SVG</h3>
                    <p>We use the <code>escape-svg</code> function to escape the <code>&lt;</code>, <code>&gt;</code> and <code>#</code> characters for SVG background images. When using the <code>escape-svg</code> function, data URIs must be quoted.</p>
                    <h3 id="add-and-subtract-functions">Add and Subtract functions</h3>
                    <p>We use the <code>add</code> and <code>subtract</code> functions to wrap the CSS <code>calc</code> function. The primary purpose of these functions is to avoid errors when a &ldquo;unitless&rdquo; <code>0</code> value is passed into a <code>calc</code> expression. Expressions like <code>calc(10px - 0)</code> will return an error in all browsers, despite being mathematically correct.</p>
                    <p>Example where the calc is valid:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$border-radius</span><span class="o">:</span> <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$border-width</span><span class="o">:</span> <span class="mi">1</span><span class="kt">px</span><span class="p">;</span>

<span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Output calc(.25rem - 1px) is valid
</span><span class="c1"></span>  <span class="na">border-radius</span><span class="o">:</span> <span class="nf">calc</span><span class="p">(</span><span class="nv">$border-radius</span> <span class="o">-</span> <span class="nv">$border-width</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Output the same calc(.25rem - 1px) as above
</span><span class="c1"></span>  <span class="na">border-radius</span><span class="o">:</span> <span class="nf">subtract</span><span class="p">(</span><span class="nv">$border-radius</span><span class="o">,</span> <span class="nv">$border-width</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div><p>Example where the calc is invalid:</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$border-radius</span><span class="o">:</span> <span class="mf">.25</span><span class="kt">rem</span><span class="p">;</span>
<span class="nv">$border-width</span><span class="o">:</span> <span class="mi">0</span><span class="p">;</span>

<span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Output calc(.25rem - 0) is invalid
</span><span class="c1"></span>  <span class="na">border-radius</span><span class="o">:</span> <span class="nf">calc</span><span class="p">(</span><span class="nv">$border-radius</span> <span class="o">-</span> <span class="nv">$border-width</span><span class="p">);</span>
<span class="p">}</span>

<span class="nc">.element</span> <span class="p">{</span>
  <span class="c1">// Output .25rem
</span><span class="c1"></span>  <span class="na">border-radius</span><span class="o">:</span> <span class="nf">subtract</span><span class="p">(</span><span class="nv">$border-radius</span><span class="o">,</span> <span class="nv">$border-width</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div><h2 id="mixins">Mixins</h2>
                    <p>Our <code>scss/mixins/</code> directory has a ton of mixins that power parts of Bootstrap and can also be used across your own project.</p>
                    <h3 id="color-schemes">Color schemes</h3>
                    <p>A shorthand mixin for the <code>prefers-color-scheme</code> media query is available with support for <code>light</code>, <code>dark</code>, and custom color schemes.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> color-scheme</span><span class="p">(</span><span class="nv">$name</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@media</span> <span class="p">(</span><span class="n">prefers-color-scheme</span><span class="o">:</span> <span class="si">#{</span><span class="nv">$name</span><span class="si">}</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">@content</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nc">.custom-element</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> color-scheme</span><span class="p">(</span><span class="ni">dark</span><span class="p">)</span> <span class="p">{</span>
    <span class="c1">// Insert dark mode styles here
</span><span class="c1"></span>  <span class="p">}</span>

  <span class="k">@include</span><span class="nd"> color-scheme</span><span class="p">(</span><span class="n">custom-named-scheme</span><span class="p">)</span> <span class="p">{</span>
    <span class="c1">// Insert custom color scheme styles here
</span><span class="c1"></span>  <span class="p">}</span>
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
