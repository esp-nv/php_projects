
<html>
    <head>
        <title>css </title>
        <style>
            body{padding:25px;}
            .style{
                padding:5px; 
                border-width:5px ; 
                border-style: solid;
                
            }
            table{
                border:solid #000;
                th, tr{
                
                padding: 15px;}
            }
            tr:nth-child(even) {background-color: #0dcaf0;}
            
        </style>
        
    </head>
    <body>
        <p> <a href="index.php">Css</a> <p>
        <h2>CSS Selectors</h2>
        <p>CSS selectors are used to &quot;find&quot; (or select) the HTML elements you 
            want to style.</p>
        <p>We can divide CSS selectors into five categories:</p>
        <ul>
            <li>Simple selectors (select elements based on name, id, class)</li>
            <li>Combinator selectors -(select elements based on a specific relationship between them)</li>
            <li>Pseudo-class selectors- (select elements based on a certain state)</li>
            <li>Pseudo-elements selectors - (select and style a part of an element)</li>
            <li>Attribute selectors - (select elements based on an attribute or attribute value)</li>
        </ul>
        <p>This page will explain the most basic CSS selectors.</p>
        <hr>

        <h2>The CSS element Selector</h2>
        <p>The element selector selects HTML elements based on the element name.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>Here, all &lt;p&gt; elements on the page will be 
                center-aligned, with a red text color:&nbsp;</p>
            <div class="style" >
                p
                {<br>
                &nbsp;&nbsp;text-align: center;<br>
                &nbsp;&nbsp;color: red;<br>
                }
            </div>

        </div>
        <hr>

        <h2>The CSS id Selector</h2>
        <p>The id selector uses the id attribute of an HTML element to select a specific element.</p>
        <p>The id of an element is unique within a page, so the id selector is 
            used to 
            select one unique element!</p>
        <p>To select an element with a specific id, write a hash (#) character, followed by 
            the id of the element.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>The CSS rule below will be applied to the HTML element with id=&quot;para1&quot;:&nbsp;</p>
            <div class="style" >
                #para1
                {<br>
                &nbsp;&nbsp;text-align: center;<br>
                &nbsp;&nbsp;color: red;<br>
                }
            </div>
           
        </div>
        <div class="w3-panel w3-note">
            <p><strong>Note:</strong> An id name cannot start with a number!</p>
        </div>
        <hr>
        <div id="midcontentadcontainer" style="overflow:auto;text-align:center">
            <!-- MidContent -->
            <!-- <p class="adtext">Advertisement</p> -->

            <div id="adngin-mid_content-0"></div>

        </div>
        <hr>

        <h2>The CSS class Selector</h2>
        <p>The class selector selects HTML elements with a specific class attribute.</p>
        <p>To select elements with a specific class, write a period (.) character, followed by the 
            class name.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>In this example all HTML elements with class=&quot;center&quot; will be red and center-aligned:&nbsp;</p>
            <div class="style" >
                .center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
            </div>
            
        </div>

        <p>You can also specify that only specific HTML elements should be affected by a class.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>In this example only &lt;p&gt; elements with class=&quot;center&quot; will be 
                red and center-aligned:&nbsp;</p>
            <div class="style" >
                p.center {<br>&nbsp; text-align: center;<br>&nbsp;&nbsp;color: red;<br>}
            </div>
            
        </div>

        <p>HTML elements 
            can also refer to more than one class.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>In this example the &lt;p&gt; element will be styled according to class=&quot;center&quot; 
                and to class=&quot;large&quot;:&nbsp;</p>
            <div class="style" >
                &lt;p class=&quot;center large&quot;&gt;This paragraph refers to two classes.&lt;/p&gt;</div>
            
        </div>
        <div class="w3-panel w3-note">
            <p><strong>Note:</strong> A class name cannot start with a number!</p>
        </div>

        <hr>

        <h2>The CSS Universal Selector</h2>
        <p>The universal selector (*) selects all HTML 
            elements on the page.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>The CSS rule below will affect every HTML element on the page:&nbsp;</p>
            <div class="style" >
                *
                {<br>
                &nbsp;&nbsp;text-align: center;<br>
                &nbsp;&nbsp;color: blue;<br>
                }
            </div>
            
        </div>
        <hr>

        <h2>The CSS Grouping Selector</h2>
        <p>The grouping selector selects all the HTML elements with the same style 
            definitions.</p>
        <p>Look at the following CSS code (the h1, h2, and p elements have the same 
            style definitions):</p>
        <div class="w3-example">
            <div class="style" >
                h1
                {<br>
                &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
                }<br>
                <br>h2
                {<br>
                &nbsp;
                text-align: center;<br>&nbsp; color: red;<br>}<br>
                <br>p
                {<br>
                &nbsp;&nbsp;text-align: center;<br>&nbsp;&nbsp;color: red;<br>
                }</div></div>


        <p>It will be better to group the selectors, to minimize the code.</p>
        <p>To group selectors, separate each selector with a comma.</p>
        <div class="w3-example">
            <h3>Example</h3>
            <p>In this example we have grouped the selectors from the code above:&nbsp;</p>
            <div class="style" >
                h1, h2, p
                {<br>
                &nbsp;
                text-align: center;<br>&nbsp;&nbsp;color: red;<br>}</div>
            
        </div>
        <hr>


        <hr>

        <h2>All CSS Simple Selectors</h2>
        
            <table border="1">
                <tr>
                    <th>Selector</th>
                    <th>Example</th>
                    <th>Example description</th>
                </tr>
                <tr>
                    <td>#<i>id</i></td>
                    <td class="notranslate">#firstname</td>
                    <td>Selects the element with id=&quot;firstname&quot;</td>
                </tr>
                <tr>
                    <td>.<i>class</i></td>
                    <td class="notranslate">.intro</td>
                    <td>Selects all elements with class=&quot;intro&quot;</td>
                </tr>
                <tr>
                    <td><em>element.class</em></td>
                    <td class="notranslate">p.intro</td>
                    <td>Selects only &lt;p&gt; elements with class=&quot;intro&quot;</td>
                </tr>
                <tr>
                    <td>*</td>
                    <td class="notranslate">*</td>
                    <td>Selects all elements</td>
                </tr>
                <tr>
                    <td><i>element</i></td>
                    <td class="notranslate">p</td>
                    <td>Selects all &lt;p&gt; elements</td>
                </tr>
                <tr>
                    <td><i>element,element,..</i></td>
                    <td class="notranslate">div, p</td>
                    <td>Selects all &lt;div&gt; elements and all &lt;p&gt; elements</td>
                </tr>
            </table>
       
    </body>
</html>


