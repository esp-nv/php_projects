<html>
    <head>
        <title>css dropdown</title>
        <style>
            .w3-col,.w3-half,.w3-third{float:left;width:100%}
            .w3-third{width:33.33333%}
            .w3-code,.w3-codespan{font-family:Consolas,Menlo,"courier new",monospace;font-size:16px}
            .w3-code{width:auto;background-color:#fff;color:#000;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
            .w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
            .dropbtn {
                background-color: #04AA6D;
                color: white;
                padding: 16px;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown:hover .dropbtn {
                background-color:#059862;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 100%;
                overflow: auto;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown2:hover .dropdown-content {
                display: block;
            }

            .right {
                right:0;
            }
            @media only screen and (max-width: 600px) {
                .dropdown {
                    display:inline;
                }
                .dropbtn {
                    width: 100%;
                    margin-top:55px;
                }
                .dropbtn2 {
                    margin-top:5px;
                }
                .dropspan {
                    width: 100%;
                    margin-top:5px;
                }

                .dropimg {
                    margin-top:55px;
                }
                .right {
                    left:0;
                    min-width:300px;
                }

            }

            @media only screen and (max-width: 346px) {
                .right {
                    left:0;
                    min-width:252px;
                }

            }
            .show {display:block;}

            .dropdownimg {
                position: relative;
                display: inline-block;
            }

            .dropdown-contentimg {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            }

            .dropdownimg:hover .dropdown-contentimg {
                display: block;
            }

            .descimg {
                padding: 15px;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <h1>CSS <span class="color_h1">Dropdowns</span></h1>

        <hr>
        <p class="intro">Create a hoverable dropdown with CSS.</p>
        <hr>
        <h2>Demo: Dropdown Examples</h2>

        <p>Move the mouse over the examples below:</p>

        <div class="w3-row" style="margin-top:35px;margin-bottom:35px;">
            <div class="w3-third">
                <div class="dropdown dropdown2" style="position:relative;top:15px;">
                    <span class="dropspan">Dropdown Text</span>
                    <div class="dropdown-content w3-white" style="padding:8px 16px;min-width:150px;text-align:center">
                        <p>Hello World!</p>
                    </div>
                </div>
            </div>

            <div class="w3-third">
                <div class="dropdown dropdown2">
                    <button class="dropbtn">Dropdown Menu</button>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </div>

            <div class="w3-third">
                <div class="dropdown dropdown2">
                    <span style="position:relative;bottom:15px;">Other: </span><img class="dropimg" src="img_5terre.jpg" alt="Cinque Terre" width="100" height="50">
                    <div class="dropdown-content right">
                        <div class="img">
                            <img src="img_5terre.jpg" alt="Cinque Terre" width="300" height="200">
                            <div class="w3-white" style="padding:15px;text-align:center;">Beautiful Cinque Terre</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p style="clear:both"></p>
        <hr>

        <h2>Basic Dropdown</h2>

        <p>Create a dropdown box that appears when the user moves the mouse over an 
            element.</p>

        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;style&gt;<br>.dropdown {<br>&nbsp; position: relative;<br>&nbsp; 
                display: inline-block;<br>}<br><br>.dropdown-content {<br>&nbsp; display: 
                none;<br>&nbsp; position: absolute;<br>&nbsp; 
                background-color: #f9f9f9;<br>&nbsp; min-width: 160px;<br>&nbsp;&nbsp;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);<br>
                &nbsp; padding: 
                12px 16px;<br>&nbsp; z-index: 1;<br>}<br><br>.dropdown:hover 
                .dropdown-content {<br>&nbsp; display: block;<br>}<br>&lt;/style&gt;<br><br>
                &lt;div class="dropdown"&gt;<br>
                &nbsp; &lt;span&gt;Mouse over me&lt;/span&gt;<br>&nbsp; 
                &lt;div class="dropdown-content"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;p&gt;Hello World!&lt;/p&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
        </div>
        <h3>Example Explained</h3>
        <p><strong>HTML)</strong> Use any element to open the dropdown content, e.g. a 
            &lt;span&gt;, or a &lt;button&gt; element.</p>
        <p>Use a container element (like &lt;div&gt;) to create the dropdown content and add 
            whatever you want inside of it.</p>
        <p>Wrap a &lt;div&gt; element around the elements to position the dropdown content 
            correctly with CSS.</p>
        <p><strong>CSS)</strong> The <code class="w3-codespan">.dropdown</code> class uses <code class="w3-codespan">position:relative</code>, which is needed when we want the 
            dropdown content to be placed right below the dropdown button (using <code class="w3-codespan">position:absolute</code>).</p>
        <p>The <code class="w3-codespan">.dropdown-content</code> class holds the actual dropdown content. It is hidden by 
            default, and will be displayed on hover (see below). Note the <code class="w3-codespan">min-width</code> is set to 160px. Feel free to change 
            this. <strong>Tip:</strong> If you want the width of the dropdown content to be 
            as wide as the dropdown button, set the <code class="w3-codespan">width</code> to 100% (and <code class="w3-codespan">overflow:auto</code> to 
            enable scroll on small screens).</p>
        <p>Instead of using a border, we have used the CSS <code class="w3-codespan">box-shadow</code> property to make the 
            dropdown menu look like a "card".</p>
        <p>The <code class="w3-codespan">:hover</code> selector is used to show the dropdown menu when the user moves the 
            mouse over the dropdown button.</p>
        <hr>
        <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
            <!-- MidContent -->
            <!-- <p class="adtext">Advertisement</p> -->

            <div id="adngin-mid_content-0"></div>

        </div>
        <hr>

        <h2>Dropdown Menu</h2>

        <p>Create a dropdown menu that allows the user to choose an option from a list:</p>
        <div class="dropdown dropdown2">
            <button class="dropbtn dropbtn2">Dropdown Menu</button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <p>This example is similar to the previous one, except that we add links inside the dropdown box and style them to fit a styled dropdown button:</p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate htmlHigh">
                &lt;style&gt;<br>/* Style The Dropdown Button */<br>.dropbtn {<br>&nbsp; 
                background-color: #4CAF50;<br>&nbsp; color: white;<br>&nbsp; 
                padding: 16px;<br>&nbsp; font-size: 16px;<br>&nbsp; 
                border: none;<br>&nbsp; cursor: pointer;<br>}<br><br>/* The 
                container &lt;div&gt; - needed to position the dropdown content */<br>.dropdown {<br>
                &nbsp; position: relative;<br>&nbsp; display: 
                inline-block;<br>}<br><br>/* Dropdown Content (Hidden by Default) */<br>
                .dropdown-content {<br>&nbsp; display: none;<br>&nbsp; position: 
                absolute;<br>&nbsp; background-color: #f9f9f9;<br>&nbsp; 
                min-width: 160px;<br>&nbsp; box-shadow: 
                0px 8px 16px 0px rgba(0,0,0,0.2);<br>&nbsp; z-index: 1;<br>}<br><br>/* Links inside the dropdown */<br>
                .dropdown-content a {<br>&nbsp; color: black;<br>&nbsp;&nbsp;padding: 12px 16px;<br>&nbsp; text-decoration: none;<br>
                &nbsp; 
                display: block;<br>}<br><br>/* Change color of dropdown links on hover */<br>
                .dropdown-content a:hover {background-color: #f1f1f1}<br><br>/* Show the 
                dropdown menu on hover */<br>.dropdown:hover .dropdown-content {<br>&nbsp; 
                display: block;<br>}<br><br>/* Change the background color of the dropdown 
                button when the dropdown content is shown */<br>.dropdown:hover .dropbtn {<br>&nbsp;&nbsp;background-color: #3e8e41;<br>}<br>&lt;/style&gt;<br><br>
                &lt;div class="dropdown"&gt;<br>&nbsp; &lt;button class="dropbtn"&gt;Dropdown&lt;/button&gt;<br>&nbsp; 
                &lt;div class="dropdown-content"&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href="#"&gt;Link 
                1&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; 
                &lt;a href="#"&gt;Link 2&lt;/a&gt;<br>&nbsp;&nbsp;&nbsp; &lt;a href="#"&gt;Link 3&lt;/a&gt;<br>&nbsp; &lt;/div&gt;<br>&lt;/div&gt;</div>
            </div>
        <hr>

        <h2>Right-aligned Dropdown Content</h2>

        <div class="dropdown dropdown2" style="float:left;">
            <button class="dropbtn dropbtn2">Left</button>
            <div class="dropdown-content" style="min-width:160px;">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>

        <div class="dropdown dropdown2" style="float:right;">
            <button class="dropbtn dropbtn2">Right</button>
            <div class="dropdown-content" style="min-width:160px;right:0;">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>
        <p style="clear:both;"></p>


        <p style="margin-top:30px;">If you want the dropdown menu to go from right to left, instead of left to right, add <code class="w3-codespan">right: 0;</code></p>
        <div class="w3-example">
            <h3>Example</h3>
            <div class="w3-code notranslate cssHigh">
                .dropdown-content {<br>&nbsp; right: 0;<br>}<br></div>
            </div>
        <hr>

        <h2>More Examples</h2>

        <div class="w3-example">
            <h3>Dropdown Image</h3>
            <p>How to add an image and other content inside the dropdown box.</p>

            <div class="w3-white w3-padding">
                <p>Hover over the image:</p>
                <div class="dropdownimg" style="padding-bottom:15px;">
                    <img src="img_5terre.jpg" alt="Cinque Terre" width="100" height="50">
                    <div class="dropdown-contentimg">
                        <img src="img_5terre.jpg" alt="Cinque Terre" width="300" height="200">
                        <div class="w3-white descimg">Beautiful Cinque Terre</div>
                    </div><br>
                </div><br>
            </div>
             </div>

        <div class="w3-example">
            <h3>Dropdown Navbar</h3>
            <p>How to add a dropdown menu inside a navigation bar.</p>

            <div class="w3-white">
                <iframe src="dropdown_navbar.php" style="width:50%;border:none;height:200px"></iframe>
            </div>
        </div>


    </body>
</html>
