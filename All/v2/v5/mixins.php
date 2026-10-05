
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Bootstrap 5 CheatSheet By ThemeSelection | Mixins</title>
        <meta name="description" content="An interactive list of Bootstrap 5 classes, variables, and mixins. The only Bootstrap 5 CheatSheet you will ever need.">
        <meta name="image" content="https://bootstrap-cheatsheet.themeselection.com/assets/images/preview-image.jpg">
        <meta name="keywords" content="bootstrap, bootstrap 5, bootstrap 5 cheatsheet, bootstrap 5 cheat sheet, bootstrap cheatsheet, bootstrap 5 cheat sheet pdf, bootstrap cheat sheet github">
        <meta name="author" content="ThemeSelection">
        <meta itemprop="name" content="Bootstrap 5 CheatSheet 🚀 By ThemeSelection | Mixins">
        <meta itemprop="description" content="An interactive list of Bootstrap 5 classes, variables, and mixins. The only Bootstrap 5 CheatSheet you will ever need.">
        <meta itemprop="image" content="https://bootstrap-cheatsheet.themeselection.com/assets/images/preview-image.jpg">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@Theme_Selection">
        <meta name="twitter:title" content="Bootstrap 5 CheatSheet 🚀 By ThemeSelection">
        <meta name="twitter:description" content="An interactive list of Bootstrap 5 classes, variables, and mixins. 🎁 The only Bootstrap 5 CheatSheet you will ever need. 🎊">
        <meta name="twitter:image" content="http://bootstrap-cheatsheet.themeselection.com/assets/images/twitter-preview-image.jpg">
        <meta property="og:title" content="Bootstrap 5 CheatSheet 🚀 By ThemeSelection | Mixins">
        <meta property="og:description" content="An interactive list of Bootstrap 5 classes, variables, and mixins. 🎁 The only Bootstrap 5 CheatSheet you will ever need. 🎊">
        <meta property="og:image" content="https://bootstrap-cheatsheet.themeselection.com/assets/images/og-preview-image.jpg">
        <meta property="og:image:alt" content="Bootstrap 5 CheatSheet By ThemeSelection">
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:url" content="https://bootstrap-cheatsheet.themeselection.com/">
        <meta property="og:site_name" content="Bootstrap 5 CheatSheet By ThemeSelection">
        <meta property="og:locale" content="en_US">
        <meta property="fb:app_id" content="678455993062306">
        <meta property="og:type" content="website">
        <link rel="icon" href="assets/images/ico/favicon.ico" sizes="32x32">
        <link rel="icon" href="assets/images/ico/favicon.ico" sizes="192x192">
        <link rel="apple-touch-icon" href="assets/images/ico/favicon.ico">
        <meta name="msapplication-TileImage" content="assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600;1,700;1,800" rel="stylesheet">
        <link href="assets/vendors/css/docs.css" rel="stylesheet">
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-2RZM4864CJ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-2RZM4864CJ');
        </script>
        <link rel="stylesheet" type="text/css" href="assets/css/cheatsheet.css">
    </head>

    <body class="bs-cheatsheet bs-mixins">
        <header class="navbar navbar-expand-sm cheatsheet-navbar">
            <div class="container">
                <img src="assets/images/logos/cheatsheet-logo.svg" alt="Brand Image" height="32">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Menu links-->
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0 cheatsheet-menu">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="variables.php">Variables</a></li>
                        <li class="nav-item"><a class="nav-link" href="mixins.php">Mixins</a></li>
                    </ul>
                    <!-- / Menu links-->
                    <hr class="d-sm-none text-white-50">

                </div>
            </div>
        </header>
        <main><!-- CheatSheet Hero -->
            <div class="cheatsheet-hero">
                <div class="container">
                    <div class="row align-items-sm-center py-4 py-lg-0">
                        <div class="col-lg-7 text-start">
                            <img src="assets/images/logos/brand-logo-small.png" class="mb-2 mb-sm-4" alt="ThemeSelection" height="44">
                            <h2 class="cheatsheet-title">Bootstrap 5 CheatSheet 🚀</h2>
                            <p class="cheatsheet-subtitle">An interactive list of Bootstrap 5 <span class="cheatsheet-subtitle-span">classes</span>, <span class="cheatsheet-subtitle-span">variables</span>, and <span class="cheatsheet-subtitle-span">mixins</span>. 🎁 The only Bootstrap 5 CheatSheet you will ever need. 🎊</p>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block">
                            <img src="assets/images/pose.png" class="img-fluid" alt="CheatSheet Hero Images" height="250">
                        </div>
                    </div>
                </div>
            </div>
            <!--/ CheatSheet Hero -->

            <div class="container bs-content">
                <!-- subscription message -->
                <div class="alert rounded-0 alert-dismissible subscription-alert hide alert-tip border-top-0 border-bottom-0" role="alert">
                    <strong>Congratulations!!</strong> You have successfully subscribed to our newsletter. 🥳
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!--/ subscription message -->

                <!-- CheatSheet Filter -->
                <div class="cheatsheet-filters">
                    <div class="input-group filter-search">
                        <span class="input-group-text" id="input-search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </span>
                        <input type="text" class="form-control input-search" placeholder="Search..." tabindex='-1' aria-label="Search..." aria-describedby="input-search">
                    </div>
                    <div class="filter-buttons d-flex">
                        <div class="btn-group btn-toggle me-3" role="group" aria-label="collapse/expand all">
                            <input type="radio" class="btn-check" name="collapse-toggle" id="expandAll" autocomplete="off" checked>
                            <label class="btn btn-outline-primary" for="expandAll">Expand All</label>

                            <input type="radio" class="btn-check" name="collapse-toggle" id="collapseAll" autocomplete="off">
                            <label class="btn btn-outline-primary" for="collapseAll">Collapse All</label>
                        </div>
                        <div class="btn-highlight-toggle">
                            <input type="checkbox" class="btn-check" id="btn-toggle-new" autocomplete="off">
                            <label class="btn btn-outline-primary" for="btn-toggle-new">Highlight new in v5</label>
                        </div>
                    </div>
                </div>
                <!--/ CheatSheet Filter -->
                <div class="notification">
                    <div class="toast notification-toast text-white bg-info border-0" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body d-flex align-items-center ">
                            <span>Copied!!! 👍</span>
                            <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                </div>

                <div class="row" id="grid">
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryRFS" role="button" aria-expanded="false" aria-controls="categoryRFS">
                                <span class="item-filter-text">RFS</span>
                            </div>
                            <div class="card-body collapse show" id="categoryRFS">
                                <ul class="list-items">
                                    <li class="list-item list-item-bs-new" data-id="rfs-media-query">
                                        <div class="list-item-content">
                                            <a href="#rfs-media-query" class="list-item-text">
                                                <span class="item-filter-text">_rfs-media-query</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin _rfs-media-query</div>
                                        <div class="code-snippet-full">@mixin _rfs-media-query {
                                            @if $rfs-two-dimensional {
                                            @if $rfs-mode == max-media-query {
                                            @media (#{$rfs-mq-property-width}: #{$rfs-mq-value}), (#{$rfs-mq-property-height}: #{$rfs-mq-value}) {
                                            @content;
                                            }
                                            }
                                            @else {
                                            @media (#{$rfs-mq-property-width}: #{$rfs-mq-value}) and (#{$rfs-mq-property-height}: #{$rfs-mq-value}) {
                                            @content;
                                            }
                                            }
                                            }
                                            @else {
                                            @media (#{$rfs-mq-property-width}: #{$rfs-mq-value}) {
                                            @content;
                                            }
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="rfs-rule">
                                        <div class="list-item-content">
                                            <a href="#rfs-rule" class="list-item-text">
                                                <span class="item-filter-text">_rfs-rule</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin _rfs-rule</div>
                                        <div class="code-snippet-full">@mixin _rfs-rule {
                                            @if $rfs-class == disable and $rfs-mode == max-media-query {
                                            &,
                                            .disable-rfs &,
                                            &.disable-rfs {
                                            @content;
                                            }
                                            }
                                            @else if $rfs-class == enable and $rfs-mode == min-media-query {
                                            .enable-rfs &,
                                            &.enable-rfs {
                                            @content;
                                            }
                                            }
                                            @else {
                                            @content;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="rfs-media-query-rule">
                                        <div class="list-item-content">
                                            <a href="#rfs-media-query-rule" class="list-item-text">
                                                <span class="item-filter-text">_rfs-media-query-rule</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin _rfs-media-query-rule</div>
                                        <div class="code-snippet-full">@mixin _rfs-media-query-rule {
                                            @if $rfs-class == enable {
                                            @if $rfs-mode == min-media-query {
                                            @content;
                                            }
                                            @include _rfs-media-query {
                                            .enable-rfs &,
                                            &.enable-rfs {
                                            @content;
                                            }
                                            }
                                            }
                                            @else {
                                            @if $rfs-class == disable and $rfs-mode == min-media-query {
                                            .disable-rfs &,
                                            &.disable-rfs {
                                            @content;
                                            }
                                            }
                                            @include _rfs-media-query {
                                            @content;
                                            }
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="rfs">
                                        <div class="list-item-content">
                                            <a href="#rfs" class="list-item-text">
                                                <span class="item-filter-text">rfs</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin rfs($values, $property: font-size)</div>
                                        <div class="code-snippet-full">@mixin rfs($values, $property: font-size) {
                                            @if $values != null {
                                            $val: rfs-value($values);
                                            $fluidVal: rfs-fluid-value($values);
                                            @if $val == $fluidVal {
                                            #{$property}: $val;
                                            }
                                            @else {
                                            @include _rfs-rule {
                                            #{$property}: if($rfs-mode == max-media-query, $val, $fluidVal);
                                            min-width: if($rfs-safari-iframe-resize-bug-fix, (0 * 1vw), null);
                                            }
                                            @include _rfs-media-query-rule {
                                            #{$property}: if($rfs-mode == max-media-query, $fluidVal, $val);
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="font-size">
                                        <div class="list-item-content">
                                            <a href="#font-size" class="list-item-text">
                                                <span class="item-filter-text">font-size</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin font-size($value)</div>
                                        <div class="code-snippet-full">@mixin font-size($value) {
                                            @include rfs($value);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="padding">
                                        <div class="list-item-content">
                                            <a href="#padding" class="list-item-text">
                                                <span class="item-filter-text">padding</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin padding($value)</div>
                                        <div class="code-snippet-full">@mixin padding($value) {
                                            @include rfs($value, padding);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="padding-top">
                                        <div class="list-item-content">
                                            <a href="#padding-top" class="list-item-text">
                                                <span class="item-filter-text">padding-top</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin padding-top($value)</div>
                                        <div class="code-snippet-full">@mixin padding-top($value) {
                                            @include rfs($value, padding-top);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="padding-right">
                                        <div class="list-item-content">
                                            <a href="#padding-right" class="list-item-text">
                                                <span class="item-filter-text">padding-right</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin padding-right($value)</div>
                                        <div class="code-snippet-full">@mixin padding-right($value) {
                                            @include rfs($value, padding-right);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="padding-bottom">
                                        <div class="list-item-content">
                                            <a href="#padding-bottom" class="list-item-text">
                                                <span class="item-filter-text">padding-bottom</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin padding-bottom($value)</div>
                                        <div class="code-snippet-full">@mixin padding-bottom($value) {
                                            @include rfs($value, padding-bottom);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="padding-left">
                                        <div class="list-item-content">
                                            <a href="#padding-left" class="list-item-text">
                                                <span class="item-filter-text">padding-left</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin padding-left($value)</div>
                                        <div class="code-snippet-full">@mixin padding-left($value) {
                                            @include rfs($value, padding-left);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="margin">
                                        <div class="list-item-content">
                                            <a href="#margin" class="list-item-text">
                                                <span class="item-filter-text">margin</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin margin($value)</div>
                                        <div class="code-snippet-full">@mixin margin($value) {
                                            @include rfs($value, margin);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="margin-top">
                                        <div class="list-item-content">
                                            <a href="#margin-top" class="list-item-text">
                                                <span class="item-filter-text">margin-top</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin margin-top($value)</div>
                                        <div class="code-snippet-full">@mixin margin-top($value) {
                                            @include rfs($value, margin-top);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="margin-right">
                                        <div class="list-item-content">
                                            <a href="#margin-right" class="list-item-text">
                                                <span class="item-filter-text">margin-right</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin margin-right($value)</div>
                                        <div class="code-snippet-full">@mixin margin-right($value) {
                                            @include rfs($value, margin-right);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="margin-bottom">
                                        <div class="list-item-content">
                                            <a href="#margin-bottom" class="list-item-text">
                                                <span class="item-filter-text">margin-bottom</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin margin-bottom($value)</div>
                                        <div class="code-snippet-full">@mixin margin-bottom($value) {
                                            @include rfs($value, margin-bottom);
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="margin-left">
                                        <div class="list-item-content">
                                            <a href="#margin-left" class="list-item-text">
                                                <span class="item-filter-text">margin-left</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin margin-left($value)</div>
                                        <div class="code-snippet-full">@mixin margin-left($value) {
                                            @include rfs($value, margin-left);
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryDeprecate" role="button" aria-expanded="false" aria-controls="categoryDeprecate">
                                <span class="item-filter-text">Deprecate</span>
                            </div>
                            <div class="card-body collapse show" id="categoryDeprecate">
                                <ul class="list-items">
                                    <li class="list-item" data-id="deprecate">
                                        <div class="list-item-content">
                                            <a href="#deprecate" class="list-item-text">
                                                <span class="item-filter-text">deprecate</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin deprecate($name, $deprecate-version, $remove-version, $ignore-warning: false)</div>
                                        <div class="code-snippet-full">@mixin deprecate($name, $deprecate-version, $remove-version, $ignore-warning: false) {
                                            @if ($enable-deprecation-messages != false and $ignore-warning != true) {
                                            @warn "#{$name} has been deprecated as of #{$deprecate-version}. It will be removed entirely in #{$remove-version}.";
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryBreakpoints" role="button" aria-expanded="false" aria-controls="categoryBreakpoints">
                                <span class="item-filter-text">Breakpoints</span>
                            </div>
                            <div class="card-body collapse show" id="categoryBreakpoints">
                                <ul class="list-items">
                                    <li class="list-item" data-id="media-breakpoint-up">
                                        <div class="list-item-content">
                                            <a href="#media-breakpoint-up" class="list-item-text">
                                                <span class="item-filter-text">media-breakpoint-up</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin media-breakpoint-up($name, $breakpoints: $grid-breakpoints)</div>
                                        <div class="code-snippet-full">@mixin media-breakpoint-up($name, $breakpoints: $grid-breakpoints) {
                                            $min: breakpoint-min($name, $breakpoints);
                                            @if $min {
                                            @media (min-width: $min) {
                                            @content;
                                            }
                                            } @else {
                                            @content;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="media-breakpoint-down">
                                        <div class="list-item-content">
                                            <a href="#media-breakpoint-down" class="list-item-text">
                                                <span class="item-filter-text">media-breakpoint-down</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin media-breakpoint-down($name, $breakpoints: $grid-breakpoints)</div>
                                        <div class="code-snippet-full">@mixin media-breakpoint-down($name, $breakpoints: $grid-breakpoints) {
                                            $max: breakpoint-max($name, $breakpoints);
                                            @if $max {
                                            @media (max-width: $max) {
                                            @content;
                                            }
                                            } @else {
                                            @content;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="media-breakpoint-between">
                                        <div class="list-item-content">
                                            <a href="#media-breakpoint-between" class="list-item-text">
                                                <span class="item-filter-text">media-breakpoint-between</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin media-breakpoint-between($lower, $upper, $breakpoints: $grid-breakpoints)</div>
                                        <div class="code-snippet-full">@mixin media-breakpoint-between($lower, $upper, $breakpoints: $grid-breakpoints) {
                                            $min: breakpoint-min($lower, $breakpoints);
                                            $max: breakpoint-max($upper, $breakpoints);
                                            @if $min != null and $max != null {
                                            @media (min-width: $min) and (max-width: $max) {
                                            @content;
                                            }
                                            } @else if $max == null {
                                            @include media-breakpoint-up($lower, $breakpoints) {
                                            @content;
                                            }
                                            } @else if $min == null {
                                            @include media-breakpoint-down($upper, $breakpoints) {
                                            @content;
                                            }
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="media-breakpoint-only">
                                        <div class="list-item-content">
                                            <a href="#media-breakpoint-only" class="list-item-text">
                                                <span class="item-filter-text">media-breakpoint-only</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin media-breakpoint-only($name, $breakpoints: $grid-breakpoints)</div>
                                        <div class="code-snippet-full">@mixin media-breakpoint-only($name, $breakpoints: $grid-breakpoints) {
                                            $min:  breakpoint-min($name, $breakpoints);
                                            $next: breakpoint-next($name, $breakpoints);
                                            $max:  breakpoint-max($next);
                                            @if $min != null and $max != null {
                                            @media (min-width: $min) and (max-width: $max) {
                                            @content;
                                            }
                                            } @else if $max == null {
                                            @include media-breakpoint-up($name, $breakpoints) {
                                            @content;
                                            }
                                            } @else if $min == null {
                                            @include media-breakpoint-down($next, $breakpoints) {
                                            @content;
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryImage" role="button" aria-expanded="false" aria-controls="categoryImage">
                                <span class="item-filter-text">Image</span>
                            </div>
                            <div class="card-body collapse show" id="categoryImage">
                                <ul class="list-items">
                                    <li class="list-item" data-id="img-fluid">
                                        <div class="list-item-content">
                                            <a href="#img-fluid" class="list-item-text">
                                                <span class="item-filter-text">img-fluid</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin img-fluid</div>
                                        <div class="code-snippet-full">@mixin img-fluid {
                                            max-width: 100%;
                                            height: auto;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryResize" role="button" aria-expanded="false" aria-controls="categoryResize">
                                <span class="item-filter-text">Resize</span>
                            </div>
                            <div class="card-body collapse show" id="categoryResize">
                                <ul class="list-items">
                                    <li class="list-item" data-id="resizable">
                                        <div class="list-item-content">
                                            <a href="#resizable" class="list-item-text">
                                                <span class="item-filter-text">resizable</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin resizable($direction)</div>
                                        <div class="code-snippet-full">@mixin resizable($direction) {
                                            overflow: auto;
                                            resize: $direction;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryVisuallyHidden" role="button" aria-expanded="false" aria-controls="categoryVisuallyHidden">
                                <span class="item-filter-text">Visually Hidden</span>
                            </div>
                            <div class="card-body collapse show" id="categoryVisuallyHidden">
                                <ul class="list-items">
                                    <li class="list-item list-item-bs-new" data-id="visually-hidden">
                                        <div class="list-item-content">
                                            <a href="#visually-hidden" class="list-item-text">
                                                <span class="item-filter-text">visually-hidden</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin visually-hidden()</div>
                                        <div class="code-snippet-full">@mixin visually-hidden() {
                                            position: absolute !important;
                                            width: 1px !important;
                                            height: 1px !important;
                                            padding: 0 !important;
                                            margin: -1px !important;
                                            overflow: hidden !important;
                                            clip: rect(0, 0, 0, 0) !important;
                                            white-space: nowrap !important;
                                            border: 0 !important;
                                            }</div>
                                    </li>
                                    <li class="list-item list-item-bs-new" data-id="visually-hidden-focusable">
                                        <div class="list-item-content">
                                            <a href="#visually-hidden-focusable" class="list-item-text">
                                                <span class="item-filter-text">visually-hidden-focusable</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin visually-hidden-focusable()</div>
                                        <div class="code-snippet-full">@mixin visually-hidden-focusable() {
                                            &:not(:focus):not(:focus-within) {
                                            @include visually-hidden();
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryResetText" role="button" aria-expanded="false" aria-controls="categoryResetText">
                                <span class="item-filter-text">Reset Text</span>
                            </div>
                            <div class="card-body collapse show" id="categoryResetText">
                                <ul class="list-items">
                                    <li class="list-item" data-id="reset-text">
                                        <div class="list-item-content">
                                            <a href="#reset-text" class="list-item-text">
                                                <span class="item-filter-text">reset-text</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin reset-text</div>
                                        <div class="code-snippet-full">@mixin reset-text {
                                            font-family: $font-family-base;
                                            font-style: normal;
                                            font-weight: $font-weight-normal;
                                            line-height: $line-height-base;
                                            text-align: left;
                                            text-align: start;
                                            text-decoration: none;
                                            text-shadow: none;
                                            text-transform: none;
                                            letter-spacing: normal;
                                            word-break: normal;
                                            word-spacing: normal;
                                            white-space: normal;
                                            line-break: auto;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryTextTruncate" role="button" aria-expanded="false" aria-controls="categoryTextTruncate">
                                <span class="item-filter-text">Text Truncate</span>
                            </div>
                            <div class="card-body collapse show" id="categoryTextTruncate">
                                <ul class="list-items">
                                    <li class="list-item" data-id="text-truncate">
                                        <div class="list-item-content">
                                            <a href="#text-truncate" class="list-item-text">
                                                <span class="item-filter-text">text-truncate</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin text-truncate()</div>
                                        <div class="code-snippet-full">@mixin text-truncate() {
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            white-space: nowrap;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryUtilities" role="button" aria-expanded="false" aria-controls="categoryUtilities">
                                <span class="item-filter-text">Utilities</span>
                            </div>
                            <div class="card-body collapse show" id="categoryUtilities">
                                <ul class="list-items">
                                    <li class="list-item list-item-bs-new" data-id="generate-utility">
                                        <div class="list-item-content">
                                            <a href="#generate-utility" class="list-item-text">
                                                <span class="item-filter-text">generate-utility</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin generate-utility($utility, $infix, $is-rfs-media-query: false)</div>
                                        <div class="code-snippet-full">@mixin generate-utility($utility, $infix, $is-rfs-media-query: false) {
                                            $values: map-get($utility, values);
                                            @if type-of($values) == "string" or type-of(nth($values, 1)) != "list" {
                                            $values: zip($values, $values);
                                            }
                                            @each $key, $value in $values {
                                            $properties: map-get($utility, property);
                                            @if type-of($properties) == "string" {
                                            $properties: append((), $properties);
                                            }
                                            $property-class: if(map-has-key($utility, class), map-get($utility, class), nth($properties, 1));
                                            $property-class: if($property-class == null, "", $property-class);
                                            $state: if(map-has-key($utility, state), map-get($utility, state), ());
                                            $infix: if($property-class == "" and str-slice($infix, 1, 1) == "-", str-slice($infix, 2), $infix);
                                            $property-class-modifier: if($key, if($property-class == "" and $infix == "", "", "-") + $key, "");
                                            @if map-get($utility, rfs) {
                                            @if $is-rfs-media-query {
                                            $val: rfs-value($value);
                                            $value: if($val == rfs-fluid-value($value), null, $val);
                                            }
                                            @else {
                                            $value: rfs-fluid-value($value);
                                            }
                                            }
                                            $is-rtl: map-get($utility, rtl);
                                            @if $value != null {
                                            @if $is-rtl == false {
                                            /* rtl:begin:remove */
                                            }
                                            .#{$property-class + $infix + $property-class-modifier} {
                                            @each $property in $properties {
                                            #{$property}: $value if($enable-important-utilities, !important, null);
                                            }
                                            }
                                            @each $pseudo in $state {
                                            .#{$property-class + $infix + $property-class-modifier}-#{$pseudo}:#{$pseudo} {
                                            @each $property in $properties {
                                            #{$property}: $value if($enable-important-utilities, !important, null);
                                            }
                                            }
                                            }
                                            @if $is-rtl == false {
                                            /* rtl:end:remove */
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryAlert" role="button" aria-expanded="false" aria-controls="categoryAlert">
                                <span class="item-filter-text">Alert</span>
                            </div>
                            <div class="card-body collapse show" id="categoryAlert">
                                <ul class="list-items">
                                    <li class="list-item" data-id="alert-variant">
                                        <div class="list-item-content">
                                            <a href="#alert-variant" class="list-item-text">
                                                <span class="item-filter-text">alert-variant</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin alert-variant($background, $border, $color)</div>
                                        <div class="code-snippet-full">@mixin alert-variant($background, $border, $color) {
                                            color: $color;
                                            @include gradient-bg($background);
                                            border-color: $border;
                                            .alert-link {
                                            color: shade-color($color, 20%);
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryButtons" role="button" aria-expanded="false" aria-controls="categoryButtons">
                                <span class="item-filter-text">Buttons</span>
                            </div>
                            <div class="card-body collapse show" id="categoryButtons">
                                <ul class="list-items">
                                    <li class="list-item" data-id="button-variant">
                                        <div class="list-item-content">
                                            <a href="#button-variant" class="list-item-text">
                                                <span class="item-filter-text">button-variant</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin button-variant(
                                            $background,
                                            $border,
                                            $color: color-contrast($background),
                                            $hover-background: if($color == $color-contrast-light, shade-color($background, $btn-hover-bg-shade-amount), tint-color($background, $btn-hover-bg-tint-amount)),
                                            $hover-border: if($color == $color-contrast-light, shade-color($border, $btn-hover-border-shade-amount), tint-color($border, $btn-hover-border-tint-amount)),
                                            $hover-color: color-contrast($hover-background),
                                            $active-background: if($color == $color-contrast-light, shade-color($background,$btn-active-bg-shade-amount), tint-color($background, $btn-active-bg-tint-amount)),
                                            $active-border: if($color == $color-contrast-light, shade-color($border, $btn-active-border-shade-amount), tint-color($border, $btn-active-border-tint-amount)),
                                            $active-color: color-contrast($active-background),
                                            $disabled-background: $background,
                                            $disabled-border: $border,
                                            $disabled-color: color-contrast($disabled-background)
                                            )</div>
                                        <div class="code-snippet-full">@mixin button-variant(
                                            $background,
                                            $border,
                                            $color: color-contrast($background),
                                            $hover-background: if($color == $color-contrast-light, shade-color($background, $btn-hover-bg-shade-amount), tint-color($background, $btn-hover-bg-tint-amount)),
                                            $hover-border: if($color == $color-contrast-light, shade-color($border, $btn-hover-border-shade-amount), tint-color($border, $btn-hover-border-tint-amount)),
                                            $hover-color: color-contrast($hover-background),
                                            $active-background: if($color == $color-contrast-light, shade-color($background,$btn-active-bg-shade-amount), tint-color($background, $btn-active-bg-tint-amount)),
                                            $active-border: if($color == $color-contrast-light, shade-color($border, $btn-active-border-shade-amount), tint-color($border, $btn-active-border-tint-amount)),
                                            $active-color: color-contrast($active-background),
                                            $disabled-background: $background,
                                            $disabled-border: $border,
                                            $disabled-color: color-contrast($disabled-background)
                                            ) {
                                            color: $color;
                                            @include gradient-bg($background);
                                            border-color: $border;
                                            @include box-shadow($btn-box-shadow);
                                            &:hover {
                                            color: $hover-color;
                                            @include gradient-bg($hover-background);
                                            border-color: $hover-border;
                                            }
                                            .btn-check:focus + &,
                                            &:focus {
                                            color: $hover-color;
                                            @include gradient-bg($hover-background);
                                            border-color: $hover-border;
                                            @if $enable-shadows {
                                            @include box-shadow($btn-box-shadow, 0 0 0 $btn-focus-width rgba(mix($color, $border, 15%), .5));
                                            } @else {
                                            box-shadow: 0 0 0 $btn-focus-width rgba(mix($color, $border, 15%), .5);
                                            }
                                            }
                                            .btn-check:checked + &,
                                            .btn-check:active + &,
                                            &:active,
                                            &.active,
                                            .show > &.dropdown-toggle {
                                            color: $active-color;
                                            background-color: $active-background;
                                            background-image: if($enable-gradients, none, null);
                                            border-color: $active-border;
                                            &:focus {
                                            @if $enable-shadows {
                                            @include box-shadow($btn-active-box-shadow, 0 0 0 $btn-focus-width rgba(mix($color, $border, 15%), .5));
                                            } @else {
                                            box-shadow: 0 0 0 $btn-focus-width rgba(mix($color, $border, 15%), .5);
                                            }
                                            }
                                            }
                                            &:disabled,
                                            &.disabled {
                                            color: $disabled-color;
                                            background-color: $disabled-background;
                                            background-image: if($enable-gradients, none, null);
                                            border-color: $disabled-border;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="button-outline-variant">
                                        <div class="list-item-content">
                                            <a href="#button-outline-variant" class="list-item-text">
                                                <span class="item-filter-text">button-outline-variant</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin button-outline-variant(
                                            $color,
                                            $color-hover: color-contrast($color),
                                            $active-background: $color,
                                            $active-border: $color,
                                            $active-color: color-contrast($active-background)
                                            )</div>
                                        <div class="code-snippet-full">@mixin button-outline-variant(
                                            $color,
                                            $color-hover: color-contrast($color),
                                            $active-background: $color,
                                            $active-border: $color,
                                            $active-color: color-contrast($active-background)
                                            ) {
                                            color: $color;
                                            border-color: $color;
                                            &:hover {
                                            color: $color-hover;
                                            background-color: $active-background;
                                            border-color: $active-border;
                                            }
                                            .btn-check:focus + &,
                                            &:focus {
                                            box-shadow: 0 0 0 $btn-focus-width rgba($color, .5);
                                            }
                                            .btn-check:checked + &,
                                            .btn-check:active + &,
                                            &:active,
                                            &.active,
                                            &.dropdown-toggle.show {
                                            color: $active-color;
                                            background-color: $active-background;
                                            border-color: $active-border;
                                            &:focus {
                                            @if $enable-shadows {
                                            @include box-shadow($btn-active-box-shadow, 0 0 0 $btn-focus-width rgba($color, .5));
                                            } @else {
                                            box-shadow: 0 0 0 $btn-focus-width rgba($color, .5);
                                            }
                                            }
                                            }
                                            &:disabled,
                                            &.disabled {
                                            color: $color;
                                            background-color: transparent;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="button-size">
                                        <div class="list-item-content">
                                            <a href="#button-size" class="list-item-text">
                                                <span class="item-filter-text">button-size</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin button-size($padding-y, $padding-x, $font-size, $border-radius)</div>
                                        <div class="code-snippet-full">@mixin button-size($padding-y, $padding-x, $font-size, $border-radius) {
                                            padding: $padding-y $padding-x;
                                            @include font-size($font-size);
                                            @include border-radius($border-radius, 0);
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryCaret" role="button" aria-expanded="false" aria-controls="categoryCaret">
                                <span class="item-filter-text">Caret</span>
                            </div>
                            <div class="card-body collapse show" id="categoryCaret">
                                <ul class="list-items">
                                    <li class="list-item" data-id="caret-down">
                                        <div class="list-item-content">
                                            <a href="#caret-down" class="list-item-text">
                                                <span class="item-filter-text">caret-down</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin caret-down</div>
                                        <div class="code-snippet-full">@mixin caret-down {
                                            border-top: $caret-width solid;
                                            border-right: $caret-width solid transparent;
                                            border-bottom: 0;
                                            border-left: $caret-width solid transparent;
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="caret-up">
                                        <div class="list-item-content">
                                            <a href="#caret-up" class="list-item-text">
                                                <span class="item-filter-text">caret-up</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin caret-up</div>
                                        <div class="code-snippet-full">@mixin caret-up {
                                            border-top: 0;
                                            border-right: $caret-width solid transparent;
                                            border-bottom: $caret-width solid;
                                            border-left: $caret-width solid transparent;
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="caret-end">
                                        <div class="list-item-content">
                                            <a href="#caret-end" class="list-item-text">
                                                <span class="item-filter-text">caret-end</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin caret-end</div>
                                        <div class="code-snippet-full">@mixin caret-end {
                                            border-top: $caret-width solid transparent;
                                            border-right: 0;
                                            border-bottom: $caret-width solid transparent;
                                            border-left: $caret-width solid;
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="caret-start">
                                        <div class="list-item-content">
                                            <a href="#caret-start" class="list-item-text">
                                                <span class="item-filter-text">caret-start</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin caret-start</div>
                                        <div class="code-snippet-full">@mixin caret-start {
                                            border-top: $caret-width solid transparent;
                                            border-right: $caret-width solid;
                                            border-bottom: $caret-width solid transparent;
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="caret">
                                        <div class="list-item-content">
                                            <a href="#caret" class="list-item-text">
                                                <span class="item-filter-text">caret</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin caret($direction: down)</div>
                                        <div class="code-snippet-full">@mixin caret($direction: down) {
                                            @if $enable-caret {
                                            &::after {
                                            display: inline-block;
                                            margin-left: $caret-spacing;
                                            vertical-align: $caret-vertical-align;
                                            content: "";
                                            @if $direction == down {
                                            @include caret-down();
                                            } @else if $direction == up {
                                            @include caret-up();
                                            } @else if $direction == end {
                                            @include caret-end();
                                            }
                                            }
                                            @if $direction == start {
                                            &::after {
                                            display: none;
                                            }
                                            &::before {
                                            display: inline-block;
                                            margin-right: $caret-spacing;
                                            vertical-align: $caret-vertical-align;
                                            content: "";
                                            @include caret-start();
                                            }
                                            }
                                            &:empty::after {
                                            margin-left: 0;
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryPagination" role="button" aria-expanded="false" aria-controls="categoryPagination">
                                <span class="item-filter-text">Pagination</span>
                            </div>
                            <div class="card-body collapse show" id="categoryPagination">
                                <ul class="list-items">
                                    <li class="list-item" data-id="pagination-size">
                                        <div class="list-item-content">
                                            <a href="#pagination-size" class="list-item-text">
                                                <span class="item-filter-text">pagination-size</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin pagination-size($padding-y, $padding-x, $font-size, $border-radius)</div>
                                        <div class="code-snippet-full">@mixin pagination-size($padding-y, $padding-x, $font-size, $border-radius) {
                                            .page-link {
                                            padding: $padding-y $padding-x;
                                            @include font-size($font-size);
                                            }
                                            .page-item {
                                            @if $pagination-margin-start == (-$pagination-border-width) {
                                            &:first-child {
                                            .page-link {
                                            @include border-start-radius($border-radius);
                                            }
                                            }
                                            &:last-child {
                                            .page-link {
                                            @include border-end-radius($border-radius);
                                            }
                                            }
                                            } @else {
                                            .page-link {
                                            @include border-radius($border-radius);
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryLists" role="button" aria-expanded="false" aria-controls="categoryLists">
                                <span class="item-filter-text">Lists</span>
                            </div>
                            <div class="card-body collapse show" id="categoryLists">
                                <ul class="list-items">
                                    <li class="list-item" data-id="list-unstyled">
                                        <div class="list-item-content">
                                            <a href="#list-unstyled" class="list-item-text">
                                                <span class="item-filter-text">list-unstyled</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin list-unstyled</div>
                                        <div class="code-snippet-full">@mixin list-unstyled {
                                            padding-left: 0;
                                            list-style: none;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryListGroup" role="button" aria-expanded="false" aria-controls="categoryListGroup">
                                <span class="item-filter-text">List Group</span>
                            </div>
                            <div class="card-body collapse show" id="categoryListGroup">
                                <ul class="list-items">
                                    <li class="list-item" data-id="list-group-item-variant">
                                        <div class="list-item-content">
                                            <a href="#list-group-item-variant" class="list-item-text">
                                                <span class="item-filter-text">list-group-item-variant</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin list-group-item-variant($state, $background, $color)</div>
                                        <div class="code-snippet-full">@mixin list-group-item-variant($state, $background, $color) {
                                            .list-group-item-#{$state} {
                                            color: $color;
                                            background-color: $background;
                                            &.list-group-item-action {
                                            &:hover,
                                            &:focus {
                                            color: $color;
                                            background-color: shade-color($background, 10%);
                                            }
                                            &.active {
                                            color: $white;
                                            background-color: $color;
                                            border-color: $color;
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryForms" role="button" aria-expanded="false" aria-controls="categoryForms">
                                <span class="item-filter-text">Forms</span>
                            </div>
                            <div class="card-body collapse show" id="categoryForms">
                                <ul class="list-items">
                                    <li class="list-item" data-id="form-validation-state-selector">
                                        <div class="list-item-content">
                                            <a href="#form-validation-state-selector" class="list-item-text">
                                                <span class="item-filter-text">form-validation-state-selector</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin form-validation-state-selector($state)</div>
                                        <div class="code-snippet-full">@mixin form-validation-state-selector($state) {
                                            @if ($state == "valid" or $state == "invalid") {
                                            .was-validated #{if(&, "&", "")}:#{$state},
                                            #{if(&, "&", "")}.is-#{$state} {
                                            @content;
                                            }
                                            } @else {
                                            #{if(&, "&", "")}.is-#{$state} {
                                            @content;
                                            }
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="form-validation-state">
                                        <div class="list-item-content">
                                            <a href="#form-validation-state" class="list-item-text">
                                                <span class="item-filter-text">form-validation-state</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin form-validation-state(
                                            $state,
                                            $color,
                                            $icon,
                                            $tooltip-color: color-contrast($color),
                                            $tooltip-bg-color: rgba($color, $form-feedback-tooltip-opacity),
                                            $focus-box-shadow: 0 0 0 $input-focus-width rgba($color, $input-btn-focus-color-opacity)
                                            )</div>
                                        <div class="code-snippet-full">@mixin form-validation-state(
                                            $state,
                                            $color,
                                            $icon,
                                            $tooltip-color: color-contrast($color),
                                            $tooltip-bg-color: rgba($color, $form-feedback-tooltip-opacity),
                                            $focus-box-shadow: 0 0 0 $input-focus-width rgba($color, $input-btn-focus-color-opacity)
                                            ) {
                                            .#{$state}-feedback {
                                            display: none;
                                            width: 100%;
                                            margin-top: $form-feedback-margin-top;
                                            @include font-size($form-feedback-font-size);
                                            font-style: $form-feedback-font-style;
                                            color: $color;
                                            }
                                            .#{$state}-tooltip {
                                            position: absolute;
                                            top: 100%;
                                            z-index: 5;
                                            display: none;
                                            max-width: 100%;
                                            padding: $form-feedback-tooltip-padding-y $form-feedback-tooltip-padding-x;
                                            margin-top: .1rem;
                                            @include font-size($form-feedback-tooltip-font-size);
                                            line-height: $form-feedback-tooltip-line-height;
                                            color: $tooltip-color;
                                            background-color: $tooltip-bg-color;
                                            @include border-radius($form-feedback-tooltip-border-radius);
                                            }
                                            @include form-validation-state-selector($state) {
                                            ~ .#{$state}-feedback,
                                            ~ .#{$state}-tooltip {
                                            display: block;
                                            }
                                            }
                                            .form-control {
                                            @include form-validation-state-selector($state) {
                                            border-color: $color;
                                            @if $enable-validation-icons {
                                            padding-right: $input-height-inner;
                                            background-image: escape-svg($icon);
                                            background-repeat: no-repeat;
                                            background-position: right $input-height-inner-quarter center;
                                            background-size: $input-height-inner-half $input-height-inner-half;
                                            }
                                            &:focus {
                                            border-color: $color;
                                            box-shadow: $focus-box-shadow;
                                            }
                                            }
                                            }
                                            textarea.form-control {
                                            @include form-validation-state-selector($state) {
                                            @if $enable-validation-icons {
                                            padding-right: $input-height-inner;
                                            background-position: top $input-height-inner-quarter right $input-height-inner-quarter;
                                            }
                                            }
                                            }
                                            .form-select {
                                            @include form-validation-state-selector($state) {
                                            border-color: $color;
                                            @if $enable-validation-icons {
                                            padding-right: $form-select-feedback-icon-padding-end;
                                            background-image: escape-svg($form-select-indicator), escape-svg($icon);
                                            background-position: $form-select-bg-position, $form-select-feedback-icon-position;
                                            background-size: $form-select-bg-size, $form-select-feedback-icon-size;
                                            }
                                            &:focus {
                                            border-color: $color;
                                            box-shadow: $focus-box-shadow;
                                            }
                                            }
                                            }
                                            .form-check-input {
                                            @include form-validation-state-selector($state) {
                                            border-color: $color;
                                            &:checked {
                                            background-color: $color;
                                            }
                                            &:focus {
                                            box-shadow: $focus-box-shadow;
                                            }
                                            ~ .form-check-label {
                                            color: $color;
                                            }
                                            }
                                            }
                                            .form-check-inline .form-check-input {
                                            ~ .#{$state}-feedback {
                                            margin-left: .5em;
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryTable" role="button" aria-expanded="false" aria-controls="categoryTable">
                                <span class="item-filter-text">Table</span>
                            </div>
                            <div class="card-body collapse show" id="categoryTable">
                                <ul class="list-items">
                                    <li class="list-item list-item-bs-new" data-id="table-variant">
                                        <div class="list-item-content">
                                            <a href="#table-variant" class="list-item-text">
                                                <span class="item-filter-text">table-variant</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin table-variant($state, $background)</div>
                                        <div class="code-snippet-full">@mixin table-variant($state, $background) {
                                            .table-#{$state} {
                                            $color: color-contrast(opaque($body-bg, $background));
                                            $hover-bg: mix($color, $background, percentage($table-hover-bg-factor));
                                            $striped-bg: mix($color, $background, percentage($table-striped-bg-factor));
                                            $active-bg: mix($color, $background, percentage($table-active-bg-factor));
                                            --#{$variable-prefix}table-bg: #{$background};
                                            --#{$variable-prefix}table-striped-bg: #{$striped-bg};
                                            --#{$variable-prefix}table-striped-color: #{color-contrast($striped-bg)};
                                            --#{$variable-prefix}table-active-bg: #{$active-bg};
                                            --#{$variable-prefix}table-active-color: #{color-contrast($active-bg)};
                                            --#{$variable-prefix}table-hover-bg: #{$hover-bg};
                                            --#{$variable-prefix}table-hover-color: #{color-contrast($hover-bg)};
                                            color: $color;
                                            border-color: mix($color, $background, percentage($table-border-factor));
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryBorderRadius" role="button" aria-expanded="false" aria-controls="categoryBorderRadius">
                                <span class="item-filter-text">Border Radius</span>
                            </div>
                            <div class="card-body collapse show" id="categoryBorderRadius">
                                <ul class="list-items">
                                    <li class="list-item" data-id="border-radius">
                                        <div class="list-item-content">
                                            <a href="#border-radius" class="list-item-text">
                                                <span class="item-filter-text">border-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-radius($radius: $border-radius, $fallback-border-radius: false)</div>
                                        <div class="code-snippet-full">@mixin border-radius($radius: $border-radius, $fallback-border-radius: false) {
                                            @if $enable-rounded {
                                            border-radius: valid-radius($radius);
                                            }
                                            @else if $fallback-border-radius != false {
                                            border-radius: $fallback-border-radius;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-top-radius">
                                        <div class="list-item-content">
                                            <a href="#border-top-radius" class="list-item-text">
                                                <span class="item-filter-text">border-top-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-top-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-top-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-top-left-radius: valid-radius($radius);
                                            border-top-right-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-end-radius">
                                        <div class="list-item-content">
                                            <a href="#border-end-radius" class="list-item-text">
                                                <span class="item-filter-text">border-end-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-end-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-end-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-top-right-radius: valid-radius($radius);
                                            border-bottom-right-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-bottom-radius">
                                        <div class="list-item-content">
                                            <a href="#border-bottom-radius" class="list-item-text">
                                                <span class="item-filter-text">border-bottom-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-bottom-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-bottom-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-bottom-right-radius: valid-radius($radius);
                                            border-bottom-left-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-start-radius">
                                        <div class="list-item-content">
                                            <a href="#border-start-radius" class="list-item-text">
                                                <span class="item-filter-text">border-start-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-start-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-start-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-top-left-radius: valid-radius($radius);
                                            border-bottom-left-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-top-start-radius">
                                        <div class="list-item-content">
                                            <a href="#border-top-start-radius" class="list-item-text">
                                                <span class="item-filter-text">border-top-start-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-top-start-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-top-start-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-top-left-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-top-end-radius">
                                        <div class="list-item-content">
                                            <a href="#border-top-end-radius" class="list-item-text">
                                                <span class="item-filter-text">border-top-end-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-top-end-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-top-end-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-top-right-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-bottom-end-radius">
                                        <div class="list-item-content">
                                            <a href="#border-bottom-end-radius" class="list-item-text">
                                                <span class="item-filter-text">border-bottom-end-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-bottom-end-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-bottom-end-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-bottom-right-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="border-bottom-start-radius">
                                        <div class="list-item-content">
                                            <a href="#border-bottom-start-radius" class="list-item-text">
                                                <span class="item-filter-text">border-bottom-start-radius</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin border-bottom-start-radius($radius: $border-radius)</div>
                                        <div class="code-snippet-full">@mixin border-bottom-start-radius($radius: $border-radius) {
                                            @if $enable-rounded {
                                            border-bottom-left-radius: valid-radius($radius);
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryBoxShadow" role="button" aria-expanded="false" aria-controls="categoryBoxShadow">
                                <span class="item-filter-text">Box Shadow</span>
                            </div>
                            <div class="card-body collapse show" id="categoryBoxShadow">
                                <ul class="list-items">
                                    <li class="list-item" data-id="box-shadow">
                                        <div class="list-item-content">
                                            <a href="#box-shadow" class="list-item-text">
                                                <span class="item-filter-text">box-shadow</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin box-shadow($shadow...)</div>
                                        <div class="code-snippet-full">@mixin box-shadow($shadow...) {
                                            @if $enable-shadows {
                                            $result: ();
                                            @each $value in $shadow {
                                            @if $value != null {
                                            $result: append($result, $value, "comma");
                                            }
                                            @if $value == none and length($shadow) > 1 {
                                            @warn "The keyword 'none' must be used as a single argument.";
                                            }
                                            }
                                            @if (length($result) > 0) {
                                            box-shadow: $result;
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryGradients" role="button" aria-expanded="false" aria-controls="categoryGradients">
                                <span class="item-filter-text">Gradients</span>
                            </div>
                            <div class="card-body collapse show" id="categoryGradients">
                                <ul class="list-items">
                                    <li class="list-item" data-id="gradient-bg">
                                        <div class="list-item-content">
                                            <a href="#gradient-bg" class="list-item-text">
                                                <span class="item-filter-text">gradient-bg</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-bg($color: null)</div>
                                        <div class="code-snippet-full">@mixin gradient-bg($color: null) {
                                            background-color: $color;
                                            @if $enable-gradients {
                                            background-image: var(--#{$variable-prefix}gradient);
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-x">
                                        <div class="list-item-content">
                                            <a href="#gradient-x" class="list-item-text">
                                                <span class="item-filter-text">gradient-x</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-x($start-color: $gray-700, $end-color: $gray-800, $start-percent: 0%, $end-percent: 100%)</div>
                                        <div class="code-snippet-full">@mixin gradient-x($start-color: $gray-700, $end-color: $gray-800, $start-percent: 0%, $end-percent: 100%) {
                                            background-image: linear-gradient(to right, $start-color $start-percent, $end-color $end-percent);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-y">
                                        <div class="list-item-content">
                                            <a href="#gradient-y" class="list-item-text">
                                                <span class="item-filter-text">gradient-y</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-y($start-color: $gray-700, $end-color: $gray-800, $start-percent: null, $end-percent: null)</div>
                                        <div class="code-snippet-full">@mixin gradient-y($start-color: $gray-700, $end-color: $gray-800, $start-percent: null, $end-percent: null) {
                                            background-image: linear-gradient(to bottom, $start-color $start-percent, $end-color $end-percent);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-directional">
                                        <div class="list-item-content">
                                            <a href="#gradient-directional" class="list-item-text">
                                                <span class="item-filter-text">gradient-directional</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-directional($start-color: $gray-700, $end-color: $gray-800, $deg: 45deg)</div>
                                        <div class="code-snippet-full">@mixin gradient-directional($start-color: $gray-700, $end-color: $gray-800, $deg: 45deg) {
                                            background-image: linear-gradient($deg, $start-color, $end-color);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-x-three-colors">
                                        <div class="list-item-content">
                                            <a href="#gradient-x-three-colors" class="list-item-text">
                                                <span class="item-filter-text">gradient-x-three-colors</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-x-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red)</div>
                                        <div class="code-snippet-full">@mixin gradient-x-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
                                            background-image: linear-gradient(to right, $start-color, $mid-color $color-stop, $end-color);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-y-three-colors">
                                        <div class="list-item-content">
                                            <a href="#gradient-y-three-colors" class="list-item-text">
                                                <span class="item-filter-text">gradient-y-three-colors</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-y-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red)</div>
                                        <div class="code-snippet-full">@mixin gradient-y-three-colors($start-color: $blue, $mid-color: $purple, $color-stop: 50%, $end-color: $red) {
                                            background-image: linear-gradient($start-color, $mid-color $color-stop, $end-color);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-radial">
                                        <div class="list-item-content">
                                            <a href="#gradient-radial" class="list-item-text">
                                                <span class="item-filter-text">gradient-radial</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-radial($inner-color: $gray-700, $outer-color: $gray-800)</div>
                                        <div class="code-snippet-full">@mixin gradient-radial($inner-color: $gray-700, $outer-color: $gray-800) {
                                            background-image: radial-gradient(circle, $inner-color, $outer-color);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="gradient-striped">
                                        <div class="list-item-content">
                                            <a href="#gradient-striped" class="list-item-text">
                                                <span class="item-filter-text">gradient-striped</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin gradient-striped($color: rgba($white, .15), $angle: 45deg)</div>
                                        <div class="code-snippet-full">@mixin gradient-striped($color: rgba($white, .15), $angle: 45deg) {
                                            background-image: linear-gradient($angle, $color 25%, transparent 25%, transparent 50%, $color 50%, $color 75%, transparent 75%, transparent);
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryTransition" role="button" aria-expanded="false" aria-controls="categoryTransition">
                                <span class="item-filter-text">Transition</span>
                            </div>
                            <div class="card-body collapse show" id="categoryTransition">
                                <ul class="list-items">
                                    <li class="list-item" data-id="transition">
                                        <div class="list-item-content">
                                            <a href="#transition" class="list-item-text">
                                                <span class="item-filter-text">transition</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin transition($transition...)</div>
                                        <div class="code-snippet-full">@mixin transition($transition...) {
                                            @if length($transition) == 0 {
                                            $transition: $transition-base;
                                            }
                                            @if length($transition) > 1 {
                                            @each $value in $transition {
                                            @if $value == null or $value == none {
                                            @warn "The keyword 'none' or 'null' must be used as a single argument.";
                                            }
                                            }
                                            }
                                            @if $enable-transitions {
                                            @if nth($transition, 1) != null {
                                            transition: $transition;
                                            }
                                            @if $enable-reduced-motion and nth($transition, 1) != null and nth($transition, 1) != none {
                                            @media (prefers-reduced-motion: reduce) {
                                            transition: none;
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryClearfix" role="button" aria-expanded="false" aria-controls="categoryClearfix">
                                <span class="item-filter-text">Clearfix</span>
                            </div>
                            <div class="card-body collapse show" id="categoryClearfix">
                                <ul class="list-items">
                                    <li class="list-item" data-id="clearfix">
                                        <div class="list-item-content">
                                            <a href="#clearfix" class="list-item-text">
                                                <span class="item-filter-text">clearfix</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin clearfix()</div>
                                        <div class="code-snippet-full">@mixin clearfix() {
                                            &::after {
                                            display: block;
                                            clear: both;
                                            content: "";
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryContainer" role="button" aria-expanded="false" aria-controls="categoryContainer">
                                <span class="item-filter-text">Container</span>
                            </div>
                            <div class="card-body collapse show" id="categoryContainer">
                                <ul class="list-items">
                                    <li class="list-item" data-id="make-container">
                                        <div class="list-item-content">
                                            <a href="#make-container" class="list-item-text">
                                                <span class="item-filter-text">make-container</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-container($gutter: $container-padding-x)</div>
                                        <div class="code-snippet-full">@mixin make-container($gutter: $container-padding-x) {
                                            width: 100%;
                                            padding-right: var(--#{$variable-prefix}gutter-x, #{$gutter});
                                            padding-left: var(--#{$variable-prefix}gutter-x, #{$gutter});
                                            margin-right: auto;
                                            margin-left: auto;
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 category">
                        <div class="card">
                            <div class="card-header" data-bs-toggle="collapse" href="#categoryGrid" role="button" aria-expanded="false" aria-controls="categoryGrid">
                                <span class="item-filter-text">Grid</span>
                            </div>
                            <div class="card-body collapse show" id="categoryGrid">
                                <ul class="list-items">
                                    <li class="list-item" data-id="make-row">
                                        <div class="list-item-content">
                                            <a href="#make-row" class="list-item-text">
                                                <span class="item-filter-text">make-row</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-row($gutter: $grid-gutter-width)</div>
                                        <div class="code-snippet-full">@mixin make-row($gutter: $grid-gutter-width) {
                                            --#{$variable-prefix}gutter-x: #{$gutter};
                                            --#{$variable-prefix}gutter-y: 0;
                                            display: flex;
                                            flex-wrap: wrap;
                                            margin-top: calc(var(--#{$variable-prefix}gutter-y) * -1);
                                            margin-right: calc(var(--#{$variable-prefix}gutter-x) / -2);
                                            margin-left: calc(var(--#{$variable-prefix}gutter-x) / -2);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="make-col-ready">
                                        <div class="list-item-content">
                                            <a href="#make-col-ready" class="list-item-text">
                                                <span class="item-filter-text">make-col-ready</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-col-ready($gutter: $grid-gutter-width)</div>
                                        <div class="code-snippet-full">@mixin make-col-ready($gutter: $grid-gutter-width) {
                                            box-sizing: if(variable-exists(include-column-box-sizing) and $include-column-box-sizing, border-box, null);
                                            flex-shrink: 0;
                                            width: 100%;
                                            max-width: 100%;
                                            padding-right: calc(var(--#{$variable-prefix}gutter-x) / 2);
                                            padding-left: calc(var(--#{$variable-prefix}gutter-x) / 2);
                                            margin-top: var(--#{$variable-prefix}gutter-y);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="make-col">
                                        <div class="list-item-content">
                                            <a href="#make-col" class="list-item-text">
                                                <span class="item-filter-text">make-col</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-col($size, $columns: $grid-columns)</div>
                                        <div class="code-snippet-full">@mixin make-col($size, $columns: $grid-columns) {
                                            flex: 0 0 auto;
                                            width: percentage($size / $columns);
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="make-col-auto">
                                        <div class="list-item-content">
                                            <a href="#make-col-auto" class="list-item-text">
                                                <span class="item-filter-text">make-col-auto</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-col-auto()</div>
                                        <div class="code-snippet-full">@mixin make-col-auto() {
                                            flex: 0 0 auto;
                                            width: auto;
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="make-col-offset">
                                        <div class="list-item-content">
                                            <a href="#make-col-offset" class="list-item-text">
                                                <span class="item-filter-text">make-col-offset</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-col-offset($size, $columns: $grid-columns)</div>
                                        <div class="code-snippet-full">@mixin make-col-offset($size, $columns: $grid-columns) {
                                            $num: $size / $columns;
                                            margin-left: if($num == 0, 0, percentage($num));
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="row-cols">
                                        <div class="list-item-content">
                                            <a href="#row-cols" class="list-item-text">
                                                <span class="item-filter-text">row-cols</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin row-cols($count)</div>
                                        <div class="code-snippet-full">@mixin row-cols($count) {
                                            > * {
                                            flex: 0 0 auto;
                                            width: 100% / $count;
                                            }
                                            }</div>
                                    </li>
                                    <li class="list-item" data-id="make-grid-columns">
                                        <div class="list-item-content">
                                            <a href="#make-grid-columns" class="list-item-text">
                                                <span class="item-filter-text">make-grid-columns</span>
                                            </a>
                                        </div>
                                        <div class="code-snippet">@mixin make-grid-columns($columns: $grid-columns, $gutter: $grid-gutter-width, $breakpoints: $grid-breakpoints)</div>
                                        <div class="code-snippet-full">@mixin make-grid-columns($columns: $grid-columns, $gutter: $grid-gutter-width, $breakpoints: $grid-breakpoints) {
                                            @each $breakpoint in map-keys($breakpoints) {
                                            $infix: breakpoint-infix($breakpoint, $breakpoints);
                                            @include media-breakpoint-up($breakpoint, $breakpoints) {
                                            .col#{$infix} {
                                            flex: 1 0 0%;
                                            }
                                            .row-cols#{$infix}-auto > * {
                                            @include make-col-auto();
                                            }
                                            @if $grid-row-columns > 0 {
                                            @for $i from 1 through $grid-row-columns {
                                            .row-cols#{$infix}-#{$i} {
                                            @include row-cols($i);
                                            }
                                            }
                                            }
                                            .col#{$infix}-auto {
                                            @include make-col-auto();
                                            }
                                            @if $columns > 0 {
                                            @for $i from 1 through $columns {
                                            .col#{$infix}-#{$i} {
                                            @include make-col($i, $columns);
                                            }
                                            }
                                            @for $i from 0 through ($columns - 1) {
                                            @if not ($infix == "" and $i == 0) {
                                            .offset#{$infix}-#{$i} {
                                            @include make-col-offset($i, $columns);
                                            }
                                            }
                                            }
                                            }
                                            @each $key, $value in $gutters {
                                            .g#{$infix}-#{$key},
                                            .gx#{$infix}-#{$key} {
                                            --#{$variable-prefix}gutter-x: #{$value};
                                            }
                                            .g#{$infix}-#{$key},
                                            .gy#{$infix}-#{$key} {
                                            --#{$variable-prefix}gutter-y: #{$value};
                                            }
                                            }
                                            }
                                            }
                                            }</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Code Snippet & Preview -->
                    <div id="modal-snippet" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-fullscreen bs-modal-dialog" role="document">
                            <div class="modal-content bs-modal-content">
                                <div class="modal-header bs-modal-header">
                                    <div class="header-actions bs-header-actions mx-sm-auto">
                                        <button class="btn btn-action bs-btn-action prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                                            </svg>
                                        </button>
                                        <h5 class="modal-title snippet-title bs-modal-title">Modal title</h5>
                                        <button class="btn btn-action bs-btn-action next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                            </svg>
                                        </button>
                                    </div>
                                    <button type="button" class="btn-close bs-btn-close ms-0" data-bs-dismiss="modal" aria-label="Close">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="modal-body bs-modal-body">
                                    <div class="row">
                                        <div class="col-md-6 position-relative">
                                            <h6 class="text-white modal-content-title">Mixin Name</h6>
                                            <span class="copy-snippet-code">copy</span>
                                            <pre id="editor"></pre>
                                        </div>
                                        <div class="col-md-6 position-relative">
                                            <h6 class="text-white modal-content-code">Mixin</h6>
                                            <span class="copy-info-code">copy</span>
                                            <pre id="preview-editor"></pre>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Modal Code Snippet & Preview -->

                </div><h4 class="no-search-items align-items-center d-flex d-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    <span class="ms-2">No Items Found</span>
                </h4>

            </div>
        </main>
    </body><!-- CheatSheet Footer -->
    <footer class="cheatsheet-footer">
       

        <div class="footer">
            <div class="container footer-container">
                
                    <img src="assets/images/logos/brand-logo-small.png" alt="ThemeSelection" height="38">
                
                <span class="d-none d-md-block">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Made with Love by ThemeSelection
                </span>
            </div>
        </div>
    </footer>
    <!--/ CheatSheet Footer -->

    <!-- Scroll to top -->
    <button type="button" class="btn btn-primary scroll-top">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
        </svg>
    </button>
    <!--/ Scroll to top -->

    <script src="assets/vendors/js/jquery/jquery.min.js"></script>
    <script src="assets/vendors/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/js/ace/ace.js"></script>
    <script src="assets/js/cheatsheet.js"></script>
    <script src="assets/js/shuffle.js"></script>
    <script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d9fa1af7a79649"></script>
    <!-- END: App JS-->
</html>