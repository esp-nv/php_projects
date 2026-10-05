
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Provide valuable, actionable feedback to your users with HTML5 form validation, via browser default behaviors or custom styles and JavaScript.">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">

        <meta name="docsearch:language" content="en">
        <meta name="docsearch:version" content="5.0">

        <title>Validation · Bootstrap v5.0</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/forms/validation/">

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
                                    <li><a href="layout.php" class="d-inline-flex align-items-center rounded">Layout</a></li>
                                    <li><a href="validation.php" class="d-inline-flex align-items-center rounded active" aria-current="page">Validation</a></li>
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
                        <a class="btn btn-sm btn-bd-light mb-2 mb-md-0" href="https://github.com/twbs/bootstrap/blob/v5.0.2/site/content/docs/5.0/forms/validation.md" title="View and edit this file on GitHub" target="_blank" rel="noopener">View on GitHub</a>
                        <h1 class="bd-title" id="content">Validation</h1>
                    </div>
                    <p class="bd-lead">Provide valuable, actionable feedback to your users with HTML5 form validation, via browser default behaviors or custom styles and JavaScript.</p>
                    <script async src="https://cdn.carbonads.com/carbon.js?serve=CKYIKKJL&placement=getbootstrapcom" id="_carbonads_js"></script>

                </div>


                <div class="bd-toc mt-4 mb-5 my-md-0 ps-xl-3 mb-lg-5 text-muted">
                    <strong class="d-block h6 my-2 pb-2 border-bottom">On this page</strong>
                    <nav id="TableOfContents">
                        <ul>
                            <li><a href="#how-it-works">How it works</a></li>
                            <li><a href="#custom-styles">Custom styles</a></li>
                            <li><a href="#browser-defaults">Browser defaults</a></li>
                            <li><a href="#server-side">Server side</a></li>
                            <li><a href="#supported-elements">Supported elements</a></li>
                            <li><a href="#tooltips">Tooltips</a></li>
                            <li><a href="#sass">Sass</a>
                                <ul>
                                    <li><a href="#variables">Variables</a></li>
                                    <li><a href="#mixins">Mixins</a></li>
                                    <li><a href="#map">Map</a></li>
                                    <li><a href="#loop">Loop</a></li>
                                    <li><a href="#customizing">Customizing</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="bd-content ps-lg-4">


                    <div class="bd-callout bd-callout-warning">
                        We are aware that currently the client-side custom validation styles and tooltips are not accessible, since they are not exposed to assistive technologies. While we work on a solution, we&rsquo;d recommend either using the server-side option or the default browser validation method.
                    </div>

                    <h2 id="how-it-works">How it works</h2>
                    <p>Here&rsquo;s how form validation works with Bootstrap:</p>
                    <ul>
                        <li>HTML form validation is applied via CSS&rsquo;s two pseudo-classes, <code>:invalid</code> and <code>:valid</code>. It applies to <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code>, and <code>&lt;textarea&gt;</code> elements.</li>
                        <li>Bootstrap scopes the <code>:invalid</code> and <code>:valid</code> styles to parent <code>.was-validated</code> class, usually applied to the <code>&lt;form&gt;</code>. Otherwise, any required field without a value shows up as invalid on page load. This way, you may choose when to activate them (typically after form submission is attempted).</li>
                        <li>To reset the appearance of the form (for instance, in the case of dynamic form submissions using AJAX), remove the <code>.was-validated</code> class from the <code>&lt;form&gt;</code> again after submission.</li>
                        <li>As a fallback, <code>.is-invalid</code> and <code>.is-valid</code> classes may be used instead of the pseudo-classes for <a href="#server-side">server-side validation</a>. They do not require a <code>.was-validated</code> parent class.</li>
                        <li>Due to constraints in how CSS works, we cannot (at present) apply styles to a <code>&lt;label&gt;</code> that comes before a form control in the DOM without the help of custom JavaScript.</li>
                        <li>All modern browsers support the <a href="https://html.spec.whatwg.org/multipage/form-control-infrastructure.html#the-constraint-validation-api">constraint validation API</a>, a series of JavaScript methods for validating form controls.</li>
                        <li>Feedback messages may utilize the <a href="#browser-defaults">browser defaults</a> (different for each browser, and unstylable via CSS) or our custom feedback styles with additional HTML and CSS.</li>
                        <li>You may provide custom validity messages with <code>setCustomValidity</code> in JavaScript.</li>
                    </ul>
                    <p>With that in mind, consider the following demos for our custom form validation styles, optional server-side classes, and browser defaults.</p>
                    <h2 id="custom-styles">Custom styles</h2>
                    <p>For custom Bootstrap form validation messages, you&rsquo;ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you. When attempting to submit, you&rsquo;ll see the <code>:invalid</code> and <code>:valid</code> styles applied to your form controls.</p>
                    <p>Custom feedback styles apply custom colors, borders, focus styles, and background icons to better communicate feedback. Background icons for <code>&lt;select&gt;</code>s are only available with <code>.form-select</code>, and not <code>.form-control</code>.</p>
                    <div class="bd-example">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3 needs-validation&#34;</span> <span class="na">novalidate</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustom01&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>First name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustom01&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Mark&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-feedback&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustom02&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Last name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustom02&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Otto&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-feedback&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustomUsername&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group has-validation&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustomUsername&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
        Please choose a username.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustom03&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>City<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustom03&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please provide a valid city.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustom04&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>State<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustom04&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span> <span class="na">disabled</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please select a valid state.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationCustom05&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Zip<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationCustom05&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please provide a valid zip.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;invalidCheck&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;invalidCheck&#34;</span><span class="p">&gt;</span>
        Agree to terms and conditions
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
        You must agree before submitting.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span><span class="p">&gt;</span>Submit form<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <div class="highlight"><pre class="chroma"><code class="language-js" data-lang="js"><span class="c1">// Example starter JavaScript for disabling form submissions if there are invalid fields
