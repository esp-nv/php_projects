
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
        <meta name="apple-mobile-web-app-title" content="CodePen">
        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
        <title>CodePen - Dashboard UI #2</title>
        <link rel="canonical" href="https://codepen.io/olsiodobashi/pen/dpvBge">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <!-- style -->
        <style>
            aside {
                background-color: #34495E;
                display: inline-block;
                height: 100vh;
                position: fixed;
                width: 25%;
            }
            aside header {
                box-sizing: border-box;
                background-color: #2DCC70;
                height: 80px;
                padding: 0 15px;
            }
            aside header img,
            aside header p {
                display: inline-block;
                vertical-align: middle;
            }
            aside header img {
                border-radius: 50%;
            }
            aside header p {
                font-size: 13px;
                color: white;
                margin-left: 10px;
                text-transform: uppercase;
            }
            aside header > div {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            aside .profile-picture {
                height: 55px;
                width: 55px;
            }
            .side-navigation {
                font-size: 14px;
            }
            .side-navigation a {
                color: #92A1A2;
                display: block;
                padding: 15px 25px;
                text-decoration: none;
                text-transform: uppercase;
            }
            .side-navigation i.fa {
                color: #92A1A2;
                font-size: 20px;
                margin-right: 20px;
            }
            .side-navigation li.active a, 
            .side-navigation li:hover a {
                background-color: #233342;
                color: white;
            }
            .side-navigation li.active i,
            .side-navigation li:hover i {
                color: #2DCC70;
            }
            main {
                float: right;
                vertical-align: top;
                width: 75%;
            }
            .main-head {
                *zoom: 1;
                height: 80px;
                border-bottom: 1px solid #92A1A2;
                color: #92A1A2;
                font-size: 20px;
                padding: 0 20px;
                position: relative;
            }
            .main-head:before,
            .main-head:after {
                content: "";
                display: table;
            }
            .main-head:after {
                clear: both;
            }
            .main-head .icons {
                float: left;
                font-size: 21px;
            }
            .main-head .icons .fa {
                position: relative;
            }
            .main-head .icons .fa + .fa {
                margin-left: 20px;
            }
            .main-head .logo {
                left: 50%;
                position: absolute;
                top: 50%;
                transform: translateX(-50%) translateY(-50%);
            }
            .main-head .logo .fa {
                color: #2DCC70;
                font-size: 40px;
            }
            .main-head .icons,
            .main-head .search {
                position: relative;
                top: 50%;
                transform: translateY(-50%);
            }
            .search {
                float: right;
            }
            .search input {
                border: 0;
                border-bottom: 1px solid transparent;
                font-size: 13px;
                margin-right: 10px;
                outline: none;
                padding-bottom: 3px;
            }
            .search input:hover,
            .search input:focus {
                border-bottom: 1px solid #92A1A2;
            }
            .user-card {
                display: inline-block;
            }
            .user-card figure {
                display: inline-block;
            }
            .user-card figure img {
                border-radius: 50%;
                vertical-align: middle;
                width: 150px;
            }
            .user-card .name {
                font-weight: bold;
                font-size: 24px;
                text-transform: uppercase;
            }
            .user-card .user-role,
            .user-card .experience-points {
                color: #92A1A2;
                font-size: 16px;
            }
            .user-card .experience-points .fa {
                display: inline-block;
                margin-right: 8px;
            }
            .user-card .experience-points .fa:hover {
                color: #92A1A2;
                cursor: default;
            }
            .user-card .user-info {
                display: inline-block;
                margin-left: 15px;
                vertical-align: middle;
            }
            .user-card .user-info span {
                padding-right: 10px;
            }
            .user-card .user-info .fa-star {
                font-size: 18px;
                margin: 0 1px;
                position: relative;
                top: -1px;
            }
            .user-card .user-info .fa-star.on {
                color: #E54239;
            }
            .user-card .user-info .fa-star.off {
                color: #92A1A2;
            }
            .user-card .user-role {
                margin: 9px 0;
            }
            .user-card .user-role a {
                color: #59A4E8;
                margin-left: 11px;
                text-decoration: none;
            }
            .action-links {
                float: right;
                margin-top: 22px;
            }
            .action-links a {
                border: 1px solid #92A1A2;
                color: #92A1A2;
                border-radius: 50%;
                display: block;
                padding: 10px;
                position: relative;
            }
            .action-links a:hover {
                background-color: #2DCC70;
                border-color: #2DCC70;
            }
            .action-links a:hover .fa {
                color: white;
            }
            .action-links a:before,
            .action-links a:after {
                left: 50%;
                opacity: 0;
                position: absolute;
                transform: translateX(-50%);
                transition: all 0.2s ease;
                visibility: hidden;
            }
            .action-links a:before {
                background-color: black;
                border-radius: 3px;
                color: white;
                content: attr(data-title);
                font-size: 12px;
                padding: 5px;
                text-decoration: none;
                top: -35px;
                width: 80px;
            }
            .action-links a:after {
                border-bottom: 6px solid transparent;
                border-right: 6px solid transparent;
                border-left: 6px solid transparent;
                border-top: 6px solid black;
                content: "";
                top: -13px;
            }
            .action-links a:hover:before,
            .action-links a:hover:after {
                opacity: 1;
                visibility: visible;
            }
            .action-links li {
                display: inline-block;
                text-align: center;
            }
            .action-links li + li {
                margin-left: 15px;
            }
            .action-links .fa {
                display: inline-block;
                height: 20px;
                font-size: 19px;
                width: 20px;
            }
            .category-navigation {
                border-bottom: 1px solid #92A1A2;
                padding: 30px 30px 0;
            }
            .category-navigation a {
                box-sizing: border-box;
                color: #2B3A4F;
                display: block;
                font-weight: bold;
                font-size: 14px;
                padding: 6px 0 12px;
                text-decoration: none;
                text-transform: uppercase;
            }
            .category-navigation li {
                display: inline-block;
            }
            .category-navigation li + li {
                margin-left: 25px;
            }
            .category-navigation li.active a,
            .category-navigation li:hover a {
                border-bottom: 4px solid #2DCC70;
            }
            .category-navigation.container {
                padding-bottom: 0;
                padding-top: 10px;
            }
            .card {
                display: inline-block;
                width: 30%;
                vertical-align: top;
            }
            .card li {
                box-sizing: border-box;
                color: #92A1A2;
                cursor: pointer;
                font-size: 13px;
                padding: 15px 16px;
                position: relative;
            }
            .card li .icon {
                position: absolute;
                left: 10px;
            }
            .card li + li {
                border-top: 1px solid #92A1A2;
            }
            .card li:before {
                content: "";
                height: 100%;
                left: -1px;
                opacity: 0;
                position: absolute;
                top: 0;
                width: 4px;
            }
            .card li:hover {
                background-color: #ECF0F1;
                color: #2B3A4F;
            }
            .card li:hover:before {
                opacity: 1;
            }
            .card .hidden-content {
                border-top: 1px solid #92A1A2;
            }
            .card .show-more {
                border-top: 1px solid #92A1A2;
                color: #2B3A4F;
                font-size: 12px;
                padding: 8px 15px;
                text-align: right;
            }
            .card .show-more .fa {
                font-size: 12px;
                margin-left: 5px;
            }
            .card .show-more:before {
                content: none;
            }
            .card .tabs {
                position: relative;
            }
            .card .tabs li {
                background: transparent;
                border: 0;
                border-radius: 3px 3px 0 0;
                box-sizing: border-box;
                color: #92A1A2;
                cursor: pointer;
                display: inline-block;
                font-size: 12px;
                padding: 10px;
                text-align: center;
                text-transform: uppercase;
                width: 50%;
            }
            .card .tabs li span {
                display: block;
                font-size: 34px;
                font-weight: bold;
                margin-bottom: 5px;
            }
            .card .tabs li.active {
                background-color: white;
                border: 1px solid #92A1A2;
                border-bottom: 0;
            }
            .card + .card {
                margin-left: 5%;
            }
            .card.green .content li:before {
                background-color: #2DCC70;
            }
            .card.green .tabs li.active {
                color: #2DCC70;
            }
            .card.orange .content li:before {
                background-color: #E54239;
            }
            .card.orange .tabs li.active {
                color: #E54239;
            }
            .card.purple .content li:before {
                background-color: #8F40B3;
            }
            .card.purple .tabs li.active {
                color: #8F40B3;
            }
            .content {
                background-color: white;
                border: 1px solid #92A1A2;
                border-radius: 0 0 3px 3px;
                box-sizing: border-box;
                display: none;
                margin-top: -1px;
                overflow: hidden;
            }
            .content .has-icon li:not(.show-more) {
                padding: 15px 16px 15px 43px;
            }
            .content .fa {
                font-size: 14px;
                line-height: 0;
                padding-right: 3px;
            }
            .content.visible {
                display: block;
            }
            .card.card-full {
                margin-left: 0;
                margin-top: 5%;
                width: 100%;
            }
            .card.card-full .content {
                display: inline-block;
                height: 280px;
                margin-top: 0;
                overflow: visible;
            }
            .card.card-full .content.activity {
                border-radius: 0 0 3px 0;
            }
            .card.card-full .content.experience-graphs {
                border-right: 0;
                border-radius: 0 0 0 3px;
            }
            .graph {
                bottom: 0;
                height: 100%;
                left: 10px;
                position: absolute;
                text-align: center;
                width: 25px;
            }
            .graph .bar {
                font-size: 10px;
                left: 50%;
                position: absolute;
                transform: translateX(-50%);
            }
            .graph .value {
                background: #2DCC70;
                bottom: 0;
                display: inline-block;
                height: 40.6px;
                left: 0;
                position: absolute;
                width: 100%;
            }
            .graph:before {
                background-color: #000;
                content: "";
                bottom: 0;
                position: absolute;
                width: 50px;
            }
            .container {
                background-color: #ECF0F1;
                padding: 30px;
            }
            .container.user {
                background-color: white;
            }
            h3 {
                color: #92A1A2;
                font-size: 15px;
                margin: 0 0 15px;
            }
            .fa:not(.fa-star):hover {
                color: #2DCC70;
                cursor: pointer;
            }
            .number-alert {
                background-color: #E54239;
                border-radius: 50%;
                box-sizing: border-box;
                color: white;
                display: inline-block;
                font-family: "Tahoma";
                font-size: 9px;
                height: 15px;
                padding: 3px 0;
                position: absolute;
                right: -25%;
                text-align: center;
                top: -25%;
                width: 15px;
            }
            body {
                color: #202020;
                font-family: "Helvetica", "Open Sans", "Arial";
                font-size: 0;
            }
            footer {
                *zoom: 1;
                bottom: 0;
                padding: 0 15px;
                position: fixed;
                right: 0;
                text-align: right;
                width: 100%;
            }
            footer:before,footer:after {
                content: "";
                display: table;
            }
            footer:after {
                clear: both;
            }
            footer .item {
                display: inline-block;
                color: #2B3A4F;
                font-size: 10px;
                text-decoration: none;
                vertical-align: middle;
            }
            footer .item + .item {
                margin-left: 10px;
            }
            footer .link {
                width: 32px;
            }
            footer img {
                width: 100%;
            }
            ul {
                padding-left: 0;
            }
            li {
                list-style: none;
            }
            p {
                margin: 0;
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <aside>
            <header>
                <div><img class="profile-picture" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_10.png"/>
                    <p>Jane Doe</p>
                </div>
            </header>
            <nav class="side-navigation">
                <ul>
                    <li class="active"><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-ship"></i>Projects</a></li>
                    <li><a href="#"><i class="fa fa-users"></i>Users</a></li>
                    <li><a href="#"><i class="fa fa-comments"></i>Comments</a></li>
                    <li><a href="#"><i class="fa fa-area-chart"></i>Stats</a></li>
                </ul>
            </nav>
        </aside>
        <main>
            <header class="main-head">
                <div class="icons"><i class="fa fa-user-md"></i><i class="fa fa-comments-o"></i><i class="fa fa-bell-o"><span class="number-alert">3</span></i></div>
                <div class="logo"><i class="fa fa-rocket"></i></div>
                <div class="search">
                    <input type="text" name="search" placeholder="Type here to search..." autocomplete="off"/><i class="fa fa-search"></i>
                </div>
            </header>
            <div class="container user">
                <div class="user-card">
                    <figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/584938/people_10.png"/></figure>
                    <div class="user-info">
                        <div class="name"> <span>Jane Doe				</span><i class="fa fa-star on"></i><i class="fa fa-star on"></i><i class="fa fa-star on"></i><i class="fa fa-star on"></i><i class="fa fa-star off"></i></div>
                        <div class="user-role">
                            Student &nbsp; &#8226;<a href="#">Learn more</a>
                        </div>
                        <div class="experience-points"><i class="fa fa-coffee"></i>8,977 exp</div>
                    </div>
                </div>
                <div class="action-links">
                    <ul>
                        <li><a href="#" data-title="Edit profile"><i class="fa fa-pencil"></i></a></li>
                        <li><a href="#" data-title="Sign out"><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- main content-->
            <div class="wrapper">
                <ul class="category-navigation">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Admins</a></li>
                    <li><a href="#">Knowledge board</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#">Q&A</a></li>
                </ul>
                <div class="container">
                    <div class="card orange">
                        <ul class="tabs">
                            <li class="active" data-tab="1"><span>32</span>Tabs</li>
                            <li data-tab="2"><span>4</span>Tabs</li>
                        </ul>
                        <div class="content visible" data-content="1">
                            <ul>
                                <li>Tab content 0</li>
                                <li>Tab content 1</li>
                                <li>Tab content 2</li>
                                <li>Tab content 3</li>
                                <li>Tab content 4</li>
                                <li>Tab content 5</li>
                                <ul class="hidden-content">
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                        <div class="content" data-content="2">
                            <ul>
                                <li>Tab content 5</li>
                                <li>Tab content 4</li>
                                <li>Tab content 3</li>
                                <li>Tab content 2</li>
                                <li>Tab content 1</li>
                                <li>Tab content 0</li>
                                <ul class="hidden-content">
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card purple">
                        <ul class="tabs">
                            <li class="active" data-tab="3"><span>21</span>Tabs</li>
                            <li data-tab="4"><span>4</span>Tabs</li>
                        </ul>
                        <div class="content visible" data-content="3">
                            <ul class="has-icon">
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>11</span></div>Tab content 0
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>1</span></div>Tab content 0
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>9</span></div>Tab content 0
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>5</span></div>Tab content 0
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>1</span></div>Tab content 0
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-comment-o"></i><span>9</span></div>Tab content 0
                                </li>
                                <ul class="hidden-content">
                                    <li>
                                        <div class="icon"><i class="fa fa-comment-o"></i><span>9</span></div>Tab content 0
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa fa-comment-o"></i><span>1</span></div>Tab content 0
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa fa-comment-o"></i><span>0</span></div>Tab content 0
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fa fa-comment-o"></i><span>0</span></div>Tab content 0
                                    </li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                        <div class="content" data-content="4">
                            <ul>
                                <li>Tab content 5</li>
                                <li>Tab content 4</li>
                                <li>Tab content 3</li>
                                <li>Tab content 2</li>
                                <li>Tab content 1</li>
                                <li>Tab content 0</li>
                                <ul class="hidden-content">
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card green">
                        <ul class="tabs">
                            <li class="active" data-tab="5"><span>8</span>Tabs</li>
                            <li data-tab="6"><span>4</span>Tabs</li>
                        </ul>
                        <div class="content visible" data-content="5">
                            <ul class="has-icon">
                                <li>
                                    <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <li>
                                    <div class="graph" data-text="83%" data-value="83"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <li>
                                    <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <li>
                                    <div class="graph" data-text="65%" data-value="65"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <li>
                                    <div class="graph" data-text="25%" data-value="25"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <li>
                                    <div class="graph" data-text="40%" data-value="40"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                </li>
                                <ul class="hidden-content">
                                    <li>
                                        <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                    </li>
                                    <li>
                                        <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                    </li>
                                    <li>
                                        <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                    </li>
                                    <li>
                                        <div class="graph" data-text="100%" data-value="100"><span class="value"></span><span class="bar"></span></div>Tab Content 3
                                    </li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                        <div class="content" data-content="6">
                            <ul>
                                <li>Tab content 5</li>
                                <li>Tab content 4</li>
                                <li>Tab content 3</li>
                                <li>Tab content 2</li>
                                <li>Tab content 1</li>
                                <li>Tab content 0</li>
                                <ul class="hidden-content">
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                    <li>More content</li>
                                </ul>
                                <li class="show-more" data-less="Show less" data-more="Show more"> <span>Show more</span><i class="fa fa-chevron-down"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
        <script id="rendered-js" >
      "use strict";
/// <reference path="typings/jquery.d.ts" />
      class Navigation {
          constructor() {
              this.navItem = $('.side-navigation li');
              this.categoryItem = $('.category-navigation li');
              this.activeItem(this.navItem);
              this.activeItem(this.categoryItem);
          }
          activeItem(elem) {
              elem.click((event) => {
                  event.preventDefault();
                  elem.removeClass("active");
                  $(event.currentTarget).addClass("active");
                  var url = $('a', $(event.currentTarget)).attr("data-url");
                  this.fireAjax(url);
              });
          }
          fireAjax(url) {
              var main = $('.wrapper');
              $.ajax({
                  url: url,
                  type: "GET",
                  beforeSend: () => {
                      this.startLoader();
                  },
                  success: () => {
                      setTimeout(() => {
                          this.destroyLoader();
                      }, 5000);
                  }
              });
          }
          startLoader() {
              $('.wrapper').addClass("loading").append('<div class="loader"></div>');
          }
          destroyLoader() {
              $('.wrapper').removeClass("loading");
              $('.spinner').remove();
          }
      }
      class Tabs {
          constructor() {
              this.tab = $('.card .tabs li');
              this.changeTab();
          }
          changeTab() {
              this.tab.click((event) => {
                  var tab = $(event.currentTarget);
                  var tabId = tab.attr("data-tab");
                  tab.addClass("active");
                  tab.siblings().removeClass("active");
                  $('.card .content[data-content=' + tabId + ']').siblings().removeClass("visible");
                  $('.card .content[data-content=' + tabId + ']').addClass("visible");
              });
          }
      }
      class Collapse {
          constructor() {
              this.collapse();
          }
          collapse() {
              $('.hidden-content').slideUp("fast");
              $('.show-more').click((event) => {
                  var target = $(event.currentTarget), less = target.attr("data-less"), more = target.attr("data-more");
                  if (target.hasClass("active")) {
                      target.removeClass("active");
                      $('span', target).text(more);
                      $('.fa', target).removeClass().addClass("fa fa-chevron-down");
                      target.prev('.hidden-content').slideUp(250);
                  } else {
                      target.addClass("active");
                      $('span', target).text(less);
                      $('.fa', target).removeClass().addClass("fa fa-chevron-up");
                      target.prev('.hidden-content').slideDown(250);
                  }
              });
          }
      }
      class Graphs {
          constructor() {
              this.graph = $('.graph');
              this.setGraphValue();
          }
          setGraphValue() {
              this.graph.each((i, element) => {
                  var graph = $(element),
                          // margin to correct the card graphs when there is a 100% value
                          margin = graph.parents('.experience-graphs').length ? 0 : 13, bar = $('.bar', graph), barText = graph.attr("data-text"), value = $('.value', graph), parentHeight = graph.parent().innerHeight() - margin, barValue = parseInt(graph.attr("data-value")), barHeight = parentHeight * (barValue / 100);
                  bar.text(barText);
                  value.css({
                      height: barHeight + "px"
                  });
                  bar.css({
                      bottom: (barHeight - 1) + "px"
                  });
              });
          }
      }
      class LineChart {
          constructor() { }
          initChart() {
              var ctx = $("#lineChart");
              var myLineChart = new Chart(ctx, {
                  type: 'line',
                  data: data,
                  options: options
              });
          }
      }
      new Navigation();
      new Tabs();
      new Collapse();
      new Graphs();
      new LineChart();
//# sourceURL=pen.js
        </script>


    </body>

</html>
