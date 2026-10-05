<html>
    <head>
        <title>CSS Vertical Navigation Bar</title>
    </head>
    <style>
        .w3-col,.w3-half,.w3-third{float:left;width:100%}
        .w3-third{width:33.33333%}
        .w3-code,.w3-codespan{font-family:Consolas,Menlo,"courier new",monospace;font-size:16px}
        .w3-code{width:auto;background-color:#fff;color:#000;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
        .w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
        ul.horizontal {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
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
            width:100%;
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
    <body>
        <h1>CSS <span class="color_h1">Vertical Navigation Bar</span></h1>

        <hr>

        <h2>Vertical Navigation Bar</h2>
        <ul class="vertical ex">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
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
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
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
        </div>

        <h3 style="margin-top:35px;">Active/Current Navigation Link</h3>
        <p>Add an "active" class to the current link to let the user know which page he/she is on:</p>
        <ul class="vertical">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                .active {<br>&nbsp; background-color: #04AA6D;<br>&nbsp; 
                color: white;<br>}</div>
        </div>

        <h3 style="margin-top:35px;">Center Links &amp; Add Borders</h3>
        <p>Add <code class="w3-codespan">text-align:center</code> to &lt;li&gt; or &lt;a&gt; to center the links.</p>
        <p>Add the <code class="w3-codespan">border</code> property to &lt;ul&gt; add a border around the navbar. If you also want 
            borders inside the navbar, add a <code class="w3-codespan">border-bottom</code> to all &lt;li&gt; elements, except for the 
            last one:</p>
        <ul class="vertical border">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul {<br>&nbsp; border: 1px solid #555;<br>}<br><br>li {<br>&nbsp; text-align: center;<br>
                &nbsp; 
                border-bottom: 1px solid #555;<br>}<br><br>li:last-child {<br>&nbsp; 
                border-bottom: none;<br>}</div>
        </div>

        <h3 style="margin-top:35px;">Full-height Fixed Vertical Navbar</h3>
        <p>Create a full-height, &quot;sticky&quot; side navigation:</p>

        <iframe src="navbar_vertical_iframe.php" style="height:262px;width:50%;border:3px solid #f1f1f1;border-left:none"></iframe>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                ul {<br>&nbsp; list-style-type: none;<br>&nbsp; 
                margin: 0;<br>&nbsp; padding: 0;<br>&nbsp; width: 
                25%;<br>&nbsp; background-color: #f1f1f1;<br>&nbsp;&nbsp;height: 100%; /* Full height */<br>
                &nbsp; position: fixed; /* 
                Make it stick, even on scroll */<br>&nbsp; 
                overflow: auto; /* Enable scrolling if the sidenav has too much content */<br>}</div>
        </div>
        <p><strong>Note:</strong> This example might not work properly on mobile devices.</p>


        <br>


    </body>
</html>