</span><span class="c1"></span><span class="p">(</span><span class="kd">function</span> <span class="p">()</span> <span class="p">{</span>
  <span class="s1">&#39;use strict&#39;</span>

  <span class="c1">// Fetch all the forms we want to apply custom Bootstrap validation styles to
</span><span class="c1"></span>  <span class="kd">var</span> <span class="nx">forms</span> <span class="o">=</span> <span class="nb">document</span><span class="p">.</span><span class="nx">querySelectorAll</span><span class="p">(</span><span class="s1">&#39;.needs-validation&#39;</span><span class="p">)</span>

  <span class="c1">// Loop over them and prevent submission
</span><span class="c1"></span>  <span class="nb">Array</span><span class="p">.</span><span class="nx">prototype</span><span class="p">.</span><span class="nx">slice</span><span class="p">.</span><span class="nx">call</span><span class="p">(</span><span class="nx">forms</span><span class="p">)</span>
    <span class="p">.</span><span class="nx">forEach</span><span class="p">(</span><span class="kd">function</span> <span class="p">(</span><span class="nx">form</span><span class="p">)</span> <span class="p">{</span>
      <span class="nx">form</span><span class="p">.</span><span class="nx">addEventListener</span><span class="p">(</span><span class="s1">&#39;submit&#39;</span><span class="p">,</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">event</span><span class="p">)</span> <span class="p">{</span>
        <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">form</span><span class="p">.</span><span class="nx">checkValidity</span><span class="p">())</span> <span class="p">{</span>
          <span class="nx">event</span><span class="p">.</span><span class="nx">preventDefault</span><span class="p">()</span>
          <span class="nx">event</span><span class="p">.</span><span class="nx">stopPropagation</span><span class="p">()</span>
        <span class="p">}</span>

        <span class="nx">form</span><span class="p">.</span><span class="nx">classList</span><span class="p">.</span><span class="nx">add</span><span class="p">(</span><span class="s1">&#39;was-validated&#39;</span><span class="p">)</span>
      <span class="p">},</span> <span class="kc">false</span><span class="p">)</span>
    <span class="p">})</span>
<span class="p">})()</span></code></pre></div>
                    <h2 id="browser-defaults">Browser defaults</h2>
                    <p>Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you&rsquo;ll see a slightly different style of feedback.</p>
                    <p>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p>
                    <div class="bd-example">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefaultUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault04" class="form-label">State</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefault01&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>First name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefault01&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Mark&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefault02&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Last name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefault02&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Otto&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefaultUsername&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend2&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefaultUsername&#34;</span>  <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend2&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefault03&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>City<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefault03&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefault04&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>State<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefault04&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span> <span class="na">disabled</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationDefault05&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Zip<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationDefault05&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;invalidCheck2&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;invalidCheck2&#34;</span><span class="p">&gt;</span>
        Agree to terms and conditions
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span><span class="p">&gt;</span>Submit form<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="server-side">Server side</h2>
                    <p>We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported with these classes.</p>
                    <p>For invalid fields, ensure that the invalid feedback/error message is associated with the relevant form field using <code>aria-describedby</code> (noting that this attribute allows more than one <code>id</code> to be referenced, in case the field already points to additional form text).</p>
                    <p>To fix <a href="https://github.com/twbs/bootstrap/issues/25110">issues with border radii</a>, input groups require an additional <code>.has-validation</code> class.</p>
                    <div class="bd-example">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationServer01" class="form-label">First name</label>
                                <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServer02" class="form-label">Last name</label>
                                <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationServerUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                    <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationServer03" class="form-label">City</label>
                                <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationServer04" class="form-label">State</label>
                                <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationServer05" class="form-label">Zip</label>
                                <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                                <div id="validationServer05Feedback" class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                                    <label class="form-check-label" for="invalidCheck3">
                                        Agree to terms and conditions
                                    </label>
                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServer01&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>First name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-valid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer01&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Mark&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-feedback&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServer02&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Last name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-valid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer02&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Otto&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-feedback&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServerUsername&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group has-validation&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend3&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-invalid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServerUsername&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;inputGroupPrepend3 validationServerUsernameFeedback&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServerUsernameFeedback&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
        Please choose a username.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServer03&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>City<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-invalid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer03&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;validationServer03Feedback&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer03Feedback&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please provide a valid city.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServer04&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>State<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select is-invalid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer04&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;validationServer04Feedback&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span> <span class="na">disabled</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer04Feedback&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please select a valid state.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationServer05&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Zip<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-invalid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer05&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;validationServer05Feedback&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationServer05Feedback&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please provide a valid zip.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input is-invalid&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;invalidCheck3&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;invalidCheck3Feedback&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;invalidCheck3&#34;</span><span class="p">&gt;</span>
        Agree to terms and conditions
      <span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;invalidCheck3Feedback&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
        You must agree before submitting.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span><span class="p">&gt;</span>Submit form<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="supported-elements">Supported elements</h2>
                    <p>Validation styles are available for the following form controls and components:</p>
                    <ul>
                        <li><code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s with <code>.form-control</code> (including up to one <code>.form-control</code> in input groups)</li>
                        <li><code>&lt;select&gt;</code>s with <code>.form-select</code></li>
                        <li><code>.form-check</code>s</li>
                    </ul>
                    <div class="bd-example">
                        <form class="was-validated">
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Textarea</label>
                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                            </div>
                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                                <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div>

                            <div class="mb-3">
                                <input type="file" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" disabled>Submit form</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;was-validated&#34;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTextarea&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Textarea<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">textarea</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control is-invalid&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTextarea&#34;</span> <span class="na">placeholder</span><span class="o">=</span><span class="s">&#34;Required example textarea&#34;</span> <span class="na">required</span><span class="p">&gt;&lt;/</span><span class="nt">textarea</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>
      Please enter a message in the textarea.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;checkbox&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationFormCheck1&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationFormCheck1&#34;</span><span class="p">&gt;</span>Check this checkbox<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>Example invalid feedback text<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationFormCheck2&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;radio-stacked&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationFormCheck2&#34;</span><span class="p">&gt;</span>Toggle this radio<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;radio&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-input&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationFormCheck3&#34;</span> <span class="na">name</span><span class="o">=</span><span class="s">&#34;radio-stacked&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-check-label&#34;</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationFormCheck3&#34;</span><span class="p">&gt;</span>Or toggle this other radio<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>More example invalid feedback text<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">required</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;select example&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span><span class="p">&gt;</span>Open this select menu<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;1&#34;</span><span class="p">&gt;</span>One<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;2&#34;</span><span class="p">&gt;</span>Two<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;3&#34;</span><span class="p">&gt;</span>Three<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>Example invalid select feedback<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;file&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">aria-label</span><span class="o">=</span><span class="s">&#34;file example&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-feedback&#34;</span><span class="p">&gt;</span>Example invalid form file feedback<span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>

  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;mb-3&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span> <span class="na">disabled</span><span class="p">&gt;</span>Submit form<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="tooltips">Tooltips</h2>
                    <p>If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip. Be sure to have a parent with <code>position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may require an alternative setup.</p>
                    <div class="bd-example">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltip02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 position-relative">
                                <label for="validationTooltipUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    <input type="text" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="validationTooltip03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label for="validationTooltip04" class="form-label">State</label>
                                <select class="form-select" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label for="validationTooltip05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationTooltip05" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div><div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">form</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;row g-3 needs-validation&#34;</span> <span class="na">novalidate</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltip01&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>First name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltip01&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Mark&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-tooltip&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltip02&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Last name<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltip02&#34;</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;Otto&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;valid-tooltip&#34;</span><span class="p">&gt;</span>
      Looks good!
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-4 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltipUsername&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Username<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group has-validation&#34;</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">span</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;input-group-text&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltipUsernamePrepend&#34;</span><span class="p">&gt;</span>@<span class="p">&lt;/</span><span class="nt">span</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltipUsername&#34;</span> <span class="na">aria-describedby</span><span class="o">=</span><span class="s">&#34;validationTooltipUsernamePrepend&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-tooltip&#34;</span><span class="p">&gt;</span>
        Please choose a unique and valid username.
      <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-6 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltip03&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>City<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltip03&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-tooltip&#34;</span><span class="p">&gt;</span>
      Please provide a valid city.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltip04&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>State<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">select</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-select&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltip04&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span> <span class="na">selected</span> <span class="na">disabled</span> <span class="na">value</span><span class="o">=</span><span class="s">&#34;&#34;</span><span class="p">&gt;</span>Choose...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
      <span class="p">&lt;</span><span class="nt">option</span><span class="p">&gt;</span>...<span class="p">&lt;/</span><span class="nt">option</span><span class="p">&gt;</span>
    <span class="p">&lt;/</span><span class="nt">select</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-tooltip&#34;</span><span class="p">&gt;</span>
      Please select a valid state.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-md-3 position-relative&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">label</span> <span class="na">for</span><span class="o">=</span><span class="s">&#34;validationTooltip05&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-label&#34;</span><span class="p">&gt;</span>Zip<span class="p">&lt;/</span><span class="nt">label</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">input</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;text&#34;</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;form-control&#34;</span> <span class="na">id</span><span class="o">=</span><span class="s">&#34;validationTooltip05&#34;</span> <span class="na">required</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;invalid-tooltip&#34;</span><span class="p">&gt;</span>
      Please provide a valid zip.
    <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;col-12&#34;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">&#34;btn btn-primary&#34;</span> <span class="na">type</span><span class="o">=</span><span class="s">&#34;submit&#34;</span><span class="p">&gt;</span>Submit form<span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">form</span><span class="p">&gt;</span></code></pre></div>
                    <h2 id="sass">Sass</h2>
                    <h3 id="variables">Variables</h3>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$form-feedback-margin-top</span><span class="o">:</span>          <span class="nv">$form-text-margin-top</span><span class="p">;</span>
