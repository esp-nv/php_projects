<!DOCTYPE html>
<html>
    <head>
        <title>css align</title>
        
    </div>
    <style>
        body{
            padding: 20px;
        }
        .nv_cl::after{
            content: "";
            clear: both;
            display: table;
        }
        hr{
            border-color:  #0dcaf0;
        }
        .w3-code{padding: 15px;
                    margin-top:  15px ; 
            border: 5px solid #0a53be;}
    </style>
</head>
<body>
    <p><a href="index.php">home page</a></p>
    <h1>CSS <span class="color_h1">Layout - Horizontal &amp; Vertical Align</span></h1>
    
    <hr>
    <details><summary>Center Align Elements</summary>
        <div>
            <p>To horizontally center a block element (like &lt;div&gt;), use <code class="w3-codespan">margin: auto;</code></p>
            <p>Setting the width of the element will prevent it from stretching out to the 
                edges of its container.</p>
            <p>The element will then take up the specified width, and the remaining space 
                will be split equally between the two margins:</p>

            <div style="margin:0 auto;width:50%;border:3px solid green;padding:10px;">
                <p>This div element is centered.</p>
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center
                    {<br>
                    &nbsp;&nbsp;margin: auto;<br>
                    &nbsp;
                    width: 50%;<br>
                    &nbsp;
                    border: 3px solid green;<br>&nbsp; padding: 10px;<br>
                    }</div>

            </div>
            <p><b>Note:</b> Center aligning has no effect if the <code class="w3-codespan">width</code> property is not set 
                (or set to 100%).</p>
        </div>
    </details><hr>
    <details><summary>Center Align Text</summary>
        <div>

            <p>To just center the text inside an element, use <code class="w3-codespan">text-align: center;</code></p>

            <div style="text-align:center;border:3px solid green">
                <p>This text is centered.</p>
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center {<br>&nbsp; text-align: center;<br>&nbsp; 
                    border: 3px solid green;<br>}</div>

            </div>

        </div>
    </details>
    <hr>
    <details><summary>Center an Image</summary>
        <div>
            <p>To center an image, set left and right margin to <code class="w3-codespan">auto</code> and make it into a <code class="w3-codespan">block</code> element:</p>
            <img src="jpg/paris.jpg" alt="Paris" style="width:15%;display:block;margin:0 auto">
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    img
                    {<br>&nbsp;&nbsp;display: block;<br>
                    &nbsp; margin-left: auto;<br>&nbsp; margin-right: auto;<br>
                    &nbsp;&nbsp;width: 40%;<br>
                    }</div>
            </div>
        </div>
    </details>
    <hr>
    <details><summary>Left and Right Align - Using position</summary>
        <div>
            <p>One method for aligning elements is to use <code class="w3-codespan">position: absolute;</code>:</p>
            <div style="position:relative;margin-bottom:180px">
                <div style="position: absolute;right: 0px;width: 300px;border: 3px solid #73AD21;padding: 10px;">
                    <p>In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.</p>
                </div>
            </div>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .right
                    {<br>
                    &nbsp;&nbsp;position: absolute;<br>
                    &nbsp;
                    right: 0px;<br>
                    &nbsp;&nbsp;width: 300px;<br>
                    &nbsp;&nbsp;border: 3px solid #73AD21;<br>&nbsp;&nbsp;padding: 10px;<br>
                    }</div>
            </div>
            <p><b>Note:</b> Absolute positioned elements are removed from the normal flow, and can overlap elements.</p>
        </div>
    </details>
    <hr>
    <details><summary>Left and Right Align - Using float</summary>
        <div>
            <p>Another method for aligning elements is to use the <code class="w3-codespan">float</code> property:</p>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .right
                    {<br>
                    &nbsp;&nbsp;float: right;<br>
                    &nbsp;
                    width: 300px;<br>
                    &nbsp;&nbsp;border: 3px solid #73AD21;<br>&nbsp;&nbsp;padding: 10px;<br>
                    }</div>
            </div>
        </div>
    </details>
    <hr>
    <details><summary>The clearfix Hack</summary>
        <div>
            <div class="w3-note w3-panel">
                <p><strong>Note:</strong> If an element is taller than the element containing it, and it is floated, it 
                    will overflow outside of its container. You can use the "clearfix hack&quot; to fix this (see example below).</p>
            </div>
            <div class="w3-border w3-padding">
                <div class="w3-row-padding" style="margin:0 -16px 32px">
                    <h3>Without Clearfix</h3>
                    <p style="border: 3px solid #4CAF50; padding: 5px;">
                        <img src="jpg/paris.jpg" style="width:5%; float: right;" >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...
                    </p>
                    <hr>
                    <h3>With Clearfix</h3>
                    <p style="border: 3px solid #4CAF50; padding: 5px; " class="nv_cl">
                        <img src="jpg/paris.jpg" style="width:5%; float: right; " >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet...
                    </p>
                </div>
            </div>

            <p>Then we can add the clearfix hack to the containing element to fix 
                this problem:</p>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .clearfix::after {<br>&nbsp; content: &quot;&quot;;<br>&nbsp; clear: both;<br>&nbsp; 
                    display: table;<br>}</div>

            </div>
        </div>
    </details> 
    <hr>
    <details><summary>Center Vertically - Using padding</summary>
        <div>
            <p>There are many ways to center an element vertically in CSS. A simple solution is to use top and bottom <code class="w3-codespan">padding</code>:</p>
            <div style="border:3px solid green;padding:70px 2px;">
                <p>I am vertically centered.</p>
            </div>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center {<br>&nbsp;&nbsp;padding: 70px 0;<br>&nbsp;&nbsp;border: 3px solid 
                    green;<br>
                    }</div>
            </div>
            <p>To center both vertically and horizontally, use <code class="w3-codespan">padding</code> and <code class="w3-codespan">text-align: center</code>:</p>
            <div style="border:3px solid green;padding:70px 2px;;text-align:center;">
                <p>I am vertically and horizontally centered.</p>
            </div>
            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center {<br>&nbsp; padding: 70px 0;<br>&nbsp;&nbsp;border: 3px solid 
                    green;<br>&nbsp; text-align: center;<br>
                    }</div>
            </div>
        </div>
    </details>
    <hr>
    <details><summary>Center Vertically - Using line-height</summary>
        <div>
            <p>Another trick is to use the <code class="w3-codespan">line-height</code> property with a value that is equal 
                to the <code class="w3-codespan">height</code> property:</p>

            <div style="line-height:200px; height:200px;border:3px solid green;text-align:center;">
                <p style=" line-height:1.2; display:inline-block; vertical-align:middle;">I am vertically and horizontally centered.</p>
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center {<br>&nbsp; line-height: 200px;<br>&nbsp;&nbsp;height: 200px;<br>&nbsp; border: 3px solid green;<br>&nbsp;&nbsp;text-align: center;<br>}<br><br>/* If the text has multiple lines, add the 
                    following: */<br>.center p {<br>&nbsp;&nbsp;line-height: 1.5;<br>&nbsp;&nbsp;display: inline-block;<br>&nbsp;&nbsp;vertical-align: middle;<br>}</div>
            </div>
        </div>
    </details>  
    <hr>

    <details><summary>Center Vertically - Using position &amp; transform</summary>
        <div>
            <p>If <code class="w3-codespan">padding</code> and <code class="w3-codespan">line-height</code> 
                are not options, another solution is to use positioning and the <code class="w3-codespan">transform</code> property:</p>

            <div style="line-height:200px; height:200px;border:3px solid green;text-align:center;">
                <p style=" line-height:1.2; display:inline-block; vertical-align:middle;">I am vertically and horizontally centered.</p>
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center { <br>&nbsp;&nbsp;height: 200px;<br>&nbsp;&nbsp;position: relative;<br>&nbsp; border: 3px solid green; <br>}<br><br>
                    .center p {<br>&nbsp;&nbsp;margin: 0;<br>&nbsp; 
                    position: absolute;<br>&nbsp; top: 50%;<br>&nbsp; 
                    left: 50%;<br>&nbsp; transform: translate(-50%, -50%);<br>}
                </div>

            </div>
        </div>
    </details>
    <hr>

    <details><summary>Center Vertically - Using Flexbox</summary>
        <div>
            <p>You can also use flexbox to center things. Just note that flexbox is not supported in IE10 and earlier versions:</p>

            <div style="display: flex;
                 justify-content: center;
                 align-items: center;
                 height: 200px;
                 border: 3px solid green;">
                I am vertically and horizontally centered.
            </div>

            <div class="w3-example">
                <h3>Example</h3>
                <div class="w3-code notranslate cssHigh">
                    .center {<br>&nbsp; display: flex;<br>&nbsp; justify-content: center;<br>&nbsp; 
                    align-items: center;<br>&nbsp; height: 200px;<br>&nbsp; border: 3px solid 
                    green; <br>}</div>

            </div>
        </div>
    </details>
    <hr>
</body>
</html>