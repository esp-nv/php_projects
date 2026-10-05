
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
        <meta name="apple-mobile-web-app-title" content="CodePen">
        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
        <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
        <title>Color theme dropdown</title>
        <link rel="canonical" href="https://codepen.io/tutsplus/pen/NWpqJNW">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

            :root,
            :root.light {
                --bg-color: #fff;
                --text-color: #123;
            }

            :root.dark {
                --bg-color: #121212;
                --text-color: #696d7d;
            }

            :root.blue {
                --bg-color: #05396B;
                --text-color: #E7F1FE;
            }

            :root.pink {
                --bg-color: #ffcad4;
                --text-color: #e75480;
            }

            :root.space {
                --bg-color: #000;
                --text-color: #f2bd16;
                --bg-url: url("https://www.spacejam.com/1996/img/bg_stars.gif");
                --font-family: 'Press Start 2P', cursive;
            }

            :root.nyan {
                --bg-color: #013367;
                --text-color: #fff;
                --bg-url: url("https://static.wixstatic.com/media/4cbe8d_f1ed2800a49649848102c68fc5a66e53~mv2.gif");
                --font-family: 'Comic Neue', cursive;
            }

            body {
                margin: 0;
                background-color: var(--bg-color);
                background-image: var(--bg-url);
                color: var(--text-color);
                font-family: var(--font-family, "Inter", sans-serif);
            }

            main {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 90%;
                max-width: 1280px;
                margin: 0 auto;
                padding: 2.5rem 0;
                height: 100vh;
                box-sizing: border-box;
            }

            h1 {
                text-align: center;
                font-weight: normal;
            }

            select {
                padding: 0.25rem 0.75rem;
                font-size: 1.25rem;
                font-family: inherit;
                background-color: var(--bg-color);
                color: var(--text-color);
                border-radius: 0.25rem;
            }

            footer {
                text-align: center;
                padding: 0.5rem 0;
                background-color: #eaeaea90;
            }

            footer p {
                font-size: 0.75rem;
                margin: 0.25rem 0;
                color: #221133;
            }

            footer a {
                text-decoration: none;
                color: inherit;
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <main class="container">
            <h1>Select a color theme from the dropdown</h1>
            <select name="theme-select" id="theme-select">
                <option value="light">Light</option>
                <option value="dark">Dark</option>
                <option value="blue">Blue</option>
                <option value="pink">Pink</option>
                <option value="space">Space</option>
                <option value="nyan">Nyan</option>
            </select>
        </main>

        <footer>
            <p>
                Pen by <a href="https://www.jemimaabu.com" target="_blank">Jemima Abu</a><span style="color: #D11E15"> &#9829;</span>
            </p>
        </footer>

        <script id="rendered-js" >
          const setTheme = theme => document.documentElement.className = theme;

          document.getElementById('theme-select').addEventListener('change', function () {
              setTheme(this.value);
          });
//# sourceURL=pen.js
        </script>


    </body>

</html>