<span class="nv">$form-feedback-font-size</span><span class="o">:</span>           <span class="nv">$form-text-font-size</span><span class="p">;</span>
<span class="nv">$form-feedback-font-style</span><span class="o">:</span>          <span class="nv">$form-text-font-style</span><span class="p">;</span>
<span class="nv">$form-feedback-valid-color</span><span class="o">:</span>         <span class="nv">$success</span><span class="p">;</span>
<span class="nv">$form-feedback-invalid-color</span><span class="o">:</span>       <span class="nv">$danger</span><span class="p">;</span>

<span class="nv">$form-feedback-icon-valid-color</span><span class="o">:</span>    <span class="nv">$form-feedback-valid-color</span><span class="p">;</span>
<span class="nv">$form-feedback-icon-valid</span><span class="o">:</span>          <span class="sx">url(&#34;data:image/svg+xml,&lt;svg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 8 8&#39;&gt;&lt;path fill=&#39;</span><span class="si">#{</span><span class="nv">$form-feedback-icon-valid-color</span><span class="si">}</span><span class="sx">&#39; d=&#39;M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z&#39;/&gt;&lt;/svg&gt;&#34;)</span><span class="p">;</span>
<span class="nv">$form-feedback-icon-invalid-color</span><span class="o">:</span>  <span class="nv">$form-feedback-invalid-color</span><span class="p">;</span>
<span class="nv">$form-feedback-icon-invalid</span><span class="o">:</span>        <span class="sx">url(&#34;data:image/svg+xml,&lt;svg xmlns=&#39;http://www.w3.org/2000/svg&#39; viewBox=&#39;0 0 12 12&#39; width=&#39;12&#39; height=&#39;12&#39; fill=&#39;none&#39; stroke=&#39;</span><span class="si">#{</span><span class="nv">$form-feedback-icon-invalid-color</span><span class="si">}</span><span class="sx">&#39;&gt;&lt;circle cx=&#39;6&#39; cy=&#39;6&#39; r=&#39;4.5&#39;/&gt;&lt;path stroke-linejoin=&#39;round&#39; d=&#39;M5.8 3.6h.4L6 6.5z&#39;/&gt;&lt;circle cx=&#39;6&#39; cy=&#39;8.2&#39; r=&#39;.6&#39; fill=&#39;</span><span class="si">#{</span><span class="nv">$form-feedback-icon-invalid-color</span><span class="si">}</span><span class="sx">&#39; stroke=&#39;none&#39;/&gt;&lt;/svg&gt;&#34;)</span><span class="p">;</span>
</code></pre></div>
                    <h3 id="mixins">Mixins</h3>
                    <p>Two mixins are combined together, through our <a href="#loop">loop</a>, to generate our form validation feedback styles.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@mixin</span><span class="nf"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">@if</span> <span class="p">(</span><span class="nv">$state</span> <span class="o">==</span> <span class="s2">&#34;valid&#34;</span> <span class="ow">or</span> <span class="nv">$state</span> <span class="o">==</span> <span class="s2">&#34;invalid&#34;</span><span class="p">)</span> <span class="p">{</span>
    <span class="nc">.was-validated</span> <span class="si">#{</span><span class="nf">if</span><span class="p">(</span><span class="o">&amp;,</span> <span class="s2">&#34;&amp;&#34;</span><span class="o">,</span> <span class="s2">&#34;&#34;</span><span class="p">)</span><span class="si">}</span><span class="nd">:</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="o">,</span>
    <span class="si">#{</span><span class="nf">if</span><span class="p">(</span><span class="o">&amp;,</span> <span class="s2">&#34;&amp;&#34;</span><span class="o">,</span> <span class="s2">&#34;&#34;</span><span class="p">)</span><span class="si">}</span><span class="nc">.is-</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span> <span class="p">{</span>
      <span class="k">@content</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span> <span class="k">@else</span> <span class="p">{</span>
    <span class="si">#{</span><span class="nf">if</span><span class="p">(</span><span class="o">&amp;,</span> <span class="s2">&#34;&amp;&#34;</span><span class="o">,</span> <span class="s2">&#34;&#34;</span><span class="p">)</span><span class="si">}</span><span class="nc">.is-</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span> <span class="p">{</span>
      <span class="k">@content</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>

<span class="k">@mixin</span><span class="nf"> form-validation-state</span><span class="p">(</span>
  <span class="nv">$state</span><span class="o">,</span>
  <span class="nv">$color</span><span class="o">,</span>
  <span class="nv">$icon</span><span class="o">,</span>
  <span class="nv">$tooltip-color</span><span class="o">:</span> <span class="nf">color-contrast</span><span class="p">(</span><span class="nv">$color</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$tooltip-bg-color</span><span class="o">:</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$form-feedback-tooltip-opacity</span><span class="p">)</span><span class="o">,</span>
  <span class="nv">$focus-box-shadow</span><span class="o">:</span> <span class="mi">0</span> <span class="mi">0</span> <span class="nv">$input-btn-focus-blur</span> <span class="nv">$input-focus-width</span> <span class="nf">rgba</span><span class="p">(</span><span class="nv">$color</span><span class="o">,</span> <span class="nv">$input-btn-focus-color-opacity</span><span class="p">)</span>
<span class="p">)</span> <span class="p">{</span>
  <span class="nc">.</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="nc">-feedback</span> <span class="p">{</span>
    <span class="na">display</span><span class="o">:</span> <span class="ni">none</span><span class="p">;</span>
    <span class="na">width</span><span class="o">:</span> <span class="mi">100</span><span class="kt">%</span><span class="p">;</span>
    <span class="na">margin-top</span><span class="o">:</span> <span class="nv">$form-feedback-margin-top</span><span class="p">;</span>
    <span class="k">@include</span><span class="nd"> font-size</span><span class="p">(</span><span class="nv">$form-feedback-font-size</span><span class="p">);</span>
    <span class="na">font-style</span><span class="o">:</span> <span class="nv">$form-feedback-font-style</span><span class="p">;</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="nc">.</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="nc">-tooltip</span> <span class="p">{</span>
    <span class="na">position</span><span class="o">:</span> <span class="ni">absolute</span><span class="p">;</span>
    <span class="na">top</span><span class="o">:</span> <span class="mi">100</span><span class="kt">%</span><span class="p">;</span>
    <span class="na">z-index</span><span class="o">:</span> <span class="mi">5</span><span class="p">;</span>
    <span class="na">display</span><span class="o">:</span> <span class="ni">none</span><span class="p">;</span>
    <span class="na">max-width</span><span class="o">:</span> <span class="mi">100</span><span class="kt">%</span><span class="p">;</span> <span class="c1">// Contain to parent when possible
</span><span class="c1"></span>    <span class="na">padding</span><span class="o">:</span> <span class="nv">$form-feedback-tooltip-padding-y</span> <span class="nv">$form-feedback-tooltip-padding-x</span><span class="p">;</span>
    <span class="na">margin-top</span><span class="o">:</span> <span class="mf">.1</span><span class="kt">rem</span><span class="p">;</span>
    <span class="k">@include</span><span class="nd"> font-size</span><span class="p">(</span><span class="nv">$form-feedback-tooltip-font-size</span><span class="p">);</span>
    <span class="na">line-height</span><span class="o">:</span> <span class="nv">$form-feedback-tooltip-line-height</span><span class="p">;</span>
    <span class="na">color</span><span class="o">:</span> <span class="nv">$tooltip-color</span><span class="p">;</span>
    <span class="na">background-color</span><span class="o">:</span> <span class="nv">$tooltip-bg-color</span><span class="p">;</span>
    <span class="k">@include</span><span class="nd"> border-radius</span><span class="p">(</span><span class="nv">$form-feedback-tooltip-border-radius</span><span class="p">);</span>
  <span class="p">}</span>

  <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
    <span class="o">~</span> <span class="nc">.</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="nc">-feedback</span><span class="o">,</span>
    <span class="o">~</span> <span class="nc">.</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="nc">-tooltip</span> <span class="p">{</span>
      <span class="na">display</span><span class="o">:</span> <span class="ni">block</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="nc">.form-control</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
      <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>

      <span class="k">@if</span> <span class="nv">$enable-validation-icons</span> <span class="p">{</span>
        <span class="na">padding-right</span><span class="o">:</span> <span class="nv">$input-height-inner</span><span class="p">;</span>
        <span class="na">background-image</span><span class="o">:</span> <span class="nf">escape-svg</span><span class="p">(</span><span class="nv">$icon</span><span class="p">);</span>
        <span class="na">background-repeat</span><span class="o">:</span> <span class="ni">no-repeat</span><span class="p">;</span>
        <span class="na">background-position</span><span class="o">:</span> <span class="ni">right</span> <span class="nv">$input-height-inner-quarter</span> <span class="ni">center</span><span class="p">;</span>
        <span class="na">background-size</span><span class="o">:</span> <span class="nv">$input-height-inner-half</span> <span class="nv">$input-height-inner-half</span><span class="p">;</span>
      <span class="p">}</span>

      <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
        <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
        <span class="na">box-shadow</span><span class="o">:</span> <span class="nv">$focus-box-shadow</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="c1">// stylelint-disable-next-line selector-no-qualifying-type
</span><span class="c1"></span>  <span class="nt">textarea</span><span class="nc">.form-control</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">@if</span> <span class="nv">$enable-validation-icons</span> <span class="p">{</span>
        <span class="na">padding-right</span><span class="o">:</span> <span class="nv">$input-height-inner</span><span class="p">;</span>
        <span class="na">background-position</span><span class="o">:</span> <span class="ni">top</span> <span class="nv">$input-height-inner-quarter</span> <span class="ni">right</span> <span class="nv">$input-height-inner-quarter</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="nc">.form-select</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
      <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>

      <span class="k">@if</span> <span class="nv">$enable-validation-icons</span> <span class="p">{</span>
        <span class="na">&amp;</span><span class="o">:</span><span class="nf">not</span><span class="p">([</span><span class="n">multiple</span><span class="p">])</span><span class="o">:</span><span class="nf">not</span><span class="p">([</span><span class="n">size</span><span class="p">])</span><span class="o">,</span>
        <span class="o">&amp;:</span><span class="nf">not</span><span class="p">([</span><span class="n">multiple</span><span class="p">])[</span><span class="n">size</span><span class="o">=</span><span class="s2">&#34;1&#34;</span><span class="p">]</span> <span class="p">{</span>
          <span class="na">padding-right</span><span class="o">:</span> <span class="nv">$form-select-feedback-icon-padding-end</span><span class="p">;</span>
          <span class="na">background-image</span><span class="o">:</span> <span class="nf">escape-svg</span><span class="p">(</span><span class="nv">$form-select-indicator</span><span class="p">)</span><span class="o">,</span> <span class="nf">escape-svg</span><span class="p">(</span><span class="nv">$icon</span><span class="p">);</span>
          <span class="na">background-position</span><span class="o">:</span> <span class="nv">$form-select-bg-position</span><span class="o">,</span> <span class="nv">$form-select-feedback-icon-position</span><span class="p">;</span>
          <span class="na">background-size</span><span class="o">:</span> <span class="nv">$form-select-bg-size</span><span class="o">,</span> <span class="nv">$form-select-feedback-icon-size</span><span class="p">;</span>
        <span class="p">}</span>
      <span class="p">}</span>

      <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
        <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
        <span class="na">box-shadow</span><span class="o">:</span> <span class="nv">$focus-box-shadow</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="nc">.form-check-input</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
      <span class="na">border-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>

      <span class="k">&amp;</span><span class="nd">:checked</span> <span class="p">{</span>
        <span class="na">background-color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
      <span class="p">}</span>

      <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
        <span class="na">box-shadow</span><span class="o">:</span> <span class="nv">$focus-box-shadow</span><span class="p">;</span>
      <span class="p">}</span>

      <span class="o">~</span> <span class="nc">.form-check-label</span> <span class="p">{</span>
        <span class="na">color</span><span class="o">:</span> <span class="nv">$color</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>
  <span class="nc">.form-check-inline</span> <span class="nc">.form-check-input</span> <span class="p">{</span>
    <span class="o">~</span> <span class="nc">.</span><span class="si">#{</span><span class="nv">$state</span><span class="si">}</span><span class="nc">-feedback</span> <span class="p">{</span>
      <span class="na">margin-left</span><span class="o">:</span> <span class="mf">.5</span><span class="kt">em</span><span class="p">;</span>
    <span class="p">}</span>
  <span class="p">}</span>

  <span class="nc">.input-group</span> <span class="nc">.form-control</span><span class="o">,</span>
  <span class="nc">.input-group</span> <span class="nc">.form-select</span> <span class="p">{</span>
    <span class="k">@include</span><span class="nd"> form-validation-state-selector</span><span class="p">(</span><span class="nv">$state</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">@if</span> <span class="nv">$state</span> <span class="o">==</span> <span class="s2">&#34;valid&#34;</span> <span class="p">{</span>
        <span class="na">z-index</span><span class="o">:</span> <span class="mi">1</span><span class="p">;</span>
      <span class="p">}</span> <span class="k">@else if</span> <span class="nv">$state</span> <span class="o">==</span> <span class="s2">&#34;invalid&#34;</span> <span class="p">{</span>
        <span class="na">z-index</span><span class="o">:</span> <span class="mi">2</span><span class="p">;</span>
      <span class="p">}</span>
      <span class="k">&amp;</span><span class="nd">:focus</span> <span class="p">{</span>
        <span class="na">z-index</span><span class="o">:</span> <span class="mi">3</span><span class="p">;</span>
      <span class="p">}</span>
    <span class="p">}</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
                    <h3 id="map">Map</h3>
                    <p>This is the validation Sass map from <code>_variables.scss</code>. Override or extend this to generate different or additional states.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="nv">$form-validation-states</span><span class="o">:</span> <span class="p">(</span>
  <span class="s2">&#34;valid&#34;</span><span class="o">:</span> <span class="p">(</span>
    <span class="s2">&#34;color&#34;</span><span class="o">:</span> <span class="nv">$form-feedback-valid-color</span><span class="o">,</span>
    <span class="s2">&#34;icon&#34;</span><span class="o">:</span> <span class="nv">$form-feedback-icon-valid</span>
  <span class="p">)</span><span class="o">,</span>
  <span class="s2">&#34;invalid&#34;</span><span class="o">:</span> <span class="p">(</span>
    <span class="s2">&#34;color&#34;</span><span class="o">:</span> <span class="nv">$form-feedback-invalid-color</span><span class="o">,</span>
    <span class="s2">&#34;icon&#34;</span><span class="o">:</span> <span class="nv">$form-feedback-icon-invalid</span>
  <span class="p">)</span>
<span class="p">);</span>
</code></pre></div>
                    <p>Maps of <code>$form-validation-states</code> can contain three optional parameters to override tooltips and focus styles.</p>
                    <h3 id="loop">Loop</h3>
                    <p>Used to iterate over <code>$form-validation-states</code> map values to generate our validation styles. Any modifications to the above Sass map will be reflected in your compiled CSS via this loop.</p>
                    <div class="highlight"><pre class="chroma"><code class="language-scss" data-lang="scss"><span class="k">@each</span> <span class="nv">$state</span><span class="o">,</span> <span class="nv">$data</span> <span class="ow">in</span> <span class="nv">$form-validation-states</span> <span class="p">{</span>
  <span class="k">@include</span><span class="nd"> form-validation-state</span><span class="p">(</span><span class="nv">$state</span><span class="o">,</span> <span class="nv">$data</span><span class="o">...</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
                    <h3 id="customizing">Customizing</h3>
                    <p>Validation states can be customized via Sass with the <code>$form-validation-states</code> map. Located in our <code>_variables.scss</code> file, this Sass map is how we generate the default <code>valid</code>/<code>invalid</code> validation states. Included is a nested map for customizing each state&rsquo;s color, icon, tooltip color, and focus shadow. While no other states are supported by browsers, those using custom styles can easily add more complex form feedback.</p>
                    <p>Please note that <strong>we do not recommend customizing <code>$form-validation-states</code> values without also modifying the <code>form-validation-state</code> mixin</strong>.</p>

                </div>
            </main>
        </div>


        <footer class="bd-footer py-5 mt-5 bg-light">

        </footer>

        <script src="../assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>

        <script src="../assets/js/docs.min.js"></script>



        <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (function () {
                                    'use strict'

                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.querySelectorAll('.needs-validation')

                                    // Loop over them and prevent submission
                                    Array.prototype.slice.call(forms)
                                            .forEach(function (form) {
                                                form.addEventListener('submit', function (event) {
                                                    if (!form.checkValidity()) {
                                                        event.preventDefault()
                                                        event.stopPropagation()
                                                    }

                                                    form.classList.add('was-validated')
                                                }, false)
                                            })
                                })()
        </script>
    </body>
</html>
