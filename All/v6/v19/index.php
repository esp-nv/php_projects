
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
        <meta name="apple-mobile-web-app-title" content="CodePen">
        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
        <title>Color schema selector (red/blue/green)</title>
        <link rel="canonical" href="https://codepen.io/fevanwijk/pen/LYdOXwy">
        <style>
            .content {
                display: inline-block;
                padding: 1rem;
                border: 1px solid black;
            }

            /* Theme specific styling */

            .red .content {
                color: darkred;
                background: red;
            }

            .blue .content {
                color: darkblue;
                background: blue;
            }

            .green .content {
                color: darkgreen;
                background: green;
            }

            /* Helpers */

            .buttons {
                margin-bottom: 1rem;
            }
            button {
                padding: 0.25rem 0.5rem;
                background: lightgray;
                border: none;
                border-radius: 4px;
            }
            button.selected {
                border: 1px solid darkgray;
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <div class="buttons">
            <button id="red" class="selected">Red</button>
            <button id="blue">Blue</button>
            <button id="green">Green</button>
        </div>

        <div id="wrapper" class="red">
            <div class="content">The colors are based on the selected scheme</div>
        </div>

        <script id="rendered-js" >
          function selectSchema(schema) {
              // Select button and unselect the other button
              document.querySelectorAll('button').forEach(el => el.classList.remove('selected'));
              document.getElementById(schema).classList.add('selected');

              // Set schema class  
              document.getElementById('wrapper').className = schema;
          }

          document.getElementById('red').addEventListener('click', () => {
              selectSchema('red');
          });

          document.getElementById('blue').addEventListener('click', e => {
              selectSchema('blue');
          });

          document.getElementById('green').addEventListener('click', e => {
              selectSchema('green');
          });
//# sourceURL=pen.js
        </script>


    </body>

</html>
