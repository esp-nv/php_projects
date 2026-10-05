<html>
    <head>
        <title>CSS Vertical Navigation Bar</title>
        <!-- comment  <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="main_1.css">-->

        <style>
            .w3-col,.w3-half,.w3-third{float:left;width:100%}
            .w3-third{width:33.33333%}
            .w3-code,.w3-codespan{font-family:Consolas,Menlo,"courier new",monospace;font-size:16px}
            .w3-code{width:auto;background-color:#fff;color:#000;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
            .w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
            .ws-black{
                background-color: grey;
            }
            ul.horizontal {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            ul.horizontal li {
                float: left;
            }

            ul.horizontal li a {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            ul.horizontal li a:hover:not(.active) {
                background-color: #000;
            }

            ul.horizontal li a.active {
                background-color:#04AA6D;
            }

            ul.horizontal2 {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                border: 1px solid #e7e7e7;
                background-color: #f3f3f3;
            }

            ul.horizontal2 li {
                float: left;
            }

            ul.horizontal2 li a {
                display: inline-block;
                color: #666;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            ul.horizontal2 li a:hover:not(.active) {
                background-color: #ddd;
            }

            ul.horizontal2 a.active {
                color: white;
                background-color: #04AA6D;
            }
            .width94 {
                width:94%;
            }
            @media screen and (max-width: 600px) {
                .width94 {
                    width:100%;
                }
            }

            ul.vertical {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
            }

            ul.vertical li a {
                display: block;
                color: #000;
                padding: 8px 0 8px 16px;
                text-decoration: none;
            }

            ul.vertical li a:hover:not(.active) {
                background-color: #555;
                color:white;
            }

            ul.vertical a.active {
                background-color: #04AA6D;
                color:white;
            }

            ul.gray {
                border: 1px solid #e7e7e7;
                background-color: #f3f3f3;
            }

            ul.gray li a {
                display: block;
                color: #666;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            ul.gray li a:hover:not(.active) {
                background-color: #ddd;
            }

            ul.gray li a.active {
                color: white;
                background-color: #008CBA;
            }
            .rightli {
                float:right;
            }

            @media screen and (max-width: 408px) {
                .rightli {
                    display:none;
                }
            }

            ul.ex {
                width:90%;
            }
            @media screen and (max-width: 600px) {
                ul.ex {
                    width:100%;
                }
            }

            ul.divider li {
                float: left;
                border-right:1px solid #bbb;
            }

            ul.divider li:last-child {
                border-right: none;
            }
            ul.border {
                border: 1px solid #555;
            }

            ul.border li a {
                padding: 8px 16px;
            }

            ul.border li {
                text-align: center;
                border-bottom: 1px solid #555;
            }

            ul.border li:last-child {
                border-bottom: none;
            }
        </style>
    </head>
    <body>
        <h1>CSS <span class="color_h1">Vertical Navigation Bar</span></h1>
        <div class="w3-clear nextprev">
            <a class="w3-left w3-btn" href="css_navbar.asp">&#10094; Previous</a>
            <a class="w3-right w3-btn" href="css_navbar_horizontal.asp">Next &#10095;</a>
        </div>
        <hr>

        <h2>Vertical Navigation Bar</h2>
        <ul class="vertical ex">
            <li><a class="active" href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">News</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)">About</a></li>
        </ul>

        <p>To build a vertical navigation bar, you can style the &lt;a&gt; elements 
            inside the list, in addition to the code from the previous page:</p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                li a
                {<br>
                &nbsp;
                display: block;<br>
                &nbsp;
                width: 60px;<br>
                }</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical">Try it Yourself &raquo;</a>
        </div>

        <p>Example explained:</p>
        <ul>
            <li><code class="w3-codespan">display: block;</code> - Displaying the links as block elements makes the whole 
                link area clickable (not just the text), and it allows us to specify the width 
                (and padding, margin, height, etc. if you want)</li>
            <li><code class="w3-codespan">width: 60px;</code> - Block elements take up the full width available by default. We want to specify a 60 pixels width</li>
        </ul>

        <p>You can also set the width of &lt;ul&gt;, and remove the width of &lt;a&gt;, 
            as they will take up the full width available when displayed as block elements. 
            This will produce the same result as our previous example:</p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul
                {<br>
                &nbsp;
                list-style-type: none;<br>
                &nbsp;
                margin: 0;<br>
                &nbsp;
                padding: 0;<br>&nbsp; width: 60px;<br>
                }
                <br><br>li
                a
                {<br>
                &nbsp;
                display: block;<br>
                }</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical2">Try it Yourself &raquo;</a>
        </div>
        <hr>
        <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
            <!-- MidContent -->
            <!-- <p class="adtext">Advertisement</p> -->

            <div id="adngin-mid_content-0"></div>

        </div>
        <hr>

        <h2>Vertical Navigation Bar Examples</h2>

        <p>Create a basic vertical navigation bar with a gray background color and 
            change the background color of the links when the user moves the mouse over 
            them:</p>
        <ul class="vertical">
            <li><a href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">News</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)">About</a></li>
        </ul>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul {<br>&nbsp; list-style-type: none;<br>&nbsp; 
                margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; width: 
                200px;<br>&nbsp; background-color: #f1f1f1;<br>}<br><br>li a {<br>&nbsp; display: 
                block;<br>&nbsp; color: #000;<br>&nbsp; padding: 8px 16px;<br>&nbsp; text-decoration: none;<br>}<br><br>/* 
                Change the link color on hover */<br>li a:hover {<br>&nbsp; 
                background-color: #555;<br>&nbsp;&nbsp;color: white;<br>}</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical_gray">Try it Yourself &raquo;</a>
        </div>

        <h3 style="margin-top:35px;">Active/Current Navigation Link</h3>
        <p>Add an "active" class to the current link to let the user know which page he/she is on:</p>
        <ul class="vertical">
            <li><a class="active" href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">News</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)">About</a></li>
        </ul>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                .active {<br>&nbsp; background-color: #04AA6D;<br>&nbsp; 
                color: white;<br>}</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical_active">Try it Yourself &raquo;</a>
        </div>

        <h3 style="margin-top:35px;">Center Links &amp; Add Borders</h3>
        <p>Add <code class="w3-codespan">text-align:center</code> to &lt;li&gt; or &lt;a&gt; to center the links.</p>
        <p>Add the <code class="w3-codespan">border</code> property to &lt;ul&gt; add a border around the navbar. If you also want 
            borders inside the navbar, add a <code class="w3-codespan">border-bottom</code> to all &lt;li&gt; elements, except for the 
            last one:</p>
        <ul class="vertical border">
            <li><a class="active" href="javascript:void(0)">Home</a></li>
            <li><a href="javascript:void(0)">News</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
            <li><a href="javascript:void(0)">About</a></li>
        </ul>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul {<br>&nbsp; border: 1px solid #555;<br>}<br><br>li {<br>&nbsp; text-align: center;<br>
                &nbsp; 
                border-bottom: 1px solid #555;<br>}<br><br>li:last-child {<br>&nbsp; 
                border-bottom: none;<br>}</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical_borders">Try it Yourself &raquo;</a>
        </div>

        <h3 style="margin-top:35px;">Full-height Fixed Vertical Navbar</h3>
        <p>Create a full-height, &quot;sticky&quot; side navigation:</p>

        <iframe src="trycss_navbar_vertical_iframe.htm" style="height:262px;width:100%;border:3px solid #f1f1f1;border-left:none"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul {<br>&nbsp; list-style-type: none;<br>&nbsp; 
                margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; width: 
                25%;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp;&nbsp;height: 100%; /* Full height */<br>
                &nbsp; position: fixed; /* 
                Make it stick, even on scroll */<br>&nbsp; 
                overflow: auto; /* Enable scrolling if the sidenav has too much content */<br>}</div>
            <a target="_blank" class="w3-btn w3-margin-bottom" href="tryit.asp?filename=trycss_navbar_vertical_fixed">Try it Yourself &raquo;</a>
        </div>
        <p><strong>Note:</strong> This example might not work properly on mobile devices.</p>


        <br>
        <div class="w3-clear nextprev">
            <a class="w3-left w3-btn" href="css_navbar.asp">&#10094; Previous</a>
            <a class="w3-right w3-btn" href="css_navbar_horizontal.asp">Next &#10095;</a>
        </div>
        <div
            id="user-profile-bottom-wrapper"
            class="user-profile-bottom-wrapper"
            >
            <div class="user-authenticated w3-hide">
                <a
                    href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fmy-learning.w3schools.com"
                    class="user-profile-btn ga-bottom ga-bottom-profile"
                    title="Your W3Schools Profile"
                    aria-label="Your W3Schools Profile"
                    target="_top"
                    >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        version="1.1"
                        viewBox="0 0 2048 2048"
                        class="user-profile-icon"
                        aria-label="Your W3Schools Profile Icon"
                        >
                    <path
                        d="M 843.500 1148.155 C 837.450 1148.515, 823.050 1149.334, 811.500 1149.975 C 742.799 1153.788, 704.251 1162.996, 635.391 1192.044 C 517.544 1241.756, 398.992 1352.262, 337.200 1470 C 251.831 1632.658, 253.457 1816.879, 340.500 1843.982 C 351.574 1847.431, 1696.426 1847.431, 1707.500 1843.982 C 1794.543 1816.879, 1796.169 1632.658, 1710.800 1470 C 1649.008 1352.262, 1530.456 1241.756, 1412.609 1192.044 C 1344.588 1163.350, 1305.224 1153.854, 1238.500 1150.039 C 1190.330 1147.286, 1196.307 1147.328, 1097 1149.035 C 1039.984 1150.015, 1010.205 1150.008, 950 1149.003 C 851.731 1147.362, 856.213 1147.398, 843.500 1148.155"
                        stroke="none"
                        fill="#2a93fb"
                        fill-rule="evenodd"
                        />
                    <path
                        d="M 1008 194.584 C 1006.075 194.809, 999.325 195.476, 993 196.064 C 927.768 202.134, 845.423 233.043, 786 273.762 C 691.987 338.184, 622.881 442.165, 601.082 552 C 588.496 615.414, 592.917 705.245, 611.329 760.230 C 643.220 855.469, 694.977 930.136, 763.195 979.321 C 810.333 1013.308, 839.747 1026.645, 913.697 1047.562 C 1010.275 1074.879, 1108.934 1065.290, 1221 1017.694 C 1259.787 1001.221, 1307.818 965.858, 1339.852 930.191 C 1460.375 795.998, 1488.781 609.032, 1412.581 451.500 C 1350.098 322.327, 1240.457 235.724, 1097.500 202.624 C 1072.356 196.802, 1025.206 192.566, 1008 194.584"
                        stroke="none"
                        fill="#0aaa8a"
                        fill-rule="evenodd"
                        />
                    </svg>

                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="user-progress"
                        aria-label="Your W3Schools Profile Progress"
                        >
                    <path
                        class="user-progress-circle1"
                        fill="none"
                        d="M 25.99650934151373 15.00000030461742 A 20 20 0 1 0 26 15"
                        ></path>
                    <path
                        class="user-progress-circle2"
                        fill="none"
                        d="M 26 15 A 20 20 0 0 0 26 15"
                        ></path>
                    </svg>

                    <span class="user-progress-star">&#x2605;</span>

                    <span class="user-progress-point">+1</span>
                </a>
            </div>

            <div class="w3s-pathfinder -teaser user-anonymous w3-hide">
                <div class="-background-image -variant-t2">&nbsp;</div>

                <div class="-inner-wrapper">
                    <div class="-main-section">
                        <div class="-inner-wrapper">
                            <div class="-headline">Track your progress - it's free!</div>
                            <div class="-body">
                                <div class="-progress-bar">
                                    <div class="-slider" style="width: 20%;">&nbsp;</div>    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="-right-side-section">
                        <div class="-user-session-btns">
                            <a
                                href="https://profile.w3schools.com/log-in?redirect_url=https%3A%2F%2Fpathfinder.w3schools.com"
                                class="-login-btn w3-btn bar-item-hover w3-right ws-light-green ga-bottom ga-bottom-login"
                                title="Login to your account"
                                aria-label="Login to your account"
                                target="_top"
                                >
                                Log in
                            </a>

                            <a
                                href="https://profile.w3schools.com/sign-up?redirect_url=https%3A%2F%2Fpathfinder.w3schools.com"
                                class="-signup-btn w3-button w3-right ws-green ws-hover-green ga-bottom ga-bottom-signup"
                                title="Sign Up to Improve Your Learning Experience"
                                aria-label="Sign Up to Improve Your Learning Experience"
                                target="_top"
                                >
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="w3-col l2 m12" id="right">

        <div class="sidesection">
            <div id="skyscraper">

                <div id="adngin-sidebar_top-0"></div>

            </div>
        </div>

        <style>
            .ribbon-vid {
                font-size:12px;
                font-weight:bold;
                padding: 6px 20px;
                left:-20px;
                top:-10px;
                text-align: center;
                color:black;
                border-radius:25px;
            }
        </style>

        <div class="sidesection" style="margin-top:20px;margin-bottom:20px;">
            <a id="upperfeatureshowcaselink" class="ga-right ga-top-fa-25" href="https://campus.w3schools.com/products/w3schools-full-access-course" target="_blank">
                <picture id="upperfeatureshowcase">
                    <source id="upperfeatureshowcase3001" srcset="/images/img_fa_up_300.webp" media="(max-width: 990px)" style="border-radius: 5px;">
                    <source id="upperfeatureshowcase120" srcset="/images/img_fa_up_120.webp" media="(max-width: 1260px)" style="border-radius: 5px;">
                    <source id="upperfeatureshowcase160" srcset="/images/img_fa_up_160.webp" media="(max-width: 1700px)" style="border-radius: 5px;">
                    <img id="upperfeatureshowcase300" src="/images/img_fa_up_300.png" alt="Get Certified" style="width:auto;border-radius: 5px;" loading="lazy">
                </picture>
            </a>
        </div>

        <div class="sidesection">
            <h4><a href="/colors/colors_picker.asp">COLOR PICKER</a></h4>
            <a href="/colors/colors_picker.asp" class="ga-right">
                <picture>
                    <source srcset="/images/colorpicker2000.webp" type="image/webp">
                    <img src="/images/colorpicker2000.png" alt="colorpicker" loading="lazy">
                </picture>
            </a>
        </div>
</body>
</html>
