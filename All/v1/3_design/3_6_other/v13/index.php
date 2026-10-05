
<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">


        <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

        <meta name="apple-mobile-web-app-title" content="CodePen">

        <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

        <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />






        <title>Sticky Table Headers by position: sticky;</title>

        <link rel="canonical" href="https://codepen.io/wortmann/pen/BNNZLb">




        <style>
            *{
                margin: 0;
                pading: 0;
                box-sizing: border-box;
            }
            body{
                background-color: rgb(63,72,83);
                font-family: sans-serif;
                color: rgb(220,220,220);
                padding: 50px;
                width: 100vw;
                overflow-x: hidden;
            }
            h1{
                font-weight: 400;
            }
            a{
                color: inherit;
            }
            p{
                margin-top: .7em;
            }
            .warning{
                color: rgb(62,148,236);
            }
            .st_viewport{
                max-height: 500px;
                overflow: auto;
            }

            [data-table_id="1"]{
                background-color: rgb(255,115,0);
            }
            [data-table_id="2"]{
                background-color: rgb(61,53,39);
                color: rgb(220,220,220);
            }
            [data-table_id="3"]{
                background-color: rgba(168,189,4, .8);
            }

            ._rank{
                min-width: 80px;
            }
            ._id{
                min-width: 60px;
            }
            ._name{
                min-width: 130px;
            }
            ._surname{
                min-width: 130px;
            }
            ._year{
                min-width: 80px;
            }
            ._section{
                min-width: 130px;
            }

            pre{
                overflow: auto;
            }

            /** Sticky table styles **/
            .st_viewport{
                background-color: rgb(62,148,236);
                color: rgb(27,30,36);
                margin: 20px 0;
            }
            /* ###  Table wrap */
            .st_wrap_table{

            }
            /* ##   header */
            .st_table_header{
                position: -webkit-sticky;
                position: sticky;
                top: 0px;
                z-index: 1;
                background-color: rgb(27,30,36);
                color: rgb(220,220,220);
            }
            .st_table_header h2{
                font-weight: 400;
                margin: 0 20px;
                padding: 20px 0 0;
            }
            .st_table_header .st_row{
                color: rgba(220,220,220, .7);
            }
            .st_table_header .st_column{

            }
            /* ##  table */
            .st_table{
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            /* #   row */
            .st_row{
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 0;
            }
            .st_table .st_row:nth-child(even){
                background-color: rgba(0,0,0, .1)
            }
            /* #   column */
            .st_column{
                padding: 10px 20px;
            }
        </style>

        <script>
            window.console = window.console || function (t) {};
        </script>



    </head>

    <body translate="no">
        <h1>Sticky Table Headers by <code>position: sticky;</code></h1>
        <p>Trying out to make a sweet table with sticky table headers if their table is in the viewport. (Like the iOS names list names beginning capital letter)</p>
        <p class="warning">Supported by Firefox and Safari [<a href="http://caniuse.com/#feat=css-sticky" target="_blank">caniuse.com#sticky</a>]</p>
        <main class="st_viewport">
            <div class="st_wrap_table" data-table_id="0">
                <header class="st_table_header">
                    <h2>Table header one</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Rank</div>
                        <div class="st_column _name">Name</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_table">
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">John</div>
                        <div class="st_column _surname">Doe</div>
                        <div class="st_column _year">1973</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Max</div>
                        <div class="st_column _surname">Luke</div>
                        <div class="st_column _year">1971</div>
                        <div class="st_column _section">USA</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Kunze</div>
                        <div class="st_column _year">2015</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Janina</div>
                        <div class="st_column _surname">Endres</div>
                        <div class="st_column _year">1955</div>
                        <div class="st_column _section">Belgium</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Lena</div>
                        <div class="st_column _surname">Eifel</div>
                        <div class="st_column _year">1996</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Nacht</div>
                        <div class="st_column _year">1968</div>
                        <div class="st_column _section">Swiss</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Vanessa</div>
                        <div class="st_column _surname">Schneider</div>
                        <div class="st_column _year">2004</div>
                        <div class="st_column _section">Russia</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">laura</div>
                        <div class="st_column _surname">Beike</div>
                        <div class="st_column _year">1952</div>
                        <div class="st_column _section">Sweden</div>
                    </div>
                </div>
            </div>
            <div class="st_wrap_table" data-table_id="1">
                <header class="st_table_header">
                    <h2>Holy shit :@</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Rank</div>
                        <div class="st_column _name">Name</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_table">
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Kunze</div>
                        <div class="st_column _year">2015</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Janina</div>
                        <div class="st_column _surname">Endres</div>
                        <div class="st_column _year">1955</div>
                        <div class="st_column _section">Belgium</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Lena</div>
                        <div class="st_column _surname">Eifel</div>
                        <div class="st_column _year">1996</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">John</div>
                        <div class="st_column _surname">Doe</div>
                        <div class="st_column _year">1973</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Max</div>
                        <div class="st_column _surname">Luke</div>
                        <div class="st_column _year">1971</div>
                        <div class="st_column _section">USA</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Nacht</div>
                        <div class="st_column _year">1968</div>
                        <div class="st_column _section">Swiss</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Vanessa</div>
                        <div class="st_column _surname">Schneider</div>
                        <div class="st_column _year">2004</div>
                        <div class="st_column _section">Russia</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">laura</div>
                        <div class="st_column _surname">Beike</div>
                        <div class="st_column _year">1952</div>
                        <div class="st_column _section">Sweden</div>
                    </div>
                </div>
            </div>
            <div class="st_wrap_table" data-table_id="2">
                <header class="st_table_header">
                    <h2>Isn't that nice</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Rank</div>
                        <div class="st_column _name">Name</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_table">
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Vanessa</div>
                        <div class="st_column _surname">Schneider</div>
                        <div class="st_column _year">2004</div>
                        <div class="st_column _section">Russia</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">laura</div>
                        <div class="st_column _surname">Beike</div>
                        <div class="st_column _year">1952</div>
                        <div class="st_column _section">Sweden</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">John</div>
                        <div class="st_column _surname">Doe</div>
                        <div class="st_column _year">1973</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Max</div>
                        <div class="st_column _surname">Luke</div>
                        <div class="st_column _year">1971</div>
                        <div class="st_column _section">USA</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Kunze</div>
                        <div class="st_column _year">2015</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Janina</div>
                        <div class="st_column _surname">Endres</div>
                        <div class="st_column _year">1955</div>
                        <div class="st_column _section">Belgium</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Lena</div>
                        <div class="st_column _surname">Eifel</div>
                        <div class="st_column _year">1996</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Nacht</div>
                        <div class="st_column _year">1968</div>
                        <div class="st_column _section">Swiss</div>
                    </div>
                </div>
            </div>
            <div class="st_wrap_table" data-table_id="3">
                <header class="st_table_header">
                    <h2>Native STICKY</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Rank</div>
                        <div class="st_column _name">Name</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_table">
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">John</div>
                        <div class="st_column _surname">Doe</div>
                        <div class="st_column _year">1973</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Lena</div>
                        <div class="st_column _surname">Eifel</div>
                        <div class="st_column _year">1996</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Nacht</div>
                        <div class="st_column _year">1968</div>
                        <div class="st_column _section">Swiss</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Vanessa</div>
                        <div class="st_column _surname">Schneider</div>
                        <div class="st_column _year">2004</div>
                        <div class="st_column _section">Russia</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">laura</div>
                        <div class="st_column _surname">Beike</div>
                        <div class="st_column _year">1952</div>
                        <div class="st_column _section">Sweden</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Max</div>
                        <div class="st_column _surname">Luke</div>
                        <div class="st_column _year">1971</div>
                        <div class="st_column _section">USA</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Kunze</div>
                        <div class="st_column _year">2015</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Janina</div>
                        <div class="st_column _surname">Endres</div>
                        <div class="st_column _year">1955</div>
                        <div class="st_column _section">Belgium</div>
                    </div>
                </div>
            </div>
            <div class="st_wrap_table" data-table_id="4">
                <header class="st_table_header">
                    <h2>CSS3 *~'</h2>
                    <div class="st_row">
                        <div class="st_column _rank">Rank</div>
                        <div class="st_column _name">Name</div>
                        <div class="st_column _surname">Surname</div>
                        <div class="st_column _year">Year</div>
                        <div class="st_column _section">Section</div>
                    </div>
                </header>
                <div class="st_table">
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">John</div>
                        <div class="st_column _surname">Doe</div>
                        <div class="st_column _year">1973</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Max</div>
                        <div class="st_column _surname">Luke</div>
                        <div class="st_column _year">1971</div>
                        <div class="st_column _section">USA</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Kunze</div>
                        <div class="st_column _year">2015</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Jonas</div>
                        <div class="st_column _surname">Nacht</div>
                        <div class="st_column _year">1968</div>
                        <div class="st_column _section">Swiss</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Vanessa</div>
                        <div class="st_column _surname">Schneider</div>
                        <div class="st_column _year">2004</div>
                        <div class="st_column _section">Russia</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Janina</div>
                        <div class="st_column _surname">Endres</div>
                        <div class="st_column _year">1955</div>
                        <div class="st_column _section">Belgium</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">Lena</div>
                        <div class="st_column _surname">Eifel</div>
                        <div class="st_column _year">1996</div>
                        <div class="st_column _section">Germany</div>
                    </div>
                    <div class="st_row">
                        <div class="st_column _rank">0</div>
                        <div class="st_column _name">laura</div>
                        <div class="st_column _surname">Beike</div>
                        <div class="st_column _year">1952</div>
                        <div class="st_column _section">Sweden</div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <pre>
    <code>
/**
 * Sticky Table Headers
 *
 * @author <a href="https://elementcode.de" tatget="_blank">Wolf Wortmann</a> &lt;https://elementcode.de&gt;
 * @license CC BY
 * @license https://creativecommons.org/licenses/by/4.0/
 */
    </code>
            </pre>
        </footer>
        <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


    </body>

</html>
